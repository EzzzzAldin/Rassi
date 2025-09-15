<div class="d-flex align-items-center justify-content-center py-5">

    <div class="form-login shadow-sm w-100">

        <!-- Logo -->
        <div class="text-center">
            <img src="{{ asset('assets/imgs/login.png') }}" alt="Logo" height="64" width="130">
        </div>

        <!-- Title -->
        <h4 class="text-center">إستعادة كلمة السر</h4>
        <p class="text-center mb-4">أدخل بريدك الإلكتروني المسجل وسنرسل لك رابط لإعادة تعيين كلمة المرور.</p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success text-center small">
                {{ session('status') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" wire:submit.prevent="sendPasswordResetLink">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <input type="email" wire:model="email" class="form-control text-start" placeholder="البريد الإلكتروني"
                    required autofocus>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn w-100 btn-gradient">
                استمرار
            </button>
        </form>

        <!-- Back to login -->
        <div class="text-center mt-3">
            <span class="text-muted">تذكرت كلمة المرور؟</span>
            <a href="{{ route('login') }}" class="text-warning text-decoration-none">تسجيل الدخول</a>
        </div>
    </div>

</div>
