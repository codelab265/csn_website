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
                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
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
                                    <li><a href="index-2.html">home</a></li>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="portfolio.html">our portfolio</a></li>
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
                                            <p><a href="tel:456852789">+234 816 345 6789</a></p>
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
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p>123, Apple Lane, Peoria, IL 61602</p>
                                        </div>
                                    </div>
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
