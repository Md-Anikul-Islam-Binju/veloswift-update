@extends('frontend.app')
@section('home_content')


<!-- Hero Section -->
<section id="hero" class="hero section light-background">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2>VeloSwift</h2>
                <p>we take pride in delivering innovative and high-quality IT solutions. Our completed projects showcase our expertise in transforming complex challenges into seamless, efficient systems that drive business success..</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{asset('images/slider/'. $slider->image )}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Software Development</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Web Application</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Mobile Application</a></h4>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Cloud Solutions</a></h4>
                    </div>
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
                <h3>Delivering Agile IT Solutions, VeloSwift Your Success</h3>
                <p class="fst-italic">
                    At VeloSwifte, we specialize in delivering innovative IT solutions that drive digital transformation. From web and mobile app development to custom websites and game creation, we combine technical expertise with a client-focused approach to bring your vision to life. Our agile processes and commitment to quality ensure fast, reliable results every time.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>We focus on bringing your vision to life with custom, cutting-edge solutions..</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Our streamlined processes ensure fast, reliable delivery without compromising quality.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>We specialize in web, mobile app, and game development tailored to your needs.</span></li>
                </ul>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
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
        <div><span>Check Our</span> <span class="description-title">Product</span></div>
    </div>
    <div class="container">
        <div class="row gy-4">
            @foreach($project as $projectData)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">

                        <img src="{{asset('images/project/'. $projectData->image )}}" alt="Current Image" style="max-width: 350px;">

                    <a href="service-details.html" class="stretched-link">
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
        <h2>Client</h2>
        <div><span>Check Our</span> <span class="description-title">Client</span></div>
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
                            <img class="me-3" src="{{asset('images/client/'. $clientData->logo )}}" style="height: 80px; width: 80px;" alt="">
                            <h3>{{$clientData->name}}</h3>
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
        <h2>Pricing</h2>
        <div><span>Check Our</span> <span class="description-title">Pricing</span></div>
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
                        <p>Dhaka, Bangladesh</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+8801905256528</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@veloswift.net/</p>
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
