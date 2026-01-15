@extends('layouts.app')
@php
    $locale = app()->getLocale();
@endphp
@section('title', $locale == 'en' ? 'Terms and Conditions' : 'الشروط والأحكام')

@section('content')
    <section class="terms py-5 text-center">
        <h1>{{ $locale == 'en' ? 'Terms and Conditions' : 'الشروط والأحكام' }}</h1>

        <div class="container mt-5">
            @forelse ($terms as $term)
                <div class="terms-info text-start mb-4">
                    <h4>→ {{ $term->title ?? '' }}</h4>
                    <p class="mt-4">{!! $term->content ?? '' !!}</p>
                </div>
            @empty
                <div class="alert alert-info text-center">
                    {{ $locale == 'en' ? 'No terms & conditions available at the moment.' : 'لا توجد شروط وأحكام متاحة في الوقت الحالي.' }}
                </div>
            @endforelse
        </div>
    </section>

@endsection
