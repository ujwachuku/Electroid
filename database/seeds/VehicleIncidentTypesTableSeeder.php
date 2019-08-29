<?php

use Illuminate\Database\Seeder;

class VehicleIncidentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VehicleIncidentType::class, 10)->create();
    }
}
