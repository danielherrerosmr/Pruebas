<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Soporte extends Mailable
{
    use Queueable, SerializesModels;
    //asunto del mensaje
    public $subject = "Soporte Técnico";
    //Varialble que usaremos para recoger los datos del fomulario
    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correo');
    }
}
