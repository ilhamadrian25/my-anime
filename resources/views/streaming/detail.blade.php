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
                    {{-- <li><a href="grid-view.html">Listing</a></li> --}}
                    <li><a class="active"> {{ Str::limit($anime->nama_jepang, 30, '...') }}
                            {{ $anime->season_name->season }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         video Area Start          =-->
    <!--=====================================-->
    <section class="video sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="trailer-box">
                                <img src="{{ asset('storage/anime/' . $anime->foto) }}" alt="" class="image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="trailer-content">
                                <h3>{{ $anime->nama_jepang }}</h3>
                                <p><span></span><b>{{ $anime->nama_inggris }}</b></p>
                                <p class="light-text">{{ $anime->season_name->season }}</p>
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                rx="1.34062" fill="#999999" />
                                            <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125" rx="1.34062"
                                                fill="#999999" />
                                            <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125" rx="1.34062"
                                                fill="#999999" />
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
                                            <a href="#" class="none"><i class="fa fa-check"></i> Watch Later
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-plus"></i> Add to Playlist </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Sinopsis</h3>
                                <p>{{ $anime->sinopsis }}</p>
                                <div class="d-flex pt-4">
                                    <a href={{ route('wacth-anime') }} class="anime-btn btn-dark border-change me-3">Read
                                        Last : {{ $episode->episode ?? '' }}</a>
                                    {{-- <a href="manga-content.html" class="anime-btn btn-dark">READ LAST</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="trailer-content">
                        <h3> Detail</h3>
                        <p><span>Type:</span> <b>{{ $anime->type_name->type }}</b></p>
                        <p><span>Studio:</span> <b>{{ $anime->studio_name->studio }}</b></p>
                        <p><span>Date aired:</span> {{ $anime->tanggal }}</p>
                        <p><span>Status:</span> <b>{{ $anime->status_name->status }}</b></p>
                        {{-- <p><span>Genre:</span> {{ $anime->genre_name->genre }}</p> --}}
                        <p><span>Country:</span> {{ $anime->country_name->country }}</p>
                        <p><span>Season:</span> {{ $anime->musim_name->musim }}</p>
                        <p><span>Duration:</span> {{ $anime->durasi }}</p>
                    </div>
                </div>
                <section class="relese sec-mar">
                    <div class="container">
                        <div class="d-flex pt-4">
                            <div class="col-lg-12 col-sm-6 col-12">
                                <h3 class="small-title">Episode</h3>
                                <ul class="video-sidebar overflow-auto">
                                    <div class="row">
                                        @foreach ($anime->episodes as $episode)
                                            <a href="{{ route('wacth-anime', $episode->id) }}">
                                                <h5>{{ $episode->episode ?? '' }} <span>Sunday 01 Jan 2023</span></h5>
                                            </a>
                                            <hr>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </section>
@endsection
