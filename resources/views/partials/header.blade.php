<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
    <div class="container">


        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <img src="{{ asset('assets\imgs\logo.png') }}" alt="Logo" height="80">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        الرئيسية
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}"
                        href="{{ route('pages', ['page' => 'aboutus']) }}">
                        من نحن
                    </a>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->is('categories') ? 'active' : '' }}"
                        href="{{ route('categories') }}">المزادات</a></li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('terms') ? 'active' : '' }}"
                        href="{{ route('pages', ['page' => 'terms']) }}">
                        الشروط والأحكام
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}"
                        href="{{ route('pages', ['page' => 'contact-us']) }}">
                        تواصل معنا
                    </a>
                </li>
            </ul>

            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn btn-login btn-gradient">تسجيل دخول</a>
                <a href="{{ route('register') }}" class="btn btn-register">تسجيل حساب</a>
            </div>

            {{-- If Login --}}
            {{-- <div class="header-icons d-flex align-items-center gap-3">
                <div class="icon-item position-relative">
                    <button id="notifBtn" class="btn btn-ghost p-1">
                        <img src="{{ asset('assets/imgs/Notifications.svg') }}" alt="notifications" class="icon-svg"
                            width="32" height="32">
                    </button>

                    <div id="notifPanel" class="notif-panel shadow-sm d-none">
                        <!-- tabs -->
                        <ul class="nav nav-tabs justify-content-around border-bottom">
                            <li class="nav-item">
                                <button class="nav-link active" data-tab="all">الكل</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-tab="messages">الرسائل</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-tab="alerts">الإشعارات</button>
                            </li>
                        </ul>

                        <!-- List -->
                        <div class="notif-list p-2" data-simplebar>
                            <div class="notif-item message-notif d-flex gap-2 py-2 border-bottom">
                                <img src="{{ asset('assets/imgs/681016.jpg') }}"
                                    class="rounded-circle object-fit-cover" alt="user" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    <div class="send-notif">أحمد محمد</div>
                                    <div class="message-content mt-2">
                                        هنا محتوى الرسالة أريد سؤالك عن المزاد الخاص بسيارة المزاد التويوتا موديل بلا
                                        بلا...
                                    </div>
                                    <small class="time-notif">اليوم في الساعة 05:22 م</small>
                                </div>
                            </div>

                            <div class="notif-item d-flex gap-2 py-2 border-bottom">
                                <img src="{{ asset('assets/imgs/kaiju-no-8-mission-3840x2160-21963.jpg') }}"
                                    class="rounded-circle object-fit-cover" alt="user" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    <div class="notif-content">
                                        إشعار خاص بأن مزايد آخر قام بالمزايدة على المنتج س
                                    </div>
                                    <small class="time-notif">اليوم في الساعة 07:55 ص</small>
                                </div>
                            </div>
                            <div class="notif-item message-notif d-flex gap-2 py-2 border-bottom">
                                <img src="{{ asset('assets/imgs/681016.jpg') }}"
                                    class="rounded-circle object-fit-cover" alt="user" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    <div class="send-notif">أحمد محمد</div>
                                    <div class="message-content mt-2">
                                        هنا محتوى الرسالة أريد سؤالك عن المزاد الخاص بسيارة المزاد التويوتا موديل بلا
                                        بلا...
                                    </div>
                                    <small class="time-notif">اليوم في الساعة 05:22 م</small>
                                </div>
                            </div>

                            <div class="notif-item d-flex gap-2 py-2 border-bottom">
                                <img src="{{ asset('assets/imgs/kaiju-no-8-mission-3840x2160-21963.jpg') }}"
                                    class="rounded-circle object-fit-cover" alt="user" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    <div class="notif-content">
                                        إشعار خاص بأن مزايد آخر قام بالمزايدة على المنتج س
                                    </div>
                                    <small class="time-notif">اليوم في الساعة 07:55 ص</small>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="icon-item position-relative">
                    <span id="ticketsBadge" class="badge-count fw-bold">3</span>
                    <img src="{{ asset('assets/imgs/Ticket.svg') }}" alt="tickets" class="icon-svg ms-2"
                        width="32" height="32">
                </div>



                <div class="icon-item d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/imgs/681016.jpg') }}" alt="profile"
                        class="icon-svg profile-img rounded-circle object-fit-cover" height="56" width="56">

                </div>
            </div> --}}
            {{-- End If Login --}}

        </div>
    </div>
</nav>

{{-- Mobile View --}}
<div class="offcanvas offcanvas-{{ app()->getLocale() === 'ar' ? 'end' : 'start' }}" tabindex="-1"
    id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">القائمة</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                    href="{{ url('/') }}">الرئيسية</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}"
                    href="{{ route('pages', ['page' => 'aboutus']) }}">من نحن</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('categories') ? 'active' : '' }}"
                    href="{{ route('categories') }}">المزادات</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('terms') ? 'active' : '' }}"
                    href="{{ route('pages', ['page' => 'terms']) }}">الشروط
                    والأحكام</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}"
                    href="{{ route('pages', ['page' => 'contact-us']) }}">تواصل معنا</a></li>
        </ul>
        <div class="mt-3 d-flex flex-column gap-2">
            <a href="{{ route('login') }}" class="btn btn-login btn-gradient">تسجيل دخول</a>
            <a href="{{ route('register') }}" class="btn btn-register">تسجيل حساب</a>
        </div>
    </div>
</div>
