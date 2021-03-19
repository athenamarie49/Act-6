<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 20),
        'post'=> $faker->sentence($nbWords = 6, $variableWords = true),
        'tags'=> $faker->word,

    ];
});
