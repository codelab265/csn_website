@extends('layout.App')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Blog <span>Archive</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $archiveTitle }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Archive Info Section Start -->
    <div class="archive-info bg-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="archive-title">
                        <h3 class="mb-1">Posts from {{ $archiveTitle }}</h3>
                        <p class="text-muted mb-0">{{ $posts->total() }} {{ Str::plural('post', $posts->total()) }} found</p>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="archive-actions">
                        <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fa-solid fa-arrow-left"></i> Back to Blog
                        </a>
                        <a href="{{ route('blog.rss') }}" class="btn btn-outline-warning btn-sm ms-2" title="RSS Feed">
                            <i class="fa-solid fa-rss"></i> RSS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Archive Info Section End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            @if($posts->count() > 0)
                <div class="row">
                    @foreach($posts as $index => $post)
                        <div class="col-lg-4 col-md-6">
                            <!-- Post Item Start -->
                            <div class="post-item wow fadeInUp" data-wow-delay="{{ ($index % 3) * 0.2 }}s">
                                <!-- Post Featured Image Start-->
                                <div class="post-featured-image">
                                    <a href="{{ route('post', $post->slug) }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img class="lazy" 
                                                 data-src="{{ $post->image_url }}" 
                                                 alt="{{ $post->title }}" 
                                                 width="400" 
                                                 height="250" 
                                                 loading="lazy">
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
                @if($posts->hasPages())
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
                                <i class="fa-solid fa-calendar-times fa-4x text-muted"></i>
                            </div>
                            <h3 class="mb-3">No posts found for {{ $archiveTitle }}</h3>
                            <p class="text-muted mb-4">
                                There are no blog posts published during this time period.
                            </p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">View All Posts</a>
                        </div>
                    </div>
                </div>
                <!-- No Posts Found End -->
            @endif
        </div>
    </div>
    <!-- Page Blog End -->

    <style>
        .archive-info {
            border-bottom: 1px solid #e9ecef;
        }
        
        .archive-title h3 {
            color: #333;
            font-weight: 600;
        }
        
        .archive-actions .btn {
            white-space: nowrap;
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
            .archive-actions {
                margin-top: 15px;
                text-align: left !important;
            }
            
            .post-item-meta ul {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
@endsection
