<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Message;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $totalServices = Service::count();
        $totalProjects = Project::count();
        $totalMessages = Message::count();
        $totalClients = Client::count();

        $recentMessages = Message::latest()->limit(5)->get();
        $recentProjects = Project::with('client')->latest()->limit(5)->get();

        return view('admin.dashboard', compact(
            'totalServices',
            'totalProjects', 
            'totalMessages',
            'totalClients',
            'recentMessages',
            'recentProjects'
        ));
    }

    public function services()
    {
        $services = Service::all();
        return view('admin.services', compact('services'));
    }

    public function projects()
    {
        $projects = Project::with('client')->get();
        return view('admin.projects', compact('projects'));
    }

    public function messages()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    public function clients()
    {
        $clients = Client::all();
        return view('admin.clients', compact('clients'));
    }
}