<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [

        'product_id' => $faker->randomNumber(2),
        'qty' => $faker->randomDigit,
    ];
});
