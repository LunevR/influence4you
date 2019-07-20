<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Influencer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Influencer::class, function (Faker $faker) {
    return [
        'name'   => $faker->name,
        'age'    => $faker->numberBetween(20, 50),
        'rating' => $faker->randomFloat(2, 0, 5),
    ];
});
