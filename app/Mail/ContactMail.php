<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Crear una nueva instancia del correo.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Construir el mensaje del correo.
     */
    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto')
                    ->view('emails.contact') // Asegúrate de que esta vista existe
                    ->with('data', $this->data);
    }
}