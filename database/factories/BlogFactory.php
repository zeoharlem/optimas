<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        "title"         => $faker->sentence(3),
        "description"   => $faker->paragraph(1),
        "content"       => $faker->paragraph(4),
        "image_url"     => $faker->word(1),
    ];
});
