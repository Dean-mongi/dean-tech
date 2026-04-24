<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio - Dean Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }
        .portfolio-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .project-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .github-link {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .github-link:hover {
            color: #667eea;
        }
        .github-btn {
            background: #24292e;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
        }
        .github-btn:hover {
            background: #2f363d;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="portfolio-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Our Portfolio</h1>
                    <p class="lead">Showcasing our projects and accomplishments</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="https://github.com/Dean-mongi" target="_blank" class="github-btn">
                        <i class="fab fa-github"></i>
                        @Dean-mongi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- GitHub Stats Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="mb-2">
                                    <i class="fab fa-github me-2"></i>
                                    GitHub Profile
                                </h3>
                                <p class="text-muted mb-0">
                                    Check out our repositories, contributions, and open source work on GitHub
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="https://github.com/Dean-mongi" target="_blank" class="btn btn-primary">
                                    <i class="fab fa-github me-2"></i>
                                    View GitHub Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="h5 mb-3">Web Development</h3>
                        <p class="text-muted">Custom websites and web applications built with modern technologies including Laravel, React, and Vue.js.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="h5 mb-3">Mobile Applications</h3>
                        <p class="text-muted">Cross-platform mobile apps developed using Flutter and React Native for iOS and Android.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="h5 mb-3">Backend Systems</h3>
                        <p class="text-muted">Robust backend solutions with RESTful APIs, database optimization, and cloud infrastructure.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="h5 mb-3">Network Security</h3>
                        <p class="text-muted">Enterprise network security solutions and IT infrastructure management for businesses.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="h5 mb-3">Cloud Solutions</h3>
                        <p class="text-muted">Cloud deployment, AWS/Azure management, and scalable cloud architecture design.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="project-icon mb-3">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="h5 mb-3">Custom Solutions</h3>
                        <p class="text-muted">Tailored software solutions designed to meet specific business requirements.</p>
                        <a href="https://github.com/Dean-mongi?tab=repositories" target="_blank" class="github-link">
                            <i class="fab fa-github me-1"></i> View Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card bg-dark text-white border-0">
                    <div class="card-body p-5 text-center">
                        <h2 class="mb-3">Want to see more of our work?</h2>
                        <p class="mb-4">Visit our GitHub profile to explore all our repositories, contributions, and open source projects.</p>
                        <a href="https://github.com/Dean-mongi" target="_blank" class="btn btn-lg btn-light">
                            <i class="fab fa-github me-2"></i>
                            Explore @Dean-mongi on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
