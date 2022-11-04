<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Universitas Nahdlatul Ulama Kalimantan Timur Adalah Universitas Berkelas Nasional Dari Nahdlatul Ulama yang Unggul dan Inovatif Untuk Mencerdaskan Kehidupan Bangsa">
    <meta name="keywords" content="UNU Kaltim, Universitas Nahdlatul Ulama Kalimantan Timur, Nahdlatul Ulama University of East Kalimantan, Kaltim, Kalimantan Timur, Samarinda, Samarinda Seberang, Loa Janan Ilir, Indonesia, Universitas Kerakyatan, Universitas Terbaik di Kalimantan Timur, Teknologi, Teknik, Engineering, Insinyur, pertanian, farmasi, pengobatan, akuntansi, pendidikan anak, pendidikan anak usia dini, informatika, hubungan internasional, ilmu komunikasi, industri, arsitektur, desain, desain interior, islam, Nahdlatul Ulama, Kuliah kerja nyata, peneltian, pengabdian pada masyarakat, Rapak Dalam, Teknologi Industri Pertanian, Mahasiswa, Universitas">
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
    <title>@yield('title') | {{ config('app.name') }}</title>
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
                            <img src="{{ asset('img/logo-teknik-white.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="exto-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('img/logo-teknik-white.png') }}" alt="logo">
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
                                        <a href="" class="nav-link">Profil Fakultas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            Profil Dosen Fakultas
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Profil Dosen Arsitektur</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Profil Dosen Desain Interior</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Profil Dosen Teknik Industri</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Profil Dosen Teknik Informatika</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Profil Dosen Teknologi Industri Pertanian</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Kerjasama Fakultas</a>
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
                                        <a href="" class="nav-link">Panduan Pendidikan Fakultas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Program Studi<i class="fa fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Arsitektur</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Desain Interior</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Teknik Industri</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Teknik Informatika</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Teknologi Industri Pertanian</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Kalender Akademik</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog') }}" class="nav-link">Berita </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dokumen') }}" class="nav-link">Dokumen</a>
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

    @yield('content')

    @include('landing-layouts.footer')
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