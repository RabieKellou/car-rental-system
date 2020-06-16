<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Category;
use Faker\Generator as Faker;


$factory->define(Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $vehicule = $faker->vehicleArray();
    return [
        'car_desc' => $faker->text(100),
        'brand' => $vehicule['brand'],
        'model' => $vehicule['model'],
        'fuelType' => $faker->randomElement(['diesel', 'gasoline', 'electric']),
        'gearBoxType' => $faker->randomElement(['manual', 'automatic']),
        'doorCount' => $faker->vehicleDoorCount,
        'seatCount' => $faker->vehicleSeatCount,
        'price' => $faker->randomFloat(2, 40, 100),
        'purchase_date' => $faker->date(),
        'category_id' => $faker->randomElement(Category::pluck('id'))
    ];
});
