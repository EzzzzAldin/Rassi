<section class="categories-section py-5 position-relative">
    <div class="container">


        <div class="row align-items-center mb-4">
            <div class="col-6">
                <h2 class="section-title mb-0">المزادات الحالية</h2>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-all">عرض الكل</a>
            </div>
        </div>


        <div class="swiper auction-slider">
            <div class="swiper-wrapper">

                <!-- الكروت -->
                @for ($i = 1; $i <= 8; $i++)
                    <div class="swiper-slide">
                        <div class="auction-card p-4 shadow-sm rounded">

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="mb-0">اسم المزاد</h6>
                                <img src="{{ asset('assets/imgs/image 13.png') }}" alt="الدولة" class="flag-img"
                                    width="36" height="24">
                            </div>


                            <img src="{{ asset('assets/imgs/image 37.png') }}" alt="سيارة"
                                class="img-fluid mt-3 mb-3 auc-img">


                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('assets/imgs/Auction.svg') }}" alt="مزاد" width="24"
                                    height="24">
                                <span class="auc-num ms-2">12</span>
                            </div>


                            <p class="mb-2 title-auc mt-4">ينتهي خلال :</p>
                            <div class="d-align-items-center d-flex justify-content-between">
                                <div class="d-flex justify-content-between text-danger fw-bold">
                                    <span class="count-auc m-2">01 <span class="d-block">يوم</span></span>
                                    <span class="count-auc m-2">01 <span class="d-block">ساعة</span></span>
                                    <span class="count-auc m-2">01 <span class="d-block">دقيقة</span></span>
                                </div>


                                <div class="price-box mt-2">
                                    <span class="btn btn-price w-100">850 رس</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>



        </div>
        <div class="swiper-button-next custom-swiper-btn">
            <img src="{{ asset('assets/imgs/Icon (1).svg') }}" alt="التالي" width="24" height="24">
        </div>
        <div class="swiper-button-prev custom-swiper-btn">
            <img src="{{ asset('assets/imgs/Icon.svg') }}" alt="السابق" width="24" height="24">
        </div>


    </div>
</section>
