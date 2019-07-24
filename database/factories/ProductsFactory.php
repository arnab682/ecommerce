<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'brand_id' => $faker->randomDigit,
        'lebel_id' => $faker->randomNumber(2),
        'title' => $faker->title,
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'short_description' => $faker->word,
        'description' => $faker->word,
        'total_sales' => $faker->randomNumber(2),
        'product_type' => $faker->word,
        'is_new' => $faker->randomNumber(1),
        'cost' => $faker->randomNumber(3),
        'mrp' => $faker->randomNumber(3),
        'special_price' => $faker->randomNumber(2),
        'is_active' => $faker->randomDigit,
    ];
});
