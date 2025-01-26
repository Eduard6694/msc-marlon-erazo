<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

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

        Appointment::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Cita agendada correctamente.');
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
}

