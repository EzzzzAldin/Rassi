<div class="d-flex align-items-center justify-content-center py-5">


    <div class="form-login shadow-sm w-100">

        <!-- Logo -->
        <div class="text-center mb-3">
            <img src="{{ asset('assets/imgs/login.png') }}" alt="Logo" height="64" width="130">
        </div>

        <!-- Title -->
        <h4 class="text-center">تسجيل الدخول</h4>
        <p class="text-center mb-4">أهلاً بعودتك! سجّل دخولك لتتابع مزايداتك وتضع عروضك الجديدة.</p>

        <!-- Livewire form -->
        <form wire:submit.prevent="login">

            <!-- Phone Input -->
            <div class="mb-3">
                <input id="email" type="email" wire:model="email" class="form-control text-start"
                    placeholder="البريد الإلكتروني" required>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>



            <!-- Password Input -->
            <div class="mb-2 position-relative">
                <input type="password" id="password" wire:model="password" class="form-control ps-5 text-end"
                    placeholder="كلمة السر" required>

                <span class="end-0 pe-3 position-absolute top-50 translate-middle-y" style="cursor:pointer;"
                    onclick="togglePassword()">
                    <i id="toggleIcon" class="fa-solid fa-eye"></i>
                </span>

                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>


            <!-- Forgot password -->
            <div class="mb-5 text-start">
                <a href="{{ route('password.request') }}" class="forget text-decoration-none small">هل نسيت كلمة
                    السر؟</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn w-100 btn-gradient">
                تسجيل الدخول
            </button>
        </form>

        <!-- Sign up -->
        <div class="text-center mt-3">
            <span class="text-muted">ليس لديك حساب؟</span>
            <a href="{{ route('register') }}" class="text-warning text-decoration-none">إنشاء حساب</a>
        </div>
    </div>

</div>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

<script>
    document.addEventListener("livewire:navigated", initPhoneInput);
    document.addEventListener("livewire:load", initPhoneInput);

    function initPhoneInput() {
        const input = document.querySelector("#phone");
        if (!input) return;


        if (!window.intlTelInputGlobals.getInstance(input)) {
            window.intlTelInput(input, {
                initialCountry: "sa",
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        }
    }
</script>
