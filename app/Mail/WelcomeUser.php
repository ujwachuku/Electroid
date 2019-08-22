<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeUser extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $user;
    private $password;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->markdown('email.user.welcome')->with(['user' => $this->user]);
    }
}
