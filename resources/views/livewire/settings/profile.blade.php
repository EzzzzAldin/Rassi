<div class="profile-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="profile-info">
                    <div class="text-center">
                        @php
                            $rating = 2.7;
                            $rounded = round($rating * 2) / 2;
                        @endphp

                        @if ($isOwner)
                            @if (auth()?->user()?->image)
                                <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Picture"
                                    class="rounded-circle mb-3 object-fit-cover" width="150" height="150">
                            @else
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center me-2"
                                        style="width: 150px; height: 150px; font-size: 48px;">
                                        {{ strtoupper(substr($user?->name ?? 'U', 0, 1)) }}
                                    </div>
                                </div>
                            @endif
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

                            <h4 class="mb-2 mt-3">{{ auth()?->user()?->name ?? '' }}</h4>

                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Location.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>{{ auth()?->user()?->address ?? '' }}</span>
                            </div>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Call.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span
                                    style="direction: {{ app()->getLocale() == 'en' ? 'ltr' : 'ltr' }} !important">{{ auth()?->user()?->phone ?? '' }}</span>
                            </div>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Email.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>{{ auth()?->user()?->email ?? '' }}</span>
                            </div>
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
                        @else
                            @if ($user?->image)
                                <img src="{{ asset('storage/' . $user?->image) }}" alt="Profile Picture"
                                    class="rounded-circle mb-3 object-fit-cover" width="150" height="150">
                            @else
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center me-2"
                                        style="width: 150px; height: 150px; font-size: 48px;">
                                        {{ strtoupper(substr($user?->name ?? 'U', 0, 1)) }}
                                    </div>
                                </div>
                            @endif
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
                            <h4 class="mb-2 mt-3">{{ $user->name ?? '' }}</h4>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Location.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>{{ $user->address ?? '' }}</span>
                            </div>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Call.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span
                                    style="direction: {{ app()->getLocale() == 'en' ? 'ltr' : 'ltr' }} !important">{{ $user->phone ?? '' }}</span>
                            </div>
                            <div class="location d-flex justify-content-center align-items-center mt-3 mb-3">
                                <img src="{{ asset('assets/imgs/Email.svg') }}" alt="Location" width="24"
                                    class="me-2">
                                <span>{{ $user->email ?? '' }}</span>
                            </div>
                            <div class="btn-submit text-center">
                                <button type="submit" class="btn w-75 btn-gradient">
                                    إرسال رسالة
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
