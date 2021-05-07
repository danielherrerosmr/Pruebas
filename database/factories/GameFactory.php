<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'genero' => $faker->sentence(1),
        'edicion' => $faker->sentence(1),
        'plataforma' => $faker->sentence(1),
    ];
});
