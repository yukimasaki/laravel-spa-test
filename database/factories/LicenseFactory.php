<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\License;
use Faker\Generator as Faker;

$factory->define(License::class, function (Faker $faker) {
    return [
        'product_name' => $faker->words,
        'product_key' => $faker->randomKey->toUpper,
    ];
});
