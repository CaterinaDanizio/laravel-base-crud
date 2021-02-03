<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'model' => $faker->word,
        'price' => $faker->numberBetween($min = 1, $max = 99),
        'consumption' => $faker->randomNumber(2)
        
    ];
});


