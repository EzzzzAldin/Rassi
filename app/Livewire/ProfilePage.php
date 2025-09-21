<?php

namespace App\Livewire;

use Livewire\Component;

class ProfilePage extends Component
{
    public $profileUserId;
    public $currentView = 'auctions'; // افتراضي: المزادات
    public $settingsView = null; // اي فورم جوه الاعدادات

    protected $listeners = [
        'openSettings' => 'showSettings',
        'backToAuctions' => 'backToAuctions',
    ];

    public function mount($profileUserId)
    {
        $this->profileUserId = $profileUserId;
    }

    public function showSettings()
    {
        $this->currentView = 'settings';
        $this->settingsView = null; // أول ما يدخل على الاعدادات نرجعه للقائمة
    }

    public function backToAuctions()
    {
        $this->currentView = 'auctions';
        $this->settingsView = null;
    }

    public function openSettingsForm($form)
    {
        $this->settingsView = $form;

        if ($form === 'personal') {
            $this->dispatch('phone-field-ready');
        }
    }


    public function backToSettingsMenu()
    {
        $this->settingsView = null;
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
