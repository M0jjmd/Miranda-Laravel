<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_create_page_is_accessible()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('contacts.create'));
        $response->assertStatus(200);
        $response->assertViewIs('contacts.create');
    }

    public function test_contact_form_can_be_submitted()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('contacts.store'), [
            'subject' => 'Test Subject',
            'comment' => 'This is a test message.',
        ]);

        $response->assertRedirect(route('contacts.create'));

        $response->assertSessionHas('success', 'Your message has been sent successfully!');

        $this->assertDatabaseHas('contacts', [
            'subject' => 'Test Subject',
            'comment' => 'This is a test message.',
        ]);
    }

    public function test_contact_form_validation_fails_with_missing_fields()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('contacts.store'), []);
        $response->assertSessionHasErrors(['subject', 'comment']);
    }
}
