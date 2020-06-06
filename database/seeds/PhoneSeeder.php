<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbUsers = (int) $this->command->ask('How many phones do you want to generate', 10);
        factory(Phone::class, $nbUsers)->create();
    }
}
