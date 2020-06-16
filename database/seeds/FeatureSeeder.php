<?php

use App\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = collect([
            "Towbar",
            "Aircondition",
            "GPS",
            "Leather seats",
            "Roof Rack",
            "Bluetooth"
        ]);
        $features->each(function ($feature) {
            $myFeature = new Feature();
            $myFeature->name = $feature;
            $myFeature->save();
        });
    }
}
