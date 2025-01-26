<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AdminController extends Controller
{
    // Mostrar el dashboard de Admin
    public function index()
    {
        return view('admin.dashboard');
    }

    // Listar las citas para el calendario
    public function listAppointments()
    {
        $appointments = Appointment::all();

        // Convertir las citas al formato de FullCalendar
        $events = $appointments->map(function ($appointment) {
            return [
                'id' => $appointment->id,
                'title' => $appointment->status === 'pending' ? 'Pendiente' : 'Autorizada',
                'start' => $appointment->date . 'T' . $appointment->time,
                'color' => $appointment->status === 'pending' ? 'orange' : 'green',
            ];
        });

        return response()->json($events);
    }

    // Autorizar una cita
    public function authorizeAppointment($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['error' => 'Cita no encontrada.'], 404);
        }

        $appointment->status = 'authorized'; // Cambiar el estado a "autorizada"
        $appointment->save();

        return response()->json(['success' => 'Cita autorizada correctamente.']);
    }
}
