@extends('layout.App')

@push('meta')
    <meta name="description"
        content="Read the latest blog posts from {{ config('app.name') }}. Stay updated with insights on technology, cybersecurity, and business solutions.">
    <meta name="keywords" content="blog, technology, cybersecurity, business solutions, IT consulting">
    <meta property="og:title" content="Blog - {{ config('app.name') }}">
    <meta property="og:description"
        content="Read the latest blog posts from {{ config('app.name') }}. Stay updated with insights on technology, cybersecurity, and business solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('blog') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog - {{ config('app.name') }}">
    <meta name="twitter:description"
        content="Read the latest blog posts from {{ config('app.name') }}. Stay updated with insights on technology, cybersecurity, and business solutions.">
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Latest <span>blog</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Search and Filter Section Start -->
    <div class="blog-filters bg-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- Search Form Start -->
                    <form method="GET" action="{{ route('blog') }}" class="search-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search blog posts..."
                                value="{{ $search }}" aria-label="Search blog posts">
                            <input type="hidden" name="year" value="{{ $year }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa-solid fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                    <!-- Search Form End -->
                </div>
                <div class="col-lg-4">
                    <div class="d-flex gap-2 justify-content-end">
                        <!-- RSS Feed Link Start -->
                        <a href="{{ route('blog.rss') }}" class="btn btn-outline-warning btn-sm" title="RSS Feed">
                            <i class="fa-solid fa-rss"></i> RSS
                        </a>
                        <!-- RSS Feed Link End -->

                        <!-- Year Filter Start -->
                        <form method="GET" action="{{ route('blog') }}" class="filter-form">
                            <div class="input-group">
                                <select name="year" class="form-select" onchange="this.form.submit()">
                                    <option value="">All Years</option>
                                    @foreach ($availableYears as $availableYear)
                                        <option value="{{ $availableYear }}"
                                            {{ $year == $availableYear ? 'selected' : '' }}>
                                            {{ $availableYear }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="search" value="{{ $search }}">
                            </div>
                        </form>
                        <!-- Year Filter End -->
                    </div>
                </div>
            </div>

            @if ($search || $year)
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="active-filters">
                            <span class="filter-label">Active filters:</span>
                            @if ($search)
                                <span class="badge bg-primary me-2">
                                    Search: "{{ $search }}"
                                    <a href="{{ route('blog', ['year' => $year]) }}" class="text-white ms-1">×</a>
                                </span>
                            @endif
                            @if ($year)
                                <span class="badge bg-primary me-2">
                                    Year: {{ $year }}
                                    <a href="{{ route('blog', ['search' => $search]) }}" class="text-white ms-1">×</a>
                                </span>
                            @endif
                            <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-secondary">Clear All</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Blog Search and Filter Section End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            @if ($posts->count() > 0)
                <div class="row">
                    @foreach ($posts as $index => $post)
                        <div class="col-lg-4 col-md-6">
                            <!-- Post Item Start -->
                            <div class="post-item wow fadeInUp" data-wow-delay="{{ ($index % 3) * 0.2 }}s">
                                <!-- Post Featured Image Start-->
                                <div class="post-featured-image">
                                    <a href="{{ route('post', $post->slug) }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img class="lazy" data-src="{{ $post->image_url }}"
                                                alt="{{ $post->title }}" width="400" height="250" loading="lazy">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Post Featured Image End -->

                                <!-- Post Item Body Start -->
                                <div class="post-item-body">
                                    <!-- Post Item Content Start -->
                                    <div class="post-item-content">
                                        <h2><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h2>
                                        <p class="post-excerpt">{{ $post->excerpt }}</p>
                                    </div>
                                    <!-- Post Item Content End -->

                                    <!-- Post Item Footer Start -->
                                    <div class="post-item-footer">
                                        <!-- Post Item Meta Start -->
                                        <div class="post-item-meta">
                                            <ul>
                                                <li>{{ $post->formatted_date }}</li>
                                                <li>{{ $post->reading_time }} min read</li>
                                            </ul>
                                        </div>
                                        <!-- Post Item Meta End -->

                                        <!-- Post Item Readmore Button Start-->
                                        <div class="post-item-btn">
                                            <a href="{{ route('post', $post->slug) }}" class="readmore-btn">read more</a>
                                        </div>
                                        <!-- Post Item Readmore Button End-->
                                    </div>
                                    <!-- Post Item Footer End -->
                                </div>
                                <!-- Post Item Body End -->
                            </div>
                            <!-- Post Item End -->
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Start -->
                @if ($posts->hasPages())
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Pagination Start -->
                            <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                                {{ $posts->links('blog.pagination') }}
                            </div>
                            <!-- Page Pagination End -->
                        </div>
                    </div>
                @endif
                <!-- Pagination End -->
            @else
                <!-- No Posts Found Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="no-posts-found text-center py-5">
                            <div class="no-posts-icon mb-4">
                                <i class="fa-solid fa-search fa-4x text-muted"></i>
                            </div>
                            <h3 class="mb-3">No blog posts found</h3>
                            <p class="text-muted mb-4">
                                @if ($search || $year)
                                    We couldn't find any posts matching your search criteria. Try adjusting your filters or
                                    search terms.
                                @else
                                    There are no blog posts available at the moment. Please check back later.
                                @endif
                            </p>
                            @if ($search || $year)
                                <a href="{{ route('blog') }}" class="btn btn-primary">View All Posts</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- No Posts Found End -->
            @endif
        </div>
    </div>
    <!-- Page Blog End -->

    <style>
        .blog-filters {
            border-bottom: 1px solid #e9ecef;
        }

        .search-form .input-group {
            max-width: 100%;
        }

        .filter-form .input-group {
            max-width: 200px;
            margin-left: auto;
        }

        .active-filters {
            padding: 10px 0;
        }

        .filter-label {
            font-weight: 600;
            margin-right: 10px;
        }

        .badge a {
            text-decoration: none;
        }

        .post-excerpt {
            color: #666;
            margin-top: 10px;
            line-height: 1.6;
        }

        .post-item-meta ul {
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .post-item-meta li {
            color: #888;
            font-size: 14px;
        }

        .no-posts-found {
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 768px) {
            .filter-form .input-group {
                margin-left: 0;
                margin-top: 15px;
                max-width: 100%;
            }

            .post-item-meta ul {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
@endsection
