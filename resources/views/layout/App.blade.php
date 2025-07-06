<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description"
        content="Professional design agency specializing in branding, web design, and creative strategies that elevate businesses.">
    <meta name="keywords" content="design agency, branding, web design, UI/UX, creative strategy, digital marketing">
    <meta name="author" content="CS&N">

    <!-- Performance optimizations -->
    <meta name="theme-color" content="#000000">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Page Title -->
    <title>CS&N - Creative Strategy &amp; Networking</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <!-- RSS Feed -->
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} Blog RSS Feed"
        href="{{ route('blog.rss') }}">

    <!-- Additional Meta Tags -->
    @stack('meta')

    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/css/custom.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/js/jquery-3.7.1.min.js') }}" as="script">

    <!-- Google Fonts with optimized loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
        rel="stylesheet">

    <!-- Critical CSS - loaded synchronously -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- Non-critical CSS - loaded asynchronously -->
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" media="print"
        onload="this.media='all'">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link href="{{ asset('assets/css/animate.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}" media="print" onload="this.media='all'">

    <!-- Fallback for browsers that don't support preload -->
    <noscript>
        <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
        <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}">
    </noscript>

    <!-- Inline critical CSS for lazy loading -->
    <style>
        /* Lazy loading styles */
        img.lazy {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        img.lazy.loaded {
            opacity: 1;
        }

        /* Placeholder for lazy images */
        img.lazy:not(.loaded) {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Video optimization */
        video {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Preload critical images */
        .hero-images img:first-child {
            opacity: 1;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo-full.png') }}" alt="Logo" style="width: 120px">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">
                                        Home
                                    </a>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/#services">Services</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link"
                                        href="{{ route('contact') }}">Contact
                                        Us</a></li>
                            </ul>
                        </div>
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="{{ route('contact') }}" class="btn-default">Contact Us</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- News & Updates Section Start -->
    <section class="news-updates-section bg-section">
        <div class="container">
            <div class="news-updates-content">
                <div class="row align-items-center" style="padding-right: 15px; padding-left: 15px;">
                    <div class="col-lg-6 col-md-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                Stay Updated
                            </h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.25s;">
                                Latest <span>Insights</span> & Updates
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.5s;">
                                Get the latest cybersecurity insights, industry trends, and technology updates delivered
                                directly to your inbox.
                            </p>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form wow fadeInUp" data-wow-delay="0.75s"
                            style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.75s;">
                            <form method="POST" action="{{ route('newsletter.subscribe') ?? '#' }}"
                                class="newsletter-subscription-form" id="newsletterForm">
                                @csrf
                                <div class="newsletter-input-group">
                                    <input type="email" name="email" class="newsletter-input"
                                        placeholder="Enter your email address" required
                                        aria-label="Email address for newsletter subscription">
                                    <button type="submit" class="newsletter-btn">
                                        <span>Subscribe</span>
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>

                            <!-- Newsletter Features Start -->
                            <div class="newsletter-features">
                                <div class="newsletter-feature">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span>Cybersecurity Insights</span>
                                </div>
                                <div class="newsletter-feature">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span>Industry Trends</span>
                                </div>
                                <div class="newsletter-feature">
                                    <i class="fa-solid fa-lightbulb"></i>
                                    <span>Expert Tips</span>
                                </div>
                                <div class="newsletter-feature">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>Weekly Updates</span>
                                </div>
                            </div>
                            <!-- Newsletter Features End -->

                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News & Updates Section End -->
    <!-- Footer Section Start -->
    <footer class="footer-section">
        <div class="footer-box bg-section">
            <div class="footer-title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Footer Title Content Start -->
                            <div class="footer-title-content">
                                <h2><a href="contact.html">Let's Connect</a></h2>
                            </div>
                            <!-- Footer Title Content End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Footer Start -->
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- About Footer Start -->
                            <div class="about-footer">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img src="{{ asset('assets/images/logo-s.png') }}" alt=""
                                        style="width: 50px">
                                </div>
                                <!-- Footer Logo End -->

                                <!-- About Footer Content Start -->
                                <div class="about-footer-content">
                                    <p>
                                        Founded by seasoned IT and cyber security professionals, CS&amp;N Limited was
                                        created to
                                        bridge the gap between emerging technologies and practical business
                                        implementation.
                                    </p>
                                </div>
                                <!-- Footer Social Links Start -->
                                <div class="footer-social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Footer Social Links End -->

                            </div>
                            <!-- About Footer End -->
                        </div>

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- About Links Start -->
                            <div class="footer-links">
                                <h3>quick links</h3>
                                <ul>
                                    <li><a href="{{ route('home') }}">home</a></li>
                                    <li><a href="{{ route('about') }}">about us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">contact us</a></li>
                                </ul>
                            </div>
                            <!-- About Links End -->
                        </div>



                        <div class="col-lg-3 col-md-5">
                            <!-- About Links Start -->
                            <div class="footer-contact">
                                <h3>contact info</h3>
                                <!-- Footer Contact Details Start -->
                                <div class="footer-contact-details">
                                    <!-- Footer Info Box Start -->
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p><a href="tel:+447519331999">+44 7519 331999</a></p>
                                        </div>
                                    </div>
                                    <!-- Footer Info Box End -->

                                    <!-- Footer Info Box Start -->
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p><a href="#">info@computersecuritynetworks.com</a></p>
                                        </div>
                                    </div>
                                    <!-- Footer Info Box End -->

                                    <!-- Footer Info Box Start -->

                                    <!-- Footer Info Box End -->
                                </div>
                                <!-- Footer Contact Details End -->
                            </div>
                            <!-- About Links End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer End -->

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <!-- Footer Copyright Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © 2025 All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Critical JavaScript - loaded immediately -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Non-critical JavaScript - loaded with defer for better performance -->
    <script src="{{ asset('assets/js/validator.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}" defer></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}" defer></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}" defer></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/magiccursor.js') }}" defer></script>
    <script src="{{ asset('assets/js/SplitText.js') }}" defer></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" defer></script>

    <!-- Main Custom js file - loaded last -->
    <script src="{{ asset('assets/js/function.js') }}" defer></script>

    <!-- Newsletter form handling -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Newsletter form submission handling
            const newsletterForm = document.getElementById('newsletterForm');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('.newsletter-btn');
                    const originalText = submitBtn.innerHTML;

                    // Show loading state
                    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Subscribing...';
                    submitBtn.disabled = true;

                    // Reset after 3 seconds if no response
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 3000);
                });
            }

            // Show success/error messages
            @if (session('newsletter_success'))
                showNotification('{{ session('newsletter_success') }}', 'success');
            @endif

            @if (session('newsletter_error'))
                showNotification('{{ session('newsletter_error') }}', 'error');
            @endif

            @if (session('newsletter_info'))
                showNotification('{{ session('newsletter_info') }}', 'info');
            @endif
        });

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `newsletter-notification newsletter-${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <i class="fa-solid ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
                    <span>${message}</span>
                    <button class="notification-close" onclick="this.parentElement.parentElement.remove()">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
            `;

            // Add styles
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'success' ? 'var(--accent-color)' : type === 'error' ? 'var(--error-color)' : 'var(--primary-color)'};
                color: var(--bg-color);
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0,0,0,0.3);
                z-index: 9999;
                max-width: 400px;
                animation: slideInRight 0.3s ease-out;
            `;

            // Add to page
            document.body.appendChild(notification);

            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.style.animation = 'slideOutRight 0.3s ease-in';
                    setTimeout(() => notification.remove(), 300);
                }
            }, 5000);
        }
    </script>

    <!-- Add notification animations -->
    <style>
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        .notification-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .notification-close {
            background: none;
            border: none;
            color: inherit;
            cursor: pointer;
            padding: 0;
            margin-left: auto;
        }
    </style>

    <!-- Lazy loading script for images -->
    <script>
        // Intersection Observer for lazy loading images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                        }
                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                            img.removeAttribute('data-srcset');
                        }
                        img.classList.remove('lazy');
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px',
                threshold: 0.01
            });

            // Observe all lazy images
            document.addEventListener('DOMContentLoaded', () => {
                const lazyImages = document.querySelectorAll('img.lazy');
                lazyImages.forEach(img => imageObserver.observe(img));
            });
        } else {
            // Fallback for browsers without IntersectionObserver
            document.addEventListener('DOMContentLoaded', () => {
                const lazyImages = document.querySelectorAll('img.lazy');
                lazyImages.forEach(img => {
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    if (img.dataset.srcset) {
                        img.srcset = img.dataset.srcset;
                        img.removeAttribute('data-srcset');
                    }
                    img.classList.remove('lazy');
                    img.classList.add('loaded');
                });
            });
        }
    </script>
</body>

</html>
