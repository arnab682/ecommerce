<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [

        'product_id' => $faker->randomDigit,
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'product_title' => $faker->title,
        'qty' => $faker->randomDigit,
        'unite_price' => $faker->numberBetween($min = 100, $max = 900),
        'total_price' => $faker->numberBetween($min = 100, $max = 900),
    ];
});
