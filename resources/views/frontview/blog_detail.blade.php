@extends('layouts.front')
@section('title', config('app.name') . '' . ($meta->meta_tittle ?? ''))
@section('opTag')
    {{-- Meta tags --}}
    <meta name="description" content="{{ $meta->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $meta->metaKeyword ?? '' }}">
    <meta name="title" content="{{ $meta->meta_tittle ?? '' }}">
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
                    Blog
                </h1>
                <div class="n23-breadcrumb-nav">
                    <a href="{{ route('index') }}">
                        Home
                    </a>
                    <span>
                        /
                    </span>
                    <a href="{{ route('blog') }}">
                        Blog
                    </a>
                    <span>
                        /
                    </span>
                    <strong>
                        {{ $Blog->name ?? '' }}
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <!-- =====================================================
                                                             N23 BLOG DETAIL SECTION
                                                        ===================================================== -->
    <section class="n23-blog-detail-section">
        <div class="container">
            <div class="row g-5">
                <!-- =========================
                                                                            MAIN BLOG CONTENT
                                                                        ========================= -->
                <div class="col-lg-8">
                    <article class="n23-blog-detail-content" data-aos="fade-up">
                        <h1>
                            {{ $Blog->name ?? '' }}
                        </h1>
                        <div class="n23-blog-detail-meta">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                {{ $Blog->created_at->format('F d, Y') }}
                            </span>
                        </div>
                        <div class="n23-blog-detail-image">
                            <img src="{{ asset('blogs/' . $Blog->image) }}" alt="Blog Image">
                        </div>
                        <!-- =========================
                                                                                    BLOG DESCRIPTION
                                                                                ========================= -->
                        <div class="n23-blog-description">
                            <p>
                                {!! $Blog->description !!}
                            </p>
                        </div>
                    </article>
                </div>
                <!-- =========================
                                                                            RELATED BLOG SIDEBAR
                                                                        ========================= -->
                <div class="col-lg-4">
                    <aside class="n23-related-blog" data-aos="fade-left">
                        <div class="n23-related-heading">
                            <span>
                                EXPLORE MORE
                            </span>
                            <h3>
                                Related Blogs
                            </h3>
                        </div>
                        @foreach ($RecentBlog as $recblog)
                            <a href="{{ route('blogdetail', $recblog->slugname) }}" class="n23-related-item">
                                <div class="n23-related-image">
                                    <img src="{{ asset('blogs/' . $recblog->image) }}">
                                </div>
                                <div class="n23-related-content">
                                    <h4>
                                        {{ $Blog->name ?? '' }}
                                    </h4>
                                    <span>
                                        <i class="bi bi-calendar3"></i>
                                        {{ $recblog->created_at->format('F d, Y') }}
                                    </span>
                                </div>
                            </a>
                        @endforeach

                    </aside>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
