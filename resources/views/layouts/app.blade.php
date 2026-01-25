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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css">


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
             @yield('content')

             {{ $slot ?? '' }}

             <!-- Chat Box -->
             {{-- <div id="chat-box" class="chat-box">
                 <!-- Header -->
                 <div class="chat-header">
                     <div class="user-info">
                         <img src="{{ asset('assets/imgs/681016.jpg') }}" alt="profile"
                             class="icon-svg profile-img rounded-circle object-fit-cover" height="56" width="56">
                         <span class="chat-username ms-2">محمد خالد</span>
                     </div>
                     <button class="chat-close" onclick="closeChat()">×</button>
                 </div>

                 <!-- Body -->
                 <div class="chat-body d-flex flex-column">
                     <div class="message sent">يييييييييييييييييييد</div>
                     <div class="message received">لييايايايايا تاتاتاغع</div>
                     <div class="message sent">يييييييييييييييييييد</div>
                 </div>

                 <!-- Footer -->
                 <div class="chat-footer">
                     <input type="text" placeholder="أرسل رسالة" class="chat-input">
                     <button class="chat-send">
                         <img src="{{ asset('assets/imgs/send.svg') }}" alt="tickets" class="icon-svg ms-2"
                             width="24" height="24">
                     </button>
                 </div>
             </div> --}}
             <!-- زرار لفتح الشات (تجريبي) -->
             {{-- <button onclick="openChat()" style="position:fixed; bottom:20px; right:20px;">افتح الشات</button> --}}


         </main>
         @include('partials.footer')
     </div>
     @stack('modals')
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

     <script>
         document.addEventListener("DOMContentLoaded", () => {
             const notifBtn = document.getElementById("notifBtn");
             const notifPanel = document.getElementById("notifPanel");

             notifBtn.addEventListener("click", (e) => {
                 e.stopPropagation();
                 notifPanel.classList.toggle("d-none");
             });

             notifPanel.addEventListener("click", (e) => {
                 e.stopPropagation();
             });

             document.addEventListener("click", () => {
                 notifPanel.classList.add("d-none");
             });
         });
     </script>

     <script>
         document.addEventListener("DOMContentLoaded", () => {
             const tabs = document.querySelectorAll("#notifPanel .nav-link");

             tabs.forEach(tab => {
                 tab.addEventListener("click", (e) => {
                     e.stopPropagation();
                     tabs.forEach(t => t.classList.remove("active"));
                     tab.classList.add("active");

                 });
             });
         });
     </script>

     <script>
         function closeChat() {
             document.getElementById("chat-box").style.display = "none";
         }

         function openChat() {
             document.getElementById("chat-box").style.display = "flex";
         }
     </script>

     @stack('scripts')

 </body>

 </html>
