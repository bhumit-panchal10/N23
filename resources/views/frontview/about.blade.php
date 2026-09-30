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
    <section class="n23-breadcrumb">
        <div class="n23-breadcrumb-overlay"></div>
        <div class="container">
            <div class="n23-breadcrumb-content">
                <h1>
                    About Us
                </h1>
                <div class="n23-breadcrumb-nav">
                    <a href="index.html">
                        Home
                    </a>
                    <span>
                        /
                    </span>
                    <strong>
                        About Us
                    </strong>
                </div>
            </div>
        </div>
    </section>
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
                            N23 is a renowned and registered company based in Ahmedabad, founded by
                            two major personalities, Ms. Moina Munshi and Mr. Himanshu Sharma. With a combined
                            experience of 15 years in Sales, Marketing, and Visa expertise, our co-founder has propelled
                            the company to the forefront of the industry.
                        </p>
                        <p class="n23-about-text">
                            We take pride in providing comprehensive visa
                            solutions, catering to various destinations leisure MICE and corporate meetings along with
                            international & domestic ticketing across the globe.
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
    <section class="n23-vision-mission">
        <div class="container">
            <div class="n23-vm-heading" data-aos="fade-up">
                <span>
                    OUR PURPOSE
                </span>
                <h2>
                    Vision &
                    <strong>Mission</strong>
                </h2>
                <p>
                    Driven by trust, experience and commitment
                    towards seamless travel solutions.
                </p>
            </div>
            <div class="n23-vm-wrapper">
                <!-- Vision -->
                <div class="n23-vm-card vision-card" data-aos="fade-right">
                    <div class="n23-vm-icon">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3>
                        Vision
                    </h3>
                    <p>
                        At N23, our vision is to be the leading visa
                        consultancy, offering seamless and efficient
                        visa processing services to individuals and
                        corporate clients.
                        We aim to ensure hassle-free travel experiences
                        for our customers, simplifying the visa application
                        process while maintaining the highest standards
                        of professionalism and ethics.
                    </p>
                </div>
                <!-- Mission -->
                <div class="n23-vm-card mission-card" data-aos="fade-left">
                    <div class="n23-vm-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3>
                        Mission
                    </h3>
                    <p>
                        Our mission is to leverage our extensive
                        experience and expertise in sales, marketing,
                        visa services and travel packages to cater to
                        the diverse needs of our clients.
                        We strive to offer personalized solutions,
                        exceeding expectations, and building long-term
                        relationships based on trust and reliability.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="n23-founder-section">
        <div class="container">
            <div class="n23-founder-heading">
                <span>
                    OUR LEADERSHIP
                </span>
                <h2>
                    The People Behind
                    <strong>N23</strong>
                </h2>
            </div>
            <div class="n23-founder-wrapper">
                <!-- Founder -->
                <div class="n23-founder-box founder-left" data-aos="fade-right">
                    <div class="n23-founder-accent"></div>
                    <div class="n23-founder-content">
                        <span class="n23-founder-role">
                            FOUNDER
                        </span>
                        <h3>
                            Ms. Moina
                            <strong>Munshi</strong>
                        </h3>
                        <p>
                            With a background in the airline industry and experience
                            working with prestigious entities like Air India and VFS Global,
                            Ms. Moina Munshi brings invaluable insights into operations
                            and accounts.
                            Her leadership ensures that the company delivers on its
                            commitments within stipulated timeframes, earning the trust
                            and satisfaction of our clients.
                        </p>
                    </div>
                </div>
                <!-- <div class="n23-founder-middle">
                                                    <span>N23</span>
                                                </div> -->
                <!-- Co Founder -->
                <div class="n23-founder-box founder-right" data-aos="fade-left">
                    <div class="n23-founder-accent"></div>
                    <div class="n23-founder-content">
                        <span class="n23-founder-role">
                            CO-FOUNDER
                        </span>
                        <h3>
                            Mr. Himanshu
                            <strong>Sharma</strong>
                        </h3>
                        <p>
                            As a co-founder with extensive experience in Sales &
                            Marketing and Visa expertise, Mr. Himanshu Sharma plays
                            a pivotal role in the company.
                            He spearheads major outdoor sales and effectively manages
                            our corporate clientele, contributing to the company's growth
                            and reputation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
