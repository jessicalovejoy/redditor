<?php

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Subreddit::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'user_id' => "2",
        'description' => "Basic description"
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->name,
        'body' => $faker->text($maxNbChars = 10),
        'user_id' => "2",
        'subreddit_id' => "1"

    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'body' => $faker->text($maxNbChars = 50),
        'post_id' => "2",
        'user_id' => "2"

    ];
});


