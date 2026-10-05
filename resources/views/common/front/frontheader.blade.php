 <div class="n23-topbar">
     <div class="container">
         <div class="n23-topbar-inner">
             <!-- Left Tagline -->
             <div class="n23-topbar-tagline">
                 <span class="n23-tagline-icon">
                     <i class="bi bi-airplane"></i>
                 </span>
                 <span>Your Journey,</span>
                 <strong>Our Priority</strong>
             </div>
             <!-- Right Side -->
             <div class="n23-topbar-right">
                 <!-- Phone -->
                 <a href="tel:+919974304894" class="n23-topbar-contact">
                     <span class="n23-contact-icon">
                         <i class="bi bi-telephone"></i>
                     </span>
                     <span class="n23-contact-text">
                         +91 99743 04894
                     </span>
                 </a>
                 <span class="n23-topbar-divider"></span>
                 <!-- Email -->
                 <a href="mailto:n23travelservices@gmail.com" class="n23-topbar-contact">
                     <span class="n23-contact-icon">
                         <i class="bi bi-envelope"></i>
                     </span>
                     <span class="n23-contact-text">
                         n23travelservices@gmail.com
                     </span>
                 </a>
                 <span class="n23-topbar-divider d-none d-lg-block"></span>
                 <!-- Social -->
                 <div class="n23-topbar-social d-none d-lg-flex">
                     <a href="#" aria-label="Instagram">
                         <i class="bi bi-instagram"></i>
                     </a>
                     <a href="#" aria-label="Facebook">
                         <i class="bi bi-facebook"></i>
                     </a>
                     <a href="#" aria-label="LinkedIn">
                         <i class="bi bi-linkedin"></i>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- =====================================================
     N23 HEADER
===================================================== -->
 <header class="n23-header" id="n23Header">
     <div class="container">
         <div class="n23-header-inner">
             <!-- =========================================
                 LOGO
            ========================================== -->
             <a href="{{ route('index') }}" class="n23-header-logo" aria-label="N23 Travel Service">
                 <span class="n23-logo-crop">
                     <img src="{{ asset('front/images/logo.png') }}" alt="N23 Travel Service">
                 </span>
             </a>
             <!-- =========================================
                 DESKTOP NAVIGATION
            ========================================== -->
             <nav class="n23-navigation">
                 <ul class="n23-nav-list">
                     <li class="n23-nav-item">
                         <a href="{{ route('index') }}"
                             class="n23-nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                             <span>Home</span>
                         </a>
                     </li>
                     <li class="n23-nav-item">
                         <a href="{{ route('about') }}"
                             class="n23-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                             <span>About Us</span>
                         </a>
                     </li>
                     <!-- =================================
                         SERVICES
                    ================================== -->
                     <li class="n23-nav-item n23-service-dropdown">
                         <button type="button"
                             class="n23-nav-link n23-service-trigger {{ request()->routeIs('service') ? 'active' : '' }}"
                             aria-expanded="false">
                             <span>Services</span>
                             <i class="bi bi-chevron-down"></i>
                         </button>

                         <div class="n23-dropdown-menu">

                             <div class="n23-mega-left">

                                 <div class="n23-mega-flight-path"></div>

                                 <i class="bi bi-airplane-fill n23-mega-plane"></i>

                                 <span class="n23-mega-kicker">
                                     Explore N23
                                 </span>

                                 <h3>
                                     Travel
                                     <span>Services</span>
                                 </h3>

                                 <div class="n23-mega-title-line"></div>

                                 <p>
                                     Everything you need for a smoother,
                                     smarter and stress-free journey.
                                 </p>



                             </div>

                             <div class="n23-dropdown-links">
                                 @php
                                     $services = \App\Models\Service::orderBy('sequence', 'asc')->get();
                                 @endphp
                                 @foreach ($services as $service)
                                     <div class="n23-dropdown-link">

                                         <div class="n23-dropdown-image">
                                             <img src="{{ asset('services/' . $service->image) }}" alt="Visa Services">
                                         </div>

                                         <div class="n23-dropdown-name">

                                             <a href="{{ route('service', $service->slugname) }}">
                                                 {{ $service->name ?? '' }}
                                             </a>

                                             <span class="n23-service-line"></span>

                                             <small>
                                                 {{ Str::limit($service->short_description, 79) }}
                                             </small>

                                         </div>

                                     </div>
                                 @endforeach
                             </div>

                         </div>
                     </li>
                     <li class="n23-nav-item">
                         <a href="{{ route('blog') }}"
                             class="n23-nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}">
                             <span>Blog</span>
                         </a>
                     </li>
                 </ul>
             </nav>
             <!-- =========================================
                 RIGHT
            ========================================== -->
             <div class="n23-header-actions">
                 <div class="n23-contact-mask-btn">
                     <!-- Back layer -->
                     <span class="n23-contact-mask-label">
                         Contact Us
                         <i class="bi bi-arrow-up-right"></i>
                     </span>
                     <!-- Front animated mask layer -->
                     <a href="{{ route('contactus') }}" class="n23-contact-mask-link">
                         Contact Us
                         <i class="bi bi-arrow-up-right"></i>
                     </a>
                 </div>
                 <!-- Mobile Toggle -->
                 <button type="button" class="n23-mobile-toggle" id="n23MobileToggle" aria-label="Open menu">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
             </div>
         </div>
         <!-- =========================================
             MOBILE NAVIGATION
        ========================================== -->
         <div class="n23-mobile-menu" id="n23MobileMenu">
             <a href="{{ route('index') }}" class="n23-mobile-link active">
                 Home
             </a>
             <a href="{{ route('about') }}" class="n23-mobile-link">
                 About Us
             </a>
             <!-- ==========================================================
     MOBILE SERVICES DROPDOWN
========================================================== -->
             <div class="n23-mobile-services">

                 <button type="button" class="n23-mobile-service-trigger" id="n23MobileServiceTrigger">

                     <span>Services</span>

                     <i class="bi bi-plus-lg"></i>

                 </button>


                 <div class="n23-mobile-service-menu">

                     <!-- 1. Visas -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-passport"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Visas
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 2. Domestic & International Packages -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-globe2"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Domestic & International Packages
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 3. Air Tickets -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-airplane"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Air Tickets
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 4. MICE -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-people"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             MICE
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 5. Corporate Events -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-calendar-event"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Corporate Events
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 6. Forex -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-currency-exchange"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Forex
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>


                     <!-- 7. Travel Insurance -->
                     <a href="#" class="n23-mobile-service-link">

                         <span class="n23-mobile-service-icon">
                             <i class="bi bi-shield-check"></i>
                         </span>

                         <span class="n23-mobile-service-name">
                             Travel Insurance
                         </span>

                         <span class="n23-mobile-service-arrow">
                             <i class="bi bi-arrow-up-right"></i>
                         </span>

                     </a>

                 </div>

             </div>
             <a href="#" class="n23-mobile-link">
                 Blog
             </a>
             <a href="#" class="n23-mobile-contact">
                 Contact Us
                 <i class="bi bi-arrow-up-right"></i>
             </a>
         </div>
     </div>
 </header>
