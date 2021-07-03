<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->realText(),
        'slug' => $faker->slug(),
        // 'user_id' => Post::all()->random()->id,
        'user_id' => auth()->id(),
    ];
});
