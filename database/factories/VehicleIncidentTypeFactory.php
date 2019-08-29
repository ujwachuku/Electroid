<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\VehicleIncidentType;
use Faker\Generator as Faker;

$factory->define(VehicleIncidentType::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'description' => $faker->text(400)
    ];
});
