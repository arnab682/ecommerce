<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Carbon\Carbon;
use App\Model\Label;
use Faker\Generator as Faker;

$factory->define(Label::class, function (Faker $faker) {
    return [

      'title' => $faker->title,
      'picture' => $faker->imageUrl($width = 640, $height = 480),
      'created_at' => Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon::now()->toDateTimeString(),

    ];
});
