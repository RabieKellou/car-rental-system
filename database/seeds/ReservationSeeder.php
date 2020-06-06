<?php

use App\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbUsers = (int) $this->command->ask('How many reservations do you want to generate', 10);
        factory(Reservation::class, $nbUsers)->create();
    }
}
