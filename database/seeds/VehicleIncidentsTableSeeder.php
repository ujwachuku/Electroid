<?php

use Illuminate\Database\Seeder;

class VehicleIncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VehicleIncident::class, 1000)->create();
    }
}
