{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | Yayasan Digital</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('backend/img/icon.png') }}" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="bg-gray-100">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            {{-- @include('layouts.navigation')

            <!-- Page Content -->
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </body>
</html> --}}


<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title') | Yayasan Digital</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/img/icon.png') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="manifest" href="{{ asset('frontend/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">

</head>
<body class="theme-light bg-white" data-highlight="highlight-red">

    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page" data-swup="0" class="device-is-ios">   
        <div class="header header-fixed header-logo-left mb-3">
            <img src="{{ asset('backend/img/logo.png') }}" href="index.html" class="header-logo" alt="logo">
            <a href="#" class="header-icon header-icon-3 color-blue-dark">Pengunjung</a>
            <a href="#" class="header-icon header-icon-1 color-blue-dark">
                <i class="fa fa-user border border-primary rounded-circle p-2"></i>
            </a>
        </div>  
       
        @yield('content')

    </div>
    <script type="text/javascript" src="{{ asset('frontend/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/custom.js') }}"></script>
</body>
