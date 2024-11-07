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
            FacilitySeeder::class,
            UserSeeder::class,
            RoomSeeder::class,
            ActivitySeeder::class,
            BookingSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
