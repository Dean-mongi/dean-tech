@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                        About <span class="text-warning">Dean Tech</span>
                    </h1>
                    <p class="lead mb-4 fs-5" style="line-height: 1.8;">
                        Leading provider of professional IT solutions in Tanzania, committed to transforming
                        businesses through innovative technology and exceptional service quality.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg px-4 py-3 fw-bold">
                            <i class="fas fa-handshake me-2"></i>Work With Us
                        </a>
                        <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                            <i class="fas fa-eye me-2"></i>Our Services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&h=400&fit=crop" alt="Dean Tech Team" class="img-fluid rounded shadow-lg" style="transform: rotate(-3deg);">
                </div>
            </div>
        </div>
    </div>
    <!-- Background Pattern -->
    <div class="position-absolute top-0 end-0 opacity-10" style="z-index: -1;">
        <svg width="300" height="300" viewBox="0 0 300 300">
            <defs>
                <pattern id="aboutPattern" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse">
                    <circle cx="15" cy="15" r="1.5" fill="white"/>
                </pattern>
            </defs>
            <rect width="300" height="300" fill="url(#aboutPattern)"/>
        </svg>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Our Story" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-primary mb-4">Our Story</h2>
                <p class="lead text-muted mb-4">
                    Founded with a vision to bridge the digital divide in Tanzania, Dean Tech has grown from a small
                    consultancy to a leading provider of comprehensive IT solutions.
                </p>
                <p class="mb-4">
                    We started with a simple mission: to empower Tanzanian businesses with world-class technology
                    solutions that drive growth, efficiency, and innovation. Today, we serve clients across various
                    industries, from startups to established enterprises.
                </p>
                <div class="row">
                    <div class="col-6">
                        <div class="text-center p-3 bg-white rounded shadow-sm">
                            <h3 class="text-primary fw-bold">2018</h3>
                            <small class="text-muted">Founded</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 bg-white rounded shadow-sm">
                            <h3 class="text-success fw-bold">50+</h3>
                            <small class="text-muted">Projects Completed</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Quality & Values -->
<section class="py-5" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Why Choose Dean Tech?</h2>
            <p class="lead opacity-75">Excellence in every solution we deliver</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="quality-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-award fa-4x mb-3 text-warning"></i>
                    <h4 class="fw-bold mb-3">Quality Assurance</h4>
                    <p class="mb-0">Every project undergoes rigorous testing and quality checks to ensure flawless delivery and optimal performance.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="quality-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-users-cog fa-4x mb-3 text-info"></i>
                    <h4 class="fw-bold mb-3">Expert Team</h4>
                    <p class="mb-0">Our certified professionals bring years of experience and stay updated with the latest technology trends.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="quality-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-handshake fa-4x mb-3 text-success"></i>
                    <h4 class="fw-bold mb-3">Client Partnership</h4>
                    <p class="mb-0">We work closely with clients as partners, understanding their needs and delivering tailored solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3">Our Expertise</h2>
            <p class="lead text-muted">Comprehensive IT solutions for modern businesses</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 mb-4">
                <div class="expertise-card card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=300&h=200&fit=crop" alt="Network Solutions" class="img-fluid rounded mb-3">
                        <h5 class="card-title fw-bold">Network Infrastructure</h5>
                        <p class="card-text">Complete network setup, security, and monitoring solutions for reliable business operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="expertise-card card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=300&h=200&fit=crop" alt="Software Development" class="img-fluid rounded mb-3">
                        <h5 class="card-title fw-bold">Custom Software</h5>
                        <p class="card-text">Tailored software solutions designed to streamline your business processes and boost productivity.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="expertise-card card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=300&h=200&fit=crop" alt="Mobile Development" class="img-fluid rounded mb-3">
                        <h5 class="card-title fw-bold">Mobile Applications</h5>
                        <p class="card-text">Native and cross-platform mobile apps that engage customers and enhance business mobility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="mission-card p-4 bg-white bg-opacity-10 rounded-3 backdrop-blur">
                    <h3 class="fw-bold mb-3">
                        <i class="fas fa-bullseye text-warning me-2"></i>Our Mission
                    </h3>
                    <p class="mb-0 fs-5">
                        To empower Tanzanian businesses with innovative, reliable, and cost-effective IT solutions
                        that drive digital transformation and sustainable growth.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-card p-4 bg-white bg-opacity-10 rounded-3 backdrop-blur">
                    <h3 class="fw-bold mb-3">
                        <i class="fas fa-eye text-info me-2"></i>Our Vision
                    </h3>
                    <p class="mb-0 fs-5">
                        To be Tanzania's leading technology partner, recognized for excellence in service delivery,
                        innovation, and customer satisfaction across all industries.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3">Meet Our Team</h2>
            <p class="lead text-muted">Dedicated professionals committed to your success</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mb-4">
                <div class="team-card card border-0 shadow-lg text-center">
                    <div class="card-body p-4">
                        <img src="{{ asset('images/ceo-founder.jpg') }}" alt="Dean Mongi - CEO & Founder" class="rounded-circle mb-3 mx-auto d-block" style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="card-title fw-bold">Dean Mongi</h5>
                        <p class="text-primary mb-2">Founder & CEO</p>
                        <p class="card-text text-muted">Leading Dean Tech with vision and expertise in delivering exceptional IT solutions.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:deanmongi90@gmail.com" class="text-primary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Partner with Dean Tech?</h2>
        <p class="lead mb-4">Let's discuss how we can help transform your business with our expertise</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg px-5 py-3 fw-bold">
                <i class="fas fa-envelope me-2"></i>Get In Touch
            </a>
            <a href="tel:+255757624348" class="btn btn-outline-light btn-lg px-5 py-3">
                <i class="fas fa-phone me-2"></i>Call: 0757 624 348
            </a>
        </div>
    </div>
</section>

<style>
.quality-card, .mission-card, .vision-card {
    transition: transform 0.3s ease;
}

.quality-card:hover, .mission-card:hover, .vision-card:hover {
    transform: translateY(-5px);
}

.expertise-card {
    transition: transform 0.3s ease;
}

.expertise-card:hover {
    transform: translateY(-10px);
}

.team-card {
    transition: transform 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
}

.social-links a {
    font-size: 1.2rem;
    transition: transform 0.2s ease;
}

.social-links a:hover {
    transform: scale(1.2);
}

.backdrop-blur {
    backdrop-filter: blur(10px);
}
</style>
@endsection
