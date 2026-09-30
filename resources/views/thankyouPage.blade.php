@extends('layouts.front')

@section('title', 'Thank You')

@section('content')
    <style>
        /* ==========================================
               TRAVEL THANK YOU PAGE
            ========================================== */

        .jme-travel-thankyou {
            position: relative;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 80px 20px;
            background: linear-gradient(180deg,
                    #eef8ff 0%,
                    #f8fcff 48%,
                    #ffffff 100%);
        }


        /* ==========================================
               BACKGROUND
            ========================================== */

        .jme-travel-bg {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }


        /* CLOUDS */

        .jme-cloud {
            position: absolute;
            width: 180px;
            height: 55px;
            background: rgba(255, 255, 255, .75);
            border-radius: 50px;
            filter: blur(1px);
        }


        .jme-cloud::before,
        .jme-cloud::after {
            content: "";
            position: absolute;
            background: inherit;
            border-radius: 50%;
        }


        .jme-cloud::before {
            width: 75px;
            height: 75px;
            left: 30px;
            bottom: 15px;
        }


        .jme-cloud::after {
            width: 95px;
            height: 95px;
            right: 25px;
            bottom: 10px;
        }


        .cloud-one {
            top: 14%;
            left: -40px;
            transform: scale(.8);
        }


        .cloud-two {
            top: 8%;
            right: -60px;
            transform: scale(1.1);
        }


        .cloud-three {
            bottom: 8%;
            left: 5%;
            transform: scale(.6);
        }


        /* ROUTE */

        .jme-route-line {
            position: absolute;
            width: 600px;
            height: 260px;
            right: -80px;
            top: 18%;
            border-top: 2px dashed rgba(50, 120, 180, .15);
            border-radius: 50%;
            transform: rotate(-18deg);
        }


        .jme-route-line span {
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: rgba(50, 120, 180, .3);
        }


        .jme-route-line span:nth-child(1) {
            left: 5%;
            top: -4px;
        }


        .jme-route-line span:nth-child(2) {
            left: 50%;
            top: 25px;
        }


        .jme-route-line span:nth-child(3) {
            right: 3%;
            top: 80px;
        }


        /* PLANE */

        .jme-plane {
            position: absolute;
            right: 14%;
            top: 18%;
            transform: rotate(25deg);
            opacity: .14;
        }


        .jme-plane svg {
            width: 80px;
            height: 80px;
            fill: #1976a8;
        }


        /* ==========================================
               WRAPPER
            ========================================== */

        .jme-travel-thankyou-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 780px;
            margin: auto;
            text-align: center;
        }


        /* ==========================================
               TOP LABEL
            ========================================== */

        .jme-travel-top {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 24px;
        }


        .jme-travel-top span:not(.jme-travel-top-line) {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #3984ad;
        }


        .jme-travel-top-line {
            width: 45px;
            height: 1px;
            background: #a8cddd;
        }


        /* ==========================================
               CARD
            ========================================== */

        .jme-travel-card {
            position: relative;
            padding: 55px 65px 50px;
            background: rgba(255, 255, 255, .95);
            border: 1px solid rgba(48, 120, 160, .12);
            border-radius: 24px;
            box-shadow: 0 25px 70px rgba(31, 100, 140, .12);
        }


        /* ==========================================
               SUCCESS ICON
            ========================================== */

        .jme-travel-success {
            position: relative;
            width: 95px;
            height: 95px;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .jme-travel-success-ring {
            position: absolute;
            inset: 0;
            border: 1px dashed #79b9d4;
            border-radius: 50%;
            animation: jmeRotate 12s linear infinite;
        }


        .jme-travel-success-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2588b5;
            border-radius: 50%;
            box-shadow: 0 12px 25px rgba(37, 136, 181, .25);
        }


        .jme-travel-success-icon svg {
            width: 34px;
            height: 34px;
            fill: none;
            stroke: #fff;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }


        @keyframes jmeRotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* ==========================================
               CONTENT
            ========================================== */

        .jme-travel-small {
            display: inline-block;
            margin-bottom: 12px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #4d9bc0;
        }


        .jme-travel-content h1 {
            margin: 0 0 12px;
            font-size: 60px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -2px;
            color: #12394b;
        }


        .jme-travel-content h2 {
            margin: 0 0 18px;
            font-size: 19px;
            line-height: 1.5;
            font-weight: 600;
            color: #315c6f;
        }


        .jme-travel-content p {
            max-width: 590px;
            margin: auto;
            font-size: 14px;
            line-height: 1.9;
            color: #718692;
        }


        /* ==========================================
               INFO BOX
            ========================================== */

        .jme-travel-info {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 32px;
            padding: 18px 22px;
            text-align: left;
            background: #f1f9fc;
            border: 1px solid #dceef4;
            border-radius: 14px;
        }


        .jme-travel-info-icon {
            flex: 0 0 46px;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05);
        }


        .jme-travel-info-icon svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: #2588b5;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }


        .jme-travel-info-content strong {
            display: block;
            margin-bottom: 4px;
            font-size: 13px;
            color: #234b5d;
        }


        .jme-travel-info-content p {
            margin: 0;
            font-size: 12px;
            line-height: 1.6;
            color: #718692;
        }


        /* ==========================================
               BUTTONS
            ========================================== */

        .jme-travel-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 32px;
        }


        .jme-travel-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            min-width: 175px;
            padding: 14px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            transition: all .3s ease;
        }


        .jme-travel-btn.primary {
            color: #fff;
            background: #2588b5;
            box-shadow: 0 8px 20px rgba(37, 136, 181, .2);
        }


        .jme-travel-btn.primary:hover {
            color: #fff;
            background: #1c7399;
            transform: translateY(-2px);
        }


        .jme-travel-btn.secondary {
            color: #2588b5;
            background: #fff;
            border: 1px solid #b9dbe8;
        }


        .jme-travel-btn.secondary:hover {
            color: #2588b5;
            background: #f2fafc;
            transform: translateY(-2px);
        }


        .jme-travel-btn svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }


        /* ==========================================
               FEATURES
            ========================================== */

        .jme-travel-features {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 28px;
            margin-top: 28px;
        }


        .jme-travel-feature {
            display: flex;
            align-items: center;
            gap: 10px;
            text-align: left;
        }


        .jme-feature-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 1px solid #dcecf2;
            border-radius: 50%;
        }


        .jme-feature-icon svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: #398aae;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }


        .jme-travel-feature strong {
            display: block;
            font-size: 11px;
            color: #315c6f;
        }


        .jme-travel-feature span {
            display: block;
            margin-top: 2px;
            font-size: 9px;
            color: #8ba0aa;
        }


        .jme-feature-divider {
            width: 1px;
            height: 28px;
            background: #d5e5eb;
        }


        /* ==========================================
               RESPONSIVE
            ========================================== */

        @media (max-width: 767px) {

            .jme-travel-thankyou {
                min-height: auto;
                padding: 55px 15px;
            }


            .jme-travel-top {
                gap: 8px;
            }


            .jme-travel-top span:not(.jme-travel-top-line) {
                font-size: 8px;
                letter-spacing: 2px;
            }


            .jme-travel-top-line {
                width: 25px;
            }


            .jme-travel-card {
                padding: 45px 22px;
                border-radius: 18px;
            }


            .jme-travel-content h1 {
                font-size: 44px;
            }


            .jme-travel-content h2 {
                font-size: 16px;
            }


            .jme-travel-content p {
                font-size: 13px;
            }


            .jme-travel-info {
                align-items: flex-start;
                padding: 15px;
            }


            .jme-travel-actions {
                flex-direction: column;
            }


            .jme-travel-btn {
                width: 100%;
            }


            .jme-travel-features {
                flex-direction: column;
                gap: 15px;
            }


            .jme-feature-divider {
                display: none;
            }


            .jme-plane {
                right: 5%;
                top: 10%;
            }


            .jme-plane svg {
                width: 55px;
                height: 55px;
            }

        }
    </style>
    <main>

        <section class="jme-travel-thankyou">

            <!-- BACKGROUND DECORATION -->
            <div class="jme-travel-bg">

                <div class="jme-cloud cloud-one"></div>
                <div class="jme-cloud cloud-two"></div>
                <div class="jme-cloud cloud-three"></div>

                <div class="jme-route-line">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="jme-plane">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M21 16L13 13V5.5C13 4.67 12.33 4 11.5 4S10 4.67 10 5.5V13L2 16V18L10 16.5V20L7 21.5V23L11.5 21.5L16 23V21.5L13 20V16.5L21 18V16Z">
                        </path>
                    </svg>
                </div>

            </div>


            <div class="container">

                <div class="jme-travel-thankyou-wrapper">


                    <!-- TOP LABEL -->
                    <div class="jme-travel-top">

                        <span class="jme-travel-top-line"></span>

                        <span>
                            YOUR JOURNEY BEGINS HERE
                        </span>

                        <span class="jme-travel-top-line"></span>

                    </div>


                    <!-- THANK YOU CARD -->
                    <div class="jme-travel-card">


                        <!-- SUCCESS ICON -->
                        <div class="jme-travel-success">

                            <div class="jme-travel-success-ring"></div>

                            <div class="jme-travel-success-icon">

                                <svg viewBox="0 0 24 24">

                                    <path d="M5 12.5L9.5 17L19 7"></path>

                                </svg>

                            </div>

                        </div>


                        <!-- TEXT -->
                        <div class="jme-travel-content">

                            <span class="jme-travel-small">
                                MESSAGE RECEIVED
                            </span>

                            <h1>
                                Thank You!
                            </h1>

                            <h2>
                                Your travel inquiry is on its way to us.
                            </h2>

                            <p>
                                Thank you for choosing us for your travel journey.
                                We have received your inquiry and our travel experts
                                will connect with you shortly to help plan your perfect trip.
                            </p>

                        </div>


                        <!-- TRAVEL INFO -->
                        <div class="jme-travel-info">

                            <div class="jme-travel-info-icon">

                                <svg viewBox="0 0 24 24">

                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2Z">
                                    </path>

                                    <circle cx="12" cy="9" r="2.5"></circle>

                                </svg>

                            </div>


                            <div class="jme-travel-info-content">

                                <strong>
                                    What's next?
                                </strong>

                                <p>
                                    Our travel team will review your requirement
                                    and contact you to discuss your trip.
                                </p>

                            </div>

                        </div>


                        <!-- BUTTONS -->
                        <div class="jme-travel-actions">

                            <a href="{{ route('index') }}" class="jme-travel-btn primary">

                                <span>
                                    Back to Home
                                </span>

                                <svg viewBox="0 0 24 24">

                                    <path d="M5 12H19"></path>
                                    <path d="M12 5L19 12L12 19"></path>

                                </svg>

                            </a>


                            <a href="{{ route('about') }}" class="jme-travel-btn secondary">

                                <span>
                                    Explore With Us
                                </span>

                            </a>

                        </div>


                    </div>


                    <!-- BOTTOM TRAVEL FEATURES -->
                    <div class="jme-travel-features">

                        <div class="jme-travel-feature">

                            <div class="jme-feature-icon">

                                <svg viewBox="0 0 24 24">
                                    <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"></path>
                                </svg>

                            </div>

                            <div>
                                <strong>Explore</strong>
                                <span>New Destinations</span>
                            </div>

                        </div>


                        <span class="jme-feature-divider"></span>


                        <div class="jme-travel-feature">

                            <div class="jme-feature-icon">

                                <svg viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <path d="M12 7V12L15 14"></path>
                                </svg>

                            </div>

                            <div>
                                <strong>Plan</strong>
                                <span>Your Perfect Trip</span>
                            </div>

                        </div>


                        <span class="jme-feature-divider"></span>


                        <div class="jme-travel-feature">

                            <div class="jme-feature-icon">

                                <svg viewBox="0 0 24 24">
                                    <path d="M12 21C12 21 19 17 19 10V5L12 2L5 5V10C5 17 12 21 12 21Z"></path>
                                    <path d="M9 12L11 14L15 10"></path>
                                </svg>

                            </div>

                            <div>
                                <strong>Travel</strong>
                                <span>With Confidence</span>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </section>

    </main>

@endsection
@section('scripts')

@endsection
