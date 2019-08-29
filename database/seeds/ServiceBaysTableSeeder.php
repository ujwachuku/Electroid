<?php

use App\ServiceBay;
use Illuminate\Database\Seeder;

class ServiceBaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServiceBay::class, 10)->create();
    }
}
