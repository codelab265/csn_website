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
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We're a full-service design agency
                                specializing in branding, web design, and creative strategies that elevate businesses.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="portfolio.html" class="btn-default">view our portfolio</a>
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
                        <a href="services.html" class="btn-default">view all services</a>
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
                                        type="button" role="tab" aria-selected="true"><span>01</span> UI/UX
                                        Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="02-tab" data-bs-toggle="tab" data-bs-target="#02"
                                        type="button" role="tab" aria-selected="false"><span>02</span> Web
                                        Development</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="03-tab" data-bs-toggle="tab" data-bs-target="#03"
                                        type="button" role="tab" aria-selected="false"><span>03</span> 3D
                                        Designs</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="04-tab" data-bs-toggle="tab" data-bs-target="#04"
                                        type="button" role="tab" aria-selected="false"><span>04</span> Digital
                                        Marketing Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="05-tab" data-bs-toggle="tab" data-bs-target="#05"
                                        type="button" role="tab" aria-selected="false"><span>05</span> Motion
                                        Graphics</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Our Services Nav End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade show active" id="01" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <!-- First service image - load immediately as it's visible -->
                                    <img src="{{ asset('assets/images/service-image-1.jpg') }}"
                                        alt="UI/UX Design services showcase" loading="eager">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="UI/UX Design icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="services.html">UI/UX Design</a></h3>
                                    <p>We're a full-service design agency specializing in branding, web design, and
                                        creative strategies that elevate businesses.</p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="services.html" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="02" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <!-- Lazy load hidden tab images -->
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-2.jpg') }}"
                                        alt="Web Development services showcase" width="600" height="400"
                                        loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="Web Development icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="services.html">Web Development</a></h3>
                                    <p>We're a full-service design agency specializing in branding, web design, and
                                        creative strategies that elevate businesses.</p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="services.html" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="03" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-3.jpg') }}"
                                        alt="3D Design services showcase" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="3D Design icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="services.html">3D Designs</a></h3>
                                    <p>We're a full-service design agency specializing in branding, web design, and
                                        creative strategies that elevate businesses.</p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="services.html" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="04" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-4.jpg') }}"
                                        alt="Digital Marketing Design services showcase" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}"
                                        alt="Digital Marketing Design icon" width="60" height="60"
                                        loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="services.html">Digital Marketing Design</a></h3>
                                    <p>We're a full-service design agency specializing in branding, web design, and
                                        creative strategies that elevate businesses.</p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="services.html" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Our Service Box End -->

                        <!-- Our Service Box Start -->
                        <div class="our-service-box tab-pane fade" id="05" role="tabpanel">
                            <div class="service-box-image">
                                <figure>
                                    <img class="lazy" data-src="{{ asset('assets/images/service-image-5.jpg') }}"
                                        alt="Motion Graphics services showcase" loading="lazy">
                                </figure>
                            </div>
                            <div class="service-box-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="Motion Graphics icon"
                                        width="60" height="60" loading="lazy">
                                </div>
                                <div class="service-box-item-content">
                                    <h3><a href="services.html">Motion Graphics</a></h3>
                                    <p>We're a full-service design agency specializing in branding, web design, and
                                        creative strategies that elevate businesses.</p>
                                </div>
                                <div class="service-box-item-btn">
                                    <a href="services.html" class="readmore-btn">read more</a>
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
                        <a href="portfolio.html" class="btn-default">view all portfolio</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Work Item Start -->
                    <div class="work-item wow fadeInUp">
                        <div class="work-image">
                            <a href="portfolio-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img class="lazy" data-src="{{ asset('assets/images/work-image-1.jpg') }}"
                                        alt="Stellar Tech Solutions portfolio project" loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <div class="work-body">
                            <div class="work-content">
                                <h3><a href="portfolio-single.html">stellar tech solutions</a></h3>
                                <p>We redesigned Stellar Tech's website to enhance.</p>
                            </div>
                            <div class="work-btn">
                                <a href="portfolio-single.html">
                                    <img src="{{ asset('assets/images/arrrow-light.svg') }}" alt="View project arrow"
                                        width="24" height="24" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Work Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Work Item Start -->
                    <div class="work-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="work-image">
                            <a href="portfolio-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img class="lazy" data-src="{{ asset('assets/images/work-image-2.jpg') }}"
                                        alt="Green Wave Foods portfolio project" width="400" height="300"
                                        loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <div class="work-body">
                            <div class="work-content">
                                <h3><a href="portfolio-single.html">green wave foods</a></h3>
                                <p>We built a user-friendly Shopping platform for Green Wave Foods.</p>
                            </div>
                            <div class="work-btn">
                                <a href="portfolio-single.html">
                                    <img src="{{ asset('assets/images/arrrow-light.svg') }}" alt="View project arrow"
                                        width="24" height="24" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Work Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Work Item Start -->
                    <div class="work-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="work-image">
                            <a href="portfolio-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img class="lazy" data-src="{{ asset('assets/images/work-image-3.jpg') }}"
                                        alt="Horizon Real Estate portfolio project" width="400" height="300"
                                        loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <div class="work-body">
                            <div class="work-content">
                                <h3><a href="portfolio-single.html">horizon real estate</a></h3>
                                <p>We helped Horizon Real Estate establish a trusted brand identity.</p>
                            </div>
                            <div class="work-btn">
                                <a href="portfolio-single.html">
                                    <img src="{{ asset('assets/images/arrrow-light.svg') }}" alt="View project arrow"
                                        width="24" height="24" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Work Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Work Section End -->

    <!-- Creative Tools Section Start -->
    <div class="creative-tools">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">creative toolkit</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our toolbox for <span>innovation</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="contact.html" class="btn-default">let's get started !</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Creative Tools Box Start -->
                    <div class="creative-tools-box">
                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-1.svg') }}"
                                    alt="Figma design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>figma</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-2.svg') }}"
                                    alt="Framer design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>framer</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-3.svg') }}"
                                    alt="Adobe Illustrator design tool icon" width="60" height="60"
                                    loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>illustrator</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-4.svg') }}"
                                    alt="Adobe XD design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>adobe xd</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-5.svg') }}"
                                    alt="Adobe InDesign design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>indesign</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-6.svg') }}"
                                    alt="Adobe Photoshop design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>photoshop</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1.2s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-7.svg') }}"
                                    alt="Adobe Lightroom design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>lightroom</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->

                        <!-- Creative Tool Item Start -->
                        <div class="creative-tool-item wow fadeInUp" data-wow-delay="1.4s">
                            <div class="icon-box">
                                <img class="lazy" data-src="{{ asset('assets/images/icon-creative-tools-8.svg') }}"
                                    alt="Adobe InCopy design tool icon" width="60" height="60" loading="lazy">
                            </div>
                            <div class="creative-tool-item-content">
                                <h3>incopy</h3>
                                <p>Design tool</p>
                            </div>
                        </div>
                        <!-- Creative Tool Item End -->
                    </div>
                    <!-- Creative Tools Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Creative Tools Section End -->

    <!-- How It Work Section Start-->
    <div class="how-it-work bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">creative toolkit</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our methodology for <span>success</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Section Button Start -->
                    <div class="contact-now-circle">
                        <a href="contact.html">
                            <img class="lazy" data-src="{{ asset('assets/images/contact-circle.png') }}"
                                alt="Contact us circular button" width="150" height="150" loading="lazy">
                        </a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How It Work Images Start-->
                    <div class="how-it-work-images">
                        <!-- How Work Image Circle Start-->
                        <div class="how-work-image-circle">
                            <img class="lazy" data-src="{{ asset('assets/images/how-work-image-circle.png') }}"
                                alt="Decorative circle element" loading="lazy">
                        </div>
                        <!-- How Work Image Circle End-->

                        <!-- How It Work Image Start-->
                        <div class="how-it-work-image">
                            <figure class="image-anime">
                                <img class="lazy" data-src="{{ asset('assets/images/how-it-work-image.jpg') }}"
                                    alt="Our methodology and work process visualization" loading="lazy">
                            </figure>
                        </div>
                        <!-- How It Work Image End-->
                    </div>
                    <!-- How It Work Images End-->
                </div>

                <div class="col-lg-6">
                    <!-- Work FAQ Accordion Start -->
                    <div class="work-faq-accordion" id="workaccordion">
                        <!-- Work FAQ Item Start -->
                        <div class="work-accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    01. Discovery & Strategy
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#workaccordion">
                                <div class="accordion-body">
                                    <p>We begin by getting to know you and your brand. Through in-depth conversations,
                                        research, and analysis.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Work FAQ Item End -->

                        <!-- Work FAQ Item Start -->
                        <div class="work-accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    02. Concept Development
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#workaccordion">
                                <div class="accordion-body">
                                    <p>We begin by getting to know you and your brand. Through in-depth conversations,
                                        research, and analysis.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Work FAQ Item End -->

                        <!-- Work FAQ Item Start -->
                        <div class="work-accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    03. Design & Iteration
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#workaccordion">
                                <div class="accordion-body">
                                    <p>We begin by getting to know you and your brand. Through in-depth conversations,
                                        research, and analysis.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Work FAQ Item End -->

                        <!-- Work FAQ Item Start -->
                        <div class="work-accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    04. Development & Execution
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#workaccordion">
                                <div class="accordion-body">
                                    <p>We begin by getting to know you and your brand. Through in-depth conversations,
                                        research, and analysis.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Work FAQ Item End -->
                    </div>
                    <!-- Work FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End-->
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
                        <a href="blog.html" class="btn-default">view all post</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
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
                                <h2><a href="blog-single.html">The Role of Color Psychology in Branding</a></h2>
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

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img class="lazy" data-src="{{ asset('assets/images/post-2.jpg') }}"
                                        alt="How color Shades and Brand Identity blog post" width="400" height="250"
                                        loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">How color Shades and Brand Identity</a></h2>
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

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img class="lazy" data-src="{{ asset('assets/images/post-3.jpg') }}"
                                        alt="Breaking Down the Design Process From Concept blog post" width="400"
                                        height="250" loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Breaking Down the Design Process From Concept</a></h2>
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
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->
@endsection
