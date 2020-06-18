<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        if ($this->command->confirm('Do you want to fresh the database?')) {
            $this->command->call('migrate:fresh');
            $this->command->info('the database is fresh');
        }

        $this->call([UserSeeder::class, CategorySeeder::class, CarSeeder::class, LocationSeeder::class, PhoneSeeder::class, ReservationSeeder::class, FeatureSeeder::class, CarFeatureSeeder::class, ReviewSeeder::class]);
    }
}
