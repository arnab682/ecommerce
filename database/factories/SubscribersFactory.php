<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [

        'email' => $faker->email,
        'is_subcribed' => $faker->randomDigit,
        'reason' => $faker->word,

    ];
});
