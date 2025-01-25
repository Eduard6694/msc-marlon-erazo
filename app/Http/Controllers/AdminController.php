<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard principal para admin
    public function index()
    {
        return view('admin.dashboard'); // Vista para el panel de administración
    }

    // Gestión de citas (ver, editar, eliminar)
    public function manageAppointments()
    {
        // Aquí podrías obtener las citas desde la base de datos
        // $appointments = Appointment::all();

        return view('admin.appointments'); // Vista para gestionar citas
    }
}
