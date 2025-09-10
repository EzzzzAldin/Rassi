<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
    <div class="container">


        <a class="navbar-brand fw-bold" href="#">
            <img src="{{ asset('assets\imgs\logo.png') }}" alt="Logo" height="64">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
                <li class="nav-item"><a class="nav-link" href="#">المزادات</a></li>
                <li class="nav-item"><a class="nav-link" href="#">الشروط والأحكام</a></li>
                <li class="nav-item"><a class="nav-link" href="#">تواصل معنا</a></li>
            </ul>

            <div class="d-flex gap-2">
                <a href="#" class="btn btn-login btn-gradient">تسجيل دخول</a>
                <a href="#" class="btn btn-register">تسجيل حساب</a>
            </div>
        </div>
    </div>
</nav>

{{-- Mobile View --}}
<div class="offcanvas offcanvas-{{ app()->getLocale() === 'ar' ? 'end' : 'start' }}" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">القائمة</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link active" href="#">الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
            <li class="nav-item"><a class="nav-link" href="#">المزادات</a></li>
            <li class="nav-item"><a class="nav-link" href="#">الشروط والأحكام</a></li>
            <li class="nav-item"><a class="nav-link" href="#">تواصل معنا</a></li>
        </ul>
        <div class="mt-3 d-flex flex-column gap-2">
            <a href="#" class="btn btn-login btn-gradient">تسجيل دخول</a>
            <a href="#" class="btn btn-register">تسجيل حساب</a>
        </div>
    </div>
</div>
