<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'cat_label' => "Compact",
                'cat_desc' => "Sedan-type car with 5 doors"
            ],
            [
                'cat_label' => "Convertible",
                'cat_desc' => "The roof of the car is retractable hard-top or soft-top"
            ],
            [
                'cat_label' => "Jeep",
                'cat_desc' => "4X4 tall vehicle usually suitable for off-road conditions"
            ],
            [
                'cat_label' => "Luxury",
                'cat_desc' => "Long town car usually used for professional chauffer services"
            ],
            [
                'cat_label' => "SUV",
                'cat_desc' => "A mix between a sedan and a Jeep medium-to-tall height suitable for both city and off-road conditions"
            ],
            [
                'cat_label' => "Hatchback",
                'cat_desc' => "Small car with a flat back-side usually suitable for low consumption and convenient parking"
            ],
            [
                'cat_label' => "Pickup",
                'cat_desc' => "Pickup truck with a large open or closed trunk suitable for personal or professional use"
            ]
        ]);
    }
}
