@extends('landing-layouts.app')
@section('title')
    Berita Fakultas Teknik
@endsection
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Berita</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Section -->
<section class="blog-section ptb-100">
    <div class="container">
        <div class="row">
            @foreach ($berita as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <a href="single-blog.html">
                            <img src="{{ url($item['banner']) }}" alt="image">
                        </a>
                    </div>
                    <div class="single-blog-item">
                        <div class="blog-content">
                            <a href="single-blog.html">
                                <h3>{{ $item['judul'] }}</h3>
                            </a>
                            <p>{!! $item['isi'] !!}</p>
                        </div>
                        <ul class="blog-list">
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar"></i>
                                    {{ \Carbon\Carbon::parse($item['created_at'])->locale('id')->isoFormat('DD MMMM Y') }}
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-user-alt"></i>
                                {{ $item['users']['name'] }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog Section -->
@endsection