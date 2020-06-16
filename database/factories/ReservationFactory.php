<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Location;
use App\Reservation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat(2, 60, 200),
        'pickup_date' => $faker->date(),
        'return_date' => $faker->date(),
        'car_id' => $faker->randomElement(Car::pluck('id')),
        'user_id' => $faker->randomElement(User::pluck('id')),
        'pickup_loc' => $faker->randomElement(Location::pluck('id')),
        'return_loc' => $faker->randomElement(Location::pluck('id')),

    ];
});
