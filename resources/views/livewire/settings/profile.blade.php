<div class="profile-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="profile-info">
                    <div class="text-center">
                        <img src="{{ asset('assets/imgs/681016.jpg') }}" alt="Profile Picture"
                            class="rounded-circle mb-3 object-fit-cover" width="150" height="150">

                        @php
                            $rating = 2.7;
                            $rounded = round($rating * 2) / 2;
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
                        <div class="btn-submit text-center">
                            <button type="submit" class="btn w-50 btn-gradient">
                                إرسال رسالة
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                @livewire('auctions-filter')
            </div>
        </div>
    </div>
</div>
