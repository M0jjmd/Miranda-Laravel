<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Room;
use App\Models\User;

class RoomTest extends TestCase
{
    use RefreshDatabase;

    public function test_rooms_index_is_accessible()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('rooms.index'));
        $response->assertStatus(200);
        $response->assertViewIs('rooms.index');
    }

    public function test_room_show_page_is_accessible()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $room = Room::factory()->create();

        $response = $this->get(route('rooms.show', $room->id));
        $response->assertStatus(200);
        $response->assertViewIs('rooms.show');
        $response->assertSee($room->room_number);
    }
}
