@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp

@section('title', 'من نحن')

@section('content')
    <section class="about-us">
        <div class="about-hero">
            @if ($aboutus->image)
                <img src="{{ asset('storage/' . $aboutus->image) }}" alt="About Us" class="about-hero-img">
            @else
                <img src="{{ asset('assets/imgs/15471a44cc3a526f81473f5c1d40c80c9f38fcca.jpg') }}" alt="About Us"
                    class="about-hero-img">
            @endif

            <div class="about-overlay"></div>

            <div class="about-hero-content text-center">
                {!! $aboutus->description ?? '' !!}
            </div>
        </div>

        <div class="container">
            <div class="our-story mt-5">
                <h3>{{ $locale == 'en' ? 'Our Story' : 'قصتنا' }}</h3>
                <p class="mt-5">{!! $aboutus->ourstory ?? '' !!}</p>
            </div>

            <div class="our-values mt-5 py-5 mb-5">
                <h3>{{ $locale == 'en' ? 'Our values' : 'قيمنا' }}</h3>

                <div class="row mt-5">
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper mx-3">
                                <img src="{{ asset('assets/imgs/shield.svg') }}" alt="الأمان" width="83"
                                    height="87">
                            </div>
                            <div>
                                <h5 class="feature-title">{{ $locale == 'en' ? 'Safety' : 'الأمان' }}</h5>
                                <p class="feature-text">{{ $aboutus->safety ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper mx-3">
                                <img src="{{ asset('assets/imgs/visiblity.svg') }}" alt="الشفافية" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">{{ $locale == 'en' ? 'Transparency' : 'الشفافية' }}</h5>
                                <p class="feature-text">{{ $aboutus->transparency ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper mx-3">
                                <img src="{{ asset('assets/imgs/junies.svg') }}" alt="الابتكار" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">{{ $locale == 'en' ? 'Innovation' : 'الابتكار' }}</h5>
                                <p class="feature-text">{{ $aboutus->innovation ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper mx-3">
                                <img src="{{ asset('assets/imgs/turest.svg') }}" alt="المصداقية" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">{{ $locale == 'en' ? 'Credibility' : 'المصداقية' }}</h5>
                                <p class="feature-text">{{ $aboutus->credibility ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
