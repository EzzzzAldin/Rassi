<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAuctionWizard extends Component
{
    use WithFileUploads;

    public $step = 1;

    // Step 1
    public $images = [];
    public $title;
    public $description;
    public $category;
    public $location;

    // Step 2
    public $starting_price;
    public $end_time;
    public $country;

    // Step 3
    public $extra_details;
    public $terms;

    public function nextStep()
    {
        $this->validateStep();
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function submit()
    {
        $this->validateStep();

        // تخزين البيانات في قاعدة البيانات
        // Auction::create([...]);

        // Fire event لفتح المودال
        $this->dispatch('auction-created');
    }

    private function validateStep()
    {
        if ($this->step == 1) {
            $this->validate([
                'images.*' => 'image|max:1024',
                'title' => 'required|string|max:255',
                'description' => 'required',
                'category' => 'required',
                'location' => 'required',
            ]);
        }

        if ($this->step == 2) {
            $this->validate([
                'starting_price' => 'required|numeric|min:1',
                'end_time' => 'required|date|after:today',
                'country' => 'required|string',
            ]);
        }

        if ($this->step == 3) {
            $this->validate([
                'extra_details' => 'nullable|string',
                'terms' => 'accepted',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.create-auction-wizard')->layout('layouts.app');;
    }
}
