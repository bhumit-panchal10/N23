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
    <style>
        /* CAPTCHA DESIGN */

        .jme-captcha-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }


        .jme-captcha-image {
            height: 45px;
            min-width: 120px;
            background: #f8f8f8;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 12px;
        }


        .jme-captcha-image img {
            height: 35px;
            width: auto;
            display: block;
        }


        /* Refresh Button */

        .jme-captcha-reload {
            width: 45px;
            height: 45px;
            border-radius: 8px;
            border: 1px solid #e18b00;
            background: #fff;
            color: #e18b00;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            cursor: pointer;
            transition: all .3s ease;
        }


        .jme-captcha-reload:hover {
            background: #e18b00;
            color: #fff;
        }


        .jme-captcha-reload svg {
            width: 20px;
            height: 20px;
        }


        .captcha-loading svg {
            animation: rotateCaptcha .8s linear infinite;
        }


        @keyframes rotateCaptcha {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        #captcha {
            height: 45px;
            border-radius: 8px;
        }
    </style>
    <div class="n23-contact-page">
        <!-- ==========================================================
                                                        N23 INNER BREADCRUMB
                                                    ========================================================== -->
        <section class="n23-breadcrumb">
            <div class="n23-breadcrumb-overlay"></div>
            <div class="container">
                <div class="n23-breadcrumb-content">
                    <h1>
                        Contact Us
                    </h1>
                    <div class="n23-breadcrumb-nav">
                        <a href="index.html">
                            Home
                        </a>
                        <span>
                            /
                        </span>
                        <strong>
                            Contact Us
                        </strong>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====================================================
                                                        N23 CONTACT INFO SECTION
                                                    ===================================================== -->
        <section class="n23-contact-info-section">
            <div class="container">
                <div class="n23-contact-info-head" data-aos="fade-up">
                    <span class="n23-section-tag">
                        Get In Touch
                    </span>
                    <h2>
                        Connect With
                        <span>N23 Travel Services</span>
                    </h2>
                    <!-- <p>
                                                                    Have questions about your next journey?
                                                                    Our travel experts are here to help you plan
                                                                    smooth and memorable experiences.
                                                                </p> -->
                </div>
                <div class="row g-4">
                    <!-- ADDRESS -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="n23-contact-info-card">
                            <div class="n23-contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="n23-contact-content">
                                <h4>
                                    Our Address
                                </h4>
                                <p>
                                    212 Flexi Business Hub,
                                    <br>
                                    Opp Gwalia Sweets,
                                    <br>
                                    Navrangpura,
                                    Ahmedabad - 380009
                                </p>
                            </div>
                            <span class="n23-contact-card-shape"></span>
                        </div>
                    </div>
                    <!-- EMAIL -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="n23-contact-info-card">
                            <div class="n23-contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="n23-contact-content">
                                <h4>
                                    Email Us
                                </h4>
                                <a href="mailto:n23travelservices@gmail.com">
                                    n23travelservices@gmail.com
                                </a>
                                <p>
                                    We reply within 24 hours.
                                </p>
                            </div>
                            <span class="n23-contact-card-shape"></span>
                        </div>
                    </div>
                    <!-- PHONE -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="n23-contact-info-card">
                            <div class="n23-contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="n23-contact-content">
                                <h4>
                                    Call Us
                                </h4>
                                <a href="tel:+919712330213">
                                    +91 9712330213
                                </a>
                                <p>
                                    Available for travel assistance.
                                </p>
                            </div>
                            <span class="n23-contact-card-shape"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====================================================
                                                 CONTACT FORM + MAP SECTION
                                            ===================================================== -->
        <section class="n23-contact-main-section">
            <div class="container">
                <div class="n23-contact-wrapper">
                    <!-- LEFT FORM -->
                    <div class="n23-contact-form-box" data-aos="fade-right">
                        <div class="n23-form-heading">
                            <span>
                                Send A Message
                            </span>
                            <h2>
                                Let's Plan Your
                                <strong>Journey</strong>
                            </h2>
                            <p>
                                Tell us about your travel requirements
                                and our experts will contact you shortly.
                            </p>
                        </div>
                        <form class="n23-contact-form" action="{{ route('contact_us_store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="n23-form-row">
                                <div class="n23-form-group">
                                    <label>
                                        Your Name
                                    </label>
                                    <div class="n23-input-box">
                                        <i class="bi bi-person"></i>
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="n23-form-group">
                                    <label>
                                        Email Address
                                    </label>
                                    <div class="n23-input-box">
                                        <i class="bi bi-envelope"></i>
                                        <input type="email" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="n23-form-row">
                                <div class="n23-form-group">
                                    <label>
                                        Phone Number
                                    </label>
                                    <div class="n23-input-box">
                                        <i class="bi bi-telephone"></i>
                                        <input type="tel" name="mobile" placeholder="+91 XXXXX XXXXX">
                                    </div>
                                </div>
                                <div class="n23-form-group">
                                    <label>
                                        Subject
                                    </label>
                                    <div class="n23-input-box">
                                        <i class="bi bi-chat-left-text"></i>
                                        <input type="text" name="subject" placeholder="Travel Inquiry">
                                    </div>
                                </div>
                            </div>
                            <div class="n23-form-group">
                                <label>
                                    Your Message
                                </label>
                                <div class="n23-input-box textarea-box">
                                    <i class="bi bi-pencil"></i>
                                    <textarea name="message" placeholder="Tell us about your travel plans..."></textarea>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('captcha') ? 'has-error' : '' }}">

                                <div class="jme-captcha-wrap">

                                    <div class="jme-captcha-image">
                                        <span>{!! captcha_img() !!}</span>
                                    </div>

                                    <button type="button" class="jme-captcha-reload" id="reload"
                                        aria-label="Refresh captcha" title="Refresh Captcha">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                                            stroke-linecap="round" stroke-linejoin="round">

                                            <path d="M20 6v6h-6"></path>
                                            <path d="M4 18v-6h6"></path>
                                            <path d="M18.5 9a7 7 0 0 0-11.7-2.6L4 9"></path>
                                            <path d="M5.5 15a7 7 0 0 0 11.7 2.6L20 15"></path>

                                        </svg>

                                    </button>

                                </div>

                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha"
                                    name="captcha" autocomplete="off" required>

                                @if ($errors->has('captcha'))
                                    <span class="help-block captcha-error">
                                        {{ $errors->first('captcha') }}
                                    </span>
                                @endif

                            </div>
                            <button type="submit" class="n23-contact-submit-btn">
                                <span>
                                    Send Message
                                </span>
                                <i class="bi bi-arrow-up-right"></i>
                            </button>
                        </form>
                    </div>
                    <!-- RIGHT MAP -->
                    <div class="n23-contact-map-box" data-aos="fade-left">
                        <div class="n23-map-frame">
                            <iframe
                                src="https://www.google.com/maps?q=212%20Flexi%20Business%20Hub%20Navrangpura%20Ahmedabad&output=embed"
                                loading="lazy">
                            </iframe>
                            <div class="n23-map-overlay">
                                <div class="n23-map-badge">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <div>
                                        <strong>
                                            Visit Us
                                        </strong>
                                        <span>
                                            Ahmedabad, Gujarat
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#reload').on('click', function(e) {
                e.preventDefault();

                let button = $(this);

                button.prop('disabled', true);
                button.addClass('captcha-loading');

                $.ajax({
                    type: 'GET',
                    url: '{{ route('refresh_captcha') }}',
                    cache: false,

                    success: function(data) {

                        $('.jme-captcha-image span').html(data.captcha);

                        $('#captcha').val('');

                        button.prop('disabled', false);
                        button.removeClass('captcha-loading');
                    },

                    error: function(xhr) {

                        console.log(xhr.responseText);

                        button.prop('disabled', false);
                        button.removeClass('captcha-loading');
                    }
                });

            });

        });
    </script>
@endsection
