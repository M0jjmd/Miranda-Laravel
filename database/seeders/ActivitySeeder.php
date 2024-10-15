<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use Faker\Factory as Faker;
use App\Models\User;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Activity::create([
                'type' => $faker->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
                'user_id' => $faker->randomElement($users),
                'datetime' => $faker->dateTimeBetween('now', '+1 year'),
                'paid' => $faker->boolean,
                'notes' => $faker->sentence,
                'satisfaction' => $faker->numberBetween(0, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
