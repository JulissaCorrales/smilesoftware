<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\User;

class ResetPassword extends Notification
{
    use Queueable;
 
    public $actionUrl;
 
    public function __construct($token)
    {
        $this->actionUrl = action('Auth\ResetPasswordController@showResetForm',$token);
    }
 
    public function via($notifiable)
    {
        return ['mail'];
    }
 
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->line('Hola Bienvenido a SmileSoftware')

            ->line('Esta recibiendo este correo electrónico porque hemos recibido una solicitud de restablecimiento de contraseña para su cuenta.')
            ->action('Restablecer Contraseña', $this->actionUrl)
            ->line('Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción..');
    }
 
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
