<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence(),
        'error_message' => $faker->sentence(),
        'content' => $faker->paragraph(),
        'user_id' => random_int(1, 10),
    ];
});
