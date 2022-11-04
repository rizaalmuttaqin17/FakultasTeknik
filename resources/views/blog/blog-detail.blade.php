@extends('landing-layouts.app')
@section('title')
    Detail Berita Fakultas Teknik
@endsection
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Detail Berita</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Detail Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="{{ url($berita['banner']) }}" alt="image">
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <span>Posted On :</span> 
                                    <a href="#">{{ \Carbon\Carbon::parse($berita['created_at'])->locale('id')->isoFormat('DD MMMM Y') }}</a>
                                </li>
                                <li>
                                    <span>Posted By :</span> 
                                    <a href="#">{{ $berita['users']['name'] }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3>{{ $berita['judul'] }}</h3>
                        <p>{!! $berita['isi'] !!}</p>
                    </div>
                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>
                            @foreach ($berita['tags'] as $item)
                                <a href="#">{{ $item['nama'] }}@if(!$loop->last),@endif</a>
                            @endforeach
                        </div>
                        {{-- <div class="article-share">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="post-navigation">
                        <div class="navigation-links">
                            {{-- <div class="nav-previous">
                                <a href="#">
                                    <i class="fa fa-arrow-left"></i> 
                                    Prev Post
                                </a>
                            </div>
                            <div class="nav-next">
                                <a href="#">
                                    Next Post 
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>
                    <section class="widget widget_zash_posts_thumb">
                        <h3 class="widget-title">Post Terbaru</h3>
                        @foreach ($beritas as $item)
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img">
                                    <img src="{{ url($berita['banner']) }}" alt="image">
                                </span>
                            </a>
                            <div class="info">
                                <time class="2021-06-30">{{ \Carbon\Carbon::parse($item['created_at'])->locale('id')->isoFormat('DD MMMM Y') }}</time>
                                <h4 class="title usmall">
                                    <a href="#">{{ $item['judul'] }}</a>
                                </h4>
                            </div>
                        </article>
                        @endforeach
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">Kategori</h3>
                        <ul>
                            @foreach ($kategori as $item)
                            <li><a href="#">{{ $item['kategori'] }}</a></li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            @foreach ($beritaTags as $item)
                                <a href="#">{{ $item['nama'] }} <span class="tag-link-count">({{ $item['beritaTags']->count() }})</span></a>
                            @endforeach
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
@endsection