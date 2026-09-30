<footer class="n23-footer">

    <!-- decorative line -->
    <div class="n23-footer-route">
        <span></span>
        <i class="bi bi-geo-alt-fill"></i>
        <span></span>
    </div>

    <div class="container">

        <!-- ==========================================
             MAIN FOOTER
        =========================================== -->
        <div class="row g-5 n23-footer-main">

            <!-- BRAND -->
            <div class="col-lg-4 col-md-6">

                <div class="n23-footer-brand">

                    <a href="index.html" class="n23-footer-logo">
                        <img src="{{ asset('front/images/logo.png') }}" alt="N23 Travel Service">
                    </a>

                    <p>
                        Thoughtful travel planning, reliable support and
                        personalized experiences for journeys that feel
                        effortless from start to finish.
                    </p>

                    <!-- SOCIAL -->
                    <div class="n23-footer-social">

                        <a href="#" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="#" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- QUICK LINKS -->
            <div class="col-lg-2 col-md-6">

                <div class="n23-footer-column">

                    <h4>Quick Links</h4>

                    <ul>
                        <li>
                            <a href="{{ route('index') }}">
                                <span></span>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}">
                                <span></span>
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('blog') }}">
                                <span></span>
                                Blog
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contactus') }}">
                                <span></span>
                                Contact Us
                            </a>
                        </li>
                    </ul>

                </div>

            </div>


            <!-- SERVICES -->
            <div class="col-lg-3 col-md-6">

                <div class="n23-footer-column">

                    <h4>Our Services</h4>
                    @php
                        $services = \App\Models\Service::orderBy('sequence', 'asc')->get();
                    @endphp
                    <ul>
                        @foreach ($services as $service)
                            <li>
                                <a href="{{ route('service.details', $service->slugname) }}">
                                    <span></span>
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>


            <!-- CONTACT -->
            <div class="col-lg-3 col-md-6">

                <div class="n23-footer-column n23-footer-contact">

                    <h4>Get In Touch</h4>

                    <!-- ADDRESS -->
                    <div class="n23-footer-contact-item">

                        <div class="n23-footer-contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <span>Visit Us</span>

                            <p>
                                212 Flexi Business Hub,<br>
                                Opp Gwalia Sweets,<br>
                                Navrangpura,<br>
                                Ahmedabad 380009
                            </p>
                        </div>

                    </div>


                    <!-- PHONE -->
                    <div class="n23-footer-contact-item">

                        <div class="n23-footer-contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <span>Call Us</span>

                            <a href="tel:+919712330213">
                                +91 9712330213
                            </a>
                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="n23-footer-contact-item">

                        <div class="n23-footer-contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <span>Email Us</span>

                            <a href="mailto:n23travelservices@gmail.com">
                                n23travelservices@gmail.com
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ==========================================
             BOTTOM FOOTER
        =========================================== -->
        <div class="n23-footer-bottom">

            <p>
                © <span id="n23FooterYear"></span>
                N23 Travel Service. All Rights Reserved.
            </p>


        </div>

    </div>
    <!-- large decorative text -->
    <div class="n23-footer-watermark">
        N23
    </div>

</footer>
