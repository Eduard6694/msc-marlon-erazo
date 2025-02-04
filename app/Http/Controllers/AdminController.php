<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Mail\AppointmentApprovedUser;
use Illuminate\Support\Facades\Mail;
use App\Models\Patient;
use App\Models\Evaluation;


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
    $appointments = Appointment::with('user')->get();

    $events = $appointments->map(function ($appointment) {
        return [
            'id' => $appointment->id,
            'title' => $appointment->user->name . ' - ' . ucfirst($appointment->status),
            'start' => $appointment->date . 'T' . $appointment->time,
            'color' => $appointment->status === 'pendiente' ? 'orange' : 'green', 
            'status' => $appointment->status, // Asegúrate de enviar el status
            'userName' => $appointment->user->name
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
        $patients = Patient::with('evaluation')->get(); // Carga las evaluaciones relacionadas
        return view('admin.patients', compact('patients'));
    }

    public function evaluateTest(Request $request)
    {
        $request->validate([
            'attention_difficulties' => 'required|integer|min:0|max:4',
            'following_instructions' => 'required|integer|min:0|max:4',
            'social_interaction' => 'required|integer|min:0|max:4',
            'reading_writing' => 'required|integer|min:0|max:4',
        ]);

        // Calcular el puntaje total
        $score = $request->attention_difficulties + $request->following_instructions +
            $request->social_interaction + $request->reading_writing;

        // Lógica adicional si se necesita guardar el resultado en la base de datos

        return redirect()->back()->with('success', '¡Evaluación enviada con éxito! Puntaje obtenido: ' . $score);
    }

    public function listEvaluations()
    {
        $evaluations = Evaluation::with('user')->get();
        return view('admin.evaluations', compact('evaluations'));
    }
}
