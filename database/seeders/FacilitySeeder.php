<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            ['facility_name' => 'WiFi'],
            ['facility_name' => 'TV'],
            ['facility_name' => 'Minibar'],
            ['facility_name' => 'Air Conditioning'],
            ['facility_name' => 'Safe'],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
