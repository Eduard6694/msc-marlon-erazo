<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

    /**
     * Crear una nueva instancia del correo.
     */
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Construir el correo.
     */
    public function build()
    {
        return $this->subject('Detalles de tu Cita')
                    ->view('emails.appointment_notification')
                    ->with('appointment', $this->appointment);
    }
}
