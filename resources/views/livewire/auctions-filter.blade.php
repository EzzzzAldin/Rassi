<div class="auction-info-filter container my-4">
    <div class="d-flex text-center w-100">
        <button wire:click="setFilter('all')" class="filter-btn flex-fill {{ $filter === 'all' ? 'active' : '' }}">
            جميع المزادات
        </button>
        <button wire:click="setFilter('current')"
            class="filter-btn flex-fill {{ $filter === 'current' ? 'active' : '' }}">
            المزادات الحالية
        </button>
        <button wire:click="setFilter('closed')" class="filter-btn flex-fill {{ $filter === 'closed' ? 'active' : '' }}">
            المزادات المنتهية
        </button>

        @if ($isOwner)
            <button wire:click="setFilter('mine')" class="filter-btn flex-fill {{ $filter === 'mine' ? 'active' : '' }}">
                مزاداتي
            </button>
        @endif
    </div>

    <div class="row mt-5 me-3 ms-3">
        @forelse ($auctions as $auction)
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ route('auctions.show', ['auctionId' => 1]) }}" class="text-decoration-none">
                    <div class="auction-card p-4 shadow-sm rounded position-relative h-100">

                        @if ($auction['status'] === 'closed')
                            <div class="auction-overlay">
                                <span class="overlay-text">انتهى</span>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                            <h6 class="mb-0">اسم المزاد</h6>
                            <img src="{{ asset('assets/imgs/image 13.png') }}" alt="الدولة" class="flag-img"
                                width="36" height="24">
                        </div>

                        <img src="{{ asset('assets/imgs/image 37.png') }}" alt="صورة المزاد"
                            class="img-fluid mt-3 mb-3 auc-img">

                        <div class="d-flex align-items-center mb-2 mt-3">
                            <img src="{{ asset('assets/imgs/Auction.svg') }}" alt="مزاد" width="24"
                                height="24">
                            <span class="auc-num ms-2">12</span>
                        </div>

                        @if ($auction['status'] === 'closed')
                            @if ($filter === 'mine' && $isOwner)
                                @if ($auction['winner_id'] === $myId)
                                    <p class="mb-2 title-auc mt-4 text-start text-success">✅ مبروك! كسبت المزاد</p>
                                @else
                                    <p class="mb-2 title-auc mt-4 text-start text-danger">❌ للأسف خسرت المزاد</p>
                                @endif
                            @else
                                <p class="mb-2 title-auc mt-4 text-start text-danger">المزاد منتهي</p>
                            @endif

                            <div class="d-align-items-center d-flex justify-content-between flex-wrap">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/imgs/681016.jpg') }}" alt="الفائز"
                                        class="rounded-circle me-2 object-fit-cover" width="28" height="28">
                                    <span class="win-user">محمد خالد</span>
                                </div>

                                <div class="price-box mt-2">
                                    <span class="btn btn-price w-100">850 رس</span>
                                </div>
                            </div>
                        @else
                            {{-- لو المزاد لسه شغال --}}
                            <p class="mb-2 title-auc mt-4 text-start">ينتهي خلال :</p>
                            <div class="d-align-items-center d-flex justify-content-between flex-wrap">
                                <div class="d-flex justify-content-between text-danger fw-bold flex-wrap">
                                    <span class="count-auc m-2">01 <span class="d-block">يوم</span></span>
                                    <span class="count-auc m-2">01 <span class="d-block">ساعة</span></span>
                                    <span class="count-auc m-2">01 <span class="d-block">دقيقة</span></span>
                                </div>

                                <div class="price-box mt-2">
                                    <span class="btn btn-price w-100">850 رس</span>
                                </div>
                            </div>
                        @endif

                    </div>
                </a>
            </div>
        @empty
            <div class="col-12 text-center mt-5 mb-5">
                <p class="text-muted">لا توجد مزادات في هذا القسم.</p>
            </div>
        @endforelse

    </div>

</div>
