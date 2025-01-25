<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Dashboard principal para el usuario
    public function index()
    {
        return view('user.dashboard'); // Vista para el panel del usuario
    }

    // Página para agendar una cita
    public function createAppointment()
    {
        return view('user.create_appointment'); // Vista para crear una cita
    }
}
