@extends('blog.app')
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

<!-- Start Project Details Area -->
<section class="project-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="project-details-image">
                    <img src="{{ asset('assets-landing/img/services-details/1.jpg') }}" alt="projects">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="project-details-image">
                    <img src="{{ asset('assets-landing/img/services-details/2.jpg') }}" alt="projects">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="projects-details-desc">
                    <h3>Competitor Analysis</h3>
                    <p>Lorem ipsum dolor sit amet, conse cte tuer adipiscing elit, sed diam no nu m nibhie eui smod.
                        Facil isis atve eros et accumsan etiu sto odi dignis sim qui blandit praesen lup ta de er. At
                        molestiae appellantur pro. Vis wisi oportere per ic ula ad, ei latine prop riae na, mea cu purto
                        debitis.</p>
                    <div class="features-text">
                        <h4>
                            <i class="flaticon-check-mark"></i>
                            Core Development
                        </h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the
                            inspiration.</p>
                    </div>
                    <div class="features-text">
                        <h4>
                            <i class="flaticon-check-mark"></i>
                            Define Your Choices
                        </h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the
                            inspiration.</p>
                    </div>
                    <p>Nost rud no eos, no impedit dissenti as mea, ea vide labor amus neglegentur vix. Ancillae
                        intellegat vix et. Sit causae laoreet nolu ise. Ad po exerci nusquam eos te. Cu altera expet
                        enda qui, munere oblique theo phrastu ea vix. Ne nec modus civibus modera tius, sit ei lorem
                        doctus. Ne docen di verterem reformidans eos. Cu altera expetenda qui, munere oblique theophr
                        astus ea vix modus civiu mod eratius.</p>
                    <div class="project-details-info">
                        <div class="single-info-box">
                            <h4>Client</h4>
                            <span>James Anderson</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Category</h4>
                            <span>Network, Marketing</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Date</h4>
                            <span>February 28, 2021</span>
                        </div>
                        <div class="single-info-box">
                            <h4>Share</h4>
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
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-info-box">
                            <a href="#" class="default-btn">Live Preview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project Details Area -->
@endsection