@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.index.main')
    @include('partials.index.auction')
    @include('partials.index.categories')
    @include('partials.index.auctionsSlider')
    @include('partials.index.topAuction')
    @include('partials.index.participate')
    @include('partials.index.statics')
@endsection
