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
                                        N23 INNER BREADCRUMB
                                    ========================================================== -->
    <section class="n23-breadcrumb">
        <div class="n23-breadcrumb-overlay"></div>
        <div class="container">
            <div class="n23-breadcrumb-content">
                <h1>
                    Blog
                </h1>
                <div class="n23-breadcrumb-nav">
                    <a href="index.html">
                        Home
                    </a>
                    <span>
                        /
                    </span>
                    <strong>
                        Blog
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================================================
                                    N23 LATEST BLOG SECTION
                                ========================================================== -->
    <section class="n23-blog section-space">
        <div class="container">
            <!-- ==========================================
                                            BLOG GRID
                                        =========================================== -->
            <div class="row mb-4 g-4" id="n23BlogGrid">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article class="n23-blog-card">
                            <div class="n23-blog-thumb">
                                <img src="{{ asset('blogs/' . $blog->image) }}" alt="How to plan an international trip">
                                <div class="n23-blog-date">
                                    <span>{{ $blog->created_at->format('d') }}</span>
                                    {{ $blog->created_at->format('M') }}
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
            <!-- =========================
                                            BLOG PAGINATION
                                        ========================= -->
            <div class="n23-blog-pagination" id="n23BlogPagination" data-aos="fade-up">
                <a href="#" class="n23-pagination-arrow">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a href="#" class="active">
                    01
                </a>
                <a href="#">
                    02
                </a>
                <a href="#">
                    03
                </a>
                <span>
                    ...
                </span>
                <a href="#">
                    08
                </a>
                <a href="#" class="n23-pagination-arrow">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
