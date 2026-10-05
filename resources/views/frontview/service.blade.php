@extends('layouts.front')
@section('title', config('app.name') . '' . ($meta->meta_title ?? ''))
@section('opTag')
    {{-- Meta tags --}}
    <meta name="description" content="{{ $meta->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $meta->metaKeyword ?? '' }}">
    <meta name="title" content="{{ $meta->meta_title ?? '' }}">
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
                                                                                                                                                                N23 INNER BREADCRUMB
                                                                                                                                                            ========================================================== -->

    <section class="n23-breadcrumb">

        <div class="n23-breadcrumb-overlay"></div>


        <div class="container">

            <div class="n23-breadcrumb-content">


                <h1>
                    Visas
                </h1>


                <div class="n23-breadcrumb-nav">

                    <a href="{{ route('index') }}">
                        Home
                    </a>

                    <span>
                        /
                    </span>

                    <strong>
                        Visas
                    </strong>

                </div>


            </div>

        </div>


    </section>

    <!-- =========================================
                                                                                                                                                         SERVICE INTRO SECTION
                                                                                                                                                    ========================================= -->

    <section class="n23-service-intro">

        <div class="container">

            <div class="n23-service-intro-wrapper">


                <!-- =========================
                                                                                                                                                                     LEFT IMAGE
                                                                                                                                                                ========================== -->

                <div class="n23-service-intro-image" data-aos="fade-right" data-aos-duration="1000">

                    <div class="n23-service-intro-image-shape">

                        <img src="{{ asset('services/' . $Services->image) }}" alt="Tourist Visa Service">

                    </div>

                    <div class="n23-service-intro-image-accent"></div>

                </div>



                <!-- =========================
                                                                                                                                                                     RIGHT CONTENT
                                                                                                                                                                ========================== -->

                <div class="n23-service-intro-content" data-aos="fade-left" data-aos-duration="1000">

                    <h1>
                        <strong>{{ $Services->name ?? '' }}</strong>
                    </h1>


                    <div class="n23-service-intro-line"></div>


                    <p>
                        {!! $Services->short_description ?? '' !!}
                    </p>

                </div>


            </div>

        </div>

    </section>

    <!-- =========================================
                                                                                                                                                         N23 SERVICE CTA
                                                                                                                                                    ========================================= -->

    <section class="n23-service-cta">
        <div class="n23-service-cta-bg"></div>
        <div class="container">

            <div class="n23-service-cta-wrapper" data-aos="fade-up" data-aos-duration="1000">

                <div class="n23-service-cta-content">

                    <span class="n23-service-cta-label">
                        TRAVEL SUPPORT MADE SIMPLE
                    </span>

                    <h2>
                        LET N23
                        <strong>HANDLE THE JOURNEY.</strong>
                    </h2>

                    <p>
                        From planning and documentation to bookings and
                        travel assistance, we make every step simple,
                        smooth and stress-free.
                    </p>

                    <a href="{{ route('contactus') }}" class="n23-service-cta-button">

                        <span>
                            Talk To N23
                        </span>

                        <span class="n23-service-cta-arrow">
                            <i class="bi bi-arrow-up-right"></i>
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================================
                                                                                                                                                            N23 FAQ SECTION
                                                                                                                                                        ========================================= -->
    @if ($faqs->isNotEmpty())
        <section class="n23-service-faq">

            <div class="container">

                <div class="n23-service-faq-wrapper">
                    <!-- =================================
                                                                                                                                                                        LEFT CONTENT
                                                                                                                                                                    ================================= -->

                    <div class="n23-service-faq-left" data-aos="fade-right" data-aos-duration="1000">

                        <span class="n23-service-faq-label">
                            FAQS
                        </span>

                        <h2>
                            FREQUENTLY
                            <br>
                            ASKED
                            <br>
                            <strong>QUESTIONS</strong>
                        </h2>

                        <div class="n23-service-faq-line"></div>

                        <div class="n23-service-faq-image">

                            <img src="{{ asset('front/images/service-faq.jpg') }}" alt="Travel Assistance">

                        </div>

                    </div>



                    <!-- =================================
                                                                                                                                                                     RIGHT ACCORDION
                                                                                                                                                                ================================= -->

                    <div class="n23-service-faq-right" data-aos="fade-left" data-aos-duration="1000">


                        <!-- =================================
                                                                                                                                                                         FAQ 1
                                                                                                                                                                    ================================= -->
                        @foreach ($faqs as $key => $faq)
                            <div class="n23-faq-item {{ $key === 0 ? 'active' : '' }}">

                                <button type="button" class="n23-faq-question" aria-expanded="true">

                                    <span>
                                        {{ $faq->question ?? '' }}
                                    </span>

                                    <span class="n23-faq-toggle">
                                        <i class="bi bi-dash"></i>
                                    </span>

                                </button>

                                <div class="n23-faq-answer">

                                    <div>

                                        <p>
                                            {{ $faq->answer ?? '' }}
                                        </p>

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </section>
    @endif
    <!-- =========================================
                                                                                                                                                            N23 SERVICE DETAIL DESCRIPTION
                                                                                                                                                        ========================================= -->

    <section class="n23-service-description">

        <div class="container">

            <div class="n23-service-description-inner">

                <div class="n23-service-description-content">
                    <p>
                        {!! $Services->brief_description ?? '' !!}
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- =========================================
                                                                                                                                                            N23 SERVICE DETAIL TESTIMONIAL
                                                                                                                                                        ========================================= -->
    @if ($testimonials->isNotEmpty())
        <section class="n23-service-detail-testimonial">

            <div class="container">

                <!-- SECTION HEADING -->

                <div class="n23-service-detail-testimonial-heading" data-aos="fade-up" data-aos-duration="900">

                    <span class="n23-service-detail-testimonial-label">
                        CLIENT STORIES
                    </span>

                    <h2>
                        WHAT OUR
                        <strong>CLIENTS SAY</strong>
                    </h2>

                </div>


                <!-- TESTIMONIAL SLIDER -->

                <div class="swiper n23-service-detail-testimonial-slider" data-aos="fade-up" data-aos-duration="1100">

                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <!-- TESTIMONIAL 1 -->

                            <div class="swiper-slide">

                                <div class="n23-service-detail-testimonial-card">

                                    <div class="n23-service-detail-testimonial-quote">
                                        <i class="bi bi-quote"></i>
                                    </div>


                                    <div class="n23-service-detail-testimonial-profile">

                                        <div class="n23-service-detail-testimonial-image-ring">

                                            <div class="n23-service-detail-testimonial-image">

                                                <img src="{{ asset('/uploads/testimonial/' . $testimonial->photo) }}"
                                                    alt="Client Name">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="n23-service-detail-testimonial-content">

                                        <p class="n23-service-detail-testimonial-description">

                                            {{ Str::limit(strip_tags($testimonial->description), 100) }}

                                        </p>


                                        <div class="n23-service-detail-testimonial-client">

                                            <h3>
                                                {{ $testimonial->name }}
                                            </h3>

                                            <span>
                                                {{ $testimonial->designation }}
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination n23-service-detail-testimonial-pagination"></div>

                </div>

            </div>

        </section>
    @endif
    <!-- =========================================
                                                                                                                                                         N23 SERVICE DETAIL - FINAL CTA
                                                                                                                                                    ========================================= -->

    <section class="n23-service-detail-final-cta">

        <!-- Background Image -->
        <div class="n23-service-detail-final-cta-bg"></div>


        <!-- Decorative Circle -->
        <div class="n23-service-detail-final-cta-decoration"></div>


        <div class="container">

            <div class="n23-service-detail-final-cta-wrapper">


                <!-- =================================
                                                                                                                                                                     CONTENT
                                                                                                                                                                ================================= -->

                <div class="n23-service-detail-final-cta-content" data-aos="fade-right" data-aos-duration="1000">

                    <h2>
                        READY FOR YOUR
                        <br>
                        NEXT
                        <strong>JOURNEY?</strong>
                    </h2>


                    <p>
                        Let N23 make your travel planning simple
                        and seamless.
                    </p>


                    <a href="{{ route('contactus') }}" class="n23-service-detail-final-cta-button">

                        <span>
                            Talk To N23
                        </span>

                        <span class="n23-service-detail-final-cta-arrow">
                            <i class="bi bi-arrow-up-right"></i>
                        </span>

                    </a>

                </div>


                <!-- =================================
                                                                                                                                                                     VISUAL
                                                                                                                                                                ================================= -->

                <div class="n23-service-detail-final-cta-visual" data-aos="fade-left" data-aos-duration="1100">

                    <div class="n23-service-detail-final-cta-image">

                        <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="Travel Journey">

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ==========================================================
                                                                                                                                                            N23 LATEST BLOG SECTION
                                                                                                                                                        ========================================================== -->
    @if ($blogs->isNotEmpty())
        <section class="n23-blog section-space">

            <div class="container">

                <!-- ==========================================
                                                                                                                                                                 SECTION HEADING
                                                                                                                                                            =========================================== -->
                <div class="n23-blog-heading text-center" data-aos="fade-up">

                    <span class="n23-blog-kicker">
                        Related Blogs
                    </span>

                    <h2 class="n23-blog-title">
                        Explore More Travel
                        <span> Insights</span>
                    </h2>

                </div>



                <div class="row g-4">

                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                            <article class="n23-blog-card">

                                <div class="n23-blog-thumb">

                                    <img src="{{ asset('blogs/' . $blog->image) }}"
                                        alt="How to plan an international trip">

                                    <div class="n23-blog-date">
                                        <span>25</span>
                                        Sep
                                    </div>

                                </div>

                                <div class="n23-blog-content">

                                    <h3>
                                        <a href="{{ route('blogdetail', $blog->slugname) }}">
                                            {{ $blog->name }}
                                        </a>
                                    </h3>

                                    <p>
                                        {{ Str::limit(strip_tags($blog->description), 100) }}
                                    </p>

                                    <a href="{{ route('blogdetail', $blog->slugname) }}" class="n23-blog-btn">
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
    @endif

@endsection
@section('scripts')
@endsection
