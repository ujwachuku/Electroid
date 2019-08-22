<?php

use Illuminate\Database\Seeder;

class VehicleModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VehicleModel::class, 10)->create();
    }
}
