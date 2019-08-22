<?php

namespace App\Observers;

use App\Notifications\UserCreated;
use App\Notifications\UserUpdated;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserObserver implements ShouldQueue
{
    public function created(User $user)
    {
        $user->notify(new UserCreated());
    }

    public function updated(User $user)
    {
        $user->notify(new UserUpdated());
    }

    public function deleted(User $user)
    {
        //
    }

    public function restored(User $user)
    {
        //
    }

    public function forceDeleted(User $user)
    {
        //
    }
}
