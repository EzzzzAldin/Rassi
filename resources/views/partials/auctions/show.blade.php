@extends('layouts.app')
@push('styles')
    <style>
        .sliderAuctionPage .swiper {
            width: 100%;
            height: 100%;
        }

        .sliderAuctionPage .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sliderAuctionPage .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .sliderAuctionPage .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .sliderAuctionPage .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .sliderAuctionPage .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .sliderAuctionPage .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .sliderAuctionPage .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .sliderAuctionPage .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .sliderAuctionPage .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush
@section('title', 'تفاصيل المزاد')

@section('content')
    <section class="main-category py-5 text-center">
        <div class="container auctionPage">
            <div class="row w-100 flex-row-reverse">
                <div class="col-md-6">
                    <div class="detailsAuction">
                        <div class="nameUserFlag">
                            <div class="d-flex justify-content-between nameFlag">
                                <div class="name">اسم المزاد</div>
                                <div class="flag"><img src="{{ asset('assets/imgs/image 13.png') }}" alt="">
                                </div>
                            </div>
                            <div class="align-items-center d-flex gap-2 pb-2 pt-2 user">
                                <img src="{{ asset('assets/imgs/auctionShow/Ellipse 7.png') }}" alt="">
                                <div class="name">User5414 </div>
                            </div>
                        </div>
                    </div>
                    <div class="alertSection d-flex gap-2 mb-2 mt-2 p-4">
                        <div class="icon"><img src="{{ asset('assets/imgs/auctionShow/alert-triangle.png') }}"
                                alt="">
                        </div>
                        <div class="txt">قم بالتسجيل والمشاركة في المزاد لمتابعة أحدث المزايدات مباشرةً. التسجيل</div>
                    </div>
                    <div class="bg-success-subtle d-flex gap-2 mb-2 mt-2 p-4 rounded" style="color: black">
                        <div class="icon"><img src="{{ asset('assets/imgs/auctionShow/Vector2.png') }}" alt="">
                        </div>
                        <div class="txt">أنت حالياً أعلى مزايد على هذا المنتج.</div>
                    </div>
                    <div class="bg-danger-subtle d-flex gap-2 mb-2 mt-2 p-4 rounded" style="color: black">
                        <div class="icon"><img src="{{ asset('assets/imgs/auctionShow/Vector3.png') }}" alt="">
                        </div>
                        <div class="txt">مزايدتك تم تجاوزها!</div>
                    </div>
                    <div class="TimerSection d-flex gap-3 justify-content-center m-4 p-3">
                        <div class="timeAndTitle">
                            <div class="time">00</div>
                            <div class="title">ثانية</div>
                        </div>
                        :
                        <div class="timeAndTitle">
                            <div class="time">00</div>
                            <div class="title">دقيقة</div>
                        </div>
                        :
                        <div class="timeAndTitle">
                            <div class="time">00</div>
                            <div class="title">ساعة</div>
                        </div>
                        :
                        <div class="timeAndTitle">
                            <div class="time">00</div>
                            <div class="title">يوم</div>
                        </div>

                    </div>
                    <div class="border-bottom border-top d-flex endDate justify-content-between pb-2 pt-2">
                        <div class="title">ينتهي في</div>
                        <div class="date">10 ديسمبر - 05:00 م</div>
                    </div>
                    <div class="border-bottom pb-2 pricing pt-2">
                        <div class="begining d-flex justify-content-between">
                            <div class="">سعر البدايه</div>
                            <div class="">100 ر.س</div>
                        </div>
                        <div class="nowPrice d-flex justify-content-between">
                            <div class="">السعر الحالي</div>
                            <div class="">500 ر.س</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between numAuct pb-3 pt-3 position-relative"
                        style="cursor: pointer;">
                        <div class="d-flex gap-2">
                            <img src="{{ asset('assets/imgs/auctionShow/Auction.png') }}" alt="">
                            <div class="">عدد المزايدين</div>
                        </div>
                        <div class="">50 </div>
                        <div class="bg-white p-3 position-absolute rounded shadow users d-none" style="left: 10%;">
                            <div class="userA">
                                <img src="{{ asset('Ellipse assets/imgs/auctionShow/Ellipse 7.png') }}" alt="">
                                <div class="name">User5414</div>
                            </div>
                            <div class="userA">
                                <img src="{{ asset('Ellipse assets/imgs/auctionShow/Ellipse 7.png') }}" alt="">
                                <div class="name">User5414</div>
                            </div>
                            <div class="userA">
                                <img src="{{ asset('Ellipse assets/imgs/auctionShow/Ellipse 7.png') }}" alt="">
                                <div class="name">User5414</div>
                            </div>
                            <div class="userA">
                                <img src="{{ asset('Ellipse assets/imgs/auctionShow/Ellipse 7.png') }}" alt="">
                                <div class="name">User5414</div>
                            </div>

                        </div>
                    </div>
                    <div class="btnAuct mt-3 mb-3">
                        <button class="btn btn-gradient p-3 w-100" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            زايد الان
                            <img src="{{ asset('assets/imgs/auctionShow/Icon.png') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sliderAuctionPage">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2 auctionSwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper auctionSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between lowerCaseForAuction pb-2 pt-2">
                        <div class="title">الحد الأدني للزياده</div>
                        <div class="price">10 ر.س</div>
                    </div>
                    <div class="border d-flex mt-3 p-2 shippingInfo">توضيح طريقة ووسيلة الشحن </div>

                </div>

                <livewire:product-tabs />

            </div>
        </div>
    </section>

@endsection
@push('modals')
    {{-- auction now --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 p-3 text-center" style="color: black">
                            <h5>السعر الحالي للمزاد</h5>
                            <div class="lastprice">200 ر.س</div>
                        </div>

                        <div class="col-md-9">
                            <div class="auctionPrice d-flex flex-column gap-2 p-3">
                                <input type="text" placeholder="قيمة المزايدة الخاصة بك"
                                    class="border-1 p-2 rounded-2">
                                <button class="auctionNow btn btn-gradient">زايد الآن</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="infos">
                                <ul class="align-items-center d-flex flex-column gap-2 justify-content-center"
                                    style="color: black">
                                    <li class="bg-body-secondary p-2 rounded w-75" style="cursor: context-menu;">أقل قيمة
                                        للمزايدة 10 ر.س</li>
                                    <li class="bg-body-secondary p-2 rounded w-75" style="cursor: context-menu;">سيتم خصم
                                        عدد 1 تيكت بعد مزايدتك</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end  action now --}}
@endpush
@push('scripts')
    <script>
        var swiper = new Swiper(".auctionSwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".auctionSwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
        $('.numAuct').hover(
            function() {
                $(this).find('.users').removeClass('d-none');
            },
            function() {
                $(this).find('.users').addClass('d-none');
            }
        );
    </script>
@endpush
