@extends('layout.App')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Page Not <span>Found</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">404</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- 404 Error Section Start -->
    <div class="error-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="error-content">
                        <!-- Error Icon Start -->
                        <div class="error-icon mb-4 wow fadeInUp">
                            <i class="fa-solid fa-exclamation-triangle fa-5x text-warning"></i>
                        </div>
                        <!-- Error Icon End -->

                        <!-- Error Title Start -->
                        <div class="error-title mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="display-1 fw-bold text-primary">404</h2>
                            <h3 class="mb-3">Oops! Page Not Found</h3>
                            <p class="lead text-muted">
                                The page you are looking for might have been removed, had its name changed, 
                                or is temporarily unavailable.
                            </p>
                        </div>
                        <!-- Error Title End -->

                        <!-- Error Actions Start -->
                        <div class="error-actions wow fadeInUp" data-wow-delay="0.4s">
                            <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                                    <i class="fa-solid fa-home me-2"></i>
                                    Go to Homepage
                                </a>
                                <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-lg">
                                    <i class="fa-solid fa-blog me-2"></i>
                                    View Blog
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="fa-solid fa-envelope me-2"></i>
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <!-- Error Actions End -->

                        <!-- Search Section Start -->
                        <div class="error-search mt-5 wow fadeInUp" data-wow-delay="0.6s">
                            <h5 class="mb-3">Or search for what you're looking for:</h5>
                            <form action="{{ route('blog') }}" method="GET" class="search-form">
                                <div class="input-group input-group-lg">
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="Search blog posts..." 
                                           aria-label="Search">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Search Section End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Error Section End -->

    <style>
        .error-section {
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        
        .error-content {
            padding: 2rem 0;
        }
        
        .error-icon i {
            opacity: 0.8;
        }
        
        .display-1 {
            font-size: 8rem;
            font-weight: 900;
            line-height: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .error-actions .btn {
            min-width: 160px;
        }
        
        .search-form .input-group {
            max-width: 500px;
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .display-1 {
                font-size: 5rem;
            }
            
            .error-actions .d-flex {
                flex-direction: column !important;
            }
            
            .error-actions .btn {
                width: 100%;
            }
        }
    </style>
@endsection
