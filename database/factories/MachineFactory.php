<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Machine;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'code' => Str::random(5),
        'name' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'available' => true
    ];
});
