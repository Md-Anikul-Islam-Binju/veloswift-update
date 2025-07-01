@extends('frontend.app')
@section('home_content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
                <h1>What We Provide</h1>
            </div>
            <div class="row g-4">
                @foreach($service as $serviceData)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                            <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="{{asset('images/service/'. $serviceData->image )}}" alt="">
                            </div>
                            <div class="ps-4">
                                <h3 class="mb-3">{{$serviceData->title}}</h3>
                                <p>{!! Str::limit($serviceData->details, 100) !!}</p>
                                <span class="text-primary">Choice Your Service</span>
                            </div>
                            <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
