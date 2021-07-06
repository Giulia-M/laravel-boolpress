<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $titolo =$faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'title' =>$titolo,  // Random task title
        'content' => $faker->realText(500),
        'user_id' => 1,
        'slug' => Str::slug($titolo)
        // 'user' => $faker->company(),
        // 'user_id' => $faker->random()->id,
        // 'user_id' => App\Post::all()->random()->id,
        // 'user_id' => auth()->id(),
    ];
});
