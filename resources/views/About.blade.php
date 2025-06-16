@extends('layout.App')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About our <span>expertise</span></h1>

                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page About Us Section Start -->
    <div class="page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-us-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/our-team.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">A team of <span>IT professionals</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Founded by seasoned IT and cyber security
                                professionals, CS&N Limited bridges the gap between emerging technologies and practical
                                business implementation, delivering comprehensive IT consulting, cyber security, and
                                enterprise solutions.</p>
                        </div>
                        <!-- Section Title End -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <!-- About Us Info List Start -->
                                <div class="about-us-info-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Security-First Approach</li>
                                        <li>Technical Excellence</li>
                                        <li>Innovation & Reliability</li>
                                        <li>Client-Focused Solutions</li>
                                    </ul>
                                </div>
                                <!-- About Us Info List End -->
                            </div>
                            <div class="col-md-6">
                                <!-- About Contact Button Start -->
                                <div class="about-contact-now">
                                    <a href="{{ route('contact') }}"><img
                                            src="{{ asset('assets/images/contact-circle.png') }}" alt=""></a>
                                </div>
                                <!-- About Contact Button End -->
                            </div>
                        </div>
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>


        </div>
    </div>
    <!-- Page About Us Section End -->

    <!-- CTA Section Start -->
    <div class="cta-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- CTA Box Start -->
                    <div class="cta-box">
                        <div class="cta-counter-content-box">
                            <!-- CTA Box Content Start -->
                            <div class="cta-box-content wow fadeInUp">
                                <p>We specialize in delivering robust IT infrastructure, comprehensive cyber security
                                    solutions, and enterprise-grade technology implementations that drive business growth.
                                    From cloud migration to threat protection, our certified professionals are dedicated to
                                    transforming your technology challenges into competitive advantages. With a focus on
                                    security, reliability, and strategic innovation.
                                </p>
                            </div>
                            <!-- CTA Box Content End -->

                            <!-- CTA Counter Box Start -->
                            <div class="cta-counter-box">
                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">150</span>+</h3>
                                    <p>projects delivered</p>
                                </div>
                                <!-- CTA Counter Item End -->

                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">10</span>+</h3>
                                    <p>years of expertise</p>
                                </div>
                                <!-- CTA Counter Item End -->

                                <!-- CTA Counter Item Start -->
                                <div class="cta-counter-item">
                                    <h3><span class="counter">99</span>%</h3>
                                    <p>uptime guarantee</p>
                                </div>
                                <!-- CTA Counter Item End -->
                            </div>
                            <!-- CTA Counter Box End -->
                        </div>

                        <!-- CTA Contact Circle Start -->
                        <div class="cta-contact-circle">
                            <a href="{{ route('contact') }}"><img src="{{ asset('assets/images/cta-contact-circle.png') }}"
                                    alt=""></a>
                        </div>
                        <!-- CTA Contact Circle End -->
                    </div>
                    <!-- CTA Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Vision Mission Section Start -->
    <div class="our-vision-mission bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Vision Mission Box Start -->
                    <div class="vision-mission-box">
                        <!-- Vision Mission Item Start -->
                        <div class="vision-mission-item">
                            <!-- Vision Mission image Start -->
                            <div class="vision-mission-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/service-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Vision Mission image End -->

                            <!-- Vision Mission Content Start -->
                            <div class="vision-mission-content">
                                <!-- Section Tite Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">our vision</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Securing the Future of
                                        <span>Technology</span>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">To be the leading IT and cyber security
                                        consultancy that empowers organizations to embrace emerging technologies with
                                        confidence, ensuring robust security, operational excellence, and sustainable
                                        digital transformation.</p>
                                </div>
                                <!-- Section Tite End -->

                                <!-- Vision Mission List Start -->
                                <div class="vision-mission-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Advanced Threat Protection</li>
                                        <li>Scalable Infrastructure</li>
                                        <li>Regulatory Compliance</li>
                                        <li>Innovation & Reliability</li>
                                    </ul>
                                </div>
                                <!-- Vision Mission List End -->
                            </div>
                            <!-- Vision Mission Content End -->
                        </div>
                        <!-- Vision Mission Item End -->

                        <!-- Vision Mission Item Start -->
                        <div class="vision-mission-item">
                            <!-- Vision Mission image Start -->
                            <div class="vision-mission-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/our-mission-img.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Vision Mission image End -->

                            <!-- Vision Mission Content Start -->
                            <div class="vision-mission-content">
                                <!-- Section Tite Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">our mission</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Bridging technology and
                                        <span>business success</span>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">To deliver comprehensive IT consulting,
                                        cyber security, and enterprise solutions that bridge the gap between emerging
                                        technologies and practical business implementation, ensuring our clients achieve
                                        operational excellence and competitive advantage.</p>
                                </div>
                                <!-- Section Tite End -->

                                <!-- Vision Mission List Start -->
                                <div class="vision-mission-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Enterprise-Grade Solutions</li>
                                        <li>24/7 Security Monitoring</li>
                                        <li>Strategic IT Consulting</li>
                                        <li>Continuous Innovation</li>
                                    </ul>
                                </div>
                                <!-- Vision Mission List End -->
                            </div>
                            <!-- Vision Mission Content End -->
                        </div>
                        <!-- Vision Mission Item End -->
                    </div>
                    <!-- Vision Mission Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Vision Mission Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">FAQ's</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Everything you <span>need to know</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn-default">view all FAQ</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our FAQ Section Start -->
                    <div class="our-faq-section">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What IT and cyber security services do you provide?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We provide comprehensive IT consulting, cyber security solutions, enterprise
                                            infrastructure design, cloud migration, vulnerability assessments, penetration
                                            testing, compliance consulting, 24/7 security monitoring, and custom software
                                            development tailored to your business needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What industries do you serve?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We serve organizations across all industries including healthcare, finance,
                                            manufacturing, retail, government, and technology sectors. Our solutions are
                                            tailored to meet specific regulatory requirements and industry standards such as
                                            HIPAA, PCI DSS, and SOC 2.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        How long does an IT implementation take?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Implementation timelines vary based on scope and complexity. Security assessments
                                            typically take 2-4 weeks, while comprehensive infrastructure deployments can
                                            take 3-6 months. We provide detailed project timelines and milestones during our
                                            initial consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you provide ongoing support and monitoring?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we offer comprehensive ongoing support including 24/7 security monitoring,
                                            proactive threat detection, regular system maintenance, compliance reporting,
                                            and continuous optimization to ensure your infrastructure remains secure and
                                            efficient.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Our FAQ Section End -->
                </div>

                <div class="col-lg-6">
                    <!-- FAQ Image Start -->
                    <div class="faq-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/recruit-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- FAQ Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->
@endsection
