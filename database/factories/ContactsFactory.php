<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'subject' => $faker->word,
        'comment' => $faker->word,
        'datetime' => $faker->dateTime(),
    ];
});
