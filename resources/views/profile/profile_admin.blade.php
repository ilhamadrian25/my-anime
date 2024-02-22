@extends('layouts.app')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="home.html">Anime</a></li>
                    <li><a class="active">Profile</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      Profile Area Start        =-->
    <!--=====================================-->
    <section class="policy content sec-mar">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <section class="profile sec-mar">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 col-sm-12 col-12">
                                    <div class="row pb-5">
                                        <div class="col-lg-8 col-sm-6 col-12">
                                            <div class="img-box">
                                                <img src="{{ asset('media/banner/gif1.gif') }}" alt="Gif Image">
                                            </div>
                                        </div>
                                        <div class="profile-seting col-lg-8 col-sm-6 col-12">
                                            <h5>{{ auth()->user()->name ?? '' }}</h5>
                                            <p>{{ auth()->user()->role ?? '' }} sejak 1991</p>
                                            <p class="pb-3">{{ auth()->user()->email ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="relese sec-mar">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <h3 class="small-title">History</h3>
                            <ul class="video-sidebar overflow-auto">
                                <div class="row">
                                    {{-- @foreach ($anime->episodes as $episode)
                                                                <a href="{{ route('wacth-anime', $episode->id) }}">
                                                                    <h5>{{ $episode->episode }} <span>Sunday 01 Jan 2023</span></h5>
                                                                </a>
                                                                <hr>
                                                            @endforeach --}}
                                </div>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <section class="relese sec-mar">
                <div class="row">
                    <a href="edit-profile.html" class="anime-btn btn-dark border-change">
                        EDIT PROFILE
                    </a>
                    <a href="{{ route('signout') }}" class="anime-btn btn-dark">
                        Sign Out
                    </a>
                    <a href="{{ route('detail.index') }}" class="anime-btn btn-dark border-change" target="_blank">
                        admin
                    </a>
                </div>
            </section>
        </div>
        </div>
    </section>
@endsection
