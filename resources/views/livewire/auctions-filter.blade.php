<div class="container my-4">
    <!-- الأزرار -->
    <div class="d-flex justify-content-center gap-2 flex-wrap mb-4">
        <button wire:click="setFilter('all')" class="btn {{ $filter === 'all' ? 'btn-warning' : 'btn-outline-warning' }}">
            كل المزادات
        </button>
        <button wire:click="setFilter('current')"
            class="btn {{ $filter === 'current' ? 'btn-warning' : 'btn-outline-warning' }}">
            المزادات الحالية
        </button>
        <button wire:click="setFilter('closed')"
            class="btn {{ $filter === 'closed' ? 'btn-warning' : 'btn-outline-warning' }}">
            المزادات المغلقة
        </button>
        <button wire:click="setFilter('mine')"
            class="btn {{ $filter === 'mine' ? 'btn-warning' : 'btn-outline-warning' }}">
            مزادتي
        </button>
    </div>

    <!-- الكروت -->
    <div class="row">
        @forelse ($auctions as $auction)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $auction['title'] }}</h5>
                        <p class="card-text">
                            الحالة:
                            <span class="badge bg-secondary">{{ $auction['status'] }}</span>
                        </p>
                        <a href="#" class="btn btn-sm btn-gradient">تفاصيل</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">لا توجد مزادات في هذا القسم.</p>
            </div>
        @endforelse
    </div>
</div>
