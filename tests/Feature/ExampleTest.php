<?php

namespace Tests\Feature;

use App\Mail\ServiceRequestNotification;
use App\Models\Admin;
use App\Models\Service;
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
        config(['mail.contact_recipient.address' => 'requests@example.com']);

        Service::create([
            'title' => 'Software Development',
            'description' => 'Custom software projects.',
        ]);

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

        Mail::assertSent(ServiceRequestNotification::class, function (ServiceRequestNotification $mail) {
            return $mail->hasTo('requests@example.com')
                && $mail->hasReplyTo('jane@example.com')
                && $mail->service === 'Software Development';
        });
    }

    public function test_contact_form_rejects_unknown_service(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))->post(route('contact.submit'), [
            'name' => 'Jane Client',
            'email' => 'jane@example.com',
            'phone' => '0757624348',
            'service' => 'Unknown Service',
            'message' => 'Please help with a new system.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHasErrors('service');

        $this->assertDatabaseMissing('messages', [
            'email' => 'jane@example.com',
        ]);

        Mail::assertNothingSent();
    }
}
