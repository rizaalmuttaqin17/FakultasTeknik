<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ asset('assets-landing/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/flaticon-two.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/flaticon-three.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/odometer.min.css') }}">    
        <link rel="stylesheet" href="{{ asset('assets-landing/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/progressbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-landing/css/responsive.css') }}">

        <title>Fakultas Teknik UNU Kaltim</title>

        <link rel="icon" type="image/png" href="{{ asset('assets-landing/img/favicon.png') }}">
    </head>

    <body>
        
        <!-- Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="exto-responsive-nav">
                <div class="container">
                    <div class="exto-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('img/logo-teknik.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="exto-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('img/logo-teknik.png') }}" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Profil 
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Sejarah Fakultas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Visi, Misi, dan Tujuan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Profil Staff Dosen</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Akademik 
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Panduan Pendidikan FT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Program Studi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Kalender Akademik</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Berita </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Dokumen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Repository</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

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
                                    <span><i class="far fa-dot-circle"></i> &nbsp; Fakultas Teknik UNU Kaltim</span>
									<h1>Advancing Society Through Excellent People</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida. </p>
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

        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-fact row">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/icon/prodi.png') }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3><span class="odometer" data-count="5">00</span></h3>
                                <p>Program Studi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-fact row">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/icon/prodi.png') }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>
                                    <span class="odometer" data-count="700">00</span><span class="sign-icon">+</span>
                                </h3>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-fact row">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/icon/prodi.png') }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>
                                    <span class="odometer" data-count="30">00</span><span class="sign-icon">+</span>
                                </h3>
                                <p>Dosen Profesional</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-fact row">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/icon/prodi.png') }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>
                                    <span class="odometer" data-count="10">00</span><span class="sign-icon">+</span>
                                </h3>
                                <p>Penghargaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

        <!-- Start Software Section -->
        <section class="software-section pt-70 pb-70">
            <div class="container">
                <div class="software-title">
                    <h2>Blog</h2>
                </div>
                <div class="tab software-list-tab">
                    <ul class="tabs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Akademik</a></li>
                        <li><a href="#">Desain</a></li>
                        <li><a href="#">Industri</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Pertanian</a></li>
                        <li><a href="#">Lainnya</a></li>
                    </ul>
                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center">
                                                    <ul class="blog-list">
                                                        <li>
                                                            <span>Teknik Industri</span>
                                                        </li>
                                                        <li>30 January 2021</li>
                                                    </ul>
                                                    <h2 class="mb-4">Teknologi Semi Cair dan Padat</h2>
                                                    <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <img class="blog-img" src="{{ asset('img/photos/blog.png') }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="blog">
                                        <a href="">
                                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                                            <ul class="blog-list mt-3">
                                                <li><span>Teknik Industri</span></li>
                                                <li>30 January 2021</li>
                                            </ul>
                                            <h3>Teknologi Semi Cair dan Padat</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Software Section -->

        <!-- Start Benefit Section -->
        <section class="benefit-section pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Program Studi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="benefit-area-content">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                            <h3>Arsitektur</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="benefit-area-content">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                            <h3>Desain Interior</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="benefit-area-content">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                            <h3>Teknik Industri</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="benefit-area-content">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                            <h3>Teknik Informatika</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="benefit-area-content">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="">
                            <h3>Teknologi Industri Pertanian</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quos et. Quibusdam asperiores natus est nisi, enim, laudantium ut deleniti optio aspernatur deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Benefit Section -->

        <section class="productive-section">
            <div class="container">
                <div class="productive-title">
                    <h3>Kenapa Harus Memilih Fakultas Teknik</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing  seore suspendisse ultrices gravir.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-headphones"></i>
                            </div>
                            <h3>Customer Assistance</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-tag"></i>
                            </div>
                            <h3>Affordable Prices</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-cyber-security"></i>
                            </div>
                            <h3>Global Presence</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-innovation"></i>
                            </div>
                            <h3>Innovative Ideas</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-content"></i>
                            </div>
                            <h3>Content Marketing</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="productive-area-content">
                            <div class="icon">
                                <i class="flaticon-unlink"></i>
                            </div>
                            <h3>Pro Building Services</h3>
                            <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Support Section -->
        <section class="support-section pt-70 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="support-image">
                            <img src="{{ asset('img/photos/blog.png') }}" alt="image">
                            <div class="support-arrow">
                                <img src="{{ asset('assets-landing/img/support/3.png') }}" class="wow fadeInRight" data-wow-delay="0.6s" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="support-area-content">
                            <h3>Mari Bergabung Bersama Kami</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, temporibus autem! Provident, soluta quod atque libero magnam accusamus quasi inventore enim accusamus quasi laboriosam voluptates laudantium veritatis aliquid labore error molestiae nulla?</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur, impedit debitis! Ipsum ratione dolore sit numquam dicta ex officiis accusantium accusamus iure nihil? Accusamus aspernatur harum provident.</p>
                            <div class="support-btn">
                                <a href="#" class="default-btn">
                                    Learn More 
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Support Section -->

        <!-- Start Partner Section -->
        <div class="partner-section pb-70">
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

        <!-- Start Footer Section -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-area-content">
                            <img src="{{ asset('img/logo-teknik.png') }}" alt="image">
                            <p>Jl. KH. Harun Nafsi Gg. Dharma, Kel. Rapak Dalam Kec. Loa Janan Ilir Samarinda</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Company</h3>
                            <ul class="footer-quick-links">
                                <li>
                                    <a href="#">Support Center</a>
                                </li>
                                <li>
                                    <a href="#">Popular Campaign</a>
                                </li>
                                <li>
                                    <a href="#">Customer Support</a>
                                </li>
                                <li>
                                    <a href="#">Copyright</a>
                                </li>
                                <li>
                                    <a href="#">Latest News</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>My Account</h3>
                            <ul class="footer-quick-links">
                                <li>
                                    <a href="#">Speaker requests</a>
                                </li>
                                <li>
                                    <a href="#">Images and b-roll</a>
                                </li>
                                <li>
                                    <a href="#">Social media directories</a>
                                </li>
                                <li>
                                    <a href="#">Permissions</a>
                                </li>
                                <li>
                                    <a href="#">Press inquiries</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Our Information</h3>
                            <ul class="footer-quick-links address-link">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>
                                        121 King St, VIC 3000, Australia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                        teknik@unukaltim.ac.id
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone"></i>
                                        098-123-23455
                                    </a>
                                </li>
                            </ul>
                            <ul class="social-list">
                                <li>
                                    <a href="#" class="facebook" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright © 2022 UNU Kaltim. All Rights Reserved
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets-landing/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets-landing/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('assets-landing/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('assets-landing/js/particles.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/progressbar.min.js') }}"></script>
        <script src="{{ asset('assets-landing/js/main.js') }}"></script>
    </body>
</html>