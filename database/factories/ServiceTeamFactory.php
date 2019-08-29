<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceTeam;
use Faker\Generator as Faker;

$factory->define(ServiceTeam::class, function (Faker $faker) {
    return [
        'name' => $faker->text('20')
    ];
});
