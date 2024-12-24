<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Nepal Corporate House')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top" class="d-flex flex-column min-vh-100">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="home">Nepal Corporate House</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link me-3" href="{{ url('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="{{ url('about') }}">About</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-3" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Corporate Sector</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href="#">Incorporation of Company</a></li>
                                <li><a class="dropdown-item" href="#">Counselling Corporate Issues</a></li>
                                <li><a class="dropdown-item" href="#">Dealing with Insolvent</a></li>
                                <li><a class="dropdown-item" href="#">Liquidation Service</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Legal Sector</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href="#">Legal Counselling</a></li>
                                <li><a class="dropdown-item" href="#">Litigation Service</a></li>
                                <li><a class="dropdown-item" href="#">Legal Documentation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Administration</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href="#">Accounting</a></li>
                                <li><a class="dropdown-item" href="#">Audit Preparation</a></li>
                                <li><a class="dropdown-item" href="#">Bookkeeping</a></li>
                                <li><a class="dropdown-item" href="#">Tax Counselling</a></li>
                                <li><a class="dropdown-item" href="#">Tax-Related Services</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Software Development</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href="#">Website Design</a></li>
                                <li><a class="dropdown-item" href="#">Software Design/Development</a></li>
                                <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                                <li><a class="dropdown-item" href="#">Technology Counselling</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                    <li class="nav-item"><a class="nav-link me-3" href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> 

    <!-- Main Content -->
    <div class="container mt-5 pt-5 flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white-50 mt-auto">
        <div class="container text-center">
            <small>&copy; 2024 Nepal Corporate House. All Rights Reserved.</small>
            <p class="contact">Contact: +977 - 9851195803, +977 - 9849983259</p>
            <p class="email">Email: info@nepalcorporatehouse.com</p>
        </div>
    </footer>

    <!-- Core theme JS (includes Bootstrap) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
