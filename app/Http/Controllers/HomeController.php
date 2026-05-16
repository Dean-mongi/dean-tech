<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::limit(3)->get();
        return view('home', compact('services'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function showService(Service $service)
    {
        return view('service', compact('service'));
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        $services = Service::orderBy('title')->get();

        return view('contact', compact('services'));
    }
}
