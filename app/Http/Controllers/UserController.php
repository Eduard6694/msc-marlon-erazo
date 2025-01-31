<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentPendingAdmin;

class UserController extends Controller
{
    // Mostrar el panel del usuario
    public function index()
    {
        return view('user.dashboard');
    }

    // Guardar una nueva cita y notificar al admin
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today', // No permite fechas pasadas
            'time' => 'required|date_format:H:i',
        ]);

        // Validar que la hora seleccionada no sea en el pasado si es hoy
        $now = now(); // Obtiene la fecha y hora actual
        $selectedDateTime = \Carbon\Carbon::parse("{$request->date} {$request->time}");

        if ($selectedDateTime->lessThan($now)) {
            return redirect()->back()->with('error', 'No puedes agendar citas en el pasado.');
        }

        $appointment = Appointment::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'time' => $request->time,
            'status' => 'pendiente', // Guardar con estado pendiente
        ]);

        // Enviar correo al administrador notificando la cita pendiente
        Mail::to('msc.marlonerazo@gmail.com')->send(new AppointmentPendingAdmin($appointment));

        return redirect()->route('user.dashboard')->with('success', 'Cita agendada correctamente. Pendiente de aprobación.');
    }

    // Listar las citas del usuario para el calendario
    public function listAppointments()
    {
        $appointments = Appointment::where('user_id', auth()->id())->get();

        // Convertir las citas al formato requerido por FullCalendar
        $events = $appointments->map(function ($appointment) {
            return [
                'title' => 'Cita (' . ucfirst($appointment->status) . ')',
                'start' => $appointment->date . 'T' . $appointment->time,
                'color' => $appointment->status === 'pendiente' ? 'orange' : 'green',
            ];
        });

        return response()->json($events);
    }

    // Mostrar el formulario para registrar o actualizar información del paciente
    public function showPatientForm()
    {
        $user = auth()->user();
        $patient = Patient::where('user_id', $user->id)->first();
        return view('user.patient_form', compact('patient'));
    }

    // Guardar o actualizar la información del paciente
    public function saveOrUpdatePatient(Request $request)
    {
        $user = auth()->user();

        // Validaciones
        $request->validate([
            'cedula' => 'required|digits:10|unique:patients,cedula,' . ($user->patient->id ?? 'NULL'),
            'nombres' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|digits:10',
            'detalles' => 'nullable|string|max:1000',
        ]);

        // Guardar o actualizar la información del paciente
        Patient::updateOrCreate(
            ['user_id' => $user->id], // Condición para actualizar o crear
            [
                'user_id' => $user->id,
                'cedula' => $request->cedula,
                'nombres' => $request->nombres,
                'direccion' => $request->direccion,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'telefono' => $request->telefono,
                'detalles' => $request->detalles,
            ]
        );

        return redirect()->route('user.dashboard')->with('success', 'Información actualizada con éxito.');
    }
}
