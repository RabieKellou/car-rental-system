<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'phone_no' => $faker->phoneNumber,
        'location_id' => $faker->randomElement(Location::pluck('id'))
    ];
});
