<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->sentence,
        'body' => $faker->text,
        'excerpt' => $faker->sentence,
        'img' => $faker->imageUrl(),
        'published_at' => Carbon::now(),
    ];
});
