@extends('layouts.app')

@section('title', 'المزدات')

@section('content')
    <section class="main-category py-5 text-center">
        <h1>اختر فئتك</h1>
        <div class="container mt-5">
            <div class="row">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="col-12 col-md-3 mb-4">
                        <a href="{{ route('auctions.index', ['categoryId' => 1]) }}" class="text-decoration-none">
                            <div class="card-category h-100">
                                <img src="{{ $image ?? asset('assets\imgs\image 36.png') }}"
                                    alt="{{ $title ?? 'Category image' }}" loading="lazy" class="card-img-top">

                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title mb-3 text-start">
                                        سيارات
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/imgs/Auction.svg') }}" alt="مزاد" width="24"
                                            height="24">

                                        <span class="auction-count ms-2">
                                            12 مزايده جارية
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection
