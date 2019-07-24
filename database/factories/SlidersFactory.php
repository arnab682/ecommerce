<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Carbon\Carbon;
use App\Model\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'title' =>$faker->title,
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'caption' => $faker->word,
        'link'=> $faker->url,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
      ];
});
