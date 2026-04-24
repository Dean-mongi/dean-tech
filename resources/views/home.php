<?php
$pageTitle = 'Home - Dean Tech';
include __DIR__ . '/layouts/header.php';
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; min-height: 100vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-3 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                        <span class="text-warning">Dean Tech</span><br>
                        <small class="text-light">Professional IT Solutions</small>
                    </h1>
                    <p class="lead mb-4 fs-5" style="line-height: 1.8;">
                        Transform your business with cutting-edge technology solutions in Tanzania.
                        From custom software development to comprehensive network infrastructure,
                        we deliver excellence that drives your success.
                    </p>
                    <div class="d-flex gap-3 mb-4">
                        <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-warning btn-lg px-4 py-3 fw-bold">
                            <i class="fas fa-rocket me-2"></i>Get Started Today
                        </a>
                        <a href="<?php echo $baseUrl; ?>/services" class="btn btn-outline-light btn-lg px-4 py-3">
                            <i class="fas fa-eye me-2"></i>Explore Services
                        </a>
                    </div>
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="stat-item">
                                <h3 class="text-warning fw-bold">50+</h3>
                                <small class="text-light">Projects Completed</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <h3 class="text-warning fw-bold">100%</h3>
                                <small class="text-light">Client Satisfaction</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <h3 class="text-warning fw-bold">24/7</h3>
                                <small class="text-light">Support Available</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image text-center">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&h=500&fit=crop" alt="IT Solutions" class="img-fluid rounded shadow-lg" style="transform: rotate(-5deg);">
                    <div class="floating-card position-absolute" style="top: 20%; right: 10%; background: rgba(255,255,255,0.9); padding: 15px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                        <i class="fas fa-code text-primary fa-2x mb-2"></i>
                        <h6 class="text-dark mb-1">Custom Development</h6>
                        <small class="text-muted">Tailored Solutions</small>
                    </div>
                    <div class="floating-card position-absolute" style="bottom: 20%; left: 10%; background: rgba(255,255,255,0.9); padding: 15px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                        <i class="fas fa-mobile-alt text-success fa-2x mb-2"></i>
                        <h6 class="text-dark mb-1">Mobile Apps</h6>
                        <small class="text-muted">iOS & Android</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Pattern -->
    <div class="position-absolute top-0 end-0 opacity-10" style="z-index: -1;">
        <svg width="400" height="400" viewBox="0 0 400 400">
            <defs>
                <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <circle cx="20" cy="20" r="2" fill="white"/>
                </pattern>
            </defs>
            <rect width="400" height="400" fill="url(#pattern)"/>
        </svg>
    </div>
</section>

<!-- Services Preview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3">Our Expertise</h2>
            <p class="lead text-muted">Comprehensive IT solutions tailored for Tanzanian businesses</p>
        </div>
        <div class="row g-4">
            <?php foreach ($services as $service): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-lg hover-card" style="transition: transform 0.3s ease;">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-4" style="width: 80px; height: 80px; background: linear-gradient(45deg, #667eea, #764ba2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fas <?php echo htmlspecialchars($service->icon); ?> fa-2x text-white"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3"><?php echo htmlspecialchars($service->title); ?></h5>
                            <p class="card-text text-muted mb-4"><?php echo htmlspecialchars(Str::limit($service->description, 120)); ?></p>
                            <a href="<?php echo $baseUrl; ?>/services/<?php echo $service->id; ?>" class="btn btn-primary px-4 py-2 fw-bold">
                                <i class="fas fa-arrow-right me-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Why Choose Dean Tech?</h2>
            <p class="lead opacity-75">Excellence in every solution we deliver</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="feature-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-cogs fa-4x mb-3 text-warning"></i>
                    <h5 class="fw-bold mb-3">Technical Expertise</h5>
                    <p class="mb-0">Years of experience in delivering cutting-edge IT solutions with the latest technologies and best practices.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="feature-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-clock fa-4x mb-3 text-success"></i>
                    <h5 class="fw-bold mb-3">Timely Delivery</h5>
                    <p class="mb-0">We understand the importance of deadlines. Our agile approach ensures projects are delivered on time, every time.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="feature-card p-4 rounded-3 shadow-lg bg-white bg-opacity-10 backdrop-blur">
                    <i class="fas fa-users fa-4x mb-3 text-info"></i>
                    <h5 class="fw-bold mb-3">Client-Centric Approach</h5>
                    <p class="mb-0">Your success is our priority. We work closely with you to understand your needs and deliver personalized solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials/Stats Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="stat-card p-4">
                    <h2 class="display-4 fw-bold text-warning mb-2">50+</h2>
                    <p class="mb-0">Successful Projects</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card p-4">
                    <h2 class="display-4 fw-bold text-success mb-2">100%</h2>
                    <p class="mb-0">Client Satisfaction</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card p-4">
                    <h2 class="display-4 fw-bold text-info mb-2">24/7</h2>
                    <p class="mb-0">Technical Support</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card p-4">
                    <h2 class="display-4 fw-bold text-primary mb-2">5+</h2>
                    <p class="mb-0">Years Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Business?</h2>
        <p class="lead mb-4">Let's discuss how we can help you achieve your technology goals</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="<?php echo $baseUrl; ?>/contact" class="btn btn-warning btn-lg px-5 py-3 fw-bold">
                <i class="fas fa-envelope me-2"></i>Contact Us Today
            </a>
            <a href="tel:+255757624348" class="btn btn-outline-light btn-lg px-5 py-3">
                <i class="fas fa-phone me-2"></i>Call: 0757 624 348
            </a>
        </div>
    </div>
</section>

<style>
.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
}

.hero-content h1 {
    animation: fadeInUp 1s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.floating-card {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.feature-card {
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: scale(1.05);
}

.stat-card h2 {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}
</style>

<?php include __DIR__ . '/layouts/footer.php'; ?>
