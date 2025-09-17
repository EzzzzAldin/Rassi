<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class Profile extends Component
{
    public string $name = '';

    public string $email = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        // قيم تجريبية مؤقتًا لعرض الفرونت
        $this->name = 'Test User';
        $this->email = 'test@example.com';
    }

    /**
     * Update the profile information (معلّقة لحد ما يجهز الباك اند)
     */
    public function updateProfileInformation(): void
    {
        // تعليق الأكشن لحد ما يتجهز الباك اند
        // dd('updateProfileInformation called');
    }

    /**
     * Resend verification (معلّقة مؤقتًا)
     */
    public function resendVerificationNotification(): void
    {
        // تعليق الأكشن مؤقتًا
        // dd('resendVerificationNotification called');
    }

    public function render()
    {
        return view('livewire.settings.profile')
            ->layout('layouts.app', [
                'title' => __('Profile Settings')
            ]);
    }
}
