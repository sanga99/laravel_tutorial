<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subsc\Subsc;
use Faker\Generator as Faker;

$factory->define(Subsc::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});
