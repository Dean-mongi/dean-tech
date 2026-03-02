<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default admin
        Admin::create([
            'username' => 'admin',
            'email' => 'admin@deantech.com',
            'password' => Hash::make('password'),
        ]);

        // Create sample services
        Service::create([
            'title' => 'Network Administration',
            'description' => 'Comprehensive network setup, configuration, and management services including routers, switches, firewalls, and server installations.',
            'icon' => 'fa-network-wired',
        ]);

        Service::create([
            'title' => 'Software Development',
            'description' => 'Custom web applications, business systems, database design, e-commerce solutions, and API development tailored to your specific needs.',
            'icon' => 'fa-code',
        ]);

        Service::create([
            'title' => 'Mobile Application Development',
            'description' => 'Native and cross-platform mobile applications for Android and iOS with seamless API integration and app store deployment.',
            'icon' => 'fa-mobile-alt',
        ]);
    }
}