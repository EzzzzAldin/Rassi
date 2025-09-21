@extends('layouts.app')

@section('title', 'مزاد سيارات')

@section('content')
    <section class="main-category py-5 text-center">
        <h1>مزاد سيارات</h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <div class="filter-box">
                        <form action="#" method="GET" class="mb-4">
                            <div class="input-group search mb-3">
                                <input type="text" class="form-control text-start input-search" placeholder="بحث"
                                    name="q" value="{{ request('q') }}">
                                <button class="btn search-btn" type="submit" id="button-search">
                                    <img src="{{ asset('assets/imgs/search-normal.svg') }}" alt="مزاد" width="24"
                                        height="24">
                                </button>
                            </div>

                            <div class="accordion mb-3" id="categoryAccordion">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingCategory">
                                        <button
                                            class="accordion-button choose-category collapsed d-flex justify-content-between align-items-center"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategory"
                                            aria-expanded="false" aria-controls="collapseCategory">
                                            <span class="fw-semibold title-search">الفئة</span>
                                            <img src="{{ asset('assets/imgs/Plus.svg') }}" alt="مزاد" width="24"
                                                height="24">
                                        </button>
                                    </h2>

                                    <div id="collapseCategory" class="accordion-collapse collapse"
                                        aria-labelledby="headingCategory" data-bs-parent="#categoryAccordion" data-simplebar
                                        style="max-height: 305px;">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="1" id="cat1"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat1">إلكترونيات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="2" id="cat2"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat2">سيارات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="3" id="cat3"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat3">أثاث</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="4" id="cat4"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat4">عقارات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="5" id="cat5"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat5">جمال</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="5" id="cat5"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat5">جمال</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="radio" value="5" id="cat5"
                                                    name="category">
                                                <label class="form-check-label ms-3" for="cat5">جمال</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="accordion mb-3" id="priceAccordion">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingPrice">
                                        <button
                                            class="accordion-button choose-category collapsed d-flex justify-content-between align-items-center"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrice"
                                            aria-expanded="false" aria-controls="collapsePrice">
                                            <span class="fw-semibold title-search">السعر</span>
                                            <img src="{{ asset('assets/imgs/Plus.svg') }}" alt="مزاد" width="24"
                                                height="24">
                                        </button>
                                    </h2>

                                    <div id="collapsePrice" class="accordion-collapse collapse"
                                        aria-labelledby="headingPrice" data-bs-parent="#priceAccordion">
                                        <div class="accordion-body">

                                            <div id="priceSlider"></div>

                                            <div class="d-flex align-items-center mt-3">
                                                <input type="number" id="input-min" class="form-control me-2"
                                                    placeholder="من">
                                                <span class="mx-2">إلى</span>
                                                <input type="number" id="input-max" class="form-control ms-2"
                                                    placeholder="إلى">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion mb-3" id="typeAccordion">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingType">
                                        <button
                                            class="accordion-button choose-category collapsed d-flex justify-content-between align-items-center"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseType"
                                            aria-expanded="false" aria-controls="collapseType">
                                            <span class="fw-semibold title-search">النوع</span>
                                            <img src="{{ asset('assets/imgs/Plus.svg') }}" alt="مزاد" width="24"
                                                height="24">
                                        </button>
                                    </h2>

                                    <div id="collapseType" class="accordion-collapse collapse"
                                        aria-labelledby="headingType" data-bs-parent="#typeAccordion" data-simplebar
                                        style="max-height: 305px;">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    id="cat1" name="category[]">
                                                <label class="form-check-label ms-3" for="cat1">إلكترونيات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    id="cat2" name="category[]">
                                                <label class="form-check-label ms-3" for="cat2">سيارات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    id="cat3" name="category[]">
                                                <label class="form-check-label ms-3" for="cat3">أثاث</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    id="cat4" name="category[]">
                                                <label class="form-check-label ms-3" for="cat4">عقارات</label>
                                            </div>
                                            <div class="form-check mb-2 text-start">
                                                <input class="form-check-input" type="checkbox" value="5"
                                                    id="cat5" name="category[]">
                                                <label class="form-check-label ms-3" for="cat5">جمال</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-9">
                    <div class="row">
                        @for ($i = 1; $i <= 12; $i++)
                            <div class="col-12 col-md-4 mb-4">
                                <a href="{{ route('auctions.show', ['auctionId' => 1]) }}" class="text-decoration-none">
                                    <div class="auction-card p-4 shadow-sm rounded">

                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">اسم المزاد</h6>
                                            <img src="{{ asset('assets/imgs/image 13.png') }}" alt="الدولة"
                                                class="flag-img" width="36" height="24">
                                        </div>


                                        <img src="{{ asset('assets/imgs/image 37.png') }}" alt="سيارة"
                                            class="img-fluid mt-3 mb-3 auc-img">


                                        <div class="d-flex align-items-center mb-2 mt-3">
                                            <img src="{{ asset('assets/imgs/Auction.svg') }}" alt="مزاد"
                                                width="24" height="24">
                                            <span class="auc-num ms-2">12</span>
                                        </div>


                                        <p class="mb-2 title-auc mt-4 text-start">ينتهي خلال :</p>
                                        <div class="d-align-items-center d-flex justify-content-between flex-wrap">
                                            <div class="d-flex justify-content-between text-danger fw-bold flex-wrap">
                                                <span class="count-auc m-2">01 <span class="d-block">يوم</span></span>
                                                <span class="count-auc m-2">01 <span class="d-block">ساعة</span></span>
                                                <span class="count-auc m-2">01 <span class="d-block">دقيقة</span></span>
                                            </div>


                                            <div class="price-box mt-2">
                                                <span class="btn btn-price w-100">850 رس</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordions = document.querySelectorAll('.accordion-collapse');

            accordions.forEach(collapse => {
                const toggleImg = collapse.closest('.accordion-item')
                    .querySelector('.accordion-button img');

                if (toggleImg) {
                    collapse.addEventListener('show.bs.collapse', function() {
                        toggleImg.src = "{{ asset('assets/imgs/Minus.svg') }}";
                    });

                    collapse.addEventListener('hide.bs.collapse', function() {
                        toggleImg.src = "{{ asset('assets/imgs/Plus.svg') }}";
                    });
                }
            });
        });
    </script>
@endpush
