@extends('frontend.app')
@section('home_content')


<!-- Slider Section -->
<section id="hero" class="hero section light-background">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2>{{$slider->title}}</h2>
                <p>{!! $slider->details !!}</p>
                <div class="d-flex">
                    <a href="#services" class="btn-get-started">Get Started</a>
{{--                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>--}}
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{asset('images/slider/'. $slider->image?? null )}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>



    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <!-- Service 1 -->
                <div class="col-xl-3 col-md-6">
                    <div class="icon-box" data-bs-toggle="modal" data-bs-target="#modalSoftware">
                        <div class="icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h4 class="title"><a href="javascript:void(0);" class="stretched-link">Software Development</a></h4>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-xl-3 col-md-6">
                    <div class="icon-box" data-bs-toggle="modal" data-bs-target="#modalWebsite">
                        <div class="icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="title"><a href="javascript:void(0);" class="stretched-link">Website Development</a></h4>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-xl-3 col-md-6">
                    <div class="icon-box" data-bs-toggle="modal" data-bs-target="#modalMobile">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="title"><a href="javascript:void(0);" class="stretched-link">Mobile App Development</a></h4>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-xl-3 col-md-6">
                    <div class="icon-box" data-bs-toggle="modal" data-bs-target="#modalTesting">
                        <div class="icon">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <h4 class="title"><a href="javascript:void(0);" class="stretched-link">Testing & Maintenance</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal: Software Development -->
    <div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="modalSoftwareLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSoftwareLabel">Software Development</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    VeloSwift offers custom software and SaaS product development tailored to your business needs. We build scalable, secure, and reliable solutions designed to grow with you. From planning to delivery, we ensure on-time project completion at an affordable cost—empowering your business with the right technology.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Website Development -->
    <div class="modal fade" id="modalWebsite" tabindex="-1" aria-labelledby="modalWebsiteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalWebsiteLabel">Website Development</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    We craft modern, creative websites using the latest tech frameworks to ensure a stunning, responsive user experience. Our eCommerce development includes advanced technology and API integration for smooth connectivity with both external and internal systems—boosting performance, automation, and business growth..
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Mobile App Development -->
    <div class="modal fade" id="modalMobile" tabindex="-1" aria-labelledby="modalMobileLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMobileLabel">Mobile App Development</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    VeloSwift provides cutting-edge mobile app development tailored to your needs. We build high-quality Android and iOS apps with modern UI, smooth performance, and scalable features—delivering a seamless user experience that evolves with your business.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Testing & Maintenance -->
    <div class="modal fade" id="modalTesting" tabindex="-1" aria-labelledby="modalTestingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTestingLabel">Testing & Maintenance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    VeloSwift offers website and software testing services, including QA, to ensure your solutions are bug-free, reliable, and performance-optimized. Our expert team provides continuous monitoring and maintenance to keep your systems running smoothly and efficiently..
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- About Section -->
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
                <a href="{{route('about')}}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
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

<!-- Product Section -->
<section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Product</h2>
        <div><span>Check Our</span> <span class="description-title">Products</span></div>
    </div>
    <div class="container">
        <div class="row gy-4">
            @foreach($project as $projectData)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">

                        <img src="{{asset('images/project/'. $projectData->image )}}" alt="Current Image" style="width: 350px; height: 200px;">

                    <a href="{{route('project.details',$projectData->id)}}" class="stretched-link">
                        <h3>{{$projectData->title}}</h3>
                    </a>
                    <p>{{ strip_tags($projectData->details) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Client Section -->
<section id="features" class="features section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <div><span>Check Our Clients and</span> <span class="description-title">Their Feedbacks</span></div>
    </div>
    <div class="container">
        <div class="row gy-5 justify-content-between">
            <div class="col-xl-5" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{URL::to('frontend/assets/assets/img//template/eStartup/features.svg')}}" class="img-fluid" alt="">
            </div>

            <div class="col-xl-6 d-flex">
                <div class="row align-self-center gy-4">
                    @foreach($client as $clientData)
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature-box d-flex align-items-center ">
                            <a href="{{$clientData->link}}" target="_blank">
                                <img class="me-3" src="{{asset('images/client/'. $clientData->logo )}}" style="height: 80px; width: 80px;" alt="">
                                <h3>{{$clientData->name}}</h3>
                            </a>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Price Quotes</h2>
        <div><span>Check Price Quotes</span> <span class="description-title">for You</span></div>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                    <h3 style="color: #20c997;">Basic Plan</h3>
                    <div class="price"><sup>$</sup>50<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-box" style="color: #20c997;"></i>
                    </div>
                    <ul>
                        <li>Project Manage</li>
                        <li>Database Support</li>
                        <li>Server Management</li>
                        <li class="na">Code Script</li>
                        <li class="na">Unlimited POS</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-tem">
                    <span class="featured">Featured</span>
                    <h3 style="color: #0dcaf0;">Starter Plan</h3>
                    <div class="price"><sup>$</sup>20<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-send" style="color: #0dcaf0;"></i>
                    </div>
                    <ul>
                        <li>Project Manage</li>
                        <li>Database Support</li>
                        <li class="na">Server Management</li>
                        <li class="na">Code Script</li>
                        <li class="na">Unlimited POS</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-tem">
                    <h3 style="color: #fd7e14;">Business Plan</h3>
                    <div class="price"><sup>$</sup>100<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-airplane" style="color: #fd7e14;"></i>
                    </div>
                    <ul>
                        <li>Project Manage</li>
                        <li>Database Support</li>
                        <li>Server Management</li>
                        <li>Code Script</li>
                        <li class="na">Unlimited POS</li>
                        <li class="na">Unlimited SAAS</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="pricing-tem">
                    <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                    <div class="price"><sup>$</sup>250<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                    </div>
                    <ul>
                        <li>Project Manage</li>
                        <li>Database Support</li>
                        <li>Server Management</li>
                        <li>Code Script</li>
                        <li>Unlimited POS</li>
                        <li>Unlimited SAAS</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->
        </div><!-- End pricing row -->
    </div>
</section>

<!-- Faq Section -->
<section id="faq" class="faq section light-background">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                    <p>Why VeloSwift Should be Your Technology Partner </p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    <div class="faq-item faq-active">
                        <h3><span class="num">1.</span> <span>What is VeloSwift and how can it help my business?</span></h3>
                        <div class="faq-content">
                            <p>VeloSwift is an all-in-one destination for powerful SaaS solutions, including ERP, POS, CRM, travel booking, shipping, and more. Our cloud-based tools help businesses run smarter, faster, and more efficiently.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">2.</span> <span>What makes VeloSwift different from other SaaS solution providers?</span></h3>
                        <div class="faq-content">
                            <p>VeloSwift offers an all-in-one suite of powerful, cloud-based tools—like ERP, POS, CRM, travel booking, and more—designed to help your business work smarter, faster, and more efficiently, all under one trusted platform.

                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">3.</span> <span>Do you provide custom services along with your software products? </span></h3>
                        <div class="faq-content">
                            <p>Yes! In addition to our SaaS products, we offer services like Website Design, eCommerce Development, Software Development, Mobile App Development, Monitoring & Maintenance, Software Testing & QA, IT/IS Audit, VA/PT services, and ISO 9001:2015 & ISO 27001:2022 certification support. </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">4.</span> <span>Is VeloSwift’s software cloud-based and secure?</span></h3>
                        <div class="faq-content">
                            <p>Absolutely. All our solutions are cloud-based, ensuring easy access anytime, anywhere. We prioritize data security and compliance to help you manage sensitive information with confidence. </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">5.</span> <span>Do you provide ongoing support and maintenance?</span></h3>
                        <div class="faq-content">
                            <p>Yes, we do. VeloSwift offers reliable monitoring, maintenance, software testing, QA, and IT/IS audits to keep your systems running smoothly so you can focus on your business, not the tech headaches.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">6.</span> <span>How do I get started with VeloSwift?</span></h3>
                        <div class="faq-content">
                            <p>Getting started is easy! Contact us for a free consultation, and we’ll guide you to the best solution for your business needs. Our team will help you set up, customize, and maintain your chosen software or service.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>
        </div>

    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
    </div>
    <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>House 545/A, Road 11, Adabor, Dhaka 1207</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+8801713738396
                        </p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>business@veloswift.net</p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>
@endsection
