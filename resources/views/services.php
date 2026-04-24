<?php
$pageTitle = 'Our Services - Dean Tech';
include __DIR__ . '/layouts/header.php';
?>

<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Our Services</h1>

        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas <?php echo htmlspecialchars($service->icon); ?> fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title"><?php echo htmlspecialchars($service->title); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($service->description); ?></p>
                            <a href="<?php echo $baseUrl; ?>/services/<?php echo $service->id; ?>" class="btn btn-primary mb-2">Learn More</a>
                            <br>
                            <a href="<?php echo $baseUrl; ?>/contact?service=<?php echo urlencode($service->title); ?>" class="btn btn-outline-primary btn-sm">Request This Service</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Detailed Service Sections -->
        <div class="mt-5">
            <h2 class="text-center mb-4">Service Details</h2>

            <div class="accordion" id="servicesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Network Administration
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Network setup & configuration</li>
                                <li>Router & switch configuration</li>
                                <li>Firewall security</li>
                                <li>Server installation & management</li>
                                <li>VPN setup</li>
                                <li>Network monitoring & troubleshooting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Software Development
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Custom web applications</li>
                                <li>Business systems development</li>
                                <li>Database design & management</li>
                                <li>E-commerce solutions</li>
                                <li>API development & integration</li>
                                <li>System maintenance & updates</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Mobile Application Development
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Android app development</li>
                                <li>iOS app development</li>
                                <li>Cross-platform apps (React Native)</li>
                                <li>Business mobile applications</li>
                                <li>API integration for mobile apps</li>
                                <li>App store deployment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
