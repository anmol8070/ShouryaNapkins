<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name','ShouryaNapkins') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @stack('styles')
</head>

<body class="custom-scrollbar">

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg nav-gradient sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#hero">
            <div class="brand-wrapper">
                <div class="logo-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="brand-text">
                    <span class="brand-main">ShouryaNapkins</span>
                    <span class="brand-tagline">Eco-Friendly Solutions</span>
                </div>
            </div>
        </a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#hero">
                        <i class="fas fa-home me-2"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <i class="fas fa-info-circle me-2"></i>About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">
                        <i class="fas fa-box-open me-2"></i>Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">
                        <i class="fas fa-images me-2"></i>Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        <i class="fas fa-envelope me-2"></i>Contact
                    </a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary btn-cta" href="#contact">
                        <i class="fas fa-shopping-cart me-2"></i>Order Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader-content">
        <div class="loader-logo">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="loader-text">ShouryaNapkins</div>
        <div class="loader-spinner"></div>
    </div>
</div>

<main>
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="footer-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up">
                <div class="footer-brand">
                    <i class="fas fa-leaf"></i>
                    <h3>ShouryaNapkins</h3>
                    <p>Quality napkins for a cleaner tomorrow</p>
                </div>
                <div class="social-icons mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#hero"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="#products"><i class="fas fa-chevron-right"></i> Our Products</a></li>
                    <li><a href="#gallery"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
            </div>
            
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h4>Contact Info</h4>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Industry Area, Manufacturing Zone, City - 123456</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+91 98765 43210</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>info@shouryanapkins.com</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 9:00 AM - 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="footer-divider">
        
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{ date('Y') }} ShouryaNapkins. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Made with <i class="fas fa-heart text-danger"></i> for a sustainable future</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>

<!-- Custom JS -->
<script src="{{ asset('js/scroll.js') }}"></script>

<script>
    // Page Loader
    window.addEventListener('load', function() {
        document.querySelector('.page-loader').style.opacity = '0';
        setTimeout(() => {
            document.querySelector('.page-loader').style.display = 'none';
        }, 500);
    });

    // Back to Top
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
</script>

@stack('scripts')

</body>
</html>