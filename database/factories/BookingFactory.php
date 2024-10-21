<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'order_date' => $this->faker->date(),
            'check_in' => $this->faker->date(),
            'check_out' => $this->faker->date(),
            'special_request' => $this->faker->sentence(),
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'status' => $this->faker->randomElement(['checked-in', 'checked-out', 'in-progress']),
        ];
    }
}
