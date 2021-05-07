<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'product_code' => $faker->numberBetween(0,100),
        'description' => $faker->sentence(4),
    ];
});
