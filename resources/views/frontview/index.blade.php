@extends('layouts.front')
@section('title', config('app.name') . '' . ($meta->metaTitle ?? ''))
@section('opTag')
    {{-- Meta tags --}}
    <meta name="description" content="{{ $meta->metaDescription ?? '' }}">
    <meta name="keywords" content="{{ $meta->metaKeyword ?? '' }}">
    <meta name="title" content="{{ $meta->metaTitle ?? '' }}">
@endsection

@section('head')
    {!! $meta->head ?? '' !!}
@endsection


@section('body')
    @if (!empty($meta->body))
        <script type="text/javascript">
            {!! $meta->body !!}
        </script>
    @endif
@endsection
@section('content')
    <!-- ==========================================================
                                                                                                                                                                                                                N23 HERO SLIDER
                                                                                                                                                                                                            ========================================================== -->
    <section class="n23-hero">

        <div class="swiper n23HeroSwiper">

            <div class="swiper-wrapper">

                <!-- ==========================================
                                                                                                                                                                                                                         SLIDE 01
                                                                                                                                                                                                                    =========================================== -->
                <div class="swiper-slide n23-hero-slide">

                    <div class="n23-hero-bg" style="background-image: url('front/images/hero/hero-1.jpg');">
                    </div>

                    <div class="n23-hero-overlay"></div>

                    <div class="container n23-hero-container">

                        <div class="n23-hero-content">

                            <div class="n23-hero-kicker">
                                <span class="n23-kicker-icon">
                                    <i class="bi bi-compass"></i>
                                </span>
                                Designed Around You
                            </div>

                            <h1 class="n23-hero-title">
                                Go Beyond
                                <span>The Map.</span>
                            </h1>

                            <p class="n23-hero-desc">
                                Thoughtfully planned journeys, seamless experiences
                                and unforgettable moments — wherever the world takes you.
                            </p>

                            <div class="n23-hero-actions">

                                <a href="{{ route('contactus') }}" class="n23-hero-primary-btn">

                                    <span>Start Your Journey</span>

                                    <span class="n23-hero-btn-icon">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>

                                </a>



                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==========================================
                                                                                                                                                                                                                         SLIDE 02
                                                                                                                                                                                                                    =========================================== -->
                <div class="swiper-slide n23-hero-slide">

                    <div class="n23-hero-bg" style="background-image: url('front/images/hero/hero-2.jpg');">
                    </div>

                    <div class="n23-hero-overlay"></div>

                    <div class="container n23-hero-container">

                        <div class="n23-hero-content">

                            <div class="n23-hero-kicker">
                                <span class="n23-kicker-icon">
                                    <i class="bi bi-globe2"></i>
                                </span>
                                Travel Your Way
                            </div>

                            <h2 class="n23-hero-title">
                                The World,
                                <span>Made Personal.</span>
                            </h2>

                            <p class="n23-hero-desc">
                                Every journey begins differently. We make sure yours
                                feels considered, effortless and distinctly your own.
                            </p>

                            <div class="n23-hero-actions">

                                <a href="contact.html" class="n23-hero-primary-btn">

                                    <span>Start Your Journey</span>

                                    <span class="n23-hero-btn-icon">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>

                                </a>



                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==========================================
                                                                                                                                                                                                                         SLIDE 03
                                                                                                                                                                                                                    =========================================== -->
                <div class="swiper-slide n23-hero-slide">

                    <div class="n23-hero-bg" style="background-image: url('front/images/hero/hero-3.jpg');">
                    </div>

                    <div class="n23-hero-overlay"></div>

                    <div class="container n23-hero-container">

                        <div class="n23-hero-content">

                            <div class="n23-hero-kicker">
                                <span class="n23-kicker-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                Moments That Stay
                            </div>

                            <h2 class="n23-hero-title">
                                From Plans
                                <span>To Memories.</span>
                            </h2>

                            <p class="n23-hero-desc">
                                More than getting somewhere — it is about everything
                                you discover, experience and remember along the way.
                            </p>

                            <div class="n23-hero-actions">

                                <a href="contact.html" class="n23-hero-primary-btn">

                                    <span>Start Your Journey</span>

                                    <span class="n23-hero-btn-icon">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>

                                </a>



                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==========================================
                                                                                                                                                                                                                     SIDE CONTROLS
                                                                                                                                                                                                                =========================================== -->

            <div class="n23-hero-controls">
                <div class="n23-hero-pagination"></div>
            </div>
            <div class="container">

                <div class="n23-hero-bottom-inner">

                    <div class="n23-hero-bottom-item">
                        <span>01</span>
                        Thoughtful Planning
                    </div>

                    <div class="n23-hero-bottom-item">
                        <span>02</span>
                        Global Experiences
                    </div>

                    <div class="n23-hero-bottom-item">
                        <span>03</span>
                        Personal Attention
                    </div>

                    <div class="n23-hero-scroll">

                        <span>Scroll to explore</span>

                        <div class="n23-scroll-line">
                            <span></span>
                        </div>

                    </div>

                </div>

            </div>

        </div> -->

        </div>

    </section>

    <section class="n23-services-final section-space">

        <div class="container">

            <div class="n23-services-final-head text-center" data-aos="fade-up">

                <span>Core Services</span>

                <h2>
                    Our Services,
                    <strong>Trusted Travel Support</strong>
                </h2>

            </div>


            <!-- =========================
                                                                                                                                                                                                             FIRST ROW - 4
                                                                                                                                                                                                        ========================== -->
            <div class="n23-services-final-row n23-services-final-row-four">

                @foreach ($Services->take(4) as $service)
                    <div class="n23-service-final-item" data-aos="zoom-in-up" data-aos-delay="{{ $loop->iteration * 100 }}">

                        <div class="n23-service-final-icon">
                            <div class="n23-service-final-icon-inner">
                                <i class="{{ $service->icon ?? 'bi bi-calendar-event' }}"></i>
                            </div>
                        </div>

                        <div class="n23-service-final-frame">
                            <div class="n23-service-final-card">

                                <h3>{{ $service->name }}</h3>

                                <p>{{ Str::limit($service->short_description, 79) }}</p>
                                <a href="{{ route('service.details', $service->slugname) }}" class="n23-service-final-btn">

                                    <span>Explore</span>

                                    <span class="n23-service-final-btn-arrow">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>

                                </a>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>


            <div class="n23-services-final-row n23-services-final-row-three">

                @foreach ($Services->skip(4)->take(3) as $service)
                    <div class="n23-service-final-item" data-aos="zoom-in-up" data-aos-delay="{{ $loop->iteration * 100 }}">

                        <div class="n23-service-final-icon">
                            <div class="n23-service-final-icon-inner">
                                <i class="{{ $service->icon ?? 'bi bi-calendar-event' }}"></i>
                            </div>
                        </div>

                        <div class="n23-service-final-frame">
                            <div class="n23-service-final-card">

                                <h3>{{ $service->name }}</h3>

                                <p>{{ Str::limit($service->short_description, 79) }}</p>

                                <a href="{{ route('service.details', $service->slugname) }}" class="n23-service-final-btn">

                                    <span>Explore</span>

                                    <span class="n23-service-final-btn-arrow">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>

                                </a>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </section>

    <!-- ==========================================================
                                                                                                                                                                                                             N23 ABOUT US
                                                                                                                                                                                                        ========================================================== -->
    <section class="n23-about section-space">
        <div class="container">
            <div class="row align-items-center g-lg-5 g-4">

                <!-- ==========================================
                                                                                                                                                                                                                         LEFT VISUAL
                                                                                                                                                                                                                    =========================================== -->
                <div class="col-lg-6">
                    <div class="n23-about-visual" data-aos="fade-right" data-aos-duration="1000">

                        <div class="n23-about-shape-wrap">

                            <!-- image block 1 -->
                            <div class="n23-about-shape n23-shape-1">
                                <img src="{{ asset('front/images/about/about-1.jpg') }}" alt="Travel Experience">
                            </div>

                            <!-- image block 2 -->
                            <div class="n23-about-shape n23-shape-2">
                                <img src="{{ asset('front/images/about/about-2.jpg') }}" alt="Travel Destination">
                            </div>

                            <!-- image block 3 -->
                            <div class="n23-about-shape n23-shape-3">
                                <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="Luxury Journey">
                            </div>

                            <!-- image block 4 -->
                            <div class="n23-about-shape n23-shape-4">
                                <img src="{{ asset('front/images/about/about-4.jpg') }}" alt="Vacation Planning">
                            </div>

                            <!-- image block 5 -->
                            <div class="n23-about-shape n23-shape-5">
                                <img src="{{ asset('front/images/about/about-5.jpg') }}" alt="Memorable Travel">
                            </div>

                            <!-- image block 6 -->
                            <div class="n23-about-shape n23-shape-6">
                                <img src="{{ asset('front/images/about/about-6.jpg') }}" alt="Global Travel">
                            </div>

                            <!-- center logo -->
                            <div class="n23-about-center-logo">
                                <img src="{{ asset('front/images/n23-logo-center.png') }}" alt="N23 Logo">
                            </div>

                        </div>

                    </div>
                </div>


                <!-- ==========================================
                                                                                                                                                                                                                         RIGHT CONTENT
                                                                                                                                                                                                                    =========================================== -->
                <div class="col-lg-6">
                    <div class="n23-about-content" data-aos="fade-left" data-aos-duration="1000">

                        <div class="n23-about-kicker">
                            <span class="n23-about-kicker-icon">
                                <i class="bi bi-stars"></i>
                            </span>
                            About Us
                        </div>

                        <h2 class="n23-about-title">
                            Creating Journeys
                            <span>That Feel Personal.</span>
                        </h2>

                        <p class="n23-about-text">
                            At N23 Travel Service, we believe every trip should feel smooth,
                            exciting and thoughtfully planned. From the first conversation to
                            the final destination, we focus on creating travel experiences
                            that match your style, pace and purpose.
                        </p>

                        <p class="n23-about-text">
                            Whether you are travelling for leisure, business or a special
                            occasion, our approach is simple — careful planning, reliable
                            support and attention to every detail that matters.
                        </p>

                        <div class="n23-about-points">
                            <div class="n23-about-point">
                                <i class="bi bi-check2-circle"></i>
                                Tailored Travel Planning
                            </div>

                            <div class="n23-about-point">
                                <i class="bi bi-check2-circle"></i>
                                Smooth End-to-End Support
                            </div>

                            <div class="n23-about-point">
                                <i class="bi bi-check2-circle"></i>
                                Trusted Guidance at Every Step
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ==========================================================
                                                                                                                                                                                                             N23 TESTIMONIAL SECTION
                                                                                                                                                                                                        ========================================================== -->
    <section class="n23-testimonials section-space">

        <div class="container">

            <!-- ==========================================
                                                                                                                                                                                                                     HEADING
                                                                                                                                                                                                                =========================================== -->
            <div class="n23-testimonial-heading text-center" data-aos="fade-up">

                <span class="n23-testimonial-kicker">
                    Client Testimonials
                </span>

                <h2>
                    Clients Love
                    <span>N23</span>
                </h2>

            </div>


            <!-- ==========================================
                                                                                                                                                                                                                     SLIDER AREA
                                                                                                                                                                                                                =========================================== -->
            <div class="n23-testimonial-slider-wrap" data-aos="fade-up" data-aos-delay="150">

                <!-- Previous -->
                <button class="n23-testimonial-prev" aria-label="Previous testimonial">

                    <i class="bi bi-chevron-left"></i>

                </button>


                <div class="swiper n23TestimonialSwiper">

                    <div class="swiper-wrapper">



                        @foreach ($Testimonial as $testi)
                            <div class="swiper-slide">
                                <div class="n23-testimonial-slide">

                                    <article class="n23-testimonial-card">

                                        <!-- top floating image -->
                                        <div class="n23-testimonial-avatar-top">
                                            <img src="{{ asset('uploads/testimonial/' . $testi->photo) }}"
                                                alt="Client">
                                        </div>

                                        <span class="n23-testimonial-quote">
                                            “
                                        </span>

                                        <p>
                                            {{ Str::limit(strip_tags($testi->description), 100) }} </p>

                                        <div class="n23-testimonial-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                    </article>


                                    <!-- author -->
                                    <div class="n23-testimonial-author">

                                        <div class="n23-testimonial-author-img">
                                            <img src="{{ asset('uploads/testimonial/' . $testi->photo) }}"
                                                alt="Client">
                                        </div>

                                        <div>
                                            <strong>{{ $testi->name ?? '' }}</strong>
                                            <span>{{ $testi->designation ?? '' }}</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


                <!-- Next -->
                <button class="n23-testimonial-next" aria-label="Next testimonial">

                    <i class="bi bi-chevron-right"></i>

                </button>

            </div>


            <!-- pagination -->
            <!-- <div class="n23-testimonial-pagination"></div> -->

        </div>

    </section>

    <!-- ==========================================================
                                                                                                                                                                                                                N23 LATEST BLOG SECTION
                                                                                                                                                                                                            ========================================================== -->
    <section class="n23-blog section-space">

        <div class="container">

            <!-- ==========================================
                                                                                                                                                                                                                     SECTION HEADING
                                                                                                                                                                                                                =========================================== -->
            <div class="n23-blog-heading text-center" data-aos="fade-up">

                <span class="n23-blog-kicker">
                    Latest Blogs
                </span>

                <h2 class="n23-blog-title">
                    Travel Tips, Stories &
                    <span>Latest Insights</span>
                </h2>
            </div>

            <div class="row g-4">

                <!-- BLOG 01 -->
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                        <article class="n23-blog-card">

                            <div class="n23-blog-thumb">

                                <img src="{{ asset('blogs/' . $blog->image) }}" alt="How to plan an international trip">

                                <div class="n23-blog-date">
                                    <span>25</span>
                                    Sep
                                </div>

                            </div>

                            <div class="n23-blog-content">

                                <h3>
                                    <a href="{{ route('blogdetail') }}">
                                        {{ $blog->name }}
                                    </a>
                                </h3>

                                <p>
                                    {{ Str::limit(strip_tags($blog->description), 100) }}
                                </p>

                                <a href="{{ route('blogdetail') }}" class="n23-blog-btn">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>

                            </div>

                        </article>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

@endsection
@section('scripts')
@endsection
