<?php

use App\Car;
use App\Feature;
use Illuminate\Database\Seeder;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $featureCount = Feature::count();

        Car::all()->each(function ($car) use ($featureCount) {
            $take = random_int(1, $featureCount);
            $featuresIds = Feature::InRandomOrder()->take($take)->get()->pluck('id');
            $car->features()->sync($featuresIds);
        });
    }
}
