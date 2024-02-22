<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from uiparadox.co.uk/public/templates/animeloop/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 12:30:23 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maonime | Nonton Anime Bahasa Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Site Stylesheet -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app2.css') }}"> --}}

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-266165434-1');
    </script>
   
</head>

<body class="">
    <div class=""></div>

    <main class="">
        @include('layouts.header')
        <div class="container-fluid py-4">
            @yield('content')
            @include('layouts.footer')
        </div>
    </main>
   
    <!-- Jquery Js -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('js/vendor/sal.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Site Scripts -->
    <script src="{{ asset('js/app2.js') }}"></script>

    @stack('script')
</body>
