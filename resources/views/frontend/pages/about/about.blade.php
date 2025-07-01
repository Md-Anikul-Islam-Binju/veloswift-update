@extends('frontend.app')
@section('home_content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 text-white  mb-3 animated slideInDown">About</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="{{asset('frontend/img/about.png')}}" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h1 class=" text-primary mb-3">4 + Years</h1>
                            <h2 class=" mb-0">Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">About Us</p>
                    <h1 class=" mb-4">Who We Are?</h1>
                    <p>Welcome to 13space, a cutting-edge software company on a mission to revolutionize digital solutions. At 13space, we take pride in being a dynamic team of skilled software engineers committed to delivering exceptional web, desktop, and mobile applications tailored to our clients' unique needs.</p>
                    <p class="mb-4">Since our establishment, we've been at the forefront of innovation, partnering with a diverse range of companies and driving operational excellence for startups, emerging businesses, and established organizations, both locally and in the global freelance market.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class=" mb-3">Since 2021</h3>
                            <p class="mb-0">At 13space, we don't just build software; we cultivate partnerships and help businesses thrive.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class=" mb-3">100+ clients</h3>
                            <p class="mb-0">Our dedicated teams evolve with our clients, providing end-to-end solutions for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
