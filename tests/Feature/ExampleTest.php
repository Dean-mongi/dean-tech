<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

        $this->get(route('admin.dashboard'))
            ->assertSee('admin-sidebar', false)
            ->assertSee('Dashboard');
    }

    public function test_admins_can_logout(): void
    {
        $admin = Admin::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $this->actingAs($admin, 'admin');

        $this->post(route('logout'))->assertRedirect('/');

        $this->assertGuest('admin');
    }

    public function test_contact_page_shows_direct_contact_options_for_services(): void
    {
        Service::create([
            'title' => 'Software Development',
            'description' => 'Custom software projects.',
        ]);

        $response = $this->get(route('contact', ['service' => 'Software Development']));

        $response->assertOk();
        $response->assertSee('Choose How to Contact Us');
        $response->assertSee('Software Development');
        $response->assertSee('https://wa.me/255757624348', false);
        $response->assertSee('mailto:deanmongi90@gmail.com', false);
        $response->assertSee(rawurlencode('I need help with Software Development'), false);
    }
}
