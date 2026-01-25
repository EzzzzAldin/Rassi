<div class="d-flex align-items-center justify-content-center py-5">

    <div class="w-100 shadow-sm {{ $step === 'form' ? 'form-login' : 'form-signup' }}">
        <!-- Logo -->
        <div class="text-center">
            <img src="{{ asset('assets/imgs/image 15 (1) 1.png') }}" alt="Logo" height="120" width="244">
        </div>

        @if ($step === 'choose')
            <!-- Title -->
            <h4 class="text-center mb-2">إنشاء حساب جديد</h4>
            <p class="text-center mb-4">قم باختيار نوع حسابك</p>

            <div class="mb-3">
                <button wire:click="selectType('individual')"
                    class="choose-btn d-flex align-items-center w-100 mb-4 p-3 text-start">
                    <div class="icon-wrapper me-3">
                        <img src="{{ asset('assets/imgs/Profile.svg') }}" alt="الأمان" width="40" height="40">
                    </div>
                    <div>
                        <h5 class="mb-1">حساب فردي</h5>
                        <p class="mb-0">انضم كمستخدم فردي وشارك في المزايدات مباشرة.</p>
                    </div>
                </button>

                <button wire:click="selectType('company')"
                    class="choose-btn d-flex align-items-center w-100 mb-3 p-3 text-start">
                    <div class="icon-wrapper me-3">
                        <img src="{{ asset('assets/imgs/company.svg') }}" alt="الأمان" width="40" height="40">
                    </div>
                    <div>
                        <h5 class="mb-1">حساب شركة</h5>
                        <p class="mb-0">سجّل كشركة أو مؤسسة لإدارة منتجات ومزادات متعددة باسم عملك.</p>
                    </div>
                </button>

                {{-- <button wire:click="selectType('company')" class="btn w-100 btn-outline-secondary">
                    <i class="fa-solid fa-building me-2"></i> حساب شركة
                </button> --}}
            </div>
        @elseif($step === 'form')
            <!-- Title -->
            <h4 class="text-center mb-2">
                {{ $accountType === 'individual' ? 'إنشاء حساب فرد جديد' : 'إنشاء حساب شركة جديد' }}
            </h4>
            <p class="mb-4 text-center">
                أنشئ حسابك الآن لتبدأ المشاركة في المزادات بسهولة وأمان.
            </p>


            <!-- Livewire form -->
            <form wire:submit.prevent="register">
                <!-- Name -->
                <div class="mb-3">
                    <input type="text" wire:model="name" class="form-control text-start" placeholder="الإسم"
                        required>
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <input type="email" wire:model="email" class="form-control text-start"
                        placeholder="البريد الإلكتروني" required>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="mb-3" wire:ignore>
                    <input id="phone" type="tel" wire:model="phone" class="form-control text-start"
                        placeholder="رقم الهاتف" required>
                    <input type="hidden" name="full_phone" id="full_phone" wire:model="full_phone">

                    @error('full_phone')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-3">
                    <input type="text" wire:model="address" class="form-control text-start" placeholder="العنوان"
                        required>
                    @error('address')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-2 position-relative">
                    <input type="password" wire:model="password" id="password" class="form-control ps-5 text-start"
                        placeholder="كلمة المرور" required>
                    <span class="end-0 pe-3 position-absolute top-50 translate-middle-y" style="cursor:pointer;"
                        onclick="togglePassword('password', 'toggleIcon')">
                        <i id="toggleIcon" class="fa-solid fa-eye"></i>
                    </span>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="mb-3 position-relative">
                    <input type="password" wire:model="password_confirmation" id="password_confirmation"
                        class="form-control ps-5 text-start" placeholder="تأكيد كلمة المرور" required>
                    <span class="end-0 pe-3 position-absolute top-50 translate-middle-y" style="cursor:pointer;"
                        onclick="togglePassword('password_confirmation', 'toggleIconConfirm')">
                        <i id="toggleIconConfirm" class="fa-solid fa-eye"></i>
                    </span>
                </div>

                <div class="mb-3">
                    <label class="form-label">صورة الملف الشخصي</label>

                    <input type="file" wire:model="image" accept="image/*" class="form-control">

                    {{-- Preview --}}
                    @if ($image)
                        <div class="mt-2">
                            <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail"
                                style="max-height: 200px; width:auto;">
                        </div>
                    @endif

                    @error('image')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>


                @if ($accountType === 'company')
                    <div class="mb-3">
                        <label class="form-label">صورة السجل التجاري</label>

                        <input type="file" wire:model="commercial_register" accept="image/*" class="form-control"
                            required>

                        {{-- Preview --}}
                        @if ($commercial_register)
                            <div class="mt-2">
                                <img src="{{ $commercial_register->temporaryUrl() }}" class="img-thumbnail"
                                    style="max-height: 200px">
                            </div>
                        @endif

                        @error('commercial_register')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                @endif


                <!-- Submit button -->
                <button type="submit" class="btn w-100 btn-gradient">إنشاء الحساب</button>
            </form>

            <!-- Back button -->
            <div class="text-center mt-3">
                <a wire:click="$set('step','choose')" style="cursor:pointer;"
                    class="re-account text-decoration-none">
                    العودة لاختيار نوع الحساب
                </a>
            </div>
        @endif

        <!-- Already have account -->
        <div class="text-center mt-3">
            <span class="text-muted">لديك حساب بالفعل؟</span>
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

    function initPhoneInput() {
        const input = document.querySelector("#phone");
        const hiddenInput = document.querySelector("#full_phone");

        if (!input || !hiddenInput) return;

        const oldInstance = window.intlTelInputGlobals.getInstance(input);
        if (oldInstance) {
            oldInstance.destroy();
            console.log("📛 تم تدمير النسخة القديمة من intlTelInput");
        }

        const iti = window.intlTelInput(input, {
            initialCountry: "sa",
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        const syncNumber = () => {
            hiddenInput.value = iti.getNumber();
            hiddenInput.dispatchEvent(new Event('input', {
                bubbles: true
            }));
            console.log("📞 Full number with country code:", hiddenInput.value);
        };

        input.addEventListener("countrychange", syncNumber);
        input.addEventListener("input", syncNumber);
        input.addEventListener("blur", syncNumber);

        syncNumber();
    }



    document.addEventListener('livewire:init', () => {

        Livewire.on('phone-field-ready', () => {
            console.log("📱 وصل event: phone-field-ready من Livewire");
            setTimeout(() => {
                initPhoneInput();
            }, 200);
        });

        Livewire.hook('message.processed', (message, component) => {
            if (document.querySelector("#phone")) {
                initPhoneInput();
            } else {
                console.log("❌ مفيش #phone في الصفحة حاليا");
            }
        });
    });
</script>
