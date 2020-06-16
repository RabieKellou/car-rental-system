<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbCars = (int) $this->command->ask('How many cars do you want to generate', 20);
        factory(Car::class, $nbCars)->create();
    }
}
