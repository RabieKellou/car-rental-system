<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Location;
use Faker\Generator as Faker;

$cities = City::all()->pluck('id');
$factory->define(Location::class, function (Faker $faker) use ($cities) {

    return [
        'address' => $faker->streetAddress,
        'city_id' => $faker->randomElement($cities)
    ];
});
