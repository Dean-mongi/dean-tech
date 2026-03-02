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

                <div class="row">
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

                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="card-title mb-4">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    Send us a Message
                                </h3>

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <i class="fas fa-check-circle me-2"></i>
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        Please fix the errors below.
                                    </div>
                                @endif

                                <form action="{{ route('contact.submit') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                               id="phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="service" class="form-label">Service Interested In</label>
                                        <select class="form-select @error('service') is-invalid @enderror" id="service" name="service">
                                            <option value="">Select a service...</option>
                                            <option value="Network Administration" {{ old('service') == 'Network Administration' ? 'selected' : '' }}>Network Administration</option>
                                            <option value="Software Development" {{ old('service') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                                            <option value="Mobile Application Development" {{ old('service') == 'Mobile Application Development' ? 'selected' : '' }}>Mobile Application Development</option>
                                        </select>
                                        @error('service')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror"
                                                  id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Send Message
                                    </button>
                                </form>
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
