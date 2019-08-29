<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceBay;
use Faker\Generator as Faker;

$factory->define(ServiceBay::class, function (Faker $faker) {
    return [
        'name' => $faker->text('20')
    ];
});
