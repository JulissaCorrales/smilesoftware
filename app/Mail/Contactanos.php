<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactanos extends Mailable
{
    use Queueable, SerializesModels;

    public  $subjetc= "Informacion de Contacto";

   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct()
  
    {
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('smilesoftware2021@gmail.com',env('MAIL_FROM_NAME'))
        ->view('email.contactos')->subject('Titulo del Correo');
    }
}
