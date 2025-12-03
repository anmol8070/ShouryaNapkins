@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush

@section('title', 'Premium Tissue Products Manufacturer')

@section('content')

<!-- HERO SECTION WITH VIDEO CARD -->
<section id="hero" class="site-section hero position-relative">
    <!-- Animated Background Elements -->
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <div class="container position-relative">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="hero-badge-wrapper">
                    <div class="hero-badge">
                        <i class="fas fa-award me-2"></i> Industry Leader Since 2022
                    </div>
                    <div class="hero-badge secondary">
                        <i class="fas fa-shipping-fast me-2"></i> Pan-India Delivery
                    </div>
                </div>

                <h1 class="hero-title">
                    <span class="hero-greeting">Welcome to</span>
                    <span class="brand-highlight">ShouryaNapkins</span>
                </h1>

                <p class="hero-sub">
                    Crafting premium tissue products with cutting-edge hygiene technology, 
                    superior softness, and sustainable materials for unparalleled comfort.
                </p>

                <div class="hero-cta-buttons">
                    <a href="#products" class="btn gradient-btn px-4 py-3">
                        <i class="fas fa-box-open me-2"></i> Explore Products
                        <span class="btn-arrow">→</span>
                    </a>

                    <a href="#contact" class="btn btn-outline-primary px-4 py-3">
                        <i class="fas fa-calendar-alt me-2"></i> Get Quote
                    </a>
                </div>

                <div class="hero-features">
                    <div class="feature-chip">
                        <div class="feature-chip-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <span>100% Eco-Friendly</span>
                    </div>
                    <div class="feature-chip">
                        <div class="feature-chip-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <span>Premium Quality</span>
                    </div>
                    <div class="feature-chip">
                        <div class="feature-chip-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <span>Bulk Orders</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT VIDEO CARD -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="video-card-wrapper">
                    <div class="video-card">
                        <div class="video-card-header">
                            <div class="video-card-dots">
                                <span class="dot red"></span>
                                <span class="dot yellow"></span>
                                <span class="dot green"></span>
                            </div>
                            <span class="video-label">Live Production</span>
                        </div>
                        <video class="video-box" autoplay muted loop playsinline poster="{{ asset('Images/hero-poster.jpg') }}">
                            <source src="{{ asset('Images/video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <!-- <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button> -->
                        </div>
                    </div>
                    <div class="video-stats">
                        <div class="stat-item">
                            <i class="fas fa-industry"></i>
                            <div>
                                <h4>24/7</h4>
                                <p>Production</p>
                            </div>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>100%</h4>
                                <p>Quality Check</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="site-section stats-section">
    <div class="container">
        <div class="stats-wrapper">
            <div class="row g-4">
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number" data-count="100">0+</div>
                        <p>Happy Customers</p>
                    </div>
                </div>

                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <div class="stat-number" data-count="50">0+</div>
                        <p>Products Range</p>
                    </div>
                </div>

                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-number" data-count="2">0+</div>
                        <p>Years Experience</p>
                    </div>
                </div>

                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="stat-number">100%</div>
                        <p>Quality Assurance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="site-section about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-content">
                    <div class="section-header">
                        <span class="section-label">OUR STORY</span>
                        <h2 class="section-title">Crafting Excellence in Every Tissue</h2>
                    </div>

                    <p class="about-text">
                        At ShouryaNapkins, we blend traditional craftsmanship with modern 
                        technology to deliver tissue products that redefine comfort and hygiene. 
                        Our commitment to quality and sustainability drives everything we do.
                    </p>

                    <div class="feature-grid">
                        <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Eco-Friendly Production</h5>
                                <p>100% biodegradable materials with sustainable manufacturing</p>
                            </div>
                        </div>

                        <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Premium Quality</h5>
                                <p>ISO certified production with rigorous quality checks</p>
                            </div>
                        </div>

                        <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Nationwide Delivery</h5>
                                <p>Fast and reliable delivery across India</p>
                            </div>
                        </div>

                        <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h5>24/7 Support</h5>
                                <p>Dedicated customer support team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-image-wrapper">
                    <div class="about-image-frame">
                        <img src="{{ asset('Images/machine.jpg') }}" 
                             class="about-img" 
                             alt="Tissue Manufacturing Process">
                    </div>
                    <div class="about-badge">
                        <i class="fas fa-industry"></i>
                        <span>Advanced Manufacturing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS SECTION -->
<section id="products" class="site-section product-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">OUR PRODUCTS</span>
            <h2 class="section-title">Premium Tissue Collection</h2>
            <p class="section-subtitle">Discover our high-quality tissue products crafted for excellence</p>
        </div>

        @php
            $products = [
                [
                    'title' => 'Paper Napkin Tissue',
                    'desc' => 'Soft and high-quality napkins for restaurants and households with superior absorption.',
                    'img' => asset('Images/paper-napkin.jpg'),
                    'features' => ['Bulk Packing', 'Custom Printing', 'Multiple Layers']
                ],
                [
                    'title' => 'Facial Tissue',
                    'desc' => 'Premium facial tissues designed for everyday comfort and gentle care.',
                    'img' => asset('Images/faciial-tissues.jpg'),
                    'features' => ['Hypoallergenic', 'Lotion Infused', 'Ultra Soft']
                ],
                [
                    'title' => 'Ultra Soft Facial Tissue',
                    'desc' => 'Ultra soft, gentle, and dermatologically safe for sensitive skin.',
                    'img' => asset('Images/ultra-soft-facial-tissues.jpg'),
                    'features' => ['3-Ply Strength', 'Scent Free', 'Biodegradable']
                ],
            ];
        @endphp

        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card-wrapper" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 150 }}">
                <div class="product-card">
                    <div class="product-image">
                        <div class="product-bg" style="background-image: url('{{ $product['img'] }}')"></div>
                        <div class="product-overlay">
                            <div class="product-features">
                                @foreach($product['features'] as $feature)
                                <span class="product-feature">{{ $feature }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-badge">Best Seller</div>
                        <h3>{{ $product['title'] }}</h3>
                        <p>{{ $product['desc'] }}</p>
                        <div class="product-actions">
                            <a href="#contact" class="btn product-btn">
                                <i class="fas fa-quote-left me-2"></i> Get Quote
                            </a>
                            <a href="#" class="btn product-btn-outline">
                                View Details <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->
<section id="gallery" class="site-section gallery-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">GALLERY</span>
            <h2 class="section-title">Our Manufacturing Excellence</h2>
            <p class="section-subtitle">State-of-the-art production and premium packaging</p>
        </div>

        @php
            $gallery = [
                [
                    'img' => asset('Images/machine.jpg'),
                    'title' => 'Production Line',
                    'desc' => 'Advanced machinery'
                ],
                [
                    'img' => asset('Images/template.jpg'),
                    'title' => 'Quality Check',
                    'desc' => 'Rigorous testing'
                ],
                [
                    'img' => asset('Images/tissue.jpg'),
                    'title' => 'Finished Products',
                    'desc' => 'Ready for delivery'
                ],
            ];
        @endphp

        <div class="gallery-grid">
            @foreach($gallery as $item)
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="gallery-card">
                    <img src="{{ $item['img'] }}" class="gallery-img" alt="{{ $item['title'] }}">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h4>{{ $item['title'] }}</h4>
                            <p>{{ $item['desc'] }}</p>
                        </div>
                        <a href="{{ $item['img'] }}" data-fancybox="gallery" class="gallery-zoom">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="site-section contact-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">CONTACT US</span>
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">We're here to serve your tissue needs</p>
        </div>

        <div class="contact-wrapper">
            <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Email</h5>
                            <a href="mailto:info@shouryanapkins.com">info@shouryanapkins.com</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Website</h5>
                            <a href="https://shouryanapkins.com" target="_blank">www.shouryanapkins.com</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Address</h5>
                            <p class="address-text">
                                123 Industrial Area,<br>
                                Mumbai, Maharashtra - 400001
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Phone</h5>
                            <a href="tel:+919876543210">+91 98765 43210</a>
                        </div>
                    </div>
                </div>

                <div class="contact-map">
                    <iframe class="map-frame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.715575283477!2d72.87791431490085!3d19.075587587108203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8af0b1f5f5f%3A0x6a1d7c2b8e7b8c8c!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1629876543210!5m2!1sen!2sin"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="contact-actions" data-aos="fade-up" data-aos-delay="200">
                <a href="https://wa.me/919876543210" target="_blank" class="btn whatsapp-btn">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp Now
                </a>
                <a href="tel:+919876543210" class="btn phone-btn">
                    <i class="fas fa-phone-alt me-2"></i> Call Now
                </a>
                <a href="mailto:info@shouryanapkins.com" class="btn email-btn">
                    <i class="fas fa-envelope me-2"></i> Email Us
                </a>
            </div>

            <div class="social-links" data-aos="fade-up" data-aos-delay="300">
                <p class="social-title">Follow Us</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/shourya_napkin_industries" target="_blank" class="social-icon instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="social-icon facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="social-icon youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" class="social-icon linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="site-section cta-section">
    <!-- Animated Particles -->
    <div class="cta-particles">
        <div class="cta-particle"></div>
        <div class="cta-particle"></div>
        <div class="cta-particle"></div>
        <div class="cta-particle"></div>
        <div class="cta-particle"></div>
    </div>
    
    <div class="container">
        <div class="cta-card fade-in-up" data-aos="zoom-in">
            <div class="cta-content">
                <h3>Ready to Order Premium Tissues?</h3>
                <p>Contact us today for bulk orders and special pricing</p>
            </div>
            <a href="#contact" class="btn cta-btn">
                Get Free Quote <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<!-- Fancybox for gallery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated counters
    const counters = document.querySelectorAll('.stat-number');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        if (isNaN(target)) return;
        
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current) + '+';
                setTimeout(updateCounter, 30);
            } else {
                counter.textContent = target + '+';
            }
        };
        
        // Start counter when in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(counter);
    });

    // Video play button
    const video = document.querySelector('.video-box');
    const playBtn = document.querySelector('.play-btn');
    
    playBtn?.addEventListener('click', function() {
        if (video.paused) {
            video.play();
            this.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            video.pause();
            this.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    // Create floating particles
    const hero = document.querySelector('.hero');
    for (let i = 0; i < 25; i++) {
        const particle = document.createElement('div');
        particle.className = 'floating-particle';
        particle.style.setProperty('--i', i);
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.width = Math.random() * 20 + 5 + 'px';
        particle.style.height = particle.style.width;
        particle.style.animationDelay = Math.random() * 5 + 's';
        particle.style.animationDuration = Math.random() * 10 + 15 + 's';
        hero.appendChild(particle);
    }

    // Initialize Fancybox
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: true,
        protect: true
    });
});
</script>
@endpush