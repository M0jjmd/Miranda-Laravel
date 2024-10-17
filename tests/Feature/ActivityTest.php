<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    public function homepage_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200); 
    }

    public function dashboard_is_accessible_when_authenticated()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function activities_index_is_accessible_when_authenticated()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('activities.index'));

        $response->assertStatus(200);
    }

    public function create_activity_page_is_accessible_when_authenticated()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('activities.create'));

        $response->assertStatus(200);
    }

    public function profile_edit_page_is_accessible_when_authenticated()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('profile.edit'));

        $response->assertStatus(200); 
    }
}
