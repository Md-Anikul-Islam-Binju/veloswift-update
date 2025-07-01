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
                <img src="{{URL::to('frontend/assets/img/hero-img.png')}}" class="img-fluid" alt="">
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
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Web Application</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Mobile Application</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <h4 class="title"><a href="" class="stretched-link">Cloud Solutions</a></h4>
                    </div>
                </div><!--End Icon Box -->

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
                <h3>Unleashing Potential with Creative Strategy</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
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

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Product</h2>
        <div><span>Check Our</span> <span class="description-title">Product</span></div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Nesciunt Mete</h3>
                    </a>
                    <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Eosle Commodi</h3>
                    </a>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Ledo Markt</h3>
                    </a>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Asperiores Commodit</h3>
                    </a>
                    <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Velit Doloremque</h3>
                    </a>
                    <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Dolori Architecto</h3>
                    </a>
                    <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section>

<!-- Client Section -->
<section id="features" class="features section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Client</h2>
        <div><span>Check Our</span> <span class="description-title">Client</span></div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5 justify-content-between">

            <div class="col-xl-5" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{URL::to('frontend/assets/assets/img//template/eStartup/features.svg')}}" class="img-fluid" alt="">
            </div>

            <div class="col-xl-6 d-flex">
                <div class="row align-self-center gy-4">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Eos aspernatur rem</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Facilis neque ipsa</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Volup amet volupt</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Rerum omnis sint</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Alias possimus</h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Repellendus molli</h3>
                        </div>
                    </div><!-- End Feature Item -->

                </div>
            </div>

        </div>

    </div>

</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <div><span>Check Our</span> <span class="description-title">Pricing</span></div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-tem">
                    <h3 style="color: #20c997;">Free Plan</h3>
                    <div class="price"><sup>$</sup>0<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-box" style="color: #20c997;"></i>
                    </div>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-tem">
                    <span class="featured">Featured</span>
                    <h3 style="color: #0dcaf0;">Starter Plan</h3>
                    <div class="price"><sup>$</sup>19<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-send" style="color: #0dcaf0;"></i>
                    </div>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-tem">
                    <h3 style="color: #fd7e14;">Business Plan</h3>
                    <div class="price"><sup>$</sup>29<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-airplane" style="color: #fd7e14;"></i>
                    </div>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li>Massa ultricies mi</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="pricing-tem">
                    <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                    <div class="price"><sup>$</sup>49<span> / mo</span></div>
                    <div class="icon">
                        <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                    </div>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li>Massa ultricies mi</li>
                    </ul>
                    <a href="#" class="btn-buy">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

        </div><!-- End pricing row -->

    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
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
