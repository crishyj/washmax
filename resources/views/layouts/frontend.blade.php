<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- Styles -->
</head>
<body>
    <div id="app"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ml-auto">
                        <!-- Authentication Links -->
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                               Products
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('washMAX1000')}}">
                                    Vehicle Washbay Light Duty
                                </a>
                                <a class="dropdown-item" href="{{ route('washMAX1500') }}">
                                    Vehicle Washbay Medium Duty
                                </a>
                                <a class="dropdown-item" href="{{ route('washMAX3000') }}">
                                    Vehicle Washbay Heavy Duty
                                </a>
                                <a class="dropdown-item" href="{{ route('washMAX6000') }}">
                                    Travel-through Vehicle Wash Light Duty
                                </a>
                                <a class="dropdown-item" href="{{ route('washMAX8000') }}">
                                    Travel-through Vehicle Wash Medium Duty
                                </a>
                                <a class="dropdown-item" href="{{ route('washMAX9000') }}">
                                    Travel-through Vehicle Wash Heavy Duty
                                </a>                                
                                <a class="dropdown-item" href="{{ route('washMAX4000') }}">
                                    Vehicle Wash-down Ramp
                                </a>
                            </div>
                        </li>                

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hire') }}">{{ __('Hire') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('finance') }}">{{ __('Finance') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('parts') }}">{{ __('Parts') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sevices') }}">{{ __('Onsite Services') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('About Us') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact Us') }}</a>
                        </li>                             

                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <div class="footer">
            <div class="container">
                <div class="footer_detail">

                    <div class="footer_brand">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo.png') }}">
                        </a>
                    </div>                

                    <div class="ml-auto footer_icons">
                        <a href="">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
