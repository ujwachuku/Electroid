<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\VehicleType::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50)
    ];
});