<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Enviar el correo con los datos del formulario
            Mail::to('tu-email@dominio.com')->send(new ContactMail($request->all()));

            return back()->with('success', 'Tu mensaje ha sido enviado con éxito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un problema al enviar el mensaje: ' . $e->getMessage());
        }
    }
}
