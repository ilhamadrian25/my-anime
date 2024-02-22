@extends('layouts.app')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb sec-mar">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a class="active">Coming-Soon</a></li>
                </ul>
            </div>
        </div>
    </section>
    <br>
    <!--=====================================-->
    <!--=        Coming out Area Start     =-->
    <!--=====================================-->
    {{-- <section class="coming-out style-1 sec-mar  sec-pad">
        <div class="container">
            <div class="comingOut-content">
                <h2 class="title">ATTACK ON <br> TITANS</h2>
                <p class="light-text">Season 4</p>
                <p class="text">Menceritakan kisah tetang cinta eren dan mikasa yang terhalang author</p>
                <a href="#l" class="text-box active">Romance erenmika</a>
                <a href="#" class="text-box">Historical</a>
                <a href="#" class="text-box">Action</a>
                <p class="copyright-text">Coming Soon</p>
                <ul class="timer countdown">
                    <li>0<small>d</small></li>
                    <li>0<small>h</small></li>
                    <li>0<small>m</small></li>
                    <li>0<small>s</small></li>
                </ul>
            </div>
        </div>
    </section> --}}
    <section class="banner style-1 banner-slider">
        <div class="banner-block overflow-hidden style-1">
            <div class="container">
                <div class="banner-content">
                    <div class="row ">
                        <div class="col-lg-5 col-12 ">
                            <h2 class="title">ATTACK ON <br> <b>TITANS</b></h2>
                            <p class="text">SEASON 4 : Final Season</p>
                            <a href="#" class="text-box active">Action</a>
                            <a href="#" class="text-box">Overpower</a>
                            <a href="#" class="text-box">Romance</a>
                            <p class="text">Coming Soon</p>
                            <ul class="timer countdown">
                                <li>0<small>d</small></li>
                                <li>0<small>h</small></li>
                                <li>0<small>m</small></li>
                                <li>0<small>s</small></li>
                            </ul>
                            <br>
                            <p>Menceritakan kisah cinta antara eren dan mikasa, yang dimana kisah mereka terhalangi oleh authornya sendiri </p>
                            <a class="banner-btn" href="/watch"><i class="fas fa-play"></i> PLAY NOW</a>
                            <a class="banner-btn" href="/watch"><i class="fas fa-play"></i> Trailer</a>
                            {{-- disini nanti jika waktu udah menunjukan 00.00, maka button trailer akan berubah menjadi play --}}
                        </div>
                        <div class="col-lg-7 col-12">
                            <img src="{{ asset('media/banner/banner-img-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
