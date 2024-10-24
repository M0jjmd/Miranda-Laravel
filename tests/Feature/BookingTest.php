<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Room;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function test_booking_create_form_is_accessible()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $room = Room::factory()->create();

        $response = $this->get(route('rooms.show', $room->id));
        $response->assertStatus(200);
        $response->assertViewIs('rooms.show');
        $response->assertSee('Start Booking');
    }

    public function test_room_can_be_booked()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $room = Room::factory()->create();

        $response = $this->post(route('bookings.store'), [
            'room_id' => $room->id,
            'check_in' => '2024-10-24',
            'check_out' => '2024-10-31',
            'special_request' => 'Prefer higher floor',
            'status' => 'in-progress',
        ]);
        $response->assertRedirect(route('bookings.index'));

        $this->assertDatabaseHas('bookings', [
            'room_id' => $room->id,
            'user_id' => $user->id,
            'check_in' => '2024-10-24',
            'check_out' => '2024-10-31',
            'special_request' => 'Prefer higher floor',
        ]);
    }

    public function test_booking_validation_fails_with_missing_fields()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $room = Room::factory()->create();

        $response = $this->post(route('bookings.store'), [
            'room_id' => $room->id,
        ]);
        $response->assertSessionHasErrors(['check_in', 'check_out']);
    }
}
