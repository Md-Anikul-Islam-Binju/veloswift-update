@extends('frontend.app')
@section('home_content')

    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Who We Are</p>
                    <h3>Why VeloSwift Should be Your Technology Partner </h3>
                    <p class="fst-italic">
                        VeloSwift is a product of BackOffice, a technology company and your strategic ally. Our goal is to elevate your business with next-gen business solutions, unwavering security, and a commitment to your unique needs. Here’s why VeloSwift is the technological partner you need
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>We deliver flexible, cloud-based solutions that adapt seamlessly to any industry’s unique needs.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Our products integrate advanced features with user-friendly design, ensuring smooth operations and growth.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>We provide dedicated support and continuous innovation to keep your business ahead of the curve.</span></li>
                    </ul>
                </div>

                <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="{{URL::to('frontend/assets/img/about-company-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-lg-12">
                                    <img src="{{URL::to('frontend/assets/img/about-company-2.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{URL::to('frontend/assets/img/about-company-3.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
