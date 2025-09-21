<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="icon" href="assets/imgs/Ha Logo White.png" type="image/png" /> --}}
    <title>@yield('title', 'RASSI')</title>

    <title>@yield('title', config('app.name'))</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet"
        integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cambay:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custome.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />




    @stack('styles')
</head>

<body>
    <div id="particles-js"></div>

    <div id="app">
        @include('partials.header')
        <main>
            {{-- لو الصفحة Blade عادية --}}
            @yield('content')

            {{-- لو الصفحة Livewire --}}
            {{ $slot ?? '' }}
        </main>
        @include('partials.footer')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>





    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        new Swiper(".auction-slider", {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".stat-number");

            counters.forEach(counter => {
                counter.innerText = "0";
                const updateCounter = () => {
                    const target = +counter.getAttribute("data-target");
                    const current = +counter.innerText.replace(/,/g, "");
                    const increment = Math.ceil(target / 200);

                    if (current < target) {
                        counter.innerText = (current + increment).toLocaleString();
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target.toLocaleString() + "+";
                    }
                };
                updateCounter();
            });
        });
    </script>

    <script>
        let priceSlider = document.getElementById('priceSlider');

        noUiSlider.create(priceSlider, {
            start: [0, 500],
            connect: true,
            direction: 'rtl',
            range: {
                'min': 10,
                'max': 500
            },
            step: 10,
            tooltips: [true, true],
            format: {
                to: function(value) {
                    return Math.round(value);
                },
                from: function(value) {
                    return Number(value);
                }
            }
        });

        const inputMin = document.getElementById('input-min');
        const inputMax = document.getElementById('input-max');

        priceSlider.noUiSlider.on('update', function(values, handle) {
            if (handle === 0) {
                inputMin.value = values[0];
            } else {
                inputMax.value = values[1];
            }
        });

        inputMin.addEventListener('change', function() {
            priceSlider.noUiSlider.set([this.value, null]);
        });
        inputMax.addEventListener('change', function() {
            priceSlider.noUiSlider.set([null, this.value]);
        });
    </script>

    @stack('scripts')
</body>

</html>
