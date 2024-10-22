<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::factory(10)->create();
        $facilities = Facility::all();

        foreach ($rooms as $room) {
            $numberOfFacilities = rand(1, $facilities->count());

            $randomFacilities = $facilities->random($numberOfFacilities);

            $room->facilities()->attach($randomFacilities);
        }
    }
}
