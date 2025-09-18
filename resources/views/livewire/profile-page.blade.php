<div>
    @if ($currentView === 'auctions')
        @livewire('auctions-filter', ['profileUserId' => $profileUserId])
    @elseif ($currentView === 'settings')
        <div class="settings-section p-4 shadow-sm rounded">
            <button wire:click="backToAuctions" class="btn btn-back mb-3 d-flex align-items-center">
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
                <form>
                    <input type="text" class="form-control mb-2" placeholder="الاسم">
                    <input type="text" class="form-control mb-2" placeholder="العنوان">
                    <button class="btn btn-success">حفظ</button>
                </form>
                <button wire:click="backToSettingsMenu" class="btn btn-link mt-3">⬅ رجوع للقائمة</button>
            @elseif ($settingsView === 'password')
                <h4 class="mb-3">تغيير كلمة المرور</h4>
                <form>
                    <input type="password" class="form-control mb-2" placeholder="كلمة المرور الحالية">
                    <input type="password" class="form-control mb-2" placeholder="كلمة المرور الجديدة">
                    <button class="btn btn-success">تغيير</button>
                </form>
                <button wire:click="backToSettingsMenu" class="btn btn-link mt-3">⬅ رجوع للقائمة</button>
            @elseif ($settingsView === 'payment')
                <h4 class="mb-3">تعديل تفاصيل الدفع</h4>
                <form>
                    <input type="text" class="form-control mb-2" placeholder="رقم البطاقة">
                    <input type="text" class="form-control mb-2" placeholder="تاريخ الانتهاء">
                    <button class="btn btn-success">حفظ</button>
                </form>
                <button wire:click="backToSettingsMenu" class="btn btn-link mt-3">⬅ رجوع للقائمة</button>
            @endif
        </div>
    @endif
</div>
