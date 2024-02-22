<header class="header style-1">
    <div class="container">
        <!-- Start Mainmenu Nav -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="{{ asset('media/push-removebg-preview.png') }}"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto mainmenu">
                    <li class="menu-item-has-children">
                        <a href="/" class="active">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#Pages" class="dropdown-toggle" id="pages" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">Genre</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                            @foreach ($genre as $no => $hasil)
                                <li>
                                    <a href="/genre-anime" class="active">{{ $hasil->genre }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#Pages" class="dropdown-toggle" id="pages" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">Page</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                            <li>
                                <a href="home.html" class="active">On-going</a>
                            </li>
                            <li>
                                <a href="/completed-anime">Complete</a>
                            </li>
                            <li>
                                <a href="/movie-anime">Movie</a>
                            </li>
                            <li>
                                <a href="home-2.html">Ova</a>
                            </li>
                            <li>
                                <a href="/schedule">Jadwal tayang</a>
                            </li>
                            <li>
                                <a href="/coming-soon">coming-soon</a>
                            </li>
                            <li>
                                <a href="/coming-soon">favorite</a>
                            </li>
                            <li>
                                <a href="/coming-soon">Lainnya</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a href="#Pages" class="dropdown-toggle" id="pages" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">Alert</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptate accusantium
                                aperiam nulla minima in repellat, ullam quis a soluta laboriosam vitae ex sint sit
                                temporibus, eos excepturi! Sed, esse.</p>
                        </ul>
                    </li> --}}
                </ul>
                <form action="/list-search">
                    <div class="input-group form-group header-search-box">
                        <button class="input-group-text anime-btn" type="submit"><i class="fal fa-search"></i></button>
                        <input class="form-control" name="search" type="text" placeholder="Search">
                    </div>
                </form>
                <div class="d-flex right-nav">
                    @if (auth()->check())
                    @if (auth()->user()->role == 'admin' )
                        <!-- Jika sudah login, tampilkan tombol ke profil -->
                        <a href="{{ route('profile-admin') }}" class="anime-btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B"
                            d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                    </svg>
                            {{ auth()->user()->name ?? '' }}
                        </a>
                        @elseif (auth()->user()->role == 'anggota' )
                        <a href="{{ route('profile-anggota') }}" class="anime-btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B"
                            d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                    </svg>
                            {{ auth()->user()->name ?? '' }}
                        </a>
                        @endif 
                    @else
                        <!-- Jika belum login, tampilkan tombol login -->
                        <a href="{{ route('login') }}" class="anime-btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                               <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B"
                            d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                    </svg>
                            Login
                        </a>
                    @endif

                    {{-- <a href="{{ route('login') }}" class="anime-btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg"
                            height="32" width="32"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B"
                                d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                        </svg> {{ auth()->user()->name ?? '' }}</a> --}}
                </div>
            </div>
        </nav>
    </div>
</header>
