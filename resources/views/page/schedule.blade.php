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
                    <li><a href="grid-view.html">Page</a></li>
                    <li><a class="active">Release Schedule</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Schedule Area Start        =-->
    <!--=====================================-->
    <section class="schedule style-1 sec-mar">
        <div class="container">
            <div class="heading style-1">
                {{-- <h2>weekly schedule</h2> --}}
            </div>
            <div class="schedule-box">
                <div class="card">
                    <div class="card-header">
                        <ul class="date-slider nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link text-center active" aria-current="true" data-bs-toggle="tab"
                                    href="#sunday">
                                    <h2>Sun</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center active" aria-current="true" data-bs-toggle="tab"
                                    href="#sunday">
                                    <h2>Mon</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab" href="#tuesday">
                                    <h2>Tue</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab" href="#wednesday">
                                    <h2>Wed</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab" href="#thursday">
                                    <h2>thu</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab" href="#friday">
                                    <h2>fri</h2>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" aria-current="true" data-bs-toggle="tab" href="#saturday">
                                    <h2>sat</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body style-1 tab-content">
                        <div class="row justify-content-between mb-3">
                            {{-- <div class="col-lg-2 col-md-3 col-sm-3 col-0">
                                <h4>Anime Details</h4>
                            </div> --}}
                            {{-- <div class="col-lg-8 col-md-6 col-sm-9 col-12">
                                <ul class="timer countdown text-center">
                                    <li>0<small>d</small></li>
                                    <li>0<small>h</small></li>
                                    <li>1<small>m</small></li>
                                    <li>1<small>y</small></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="col-lg-2 col-md-3 col-sm-0 col-0 text-end">
                                <h4>Episode</h4>
                            </div> --}}
                        </div>
                        <div class="tab-pane active" id="sunday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0 ">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="monday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="tuesday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="wednesday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="thursday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="friday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="saturday">
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-1.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Darling in the Franxx!</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-2.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Plastic Memories</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-3.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">That Time I Reincarnated As a Slime
                                                        Season 2</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-4.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Assassination Classroom</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-5.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">Chainsaw Man</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">TV</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <hr>
                            <div class="row  align-items-center">
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-0">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-10 col-12">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3 ps-0 pe-0 text-end">
                                            <img src="{{ asset('media/anime-sm-img/anime-img-6.png') }}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-9">
                                            <div class="schedule-content align-middle">
                                                <a href="/detail">
                                                    <p class="small-title">No Game No Life Zero</p>
                                                </a>
                                                    <p class="text-box">Action 8</p>
                                                    <p class="text-box">Romance 12</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-0">
                                            <p class="text text-end">Movie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
