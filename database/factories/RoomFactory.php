<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => $this->faker->imageUrl(),
            'room_number' => $this->faker->unique()->numberBetween(1, 100),
            'bed_type' => $this->faker->randomElement(['Single', 'Double', 'Queen', 'King']),
            'rate' => $this->faker->numberBetween(100, 500),
            'offer_price' => $this->faker->numberBetween(80, 400),
            'status' => $this->faker->randomElement(['available', 'booked']),
        ];
    }
}
