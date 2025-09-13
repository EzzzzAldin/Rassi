@extends('layouts.app')

@section('title', 'اتصل بنا')

@section('content')
    <section class="about-us mb-5">
        <div class="about-hero">
            <img src="{{ asset('assets/imgs/cc5cb238fcabafbe09e96840ad1b2b53b704c4fb.jpg') }}" alt="About Us"
                class="about-hero-img">

            <div class="about-overlay"></div>

            <div class="about-hero-content text-center">
                <h1 class="about-hero-title"><span>تواصل معنا</span></h1>
                <p class="about-hero-subtitle mt-3">
                    هل لديك سؤال أو استفسار؟ نحن هنا لمساعدتك، تواصل معنا عبر النموذج أو الوسائل التالية..
                </p>
            </div>
        </div>

        <div class="container py-5 mb-5">
            <div class="row">
                <div class="col-12 col-md-8 mt-3">
                    <h3 class="contact-info-title">بيانات التواصل المباشرة</h3>
                    <div class="d-flex align-items-center mt-5 contact-info">
                        <img src="{{ asset('assets/imgs/noun_Phone_3612570 1.svg') }}" alt="phone icon" width="24"
                            height="24">
                        <span class="ms-2">+20 123 456 789</span>
                    </div>
                    <div class="d-flex align-items-center mt-2 contact-info">
                        <img src="{{ asset('assets/imgs/noun_Email_247564 1.svg') }}" alt="phone icon" width="24"
                            height="24">
                        <span class="ms-2">Contact@moralizer.com</span>
                    </div>

                </div>
                <div class="col-12 col-md-4 mt-3">
                    <div class="form-contact text-start">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="الاسم">
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                            </div>

                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="رقم الهاتف">
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="الرسالة"></textarea>
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
