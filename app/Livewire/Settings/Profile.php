<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    // بيانات المستخدم
    public string $name = '';

    public string $email = '';

    public ?string $phone = null;

    public ?string $address = null;

    // تحديد صاحب البروفايل
    public int $profileUserId;

    public bool $isOwner = false;

    /**
     * Mount the component and populate data
     */
    public function mount(User $user): void
    {
        $this->profileUserId = $user->id;
        $this->isOwner = Auth::id() === $user->id;

        if ($this->isOwner) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone = $user->phone;
            $this->address = $user->address;
        } else {
            $otherUser = User::find($this->profileUserId);
            if ($otherUser) {
                $this->name = $otherUser->name;
                $this->email = $otherUser->email;
                $this->phone = $otherUser->phone;
                $this->address = $otherUser->address;
            }
        }
    }

    /**
     * تحديث بيانات البروفايل
     */
    public function updateProfileInformation(): void
    {
        if (! $this->isOwner) {
            return;
        }

        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|regex:/^[a-z0-9._%+-]+@gmail\.com$/|unique:users,email,'.$this->profileUserId,
            'full_phone' => 'nullable|string|max:30|unique:users,phone,'.$this->profileUserId,
            'address' => 'nullable|string|max:255',
        ]);

        $user = User::find($this->profileUserId);
        if ($user) {
            $user->update($validated);
            session()->flash('success', 'تم تحديث بيانات البروفايل بنجاح.');
        }
    }

    /**
     * إعادة إرسال تفعيل البريد الإلكتروني
     */
    public function resendVerificationNotification(): void
    {
        if (! $this->isOwner) {
            return;
        }

        $user = \App\Models\User::find($this->profileUserId);
        if ($user && ! $user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
            session()->flash('success', 'تم إرسال رسالة التفعيل على البريد الإلكتروني.');
        }
    }

    public function render()
    {
        return view('livewire.settings.profile', [
            'isOwner' => $this->isOwner,
            'user' => User::find($this->profileUserId),
        ])
            ->layout('layouts.app', [
                'title' => __('Profile Settings'),
            ]);
    }
}
