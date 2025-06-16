@extends('layout.App')

@push('meta')
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="keywords" content="blog, {{ $post->title }}, technology, cybersecurity, business solutions">
    <meta property="og:title" content="{{ $post->title }} - {{ config('app.name') }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('post', $post->slug) }}">
    <meta property="og:image" content="{{ $post->image_url }}">
    <meta property="article:published_time" content="{{ $post->created_at->toISOString() }}">
    <meta property="article:modified_time" content="{{ $post->updated_at->toISOString() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }} - {{ config('app.name') }}">
    <meta name="twitter:description" content="{{ $post->excerpt }}">
    <meta name="twitter:image" content="{{ $post->image_url }}">
    <link rel="canonical" href="{{ route('post', $post->slug) }}">
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ Str::limit($post->title, 50) }}</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->title, 30) }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Meta Information Start -->
                    <div class="post-meta-info mb-4 wow fadeInUp">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="post-meta-details">
                                    <span class="post-date">
                                        <i class="fa-solid fa-calendar-alt"></i>
                                        Published on {{ $post->formatted_date }}
                                    </span>
                                    <span class="post-reading-time ms-3">
                                        <i class="fa-solid fa-clock"></i>
                                        {{ $post->reading_time }} min read
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="post-actions">
                                    <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa-solid fa-arrow-left"></i> Back to Blog
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Meta Information End -->

                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-fluid">
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <h1 class="post-title mb-4 wow fadeInUp">{{ $post->title }}</h1>

                            <div class="post-body wow fadeInUp" data-wow-delay="0.2s">
                                {!! $post->content !!}
                            </div>
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Navigation Start -->
                                    <div class="post-navigation wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row">
                                            @if ($previousPost)
                                                <div class="col-6">
                                                    <div class="nav-post nav-post-prev">
                                                        <a href="{{ route('post', $previousPost->slug) }}"
                                                            class="nav-post-link">
                                                            <span class="nav-post-label">
                                                                <i class="fa-solid fa-arrow-left"></i> Previous Post
                                                            </span>
                                                            <span
                                                                class="nav-post-title">{{ Str::limit($previousPost->title, 40) }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($nextPost)
                                                <div class="col-6">
                                                    <div class="nav-post nav-post-next text-end">
                                                        <a href="{{ route('post', $nextPost->slug) }}"
                                                            class="nav-post-link">
                                                            <span class="nav-post-label">
                                                                Next Post <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                            <span
                                                                class="nav-post-title">{{ Str::limit($nextPost->title, 40) }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Post Navigation End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <h6 class="share-title">Share this post:</h6>
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                                    target="_blank" rel="noopener" title="Share on Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                                                    target="_blank" rel="noopener" title="Share on LinkedIn">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}"
                                                    target="_blank" rel="noopener" title="Share on Twitter">
                                                    <i class="fa-brands fa-x-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:?subject={{ urlencode($post->title) }}&body={{ urlencode('Check out this blog post: ' . request()->fullUrl()) }}"
                                                    title="Share via Email">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->

    <!-- Related Posts Section Start -->
    @if ($relatedPosts->count() > 0)
        <div class="related-posts-section bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-5">
                            <h3 class="wow fadeInUp">Related Posts</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">You might also <span>like</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($relatedPosts as $index => $relatedPost)
                        <div class="col-lg-4 col-md-6">
                            <!-- Related Post Item Start -->
                            <div class="post-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                <!-- Post Featured Image Start-->
                                <div class="post-featured-image">
                                    <a href="{{ route('post', $relatedPost->slug) }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img class="lazy" data-src="{{ $relatedPost->image_url }}"
                                                alt="{{ $relatedPost->title }}" width="400" height="250"
                                                loading="lazy">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Post Featured Image End -->

                                <!-- Post Item Body Start -->
                                <div class="post-item-body">
                                    <!-- Post Item Content Start -->
                                    <div class="post-item-content">
                                        <h3><a
                                                href="{{ route('post', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                        </h3>
                                        <p class="post-excerpt">{{ $relatedPost->excerpt }}</p>
                                    </div>
                                    <!-- Post Item Content End -->

                                    <!-- Post Item Footer Start -->
                                    <div class="post-item-footer">
                                        <!-- Post Item Meta Start -->
                                        <div class="post-item-meta">
                                            <ul>
                                                <li>{{ $relatedPost->formatted_date }}</li>
                                                <li>{{ $relatedPost->reading_time }} min read</li>
                                            </ul>
                                        </div>
                                        <!-- Post Item Meta End -->

                                        <!-- Post Item Readmore Button Start-->
                                        <div class="post-item-btn">
                                            <a href="{{ route('post', $relatedPost->slug) }}" class="readmore-btn">read
                                                more</a>
                                        </div>
                                        <!-- Post Item Readmore Button End-->
                                    </div>
                                    <!-- Post Item Footer End -->
                                </div>
                                <!-- Post Item Body End -->
                            </div>
                            <!-- Related Post Item End -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Related Posts Section End -->

    <style>
        .post-meta-info {
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 20px;
        }

        .post-meta-details span {
            color: #666;
            font-size: 14px;
        }

        .post-meta-details i {
            margin-right: 5px;
            color: #007bff;
        }

        .post-title {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: #333;
        }

        .post-body {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
        }

        .post-body h2,
        .post-body h3,
        .post-body h4 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .post-body p {
            margin-bottom: 1.5rem;
        }

        .post-body ul,
        .post-body ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }

        .post-body blockquote {
            border-left: 4px solid #007bff;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #666;
        }

        .nav-post-link {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-post-link:hover {
            background-color: #f8f9fa;
            border-color: #007bff;
            color: #007bff;
        }

        .nav-post-label {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 600;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        .nav-post-title {
            font-size: 14px;
            font-weight: 500;
            display: block;
        }

        .share-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .post-social-sharing ul {
            display: flex;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .post-social-sharing a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #f8f9fa;
            color: #666;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .post-social-sharing a:hover {
            background-color: #007bff;
            color: white;
            transform: translateY(-2px);
        }

        .related-posts-section .post-item h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .related-posts-section .post-excerpt {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .post-title {
                font-size: 2rem;
            }

            .post-navigation .col-6 {
                margin-bottom: 15px;
            }

            .nav-post-next {
                text-align: left !important;
            }

            .post-social-sharing {
                margin-top: 20px;
            }
        }
    </style>
@endsection
