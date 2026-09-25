<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">

                @auth
                    @if (Auth::user()->role_id == 1)
                        <li class="menu-title"><span data-key="t-menu"></span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link @if (request()->routeIs('home')) {{ 'active' }} @endif"
                                href="{{ route('home') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarMore" data-bs-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="sidebarMore">
                                <i class="ri-database-2-line"></i> Master Entry </a>
                            <div class="menu-dropdown collapse show" id="sidebarMore" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">

                                        <a href="{{ route('admin.services.index') }}"
                                            class="nav-link {{ request()->is('admin/services*') ? 'active' : '' }}">

                                            <i class="nav-icon fas fa-concierge-bell"></i>

                                            Services

                                        </a>

                                    </li>
                                    <li class="nav-item">

                                        <a href="{{ route('admin.blogs.index') }}"
                                            class="nav-link {{ request()->is('admin/blogs*') ? 'active' : '' }}">

                                            <i class="nav-icon fas fa-blog"></i>

                                            Blogs

                                        </a>

                                    </li>

                                    {{-- <li class="nav-item">
                                        <a class="nav-link menu-link @if (request()->routeIs('testimonial.index')) {{ 'active' }} @endif"
                                            href="{{ route('metaData.index') }}">
                                            <i class="fa-solid fa-clipboard-list"></i>
                                            <span data-key="t-dashboards">Meta Data</span>
                                        </a>
                                    </li> --}}

                                    {{-- <li class="nav-item">

                                        <a href="{{ route('admin.faqs.index') }}"
                                            class="nav-link {{ request()->is('admin/faqs*') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-question-circle"></i>
                                            FAQs
                                        </a>

                                    </li> --}}
                                    <li class="nav-item">

                                        <a href="{{ route('testimonial.index') }}"
                                            class="nav-link {{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-users"></i>
                                            Testimonial
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link @if (request()->routeIs('metaData.index')) {{ 'active' }} @endif"
                                href="{{ route('metaData.index') }}">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span data-key="t-dashboards">Seo</span>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link @if (request()->routeIs('cms.index')) {{ 'active' }} @endif"
                                href="{{ route('cms.index') }}">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span data-key="t-dashboards">Cms</span>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link menu-link @if (request()->routeIs('Inquiry')) {{ 'active' }} @endif"
                                href="{{ route('Inquiry') }}">
                                <i class="fa-solid fa-circle-question"></i>
                                <span data-key="t-dashboards">Contac Us Inquiry</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link menu-link @if (request()->routeIs('order.userpending')) {{ 'active' }} @endif"
                                href="{{ route('order.userpending') }}">
                                <i class="ri-briefcase-2-line"></i>
                                <span data-key="t-dashboards">Order</span>
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
