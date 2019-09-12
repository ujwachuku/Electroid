<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use App\Mail\UpdateUser as Mailable;

class UserPasswordChanged extends Notification
{
    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new Mailable($notifiable))->to($notifiable->email);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
