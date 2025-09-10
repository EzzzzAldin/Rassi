@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.index.main')
    @include('partials.index.auction')
    @include('partials.index.categories')
    @include('partials.index.auctionsSlider')
@endsection
