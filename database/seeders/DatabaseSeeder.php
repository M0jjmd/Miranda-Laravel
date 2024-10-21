<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ActivitySeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            ContactSeeder::class,
            FacilitySeeder::class,
        ]);
    }
}
