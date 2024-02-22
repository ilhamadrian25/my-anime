@extends('layouts.app')
@section('content')

    <body class="sticky-header">
        <!-- Preloader -->
        <div id="preloader">
            <img src="{{ asset('media/Anime-loop-preloader-white.gif') }}" alt="preloader" class="mb-5">
        </div>
        <!-- Back To Top Start -->
        <a href="#main-wrapper" id="backto-top" class="back-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <!-- Back To Top End -->
        <!-- Main Wrapper Start -->
        <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a>Genre</a></li>
                        <li><a class="active">Romance</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="main-wrapper" id="main-wrapper">

            <!--=====================================-->
            <!--=        anime Area Start          =-->
            <!--=====================================-->
            <section class="anime sec-mar">
                <div class="container">
                    <div class="heading style-1">
                        <h2>All Romance</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8 offset-md-0 offset-sm-2 col-12">
                            <div class="anime-box bg-color-black">
                                <a href="/detail">
                                    <div class="row m-0">
                                        <div class="p-0 col-2">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="p-0 col-9">
                                            <div class="anime-blog">
                                                <p>Darling in the Franxx!</p>
                                                <p class="text-box"><i class="fas fa-heart"></i> Like</p>
                                                <p class="text-box">Download</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8 offset-md-0 offset-sm-2 col-12">
                            <div class="anime-box bg-color-black">
                                <a href="/detail">
                                    <div class="row m-0">
                                        <div class="p-0 col-2">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="p-0 col-9">
                                            <div class="anime-blog">
                                                <p>Darling in the Franxx!</p>
                                                <p class="text-box"><i class="fas fa-heart"></i> Like</p>
                                                <p class="text-box">Download</p>
                                            </div>
                                        </div>
                                        <div class="p-0 col-1 show-type">
                                            <span class="show-type">TV</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrape">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link arrow" aria-label="Previous">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link current">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link arrow" aria-label="next">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    @endsection
