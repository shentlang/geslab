<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\proyecto;

$factory->define(proyecto::class, function (Faker $faker) {
    return [
        // 
        'nombreproyecto' => $faker->creditCardType,
        'tipo'  => $faker->randomElement(['robotica','desarrollo web','arquitectura']),
        'defensaini' => $faker->date('Y-m-d H:m:s'),
        'defensafinal' => $faker->date('Y-m-d H:m:s')
        
    ];
});
