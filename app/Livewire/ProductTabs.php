<?php

namespace App\Livewire;

use Livewire\Component;

class ProductTabs extends Component
{
    public string $activeTab = 'description'; 
    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.product-tabs');
    }
}
