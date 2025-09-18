<?php

namespace App\Livewire;

use Livewire\Component;

class AuctionsFilter extends Component
{
    public string $filter = 'all';
    // Add Fake value If user open your Profile  profileUserId = 1; else profileUserId = any number
    // Can Change profileUserId From Profile.blade
    public int $profileUserId;
    public int $myId = 1;

    public function mount($profileUserId)
    {
        $this->profileUserId = $profileUserId;
    }

    public function setFilter(string $filter)
    {
        $this->filter = $filter;
    }

    public function render()
    {
        $auctions = collect([
            ['id' => 1, 'title' => 'مزاد سيارة', 'status' => 'current'],
            ['id' => 2, 'title' => 'مزاد هاتف', 'status' => 'closed'],
            ['id' => 3, 'title' => 'مزاد عقار', 'status' => 'current'],
            ['id' => 4, 'title' => 'مزاد خاص بي', 'status' => 'mine'],
        ]);

        $filtered = $this->filter === 'all'
            ? $auctions
            : $auctions->where('status', $this->filter);

        return view('livewire.auctions-filter', [
            'auctions' => $filtered,
            'isOwner' => $this->profileUserId === $this->myId,
        ]);
    }
}
