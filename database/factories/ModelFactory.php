<?php

use App\Tweet;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->username,
    ];
});

$factory->define(Tweet::class, function (Faker\Generator $faker) {
    return [
        'body' => $faker->sentence,
    ];
});
