@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp

@section('title', $locale == 'en' ? 'Contact Us' : 'اتصل بنا')

@section('content')
    <section class="about-us mb-5">
        <div class="about-hero">
            @if ($contactus->image)
                <img src="{{ asset('storage/' . $contactus->image) }}" alt="About Us" class="about-hero-img">
            @else
                <img src="{{ asset('assets/imgs/cc5cb238fcabafbe09e96840ad1b2b53b704c4fb.jpg') }}" alt="About Us"
                    class="about-hero-img">
            @endif

            <div class="about-overlay"></div>

            <div class="about-hero-content text-center">
                {!! $contactus->description ?? '' !!}
            </div>
        </div>

        <div class="container py-5 mb-5">
            <div class="row">
                <div class="col-12 col-md-8 mt-3">
                    <h3 class="contact-info-title">
                        {{ $locale == 'en' ? 'Direct contact information' : 'بيانات التواصل المباشرة' }}</h3>
                    <div class="d-flex align-items-center mt-5 contact-info">
                        <img src="{{ asset('assets/imgs/noun_Phone_3612570 1.svg') }}" alt="phone icon" width="24"
                            height="24">
                        <span class="ms-2">{{ $contactus->phone ?? '' }}</span>
                    </div>
                    <div class="d-flex align-items-center mt-2 contact-info">
                        <img src="{{ asset('assets/imgs/noun_Email_247564 1.svg') }}" alt="phone icon" width="24"
                            height="24">
                        <span class="ms-2">{{ $contactus->email ?? '' }}</span>
                    </div>

                </div>
                <div class="col-12 col-md-4 mt-3">
                    <div class="form-contact text-start">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close px-1 small" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control"
                                    placeholder="{{ $locale == 'en' ? 'Name' : 'الإسم' }}" name="name" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control"
                                    placeholder="{{ $locale == 'en' ? 'Email' : 'البريد الإلكتروني' }}" name="email"
                                    required>
                            </div>

                            <div class="mb-3">
                                <input type="tel" class="form-control"
                                    placeholder="{{ $locale == 'en' ? 'Phone' : 'رقم الهاتف' }}" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="{{ $locale == 'en' ? 'Message' : 'الرسالة' }}"
                                    name="message" required></textarea>
                            </div>

                            <button type="submit" class="btn w-100 btn-gradient">
                                إرسال
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
