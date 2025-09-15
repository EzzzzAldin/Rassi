<div class="d-flex align-items-center justify-content-center py-5">

    <div class="form-login shadow-sm w-100">

        <!-- Logo -->
        <div class="text-center">
            <img src="{{ asset('assets/imgs/login.png') }}" alt="Logo" height="64" width="130">
        </div>

        <!-- Title -->
        <h4 class="text-center">إستعادة كلمة السر</h4>
        <p class="text-center mb-4">الرجاء إدخال كلمة المرور الجديدة أدناه</p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success text-center small">
                {{ session('status') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" wire:submit.prevent="resetPassword">
            @csrf

            <!-- Email Address -->
            {{-- <div class="mb-3">
                <input type="email" wire:model="email" class="form-control text-start" placeholder="البريد الإلكتروني"
                    required autocomplete="email">
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div> --}}

            <!-- Password -->
            <div class="mb-2 position-relative">
                <input type="password" wire:model="password" id="password" class="form-control ps-5 text-start"
                    placeholder="كلمة المرور الجديدة" required autocomplete="new-password">

                <span class="end-0 pe-3 position-absolute top-50 translate-middle-y" style="cursor:pointer;"
                    onclick="togglePassword('password', 'toggleIcon1')">
                    <i id="toggleIcon1" class="fa-solid fa-eye"></i>
                </span>

                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3 position-relative">
                <input type="password" wire:model="password_confirmation" id="password_confirmation"
                    class="form-control ps-5 text-start" placeholder="تأكيد كلمة المرور الجديدة" required
                    autocomplete="new-password">

                <span class="end-0 pe-3 position-absolute top-50 translate-middle-y" style="cursor:pointer;"
                    onclick="togglePassword('password_confirmation', 'toggleIcon2')">
                    <i id="toggleIcon2" class="fa-solid fa-eye"></i>
                </span>

                @error('password_confirmation')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn w-100 btn-gradient">
                إعادة التعيين
            </button>
        </form>

        <!-- Back to login -->
        <div class="text-center mt-3">
            <span class="text-muted">تذكرت كلمة المرور؟</span>
            <a href="{{ route('login') }}" class="text-warning text-decoration-none">تسجيل الدخول</a>
        </div>
    </div>

</div>

<script>
    function togglePassword(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);

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
