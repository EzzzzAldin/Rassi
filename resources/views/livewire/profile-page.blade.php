<div class="profile-forms">
    @if ($currentView === 'auctions')
        @livewire('auctions-filter', ['profileUserId' => $profileUserId])
    @elseif ($currentView === 'settings')
        <div class="settings-section p-4 ">
            <button wire:click="{{ is_null($settingsView) ? 'backToAuctions' : 'backToSettingsMenu' }}"
                class="btn btn-back mb-3 d-flex align-items-center">
                <img src="{{ asset('assets/imgs/Arrow.svg') }}" alt="رجوع" class="me-2">
                <span>رجوع</span>
            </button>


            @if (is_null($settingsView))
                <ul class="list-group-forms p-0">
                    <li class="list-group-item-forms mb-3">
                        <button wire:click="openSettingsForm('personal')" class="btn text-start w-100">
                            تعديل البيانات الشخصية
                        </button>
                    </li>
                    <li class="list-group-item-forms mb-3">
                        <button wire:click="openSettingsForm('password')" class="btn text-start w-100">
                            تغيير كلمة المرور
                        </button>
                    </li>
                    <li class="list-group-item-forms mb-3">
                        <button wire:click="openSettingsForm('payment')" class="btn text-startw-100">
                            تعديل تفاصيل الدفع
                        </button>
                    </li>
                </ul>
            @elseif ($settingsView === 'personal')
                <h4 class="mb-3">تعديل البيانات الشخصية</h4>
                <div class="form-login">
                    <form>
                        <div class="mb-3">
                            <input type="text" wire:model="name" class="form-control text-start" placeholder="الاسم"
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
                        <div class="mb-3">
                            <input id="phone" type="tel" wire:model="phone" class="form-control text-start"
                                placeholder="رقم الهاتف" required>
                            @error('phone')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Address -->
                        <div class="mb-3">
                            <input type="text" wire:model="address" class="form-control text-start"
                                placeholder="العنوان" required>
                            @error('address')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn w-25 btn-gradient">حفظ التعديلات</button>
                        </div>
                    </form>

                </div>
            @elseif ($settingsView === 'password')
                <h4 class="mb-3">تغيير كلمة المرور</h4>
                <div class="form-login">
                    <form>
                        <!-- Password -->
                        <div class="mb-2 position-relative">
                            <input type="password" wire:model="password" id="password"
                                class="form-control ps-5 text-start" placeholder="كلمة المرور" required>
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
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn w-25 btn-gradient">تغيير</button>
                        </div>
                    </form>
                </div>
            @elseif ($settingsView === 'payment')
                <h4 class="mb-3">تعديل تفاصيل الدفع</h4>
                <div class="form-login">
                    <form>
                        {{-- Card Number --}}
                        <div class="mb-3">
                            <input type="text" wire:model="card" class="form-control text-start"
                                placeholder="رقم البطاقة" required>
                            @error('card')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- card expired --}}
                        <div class="mb-3">
                            <input type="text" wire:model="expired" class="form-control text-start"
                                placeholder="تاريخ انتهاء صلاحية البطاقة ( يوم / شهر / سنة )" required>
                            @error('expired')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        {{--  --}}
                        <div class="mb-3">
                            <input type="text" wire:model="code" class="form-control text-start"
                                placeholder="رمز الامان" required>
                            @error('code')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn w-25 btn-gradient">حفظ التعديلات</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    @endif
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

        if (!input) return;

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

        input.addEventListener("countrychange", function() {
            console.log("🌍 Country changed:", iti.getSelectedCountryData());
        });

        input.addEventListener("input", function() {
            console.log("📞 Number changed:", input.value);
        });
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
