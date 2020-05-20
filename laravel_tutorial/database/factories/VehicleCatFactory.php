<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\VehicleCat\VehicleCat;
use Faker\Generator as Faker;

$factory->define(VehicleCat::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});
