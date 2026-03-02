<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Message;
use App\Mail\ServiceRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save message to database
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'message' => $request->message,
        ]);

        // Send email notification to admin
        Mail::to('deanmongi90@gmail.com')->send(
            new ServiceRequestNotification(
                $request->name,
                $request->email,
                $request->phone,
                $request->service,
                $request->message
            )
        );

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
