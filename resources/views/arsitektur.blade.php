@extends('landing-layouts.app')
@section('title')
Prodi Arsitektur
@endsection
@section('content')
<!-- Start Saas Home Area -->
<div class="saas-home-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="saas-image">
                            <img src="{{ asset('img/photos/header.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="hero-content">
                            <span><i class="far fa-dot-circle"></i> &nbsp; Program Studi Arsitektur</span>
                            <h1>Make Your Own Incredible Building</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolet suspendisse ultrices gravida. </p>
                            <div class="saas-btn">
                                <a href="pricing.html" class="saas-btn-one">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="circle-img">
                        <img src="{{ asset('img/shape/circle.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-img2">
        <div class="shape-bounce">
            <img src="{{ asset('img/shape/1.png') }}" alt="image">
        </div>
    </div>
</div>
</div>
<!-- End Saas Home Area -->

<!-- Start Blog Section -->
<section class="blog-section startup-blog pt-100 pb-70">
    <div class="container">
        <div class="blog-title">
            <span>News update</span>
            <h3>Seputar Arsitektur</h3>
            <div class="blog-btn">
                <a href="" class="blog-btn-one">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <a href="">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                        </a>
                    </div>
                    <div class="single-blog-item">
                        <div class="blog-content">
                            <a href="single-blog.html">
                                <h3>Boost your Startup agency with Digital Agency</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                        </div>
                        <ul class="blog-list">
                            <li>
                                <a href="single-blog.html">
                                    <i class="flaticon-user"></i> 
                                    Janathon Doe
                                </a>
                            </li>
                            <li>
                                <i class="flaticon-appointment"></i> 
                                03 January 2021
                            </li>
                        </ul>
                    </div>  
                </div>  
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <a href="">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                        </a>
                    </div>
                    <div class="single-blog-item">
                        <div class="blog-content">
                            <a href="single-blog.html">
                                <h3>Boost your Startup agency with Digital Agency</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                        </div>
                        <ul class="blog-list">
                            <li>
                                <a href="single-blog.html">
                                    <i class="flaticon-user"></i> 
                                    Janathon Doe
                                </a>
                            </li>
                            <li>
                                <i class="flaticon-appointment"></i> 
                                03 January 2021
                            </li>
                        </ul>
                    </div>  
                </div>  
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-image">
                        <a href="">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                        </a>
                    </div>
                    <div class="single-blog-item">
                        <div class="blog-content">
                            <a href="single-blog.html">
                                <h3>Boost your Startup agency with Digital Agency</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                        </div>
                        <ul class="blog-list">
                            <li>
                                <a href="single-blog.html">
                                    <i class="flaticon-user"></i> 
                                    Janathon Doe
                                </a>
                            </li>
                            <li>
                                <i class="flaticon-appointment"></i> 
                                03 January 2021
                            </li>
                        </ul>
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->

<section class="sambutan-section pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sambutan-area-content">
                    <img src="{{ asset('img/photos/sambutan.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="sambutan-area-content">
                    <h3>Sambutan Dekan <span class="bg">Fakultas Teknik</span> Universitas Nahdlatul Ulama Kalimantan Timur</h3>
                    <p>Melalui eksistensi Fakultas Teknik Universitas Nahdlatul Ulama Kalimantan Timur, kami berkomitmen untuk menjadi lembaga pendidikan tinggi yang terbaik di bidang teknik dan mencetak para profesional yang inovatif, adaptif dan berkeadaban bagi bangsa, negara serta masyarakat Indonesia. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Benefit Section -->
<section class="benefit-section pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Program Studi</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="benefit-area-content">
                    <img src="{{ asset('img/photos/arsitektur.png') }}" alt="">
                    <h3>Arsitektur</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores
                        natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="benefit-area-content">
                    <img src="{{ asset('img/photos/desain-interior.png') }}" alt="">
                    <h3>Desain Interior</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores
                        natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="benefit-area-content">
                    <img src="{{ asset('img/photos/teknik-industri.png') }}" alt="">
                    <h3>Teknik Industri</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores
                        natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="benefit-area-content">
                    <img src="{{ asset('img/photos/teknik-informatika.png') }}" alt="">
                    <h3>Teknik Informatika</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores
                        natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="benefit-area-content">
                    <img src="{{ asset('img/photos/tip.png') }}" alt="">
                    <h3>Teknologi Industri Pertanian</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores
                        natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Benefit Section -->

<section class="productive-section">
    <div class="container">
        <div class="productive-title">
            <h3>Aktivitas Mahasiswa</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="productive-area-content">
                    <img src="{{ asset('img/photos/magang-industri.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                <div class="productive-area-content">
                    <h3>Magang Industri</h3>
                    <p>Salah satu program yang wajib diikuti oleh seluruh mahasiswa Fakultas Teknik adalah magang industri baik di perusahaan mitra fakultas maupun yang bukan mitra fakultas. Guna Menunjang program magang industri, Fakultas Teknik telah menjalin banyak kerjasama baik itu instansi pemerintah maupun swasta</p>
                    <a href="" class="default-btn mt-5">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 align-self-center mt-2">
                <div class="productive-area-content">
                    <h3>Pembelajaran Hybrid</h3>
                    <p>Kegiatan pembelajaran di Fakultas Teknik dilaksanakan secara hybrid. Perkuliahan luring atau tatap muka dilangsungkan dengan penerapan protokol kesehatan yang ketat. Sedangkan perkuliahan daring dilaksanakan melalui platform elearning Universitas Nahdlatul Ulama Kalimantan Timur</p>
                    <a href="" class="default-btn mt-5">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                <div class="productive-area-content">
                    <img src="{{ asset('img/photos/pembelajaran-hybrid.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Project Section -->
<section class="project-section ptb-100">
    <div class="container">
        <div class="project-title">
            {{-- <span>Our Project Gallery</span> --}}
            <h3>Gallery Fakultas Teknik</h3>
            <div class="project-btn">
                <a href="single-projects.html" class="default-btn">Visit Gallery</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">SEO Consultancy</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">Digital Marketing</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">Social Media Marketing</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">SEO Consultancy</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">Digital Marketing</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-project-item">
                    <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                    <div class="project-content">
                        <h3>
                            <a href="single-projects.html">Social Media Marketing</a>
                        </h3>
                        <p>20, Deceember 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project Section -->

<!-- Start Partner Section -->
<div class="partner-section">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets-landing/img/partnar/1.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets-landing/img/partnar/2.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets-landing/img/partnar/3.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets-landing/img/partnar/4.png') }}" alt="partner">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets-landing/img/partnar/5.png') }}" alt="partner">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Section -->

</body>
@endsection