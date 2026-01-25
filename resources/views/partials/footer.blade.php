@php
    $contactus = App\Models\ContactUs::first();
@endphp
<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-3 text-center text-md-start mb-3 mb-md-0">
                <img src="{{ asset('assets/imgs/Untitled-3-01.png') }}" alt="Logo" height="80">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0">
                <img src="{{ asset('assets/imgs/before.svg') }}" alt="Separator" class="img-fluid">
            </div>

            <div class="col-12 col-md-3 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="{{ $contactus->facebook ?? '#' }}"><img src="{{ asset('assets/imgs/facebook.svg') }}"
                            alt="Facebook" width="40" height="40"></a>
                    <a href="{{ $contactus->tiktok ?? '#' }}#"><img src="{{ asset('assets/imgs/tiktok.svg') }}"
                            alt="Twitter" width="40" height="40"></a>
                    <a href="{{ $contactus->youtube ?? '#' }}"><img src="{{ asset('assets/imgs/youtube.svg') }}"
                            alt="Instagram" width="40" height="40"></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-3"></div>

            <div class="col-12 col-md-6 d-flex justify-content-between mb-3 mb-md-0">

                <ul class="footer-list mb-0 text-start">
                    <li class="list-title">الصفحات</li>
                    <li>المزادات</li>
                    <li>المزادات</li>
                    <li>المزادات</li>
                    <li>أعمالنا</li>
                </ul>
                <ul class="footer-list mb-0">
                    <li class="list-title">تعرف علينا</li>
                    <li>من نحن</li>
                    <li>اتصل بنا</li>
                    <li>المدونة</li>
                </ul>

            </div>

            <div class="col-12 col-md-3"></div>
        </div>

    </div>
</footer>
