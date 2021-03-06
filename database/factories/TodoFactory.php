<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => 'Title',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit natus aut nam possimus. Rerum quae exercitationem quidem deserunt id consectetur quod, cumque, laboriosam sed in fugit saepe eos, autem ad',
    ];
});
