<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [

        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'body' => $faker->word,
        'name' => $faker->name,
        'designation' => $faker->word,
    ];
});
