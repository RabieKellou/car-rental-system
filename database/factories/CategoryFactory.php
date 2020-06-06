<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'cat_label' => $faker->vehiculeType,
        'cat_desc' => $faker->text(100)
    ];
});
