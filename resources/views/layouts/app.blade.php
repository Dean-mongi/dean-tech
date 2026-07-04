<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dean Tech - Professional IT Solutions')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @php
        $isAdminArea = request()->routeIs('admin.*');
        $adminLinks = [
            ['route' => 'admin.dashboard', 'icon' => 'fa-gauge-high', 'label' => 'Dashboard'],
            ['route' => 'admin.services', 'icon' => 'fa-screwdriver-wrench', 'label' => 'Services'],
            ['route' => 'admin.projects', 'icon' => 'fa-diagram-project', 'label' => 'Projects'],
            ['route' => 'admin.messages', 'icon' => 'fa-envelope', 'label' => 'Messages'],
            ['route' => 'admin.clients', 'icon' => 'fa-users', 'label' => 'Clients'],
        ];
    @endphp

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('images/brand logo.jpeg') }}" alt="Dean Tech Logo" height="40" class="d-inline-block align-top me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @if(Auth::guard('admin')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @elseif(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if($isAdminArea)
        <div class="admin-shell">
            <aside class="admin-sidebar" aria-label="Admin navigation">
                <div class="admin-sidebar-header">
                    <span class="admin-sidebar-title">Admin</span>
                    <span class="admin-sidebar-subtitle">Dean Tech</span>
                </div>
                <nav class="admin-sidebar-nav">
                    @foreach($adminLinks as $link)
                        <a class="admin-sidebar-link {{ request()->routeIs($link['route']) ? 'active' : '' }}"
                           href="{{ route($link['route']) }}">
                            <i class="fas {{ $link['icon'] }}" aria-hidden="true"></i>
                            <span>{{ $link['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </aside>

            <main class="admin-content">
                @yield('content')
            </main>
        </div>
    @else
        <!-- Main Content -->
        <main>
            @yield('content')
        </main>
    @endif

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 {{ $isAdminArea ? 'mt-0' : 'mt-5' }}">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>
                        <img src="{{ url('images/brand logo.jpeg') }}" alt="Dean Tech Logo" height="30" class="me-2" onerror="this.style.display='none'">
                    </h5>
                    <p>Professional IT Solutions in Tanzania</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; {{ date('Y') }} Dean Tech. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
