<?php

namespace App\Livewire;

use Livewire\Component;

class AuctionsFilter extends Component
{
    public string $filter = 'all'; // الفلتر الافتراضي

    public function setFilter(string $filter)
    {
        $this->filter = $filter;
    }

    public function render()
    {
        // مؤقتًا نجهز بيانات ستاتيك لعرض الفكرة
        $auctions = collect([
            ['id' => 1, 'title' => 'مزاد سيارة', 'status' => 'current'],
            ['id' => 2, 'title' => 'مزاد هاتف', 'status' => 'closed'],
            ['id' => 3, 'title' => 'مزاد عقار', 'status' => 'current'],
            ['id' => 4, 'title' => 'مزاد خاص بي', 'status' => 'mine'],
        ]);

        // فلترة
        $filtered = $this->filter === 'all'
            ? $auctions
            : $auctions->where('status', $this->filter);

        return view('livewire.auctions-filter', [
            'auctions' => $filtered,
        ]);
    }
}
