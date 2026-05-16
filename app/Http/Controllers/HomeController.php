<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Message;
use App\Mail\ServiceRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

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

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,strict|max:255',
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^[0-9+\-\s().]+$/'],
            'service' => ['nullable', 'string', 'max:255', Rule::exists('services', 'title')],
            'message' => 'required|string|max:1000',
        ]);

        // Save message to database
        $message = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'service' => $validated['service'] ?? null,
            'message' => $validated['message'],
        ]);

        try {
            Mail::to(config('mail.contact_recipient.address'), config('mail.contact_recipient.name'))
                ->send(new ServiceRequestNotification(
                    $validated['name'],
                    $validated['email'],
                    $validated['phone'] ?? null,
                    $validated['service'] ?? null,
                    $validated['message']
                ));
        } catch (\Throwable $exception) {
            Log::error('Service request email notification failed.', [
                'message_id' => $message->id,
                'error' => $exception->getMessage(),
            ]);
        }

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
