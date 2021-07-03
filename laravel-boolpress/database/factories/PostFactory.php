<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence($nbWords = 6, $variableNbWords = true),  // Random task title
        'content' => $faker->realText(500),
        // 'user_id' => 1,
        'slug' => $faker->slug(),
        // 'user' => $faker->company(),
        // 'user_id' => $faker->random()->id,
        // 'user_id' => App\Post::all()->random()->id,
        // 'user_id' => auth()->id(),
    ];
});
