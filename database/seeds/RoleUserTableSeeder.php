<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::where('id', '!=', 1)->get()->each(function ($user) {
            $role = \App\Role::all()->random();
            $user->roles()->attach($role);
        });
    }
}
