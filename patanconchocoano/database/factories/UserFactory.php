<?php

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

$factory->define(App\User::class,function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'userName' => $faker->userName(),
        'avatar' => $faker->imageUrl(200, 200),
        'password' => '12345', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\producto::class,function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->realText(random_int(30, 80)),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade
    ];
});
