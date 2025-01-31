<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Mail\AppointmentApprovedUser;
use Illuminate\Support\Facades\Mail;
use App\Models\Patient;


class AdminController extends Controller
{
    // Mostrar el dashboard de Admin
    public function index()
    {
        return view('admin.dashboard');
    }

    // Listar las citas para el calendario en FullCalendar
    public function listAppointments()
    {
        $appointments = Appointment::all();

        // Convertir las citas al formato de FullCalendar
        $events = $appointments->map(function ($appointment) {
            return [
                'id' => $appointment->id,
                'title' => $appointment->status === 'pendiente' ? 'Pendiente' : 'Autorizada',
                'start' => $appointment->date . 'T' . $appointment->time,
                'color' => $appointment->status === 'pendiente' ? 'orange' : 'green',
            ];
        });

        return response()->json($events);
    }

    // Autorizar una cita y notificar al usuario
    public function authorizeAppointment($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['error' => 'Cita no encontrada.'], 404);
        }

        if ($appointment->status === 'autorizada') {
            return response()->json(['message' => 'Esta cita ya ha sido autorizada.']);
        }

        $appointment->status = 'autorizada'; // Cambiar el estado a "autorizada"
        $appointment->save();

        // Enviar correo de notificación al usuario
        Mail::to($appointment->user->email)->send(new AppointmentApprovedUser($appointment));

        return response()->json(['success' => 'Cita autorizada correctamente y usuario notificado.']);
    }
    public function listPatients()
    {
        $patients = Patient::all();
        return view('admin.patients', compact('patients'));
    }
}
