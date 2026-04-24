<?php
$pageTitle = htmlspecialchars($service->title) . ' - Dean Tech';
include __DIR__ . '/layouts/header.php';
?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Service Header -->
                <div class="text-center mb-5">
                    <i class="fas <?php echo htmlspecialchars($service->icon); ?> fa-4x mb-3 text-primary"></i>
                    <h1 class="display-4 fw-bold"><?php echo htmlspecialchars($service->title); ?></h1>
                    <p class="lead text-muted"><?php echo htmlspecialchars($service->description); ?></p>
                </div>

                <!-- Hero Image -->
                <div class="mb-5">
                    <?php if ($service->title == 'Network Administration'): ?>
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&h=400&fit=crop" alt="Network Administration" class="img-fluid rounded shadow">
                    <?php elseif ($service->title == 'Software Development'): ?>
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&h=400&fit=crop" alt="Software Development" class="img-fluid rounded shadow">
                    <?php elseif ($service->title == 'Mobile Application Development'): ?>
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=400&fit=crop" alt="Mobile Application Development" class="img-fluid rounded shadow">
                    <?php endif; ?>
                </div>

                <!-- Detailed Description -->
                <div class="row mb-5">
                    <div class="col-md-6">
                        <?php if ($service->title == 'Network Administration'): ?>
                            <h3>What We Offer</h3>
                            <p>Our comprehensive network administration services ensure your business infrastructure is robust, secure, and optimized for performance. We handle everything from initial setup to ongoing maintenance and troubleshooting.</p>
                            <h4>Key Services Include:</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Complete network infrastructure design</li>
                                <li><i class="fas fa-check text-success me-2"></i> Router and switch configuration</li>
                                <li><i class="fas fa-check text-success me-2"></i> Firewall setup and security hardening</li>
                                <li><i class="fas fa-check text-success me-2"></i> Server installation and management</li>
                                <li><i class="fas fa-check text-success me-2"></i> VPN implementation for secure remote access</li>
                                <li><i class="fas fa-check text-success me-2"></i> 24/7 network monitoring and support</li>
                            </ul>
                        <?php elseif ($service->title == 'Software Development'): ?>
                            <h3>Custom Solutions</h3>
                            <p>We create tailored software solutions that perfectly match your business requirements. From web applications to complex enterprise systems, our development team delivers high-quality, scalable software.</p>
                            <h4>Our Expertise:</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Full-stack web application development</li>
                                <li><i class="fas fa-check text-success me-2"></i> Business process automation systems</li>
                                <li><i class="fas fa-check text-success me-2"></i> Database design and optimization</li>
                                <li><i class="fas fa-check text-success me-2"></i> E-commerce platform development</li>
                                <li><i class="fas fa-check text-success me-2"></i> RESTful API design and implementation</li>
                                <li><i class="fas fa-check text-success me-2"></i> System integration and migration</li>
                            </ul>
                        <?php elseif ($service->title == 'Mobile Application Development'): ?>
                            <h3>Mobile Innovation</h3>
                            <p>Bring your ideas to life with our mobile application development services. We create engaging, user-friendly apps for both Android and iOS platforms that drive business growth and enhance user experience.</p>
                            <h4>What We Deliver:</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Native Android and iOS applications</li>
                                <li><i class="fas fa-check text-success me-2"></i> Cross-platform solutions with React Native</li>
                                <li><i class="fas fa-check text-success me-2"></i> Business productivity mobile apps</li>
                                <li><i class="fas fa-check text-success me-2"></i> Seamless API integration</li>
                                <li><i class="fas fa-check text-success me-2"></i> App store optimization and deployment</li>
                                <li><i class="fas fa-check text-success me-2"></i> Post-launch maintenance and updates</li>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($service->title == 'Network Administration'): ?>
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=300&fit=crop" alt="Network Infrastructure" class="img-fluid rounded shadow mb-3">
                            <h4>Why Choose Our Network Services?</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-shield-alt text-primary me-2"></i> Enterprise-grade security</li>
                                <li><i class="fas fa-tachometer-alt text-primary me-2"></i> Optimized performance</li>
                                <li><i class="fas fa-clock text-primary me-2"></i> 99.9% uptime guarantee</li>
                                <li><i class="fas fa-headset text-primary me-2"></i> 24/7 technical support</li>
                            </ul>
                        <?php elseif ($service->title == 'Software Development'): ?>
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=300&fit=crop" alt="Software Development" class="img-fluid rounded shadow mb-3">
                            <h4>Our Development Process</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-search text-primary me-2"></i> Requirements analysis</li>
                                <li><i class="fas fa-drafting-compass text-primary me-2"></i> System design & architecture</li>
                                <li><i class="fas fa-code text-primary me-2"></i> Agile development methodology</li>
                                <li><i class="fas fa-bug text-primary me-2"></i> Comprehensive testing</li>
                            </ul>
                        <?php elseif ($service->title == 'Mobile Application Development'): ?>
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=300&fit=crop" alt="Mobile Apps" class="img-fluid rounded shadow mb-3">
                            <h4>Platform Expertise</h4>
                            <ul class="list-unstyled">
                                <li><i class="fab fa-android text-success me-2"></i> Android development</li>
                                <li><i class="fab fa-apple text-primary me-2"></i> iOS development</li>
                                <li><i class="fas fa-mobile-alt text-warning me-2"></i> Cross-platform solutions</li>
                                <li><i class="fas fa-cloud text-info me-2"></i> Cloud integration</li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-primary text-white p-4 rounded">
                    <h3>Ready to Get Started?</h3>
                    <p class="mb-3">Contact us today to discuss your <?php echo strtolower(htmlspecialchars($service->title)); ?> needs and get a custom quote.</p>
                    <a href="<?php echo $baseUrl; ?>/contact?service=<?php echo urlencode($service->title); ?>" class="btn btn-light btn-lg">Request This Service</a>
                </div>

                <!-- Back to Services -->
                <div class="text-center mt-4">
                    <a href="<?php echo $baseUrl; ?>/services" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i> Back to All Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
