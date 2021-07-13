<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mascota;
use App\Tipo;
use Faker\Generator as Faker;

$factory->define(Mascota::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
        'fecha_nac' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->sentence(1),
        'raza' => $faker->sentence(1),
        'color' => $faker->sentence(1),
        'caracteristicas' => $faker->sentence(4),
        'tipo_id' Tipo::all()->random()->id
        'user_id' => User::all()->random()->id,
    ];
});

