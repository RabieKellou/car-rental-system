<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbUsers = (int) $this->command->ask('How many locations do you want to generate', 10);
        factory(Location::class, $nbUsers)->create();
    }
}
