<?php

use App\ServiceTeam;
use Illuminate\Database\Seeder;

class ServiceTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServiceTeam::class, 10)->create();
    }
}
