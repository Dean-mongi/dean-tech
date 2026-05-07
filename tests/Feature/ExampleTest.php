<?php

namespace Tests\Feature;

use App\Mail\ServiceRequestNotification;
use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_pages_return_success_for_admins(): void
    {
        $admin = Admin::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $this->actingAs($admin, 'admin');

        foreach (['admin.dashboard', 'admin.services', 'admin.projects', 'admin.messages', 'admin.clients'] as $route) {
            $this->get(route($route))->assertOk();
        }
    }

    public function test_contact_form_stores_phone_and_service(): void
    {
        Mail::fake();

        $this->post(route('contact.submit'), [
            'name' => 'Jane Client',
            'email' => 'jane@example.com',
            'phone' => '0757624348',
            'service' => 'Software Development',
            'message' => 'Please help with a new system.',
        ])->assertRedirect();

        $this->assertDatabaseHas('messages', [
            'name' => 'Jane Client',
            'email' => 'jane@example.com',
            'phone' => '0757624348',
            'service' => 'Software Development',
        ]);

        Mail::assertSent(ServiceRequestNotification::class);
    }
}
