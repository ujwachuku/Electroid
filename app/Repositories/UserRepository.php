<?php


namespace App\Repositories;


use App\Mail\WelcomeUser;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new User();
        $this->order_by_field = 'name';
    }

    public function store($request, $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make(Str::random());
        $user->save();
        $user->roles()->detach();
        $user->roles()->attach($request->role_id);
    }
}