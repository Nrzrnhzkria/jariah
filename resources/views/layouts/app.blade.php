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
    <div id="page">   
        <div class="header header-fixed header-logo-left mb-3">
            <img src="{{ asset('backend/img/logo.png') }}" href="index.html" class="header-logo" alt="logo">
            <a href="#" class="header-icon header-icon-3 text-primary">Pengunjung</a>
            <a href="#" class="header-icon header-icon-3">
                <svg width="118" height="32" viewBox="0 0 118 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="102" cy="16" r="15.5" stroke="#1D65BA"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M102.324 15.9773C99.0617 15.9773 96.4175 18.6216 96.4175 21.8834V22.8284C96.4175 23.2198 96.1002 23.5372 95.7087 23.5372C95.3173 23.5372 95 23.2198 95 22.8284V21.8834C95 17.8387 98.2789 14.5598 102.324 14.5598C106.368 14.5598 109.647 17.8387 109.647 21.8834V22.8284C109.647 23.2198 109.33 23.5372 108.938 23.5372C108.547 23.5372 108.23 23.2198 108.23 22.8284V21.8834C108.23 18.6216 105.585 15.9773 102.324 15.9773Z" fill="#1D65BA"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M97.8349 11.4887C97.8349 9.00964 99.8446 7 102.324 7C104.803 7 106.812 9.00963 106.812 11.4887C106.812 13.9676 104.803 15.9773 102.324 15.9773C99.8446 15.9773 97.8349 13.9676 97.8349 11.4887ZM102.324 8.41747C100.627 8.41747 99.2524 9.79248 99.2524 11.4887C99.2524 13.1848 100.627 14.5598 102.324 14.5598C104.02 14.5598 105.395 13.1848 105.395 11.4887C105.395 9.79249 104.02 8.41747 102.324 8.41747Z" fill="#1D65BA"/>
                </svg>
            </a>
        </div>    
        <div class="page-content header-clear">
            <div class="search-box search-header background-changer bg-theme">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Cari Kempen " data-search="">
                <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
            </div>
        </div>
       
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('frontend/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>
