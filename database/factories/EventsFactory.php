<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Events::class, function (Faker $faker) {
    return [
        "title"         => $faker->sentence(3),
        "description"   => $faker->paragraph(2),
        "venue"         => $faker->paragraph(1),
        "image_url"     => $faker->string(2),
    ];
});
