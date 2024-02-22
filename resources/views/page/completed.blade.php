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
                        <li><a >Page</a></li>
                        <li><a class="active">Completed Anime</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="main-wrapper" id="main-wrapper">
            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->

            <!--=====================================-->
            <!--=        Recent Area Start          =-->
            <!--=====================================-->
            <section class="recent sec-mar">
                <div class="container">
                    <div class="heading style-1">
                        <h2>Completed Anime</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-2.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i> Play Now</a>
                                {{-- <audio controls id='audio' class="audio-controls" class="action-overlay">
                                    <source src="video/music.mp3" type="audio/mpeg"><i class="fal fa-play-circle"></i>
                                </audio> --}}
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>My Hero Academia</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-21.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>Black Bullet</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="streaming-movie.html" class="img-block">
                                    <img src="{{ asset('media/anime/img-7.png') }}" alt="">
                                </a>
                                <a href="streaming-movie.html" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play
                                    Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="streaming-movie.html">
                                    <p>Your Name</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-8.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>Darling in the Frax!</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-5.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>Haikyu</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-22.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>Kiznaiver</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-6.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>Psycho Pass</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="anime-blog">
                                <a href="/detail" class="img-block">
                                    <img src="{{ asset('media/anime/img-4.png') }}" alt="">
                                </a>
                                <a href="/detail" class="action-overlay"><i class="fal fa-play-circle"></i>
                                    Play Now</a>
                                <div class="detail">
                                    <div class="tags">
                                        <a href="/detail" class="text-box">dub</a>
                                        <a href="/detail" class="text-box">sub</a>
                                        <p class="text">TV</p>
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
                                <a href="/detail">
                                    <p>One Piece</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=====================================-->
            <!--=           Footer Area Start       =-->
            <!--=====================================-->
        </div>
    </body>
@endsection
