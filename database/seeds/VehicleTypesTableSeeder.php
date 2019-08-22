<?php

use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VehicleType::class, 10)->create();
    }
}
