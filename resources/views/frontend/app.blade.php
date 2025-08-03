<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>VeloSwift Home</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page">
@php
    $siteSetting = DB::table('site_settings')->first();
    $project = DB::table('projects')->where('status', 1)->get();
@endphp
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
        <span class="logo-lg">
                <img src="{{URL::to($siteSetting->logo??null)}}" alt="logo" style="height: 30px;">
        </span>
        </a>


        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>

                <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        @foreach($project as $projectData)
                        <li>
                            <a href="{{route('project.details',$projectData->id)}}">{{$projectData->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Pricing</a></li>
{{--                <li><a href="#features">Features</a></li>--}}
{{--                <li><a href="#pricing">Pricing</a></li>--}}
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">
    @yield('home_content')
</main>

<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Veloswift</strong> <span>All Rights Reserved</span></p>
        </div>
        <div class="social-links d-flex justify-content-center">
            <a href="https://x.com/veloswiftbd" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/veloswift" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/veloswiftbd" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/veloswift" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.youtube.com/@veloswiftbd" target="_blank"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
