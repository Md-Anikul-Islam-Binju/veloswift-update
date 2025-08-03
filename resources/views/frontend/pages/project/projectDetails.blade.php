
@extends('frontend.app')
@section('home_content')
    <section id="services" class="services section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Product</h2>
                <div><span>Check Our</span> <span class="description-title">Products</span></div>
            </div>

            <div class="row gy-4">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">

                        {{-- Responsive Image Frame --}}
                        <div class="ratio ratio-4x3 rounded overflow-hidden">
                            <img src="{{ asset('images/project/' . $project->image) }}"
                                 alt="Current Image"
                                 class="w-100 h-100 object-fit-cover">
                        </div>

                        <a href="service-details.html" class="stretched-link">
                            <h3 class="mt-3">{{ $project->title }}</h3>
                        </a>
                        <p>{{ strip_tags($project->details) }}</p>
                    </div>
                </div>
            </div>

            {{-- Optional: Also add it at the bottom --}}
            <div class="text-center mt-5">
                <a href="{{ route('home') }}" class="btn btn-primary">
                    ← Back to Home
                </a>
            </div>

        </div>
    </section>
@endsection
