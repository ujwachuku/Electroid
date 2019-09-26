<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        //$this->call(VehicleTypesTableSeeder::class);
        //$this->call(VehicleMakesTableSeeder::class);
        //$this->call(VehicleModelsTableSeeder::class);
        //$this->call(VehiclesTableSeeder::class);
        //$this->call(ServiceTeamsTableSeeder::class);
        //$this->call(ServiceBaysTableSeeder::class);
        //$this->call(VehicleIncidentTypesTableSeeder::class);
        //$this->call(VehicleIncidentsTableSeeder::class);

        Artisan::call('fleet:import');
    }
}
