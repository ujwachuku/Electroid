<?php

use Illuminate\Database\Seeder;

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
        $this->call(VehicleTypesTableSeeder::class);
        $this->call(VehicleMakesTableSeeder::class);
        $this->call(VehicleModelsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
    }
}
