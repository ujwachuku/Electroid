<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Cor Cronje";
        $user->email = "cor@company.local";
        $user->password = Hash::make('developer');
        $user->save();

        $user->roles()->attach(1);

        factory(User::class, 10)->create();
    }
}
