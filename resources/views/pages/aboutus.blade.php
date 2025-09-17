@extends('layouts.app')

@section('title', 'من نحن')

@section('content')
    <section class="about-us">
        <div class="about-hero">
            <img src="{{ asset('assets/imgs/15471a44cc3a526f81473f5c1d40c80c9f38fcca.jpg') }}" alt="About Us"
                class="about-hero-img">

            <div class="about-overlay"></div>

            <div class="about-hero-content text-center">
                <h1 class="about-hero-title"><span>رحلتنا</span> في إعادة تعريف عالم المزادات</h1>
                <p class="about-hero-subtitle mt-3">
                    منصة راسي وُجدت لتسهّل عليك البيع والشراء في المزادات أونلاين بشكل آمن وشفاف وسريع.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="our-story mt-5">
                <h3>قصتنا</h3>
                <p class="mt-5">فقرة تحكي ليه المنصة اتعملت (مثلاً: عشان توفر سهولة بدل حضور المزادات التقليدية، أو لزيادة
                    فرص البيع
                    والشراء
                    أونلاين.)</p>
            </div>

            <div class="our-values mt-5 py-5 mb-5">
                <h3>قيمنا</h3>

                <div class="row mt-5">
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper me-3">
                                <img src="{{ asset('assets/imgs/shield.svg') }}" alt="الأمان" width="83"
                                    height="87">
                            </div>
                            <div>
                                <h5 class="feature-title">الأمان</h5>
                                <p class="feature-text">نحافظ على خصوصية بياناتك ومعاملاتك.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper me-3">
                                <img src="{{ asset('assets/imgs/visiblity.svg') }}" alt="الشفافية" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">الشفافية</h5>
                                <p class="feature-text">كل مزاد يتم بوضوح كامل.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper me-3">
                                <img src="{{ asset('assets/imgs/junies.svg') }}" alt="الابتكار" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">الابتكار</h5>
                                <p class="feature-text">نسهل العملية بتكنولوجيا حديثة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-5">
                        <div class="d-flex align-items-start feature-box">
                            <div class="icon-wrapper me-3">
                                <img src="{{ asset('assets/imgs/turest.svg') }}" alt="المصداقية" width="83"
                                    height="87">
                            </div>

                            <div>
                                <h5 class="feature-title">المصداقية</h5>
                                <p class="feature-text">نوفر بيئة بيع وشراء موثوقة.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
