<div class="profile-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="profile-info">
                    <div class="text-center">
                        <img src="{{ asset('assets/imgs/681016.jpg') }}" alt="Profile Picture"
                            class="rounded-circle mb-3 object-fit-cover" width="150" height="150">

                        @php
                            $rating = 2.7;
                            $rounded = round($rating * 2) / 2;

                            // 🔹 هنا نتحكم هل أنا فاتح بروفايلي ولا بروفايل حد تاني
                            $myId = 1; // اعتبر ده الـ auth()->id() مؤقتاً
                            $profileUserId = 1; // جرّب تخليها = $myId لو عايز تعرض بروفايلك
                            $isOwner = $profileUserId === $myId;
                        @endphp

                        <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                            <div class="stars text-warning me-2 d-flex flex-row-reverse">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($rounded >= $i)
                                        <i class="fa-solid fa-star"></i>
                                    @elseif ($rounded + 0.5 == $i)
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <span class="rate">{{ number_format($rating, 1) }}</span>
                        </div>

                        <h4 class="mb-2 mt-3">محمد خالد</h4>

                        <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                            <img src="{{ asset('assets/imgs/Location.svg') }}" alt="Location" width="24"
                                class="me-2">
                            <span>القاهرة، مصر</span>
                        </div>

                        @if ($isOwner)
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Call.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>012 847 521 03</span>
                            </div>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Email.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>ezz@ezzaldi.com</span>
                            </div>
                        @endif

                        @if (!$isOwner)
                            <div class="btn-submit text-center">
                                <button type="submit" class="btn w-75 btn-gradient">
                                    إرسال رسالة
                                </button>
                            </div>
                        @else
                            {{-- <div class="btn-submit text-center mb-3">
                                <button type="submit" class="btn w-75 btn-gradient">
                                    الاعدادت
                                </button>
                            </div>
                            <div class="btn-submit text-center">
                                <button type="submit" class="btn w-75 btn-gradient">
                                    عرض مزاد
                                </button>
                            </div> --}}

                            <div class="btn-submit text-center mt-3 mb-3">
                                <button wire:click="$dispatch('openSettings')" class="btn w-75 btn-gradient">
                                    الإعدادات
                                </button>
                            </div>

                            <div class="btn-submit text-center">
                                <button type="submit" class="btn w-75 btn-gradient">
                                    عرض مزاد
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                @livewire('profile-page', ['profileUserId' => $profileUserId])
            </div>

        </div>
    </div>
</div>
