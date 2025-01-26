<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;

class UserController extends Controller
{
    // Mostrar el panel del usuario
    public function index()
    {
        return view('user.dashboard');
    }

    // Guardar una nueva cita
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $appointment = Appointment::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'time' => $request->time,
        ]);

        // Enviar correo de notificación al usuario
        Mail::to(auth()->user()->email)->send(new AppointmentNotification($appointment));

        return redirect()->route('user.dashboard')->with('success', 'Cita agendada correctamente. Se ha enviado una notificación a tu correo.');
    }

    // Listar las citas del usuario
    public function listAppointments()
    {
        $appointments = Appointment::where('user_id', auth()->id())->get();

        // Convertir las citas al formato requerido por FullCalendar
        $events = $appointments->map(function ($appointment) {
            return [
                'title' => 'Cita',
                'start' => $appointment->date . 'T' . $appointment->time,
            ];
        });

        return response()->json($events);
    }

    // Mostrar el formulario para registrar un paciente
    public function showPatientForm()
    {
        return view('user.patient_form');
    }

    // Guardar los datos del paciente
    public function savePatient(Request $request)
    {
        $request->validate([
            'cedula' => 'required|digits:10|unique:patients,cedula',
            'nombres' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|digits:10',
            'detalles' => 'nullable|string',
        ]);

        Patient::create([
            'cedula' => $request->cedula,
            'nombres' => $request->nombres,
            'direccion' => $request->direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'detalles' => $request->detalles,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Paciente registrado correctamente.');
    }
}
