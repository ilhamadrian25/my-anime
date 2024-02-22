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
        <div class="main-wrapper" id="main-wrapper">
            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->

            <!--=====================================-->
            <!--=        Banner Area Start          =-->
            <!--=====================================-->

            {{-- <section class="banner style-1 banner-slider">
                <div class="banner-block overflow-hidden style-1">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row ">
                                <div class="col-lg-5 col-12 ">
                                    <h2 class="title">ATTACK ON <br> <b>TITANS</b></h2>
                                    <p class="text">SEASON 4 : Final Season</p>
                                    <a class="text-box active">Action</a>
                                    <a class="text-box active">Overpower</a>
                                    <a class="text-box active">Romance</a>
                                    <p class="text">Coming Soon</p>
                                    <ul class="timer countdown">
                                        <li>0<small>d</small></li>
                                        <li>0<small>h</small></li>
                                        <li>0<small>m</small></li>
                                        <li>0<small>s</small></li>
                                    </ul>
                                    <br>
                                    <p>Menceritakan kisah cinta antara eren dan mikasa, yang dimana kisah mereka terhalangi
                                        oleh authornya sendiri </p>
                                    <a href="#" class="banner-btn" data-bs-toggle="modal" data-bs-target="#videoModal"
                                        class="cus-btn filled"><i class="far fa-play"></i>Trailer</a>
                                </div>
                                <div class="col-lg-7 col-12">
                                    <img src="{{ asset('media/banner/banner-img-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-block overflow-hidden style-2">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row ">
                                <div class="col-lg-5 col-12">
                                    <h2 class="title">MY HERO<br> <b>ACADEMIA</b></h2>
                                    <p class="text">SEASON 4</p>
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
                                    <p>Menceritakan kisah cinta antara eren dan mikasa, yang dimana kisah mereka terhalangi
                                        oleh authornya sendiri </p>
                                    <a href="#" class="banner-btn" data-bs-toggle="modal" data-bs-target="#videoModal"
                                        class="cus-btn filled"><i class="far fa-play"></i>Trailer</a>
                                </div>
                                <div class="col-lg-7 col-12">
                                    <img src="{{ asset('media/banner/banner-img-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-block overflow-hidden style-3">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row ">
                                <div class="col-lg-5 col-12 ">
                                    <h2 class="title">ONE <b>PEICE</b></h2>
                                    <p class="text">SEASON 5</p>
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
                                    <p>Menceritakan kisah cinta antara eren dan mikasa, yang dimana kisah mereka terhalangi
                                        oleh authornya sendiri </p>
                                    <a href="#" class="banner-btn" data-bs-toggle="modal" data-bs-target="#videoModal"
                                        class="cus-btn filled"><i class="far fa-play"></i>Trailer</a>
                                </div>
                                <div class="col-lg-7 col-12">
                                    <img src="{{ asset('media/banner/banner-img-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <div class="video-content bg-color-black">
                <div class="row">
                    <h4 class="text-white">Pesan author</h4>
                    <p>Jika memang kamu yang memberikan rasa sakit ini<br>
                        Maka tanganmu itulah yang memberikan kami kebahagiaan<br>
                        Terasa egois jika aku melupakan rasa bahagia yang telah ku dapat, hanya karena kesedihan sesaat
                        Karena pada dasarnya, matahari yang terbit akan terbenam juga<br>
                        Meski terkadang hidup tidak berjalan sesuai rencana dan tidak seindah yang kita bayangkan
                        Tapi bukannya hidup itu mempunyai maknanya tersendiri</p>
                </div>
            </div>
            <div class="container">
                <div class="heading style-1">
                    <h2>Terakhir Ditonton</h2>
                </div>
            </div>
            <section class="banner style-3">
                <div class="container-fluid">
                    <div class="banner-frame">
                        <div class=" banner-block bg-color-black">
                            <div class="row">
                                <div class="col-lg-5 col-sm-5 col-6 d-flex align-items-center">
                                    <div class="banner-content">
                                        <h2 class="title">Overflow S2</h2>
                                        <a href="{{ route('wacth-anime') }}" class="banner-btn" class="cus-btn filled"><i
                                                class="far fa-play"></i>
                                            Eps 2</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-7 col-12 ">
                                    <a href="#" class="img-block">
                                        <img src="{{ asset('media/banner/banner-img-4.png') }}" class="dignole-img show-img"
                                            alt="">
                                        <img src="{{ asset('media/banner/banner-img-7.png') }}" class="dignole-img hide-img"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=====================================-->
            <!--=        Recent Area Start          =-->
            <!--=====================================-->
            <section class="recent sec-mar">
                <div class="container">
                    <div class="heading style-1">
                        <h2>Latest Episode<span><a href="/schedule" class="text-box active">Schedule</a></span></h2>
                    </div>
                    <div class="row">
                        @foreach ($anime as $no => $hasil)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="anime-blog">
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="img-block img-fluid">
                                        <img src="{{ asset('storage/anime/' . $hasil->foto) }}" alt="">
                                    </a>
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="action-overlay"><i
                                            class="fal fa-play-circle"></i>
                                        Play
                                        Now</a>
                                    <div class="detail">
                                        <div class="tags">
                                            <a href="{{ route('detail-anime', $hasil->id) }}" class="text-box">Episode
                                                1</a>
                                            <a href="#" class="text-box active">{{ $hasil->season_name->season }}</a>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <path
                                                        d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z"
                                                        fill="#999999" />
                                                    <path
                                                        d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z"
                                                        fill="#999999" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like </a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-download"></i> Unduh Batch </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-anime', $hasil->id) }}">
                                        <p>{{ Str::limit($hasil->nama_jepang, 18, '...') }} </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--=====================================-->
            <!--=        Popular Anime Area Start =-->
            <!--=====================================-->
            <section class="popular sec-mar">
                <div class="container">
                    <div class="heading style-1">
                        <h2>Completed Anime<span><a href="/completed-anime" class="text-box active">See all</a></span>
                        </h2>
                    </div>
                    <div class="row">
                        @foreach ($anime as $no => $hasil)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="anime-blog">
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="img-block img-fluid">
                                        <img src="{{ asset('storage/anime/' . $hasil->foto) }}" alt="">
                                    </a>
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="action-overlay"><i
                                            class="fal fa-play-circle"></i>
                                        Play
                                        Now</a>
                                    <div class="detail">
                                        <div class="tags">
                                            <a href="{{ route('detail-anime', $hasil->id) }}" class="text-box">Episode
                                                1</a>
                                            <a href="#"
                                                class="text-box active">{{ $hasil->season_name->season }}</a>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <path
                                                        d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z"
                                                        fill="#999999" />
                                                    <path
                                                        d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z"
                                                        fill="#999999" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like </a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-download"></i> Unduh Batch </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-anime', $hasil->id) }}">
                                        <p>{{ Str::limit($hasil->nama_jepang, 18, '...') }} </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--=====================================-->
            <!--=        Popular Anime Area Start =-->
            <!--=====================================-->
            <section class="popular sec-mar">
                <div class="container">
                    <div class="heading style-1">
                        <h2>Movie<span><a href="/movie-anime" class="text-box active">See all</a></span></h2>
                    </div>
                    <div class="row">
                        @foreach ($anime as $no => $hasil)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="anime-blog">
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="img-block img-fluid">
                                        <img src="{{ asset('storage/anime/' . $hasil->foto) }}" alt="">
                                    </a>
                                    <a href="{{ route('detail-anime', $hasil->id) }}" class="action-overlay"><i
                                            class="fal fa-play-circle"></i>
                                        Play
                                        Now</a>
                                    <div class="detail">
                                        <div class="tags">
                                            <a href="{{ route('detail-anime', $hasil->id) }}" class="text-box">Episode
                                                1</a>
                                            <a href="#"
                                                class="text-box active">{{ $hasil->season_name->season }}</a>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125"
                                                        rx="1.34062" fill="#999999" />
                                                    <path
                                                        d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z"
                                                        fill="#999999" />
                                                    <path
                                                        d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z"
                                                        fill="#999999" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like </a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-download"></i> Unduh Batch </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-anime', $hasil->id) }}">
                                        <p>{{ Str::limit($hasil->nama_jepang, 18, '...') }} </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--=====================================-->
            <!--=          Modal Area Start       =-->
            <!--=====================================-->
            <!-- modal-popup area start  -->
            <div class="modal fade" id="videoModal" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="top_bar">
                            <h4 class="modal-title">Trailer : Demon Slayer Season 4</h4>
                            <button type="button" class="close" id="closeVideoModalButton" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times"></i> <b>Close</b></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <video controls title="Video">
                                <source src="{{ asset('media/video/Eps.6.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal-popup area end  -->
            <!--=====================================-->
            <!--=           Footer Area Start       =-->
            <!--=====================================-->
        </div>
    </body>
@endsection
