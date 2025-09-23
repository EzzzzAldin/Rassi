<div class="container py-4">

    {{-- Custom Steps Bar --}}
    <div class="d-flex justify-content-between mb-4 mt-5">

        {{-- Step 1 --}}
        <div class="flex-fill mx-1">
            <div class="step-bar {{ $step >= 1 ? 'active' : '' }}">
            </div>
            <h6 class="mt-2">بيانات المزاد</h6>
        </div>

        {{-- Step 2 --}}
        <div class="flex-fill mx-1">
            <div class="step-bar {{ $step >= 2 ? 'active' : '' }}">
            </div>
            <h6 class="mt-2">إعدادات المزاد</h6>
        </div>

        {{-- Step 3 --}}
        <div class="flex-fill mx-1">
            <div class="step-bar {{ $step >= 3 ? 'active' : '' }}">
            </div>
            <h6 class="mt-2">معلومات إضافيه</h6>
        </div>
    </div>


    {{-- Step 1 --}}
    @if ($step === 1)
        <div class="details-form p-4 mt-4">
            <h5 class="mb-3">تفاصيل المزاد</h5>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <div class="upload-box text-center p-5 border border-2 border-dashed rounded">
                            <input type="file" id="auctionImages" wire:model="images" multiple class="d-none">

                            <label for="auctionImages" class="d-block cursor-pointer">
                                <div class="mb-2">
                                    <img src="{{ asset('assets/imgs/Upload.svg') }}" alt="phone icon" width="64"
                                        height="64">
                                </div>
                                <p class="mb-1 text-muted">اسحب الصور هنا أو اضغط للرفع</p>
                                <small class="text-muted d-block">(PNG, JPG, max 5MB)</small>
                            </label>
                        </div>

                        <small class="text-muted d-block mt-2">
                            أول صورة رفع ستكون الصورة الرئيسية
                        </small>

                        @error('images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="col-12 col-md-8">
                    <div class="mb-4">
                        {{-- <label class="form-label">عنوان المزاد</label> --}}
                        <input type="text" wire:model="title" class="form-control" placeholder="اسم المنتج">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        {{-- <label class="form-label">عنوان المزاد</label> --}}
                        <input type="text" wire:model="location" class="form-control" placeholder="عنوان المزاد">
                        @error('location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        {{-- <label class="form-label">اختر الفئة</label> --}}
                        <select wire:model="category" class="form-select">
                            <option value="">اختر الفئة</option>
                            <option value="electronics">إلكترونيات</option>
                            <option value="cars">سيارات</option>
                            <option value="real_estate">عقارات</option>
                            <option value="antiques">تحف ومقتنيات</option>
                            <option value="other">أخرى</option>
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        {{-- <label class="form-label">الوصف</label> --}}
                        <textarea wire:model="description" class="form-control" rows="5" placeholder="وصف المنتج"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button wire:click="nextStep" class="btn nextStep btn-gradient">التالي</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Step 2 --}}
    @if ($step === 2)
        <div class="details-form step2-from p-4">
            <h5 class="mb-5">إعدادات المزاد</h5>

            <div class="mb-3">
                <input type="number" wire:model="starting_price" class="form-control text-start"
                    placeholder="سعر بداية المزاد">
                @error('starting_price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- تعديل حقل الوقت باستخدام Alpine.js --}}
            <div class="mb-3 position-relative">
                <input id="endTimeInput" x-ref="endTime" type="datetime-local" wire:model="end_time"
                    class="form-control ps-5 text-start" placeholder="وقت انتهاء المزاد">

                <img src="{{ asset('assets/imgs/Clock.svg') }}" @click="$refs.endTime.showPicker()"
                    {{-- هذا السطر هو الجديد --}} class="position-absolute top-50 end-0 translate-middle-y me-3" width="24"
                    height="24" alt="calendar" style="cursor: pointer;">

                @error('end_time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            {{-- تعديل حقل الدول باستخدام Alpine.js --}}
            <div class="mb-3 details-form" wire:ignore x-data x-init="const input = $refs.countryInput;
            const iti = window.intlTelInput(input, {
                initialCountry: 'sa',
                preferredCountries: ['sa', 'eg', 'ae'],
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js',
                separateDialCode: false,
                showSelectedDialCode: false
            });

            // تعيين الدولة الافتراضية
            const defaultCountry = iti.getSelectedCountryData();
            input.value = defaultCountry.name;
            $wire.set('country', defaultCountry.iso2);

            // تحديث عند تغيير الدولة
            input.addEventListener('countrychange', () => {
                const countryData = iti.getSelectedCountryData();
                input.value = countryData.name;
                $wire.set('country', countryData.iso2);
            });">
                <input type="text" x-ref="countryInput" class="form-control" onkeydown="return false"
                    style="cursor: pointer;">

                @error('country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="mb-3 mt-3 ticket-alert d-flex justify-content-center align-items-center">
                <h4>يتم خصم 1 تيكت لكل يوم </h4>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button wire:click="prevStep" class="btn nextStep btn-gradient">السابق</button>
                <button wire:click="nextStep" class="btn nextStep btn-gradient">التالي</button>
            </div>
        </div>
    @endif

    {{-- Step 3 --}}
    @if ($step === 3)
        <div class="details-form step2-from p-4">
            <h5 class="mb-3">تفاصيل إضافية</h5>

            <div class="mb-3">
                <textarea wire:model="addition" class="form-control" rows="5" placeholder="تفاصيل اضافية"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {{-- <label class="form-label">الوصف</label> --}}
                <textarea wire:model="terms" class="form-control" rows="5" placeholder="الشروط والاحكام"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button wire:click="prevStep" class="btn nextStep btn-gradient">السابق</button>
                <button wire:click="submit" class="btn nextStep btn-gradient">رفع المزاد</button>
            </div>
        </div>
    @endif

    {{-- Modal --}}
    <div wire:ignore.self class="modal fade" id="auctionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center py-5">
                    <h5>تم إرسال طلبك</h5>
                    <p class="text-muted">سيتم مراجعة المزاد من الإدارة قريبًا</p>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">تم</button>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        Livewire.on('auction-created', () => {
            let modal = new bootstrap.Modal(document.getElementById('auctionModal'));
            modal.show();
        });
    </script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const icon = document.getElementById("clockIcon");
            const input = document.getElementById("endTimeInput");

            if (icon && input) {
                icon.addEventListener("click", function() {
                    input.showPicker && input.showPicker(); // للمتصفحات اللي بتدعمه
                    input.focus(); // fallback عشان يفتح الكيبورد في الموبايل
                });
            }
        });
    </script> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#country_selector");
            const hiddenInput = document.querySelector("#country_hidden");

            if (input) {
                const iti = window.intlTelInput(input, {
                    initialCountry: "sa",
                    preferredCountries: ["sa", "eg", "ae"],
                    separateDialCode: false,
                    showSelectedDialCode: false,
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
                });

                // نحط اسم الدولة الافتراضي
                const defaultCountry = iti.getSelectedCountryData();
                input.value = defaultCountry.name;
                hiddenInput.value = defaultCountry.iso2;
                if (typeof @this !== "undefined") {
                    @this.set('country', defaultCountry.iso2);
                }

                // لما يغير الدولة
                input.addEventListener("countrychange", function() {
                    const countryData = iti.getSelectedCountryData();
                    input.value = countryData.name; // اسم الدولة
                    hiddenInput.value = countryData.iso2; // الكود
                    if (typeof @this !== "undefined") {
                        @this.set('country', countryData.iso2);
                    }
                });

                // نخلي الكتابة ممنوعة في الانبوت
                input.addEventListener("keydown", e => e.preventDefault());
            }
        });
    </script> --}}
@endpush
