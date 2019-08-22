<?php

use Illuminate\Database\Seeder;

class VehicleMakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VehicleMake::class, 10)->create();
    }
}
