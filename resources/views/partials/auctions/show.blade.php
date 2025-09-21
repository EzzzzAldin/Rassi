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
                    <div class="TimerSection d-flex gap-5 justify-content-center m-4 p-3">
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
                    <div class="d-flex justify-content-between numAuct pb-3 pt-3">
                        <div class="d-flex gap-2">
                            <img src="{{ asset('assets/imgs/auctionShow/Auction.png') }}" alt="">
                            <div class="">عدد المزايدين</div>
                        </div>
                        <div class="">50 </div>
                    </div>
                    <div class="btnAuct">
                        <button class="btn btn-gradient p-3 w-100">
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
                {{-- <div class="col-md-12">
                    <div class="border d-flex gap-4 mineNave mt-3 p-2">
                        <h4 class="m-0 active">الوصف</h4>
                        <h4 class="m-0">الشروط والاحكام</h4>
                        <h4 class="m-0">التعليقات</h4>
                    </div>
                    <div class="valSection">
                        <div class="border border-top-0 dis p-3">
                            ابل ايفون 16 برو‏ (128‎ GB) تيتانيوم أسود , جديد غير مستخدم أصلي بالضمان من السعودية .

                            تصميم من التيتانيوم ولا أروع — يتميز iPhone 16 Pro بتصميم كله قوة وخفة مع شاشة ريتنا سوبر XDR
                            مقاس
                            6.3 إنش أكبر، ومتانته عالية بفضل أحدث جيل من درع السيراميك الأقوى 2x من زجاج أي هاتف ذكي. بين
                            يديك
                            كل التحكم في الكاميرا — تمنحك وحدة التحكم في الكاميرا طريقة أسهل للوصول بسرعة إلى أدوات
                            الكاميرا،
                            مثل الزووم أو عمق المجال، لتتمكن من التقاط صور مثالية في أوقات قياسية. لقطات خلابة — بفضل كاميرا
                            واسعة للغاية 48MP أكثر تطوراً، يمكنك أن تصور بالماكرو روائع فائقة الصغر أو تلتقط مشاهد بانورامية
                            على
                            مد النظر. هل تريد لقطات أوضح من مسافة أبعد؟ المهمة ولا أسهل مع كاميرا تقريب المسافات 5x.
                            فيديوهات
                            Pro — انتقل بفيديوهاتك إلى آفاق جديدة كلياً مع كاميرا 48MP Fusion التي تدعم تنسيق 4K Dolby
                            Vision
                            بمعدل 120 إطاراً في الثانية وميكروفونات بجودة الاستوديوهات الاحترافية تعزز نقاء التسجيلات. في
                            جيبك
                            استوديو احترافي. الأنماط الفوتوغرافية — يمنحك أحدث جيل من الأنماط الفوتوغرافية حرية إبداعية غير
                            مسبوقة كي تضع المزيد منك في كل صورة عنك.
                        </div>
                        <div class="policy border border-top-0 p-3">
                            ابل ايفون 16 برو‏ (128‎ GB) تيتانيوم أسود , جديد غير مستخدم أصلي بالضمان من السعودية .

                            تصميم من التيتانيوم ولا أروع — يتميز iPhone 16 Pro بتصميم كله قوة وخفة مع شاشة ريتنا سوبر XDR
                            مقاس
                            6.3 إنش أكبر، ومتانته عالية بفضل أحدث جيل من درع السيراميك الأقوى 2x من زجاج أي هاتف ذكي. بين
                            يديك
                            كل التحكم في الكاميرا — تمنحك وحدة التحكم في الكاميرا طريقة أسهل للوصول بسرعة إلى أدوات
                            الكاميرا،
                            مثل الزووم أو عمق المجال، لتتمكن من التقاط صور مثالية في أوقات قياسية. لقطات خلابة — بفضل كاميرا
                            واسعة للغاية 48MP أكثر تطوراً، يمكنك أن تصور بالماكرو روائع فائقة الصغر أو تلتقط مشاهد بانورامية
                            على
                            مد النظر. هل تريد لقطات أوضح من مسافة أبعد؟ المهمة ولا أسهل مع كاميرا تقريب المسافات 5x.
                            
                        </div>
                        <div class="border border-top-0 commentsSection">

                            <div class="commentSection">
                                <div class="imgNameComment pb-4">
                                    <div class="d-flex gap-2 image p-4 pb-2">
                                        <img src="{{ asset('assets/imgs/auctionShow/Ellipse7.png') }}" alt="">

                                        <div class="align-items-center d-flex justify-content-between nameComment w-100">
                                            <div class="">
                                                <div class="name opacity-50">User5414</div>
                                                <div class="commant">المحتوي لأي تعليق هناااااا</div>
                                            </div>
                                            <div class="from opacity-50">2 يوم</div>
                                        </div>
                                    </div>
                                    <div class="align-items-center d-flex flex-column gap-2 pb-0 pt-0 replayComment">
                                        <div class="align-items-center d-flex gap-2 icon"><img
                                                src="{{ asset('assets/imgs/auctionShow/Vector(1).png') }}"
                                                alt="">رد</div>
                                        <input type="text" class="recomment p-2 border-0 d-none"
                                            placeholder="اكتب تعليقا">
                                    </div>
                                </div>
                            </div>

                            <div class="commentSection">
                                <div class="imgNameComment pb-4">
                                    <div class="d-flex gap-2 image p-4 pb-2">
                                        <img src="{{ asset('assets/imgs/auctionShow/Ellipse7.png') }}" alt="">

                                        <div class="align-items-center d-flex justify-content-between nameComment w-100">
                                            <div class="">
                                                <div class="name opacity-50">User5414</div>
                                                <div class="commant">المحتوي لأي تعليق هناااااا</div>
                                            </div>
                                            <div class="from opacity-50">2 يوم</div>
                                        </div>
                                    </div>
                                    <div class="align-items-center d-flex flex-column gap-2 pb-0 pt-0 replayComment">
                                        <div class="align-items-center d-flex gap-2 icon"><img
                                                src="{{ asset('assets/imgs/auctionShow/Vector(1).png') }}"
                                                alt="">رد</div>
                                        <input type="text" class="recomment p-2 border-0 d-none"
                                            placeholder="اكتب تعليقا">
                                    </div>
                                </div>
                            </div>

                            <div class="commentSection">
                                <div class="imgNameComment pb-4">
                                    <div class="d-flex gap-2 image p-4 pb-2">
                                        <img src="{{ asset('assets/imgs/auctionShow/Ellipse7.png') }}" alt="">

                                        <div class="align-items-center d-flex justify-content-between nameComment w-100">
                                            <div class="">
                                                <div class="name opacity-50">User5414</div>
                                                <div class="commant">المحتوي لأي تعليق هناااااا</div>
                                            </div>
                                            <div class="from opacity-50">2 يوم</div>
                                        </div>
                                    </div>
                                    <div class="align-items-center d-flex flex-column gap-2 pb-0 pt-0 replayComment">
                                        <div class="align-items-center d-flex gap-2 icon"><img
                                                src="{{ asset('assets/imgs/auctionShow/Vector(1).png') }}"
                                                alt="">رد</div>
                                        <input type="text" class="recomment p-2 border-0 d-none"
                                            placeholder="اكتب تعليقا">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div> --}}
                <livewire:product-tabs />

            </div>
        </div>
    </section>

@endsection
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
        $('.auctionPage .commentSection .icon').each(function(index) {
            $(this).on('click', () => {
                if ($('.recomment').eq(index).hasClass('d-none')) {
                    $('.recomment').eq(index).removeClass('d-none')
                } else {
                    $('.recomment').eq(index).addClass('d-none')

                }
            })

        })
    </script>
@endpush
