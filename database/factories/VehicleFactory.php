<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Vehicle::class, function (Faker $faker) {
    return [
        'fleet_nr' => $faker->randomLetter . $faker->randomLetter . $faker->randomNumber(4),
        'reg_nr' => $faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->randomNumber(3) . 'L',
        'engine_nr' => $faker->randomNumber(8),
        'vin_nr' => $faker->randomNumber(8),
        'model_year' => $faker->year,
        'operating_license_nr' => $faker->randomNumber(8),
        'operating_license_issue_date' => $faker->date(),
        'make_id' => \App\VehicleMake::all()->random()->id,
        'type_id' => \App\VehicleType::all()->random()->id,
        'model_id' => \App\VehicleModel::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});
