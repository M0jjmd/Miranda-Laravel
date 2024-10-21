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
        Room::factory(10)->create()->each(function ($room) {
            $facilities = Facility::inRandomOrder()->take(rand(2, 4))->pluck('id');
            $room->facilities()->attach($facilities);
        });
    }
}
