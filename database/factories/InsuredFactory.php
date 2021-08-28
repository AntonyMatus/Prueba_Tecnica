<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\insured;
use Faker\Generator as Faker;

$factory->define(insured::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'year' => random_int(10,99),
    ];
});
