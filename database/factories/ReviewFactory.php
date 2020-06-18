<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Review;
use App\User;
use Faker\Generator as Faker;

$users = User::all()->pluck('id');
$cars = Car::all()->pluck('id');

$factory->define(Review::class, function (Faker $faker) use ($users, $cars) {
    return [
        'rating' => random_int(1, 5),
        'content' => $faker->realText(),
        'user_id' => $faker->randomElement($users),
        'car_id' => $faker->randomElement($cars),
    ];
});
