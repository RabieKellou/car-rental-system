<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Category;
use Faker\Generator as Faker;


$factory->define(Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
        'car_desc' => $faker->text(100),
        'color' => $faker->colorName,
        'brand' => $faker->vehicleBrand,
        'model' => $faker->vehicleModel,
        'purchase_date' => $faker->date(),
        'category_id' => $faker->randomElement(Category::pluck('id'))
    ];
});
