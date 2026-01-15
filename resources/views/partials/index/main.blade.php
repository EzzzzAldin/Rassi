<section class="hero-section">
    @if ($homepage->video)
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{ asset('storage/' . $homepage->video) }}" type="video/mp4">
            {{ $locale == 'ar' ? 'متصفحك لا يدعم الفيديو' : 'Your browser does not support video' }}
        </video>
    @else
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{ asset('assets\videos\Big_Buck_Bunny_1080_10s_5MB.mp4') }}" type="video/mp4">
            {{ $locale == 'ar' ? 'متصفحك لا يدعم الفيديو' : 'Your browser does not support video' }}
        </video>
    @endif

    <div class="overlay"></div>

    <div class="hero-content text-end" style="direction: {{ $locale == 'ar' ? 'rtl' : 'ltr' }}">
        <h1 class="hero-title m-4">{{ $homepage->title ?? '' }}</h1>
        <p class="hero-subtitle m-4">{!! $homepage->description ?? '' !!}</p>
        <a href="#" class="btn btn-gradient m-4 d-inline-flex align-items-center gap-2">
            {{ $locale == 'ar' ? 'تصفح المزادات' : 'Browse Auctions' }}
            <img src="{{ asset('assets\imgs\arrow-right-up.svg') }}" alt="سهم" width="20" height="20">
        </a>

    </div>
</section>
