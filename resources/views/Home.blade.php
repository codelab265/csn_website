@extends('layout.App')

@section('content')
    <div class="hero">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Optimized Video with poster and preload -->
            <video autoplay muted loop id="myVideo" poster="{{ asset('assets/images/hero-bg.jpg') }}" preload="metadata"
                playsinline>
                <source src="{{ asset('assets/videos/csn-video-1.mp4') }}" type="video/mp4">
                <!-- Fallback image for browsers that don't support video -->
                <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Hero background"
                    style="width: 100%; height: 100%; object-fit: cover;">
            </video>
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Where <span>creativity</span> meets
                                strategy</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Our mission is simple yet powerful:
                                To help you innovate with confidence and secure your digital assets in a rapidly
                                changing world.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('portfolio') }}" class="btn-default">view our portfolio</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                </div>

                <div class="col-lg-5">
                    <!-- Hero Image Start -->
                    <div class="hero-images">
                        <div class="hero-image-box-1">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <!-- Critical first image - load immediately -->
                                    <img src="{{ asset('assets/images/hero-img-1.jpg') }}" alt="Creative design showcase"
                                        loading="eager">
                                </figure>
                            </div>

                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <!-- Lazy load second image -->
                                    <img class="lazy" data-src="{{ asset('assets/images/hero-img-2.jpg') }}"
                                        alt="Design portfolio example" width="300" height="400" loading="lazy">
                                </figure>
                            </div>
                        </div>

                        <div class="hero-image-box-2">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <!-- Lazy load third image -->
                                    <img class="lazy" data-src="{{ asset('assets/images/hero-img-3.jpg') }}"
                                        alt="Creative strategy visualization" width="400" height="500" loading="lazy">
                                </figure>
                            </div>
                        </div>

                        <div class="hero-image-box-1">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <!-- Lazy load fourth image -->
                                    <img class="lazy" data-src="{{ asset('assets/images/hero-img-4.jpg') }}"
                                        alt="Brand identity design" width="300" height="400" loading="lazy">
                                </figure>
                            </div>

                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <!-- Lazy load fifth image -->
                                    <img class="lazy" data-src="{{ asset('assets/images/hero-img-5.jpg') }}"
                                        alt="Web design showcase" width="300" height="400" loading="lazy">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->



    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3>our Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our innovative <span>services</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('services') }}" class="btn-default">view all services</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Services Boxes Start -->
                    <div class="our-services-boxes tab-content wow fadeInUp" data-wow-delay="0.25s" id="servicesbox">
                        <!-- Sidebar Our Services Nav start -->
                        <div class="our-services-nav">
                            <ul class="nav nav-tabs" id="servicestab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="01-tab" data-bs-toggle="tab" data-bs-target="#01"
                                        type="button" role="tab" aria-selected="true"><span>01</span>
                                        Cyber Security Consultancy
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="02-tab" data-bs-toggle="tab" data-bs-target="#02"
                                        type="button" role="tab" aria-selected="false"><span>02</span>
                                        Enterprise IT Solutions
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="03-tab" data-bs-toggle="tab" data-bs-target="#03"
                                        type="button" role="tab" aria-selected="false"><span>03</span>
                                        Software Solutions
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="04-tab" data-bs-toggle="tab" data-bs-target="#04"
                                        type="button" role="tab" aria-selected="false"><span>04</span>
                                        IT Recruiting
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <!-- Sidebar Our Services Nav End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade show active" id="01" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <!-- First service image - load immediately as it's visible -->
                                    <img src="{{ asset('assets/images/service-1.jpg') }}"
                                        alt="Cyber Security Consultancy" loading="eager">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="UI/UX Design icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="{{ route('service', 'cyber-security') }}">Cyber Security Consultancy</a>
                                    </h3>
                                    <p>
                                        From proactive threat detection to regulatory compliance and quantum-resistant
                                        encryption,
                                        we help organisations protect their data, infrastructure, and reputation.
                                    </p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="{{ route('service', 'cyber-security') }}" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->


                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="02" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <!-- Lazy load hidden tab images -->
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-3.jpg') }}"
                                        alt="Enterprise IT Solutions" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="Web Development icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="{{ route('service', 'enterprise-it-solutions') }}">Enterprise IT
                                            Solutions</a></h3>
                                    <p>
                                        We design, deploy, and support scalable enterprise-grade infrastructure—covering
                                        networking, storage, virtualisation, and cloud integration—tailored to your
                                        organisation’s
                                        future.
                                    </p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="{{ route('service', 'enterprise-it-solutions') }}" class="readmore-btn">read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="03" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-2.jpg') }}"
                                        alt="Software Solutions" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="3D Design icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="{{ route('service', 'software-solutions') }}">Software Solutions</a></h3>
                                    <p>
                                        Custom-built, secure, and scalable software that aligns with your workflows and
                                        growth
                                        strategy. We modernise legacy systems and develop AI-enabled applications across
                                        multiple
                                        sectors.
                                    </p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="{{ route('service', 'software-solutions') }}" class="readmore-btn">read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->
                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="04" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-2.jpg') }}"
                                        alt="Software Solutions" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="3D Design icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="{{ route('service', 'it-recruiting') }}">IT Recruiting</a></h3>
                                    <p>
                                        We specialise in finding the right talent for your IT needs, whether you're
                                        looking to
                                        fill a
                                        specific role or build a dedicated team.
                                    </p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="{{ route('service', 'it-recruiting') }}" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                    </div>
                    <!-- Our Services Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    <div class="our-work bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our work</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our design <span>masterpieces</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('portfolio') }}" class="btn-default">view all portfolio</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <!-- Work Item Start -->
                        <div class="work-item wow fadeInUp">
                            <div class="work-image">
                                <a href="{{ route('project', $project->id) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img class="lazy" data-src="{{ asset('storage/' . $project->image) }}"
                                            alt="Stellar Tech Solutions portfolio project" loading="lazy">
                                    </figure>
                                </a>
                            </div>
                            <div class="work-body">
                                <div class="work-content">
                                    <h3>
                                        <a href="{{ route('portfolio', $project->slug) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h3>
                                    <p>
                                        {{ $project->description }}
                                    </p>
                                </div>
                                <div class="work-btn">
                                    <a href="{{ route('portfolio', $project->id) }}">
                                        <img src="{{ asset('assets/images/arrrow-light.svg') }}" alt="View project arrow"
                                            width="24" height="24" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Work Item End -->
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Our Work Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Latest insights &
                            <span>inspiration</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('blog') }}" class="btn-default">view all post</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <a href="{{ route('blog', $post->slug) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img class="lazy" data-src="{{ asset('assets/images/post-1.jpg') }}"
                                            alt="The Role of Color Psychology in Branding blog post" width="400"
                                            height="250" loading="lazy">
                                    </figure>
                                </a>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <!-- Post Item Content Start -->
                                <div class="post-item-content">
                                    <h2><a href="{{ route('blog', $post->slug) }}">The Role of Color Psychology in
                                            Branding</a></h2>
                                </div>
                                <!-- Post Item Content End -->

                                <!-- Post Item Footer Start -->
                                <div class="post-item-footer">
                                    <!-- Post Item Tag Start -->
                                    <div class="post-item-meta">
                                        <ul>
                                            <li>27 dec, 2024</li>
                                        </ul>
                                    </div>
                                    <!-- Post Item Tag End -->

                                    <!-- Post Item Readmore Button Start-->
                                    <div class="post-item-btn">
                                        <a href="blog-single.html" class="readmore-btn">read more</a>
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
        </div>
    </div>
    <!-- Our Blog Section End -->
@endsection
