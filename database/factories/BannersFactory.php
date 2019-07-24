<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [

        'title' => $faker->title,
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'link' => $faker->url,
        'promotional_message' => $faker->word,
        'html_banner' => $faker->word,
    ];
});
