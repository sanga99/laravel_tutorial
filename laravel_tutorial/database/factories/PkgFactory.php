<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pgk;
use Faker\Generator as Faker;

$factory->define(Pgk::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});
