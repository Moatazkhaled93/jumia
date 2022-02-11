<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {

    return [
        'id' => $faker->uuid,
        'country' => $faker->country,
        'status' => $faker->state,
        'country_code' => $faker->countryCode,
        'phone_num' => $faker->phoneNumber,

    ];
});
