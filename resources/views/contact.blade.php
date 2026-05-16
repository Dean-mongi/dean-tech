@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Contact Header -->
                <div class="text-center mb-5">
                    <h1 class="display-4 fw-bold">Contact Us</h1>
                    <p class="lead text-muted">Get in touch with us for your technology needs</p>
                </div>

                <div class="row g-4">
                    <!-- Contact Information -->
                    <div class="col-lg-5 mb-4">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <h3 class="card-title mb-4">
                                    <i class="fas fa-info-circle text-primary me-2"></i>
                                    Contact Information
                                </h3>

                                <div class="mb-3">
                                    <h5 class="text-primary">
                                        <i class="fas fa-envelope me-2"></i>
                                        Email
                                    </h5>
                                    <p class="mb-1">deanmongi90@gmail.com</p>
                                    <a href="mailto:deanmongi90@gmail.com" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-paper-plane me-1"></i> Send Email
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <h5 class="text-primary">
                                        <i class="fas fa-phone me-2"></i>
                                        Phone
                                    </h5>
                                    <p class="mb-1">0757 624 348</p>
                                    <a href="tel:+255757624348" class="btn btn-outline-success btn-sm">
                                        <i class="fas fa-phone me-1"></i> Call Now
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <h5 class="text-primary">
                                        <i class="fas fa-clock me-2"></i>
                                        Business Hours
                                    </h5>
                                    <p class="mb-0">
                                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                                        Saturday: 9:00 AM - 4:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <h5 class="text-primary">
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        Location
                                    </h5>
                                    <p class="mb-0">Dar es Salaam, Tanzania</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Options -->
                    <div class="col-lg-7">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="card-title mb-4">
                                    <i class="fas fa-comments text-primary me-2"></i>
                                    Choose How to Contact Us
                                </h3>

                                <p class="text-muted mb-4">
                                    Pick the service you need, then contact us on WhatsApp or email with a ready message.
                                </p>

                                @php
                                    $phone = '255757624348';
                                    $email = 'deanmongi90@gmail.com';
                                    $requestedService = request('service');
                                    $serviceOptions = $services->isNotEmpty()
                                        ? $services
                                        : collect([
                                            (object) ['title' => 'Network Administration'],
                                            (object) ['title' => 'Software Development'],
                                            (object) ['title' => 'Mobile Application Development'],
                                        ]);
                                @endphp

                                <div class="d-grid gap-3">
                                    @foreach($serviceOptions as $service)
                                        @php
                                            $serviceTitle = $service->title;
                                            $prefill = "Hello Dean Tech, I need help with {$serviceTitle}. Please tell me how you can help solve this and what details you need from me.";
                                            $subject = "Service request: {$serviceTitle}";
                                            $isRequested = $requestedService === $serviceTitle;
                                        @endphp

                                        <div class="border rounded p-3 {{ $isRequested ? 'border-primary bg-primary bg-opacity-10' : 'bg-white' }}">
                                            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                                <div>
                                                    <h5 class="mb-1">{{ $serviceTitle }}</h5>
                                                    <p class="text-muted mb-0">Tell us what you need and we will advise the best way to solve it.</p>
                                                </div>
                                                <div class="d-flex flex-column flex-sm-row gap-2">
                                                    <a
                                                        href="https://wa.me/{{ $phone }}?text={{ rawurlencode($prefill) }}"
                                                        target="_blank"
                                                        rel="noopener"
                                                        class="btn btn-success"
                                                    >
                                                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                                                    </a>
                                                    <a
                                                        href="mailto:{{ $email }}?subject={{ rawurlencode($subject) }}&body={{ rawurlencode($prefill) }}"
                                                        class="btn btn-outline-primary"
                                                    >
                                                        <i class="fas fa-envelope me-2"></i>Email
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="text-center mt-5">
                    <h4 class="mb-3">Follow Us</h4>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
