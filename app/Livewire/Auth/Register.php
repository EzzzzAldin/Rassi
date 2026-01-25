<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class Register extends Component
{
    use WithFileUploads;

    public string $step = 'choose';

    public string $accountType = '';

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $full_phone = '';

    public string $address = '';

    public string $password = '';

    public string $password_confirmation = '';

    public $commercial_register = null;

    public $image = null;

    public function selectType($type): void
    {
        $this->accountType = $type;
        $this->step = 'form';

        $this->dispatch('phone-field-ready');
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'regex:/^[a-z0-9._%+-]+@gmail\.com$/',
                'unique:users,email',
            ],
            'full_phone' => ['required', 'string', 'max:30', 'unique:users,phone'],
            'address' => ['required', 'string', 'max:500'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];

        if ($this->accountType === 'company') {
            $rules['commercial_register'] = [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ];
        }

        $validated = $this->validate($rules);

        // uploade and store commercial register image
        $commercialRegisterPath = null;
        if ($this->accountType === 'company' && $this->commercial_register) {
            $commercialRegisterPath = $this->commercial_register
                ->store('commercial_registers', 'public');
        }
        // uploade and store profile image
        $profilePath = null;
        if ($this->image) {
            $profilePath = $this->image->store('profile', 'public');
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['full_phone'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
            'account_type' => $this->accountType,
            'commercial_register' => $commercialRegisterPath,
            'active' => ($this->accountType === 'company') ? false : true,
            'image' => $profilePath,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $this->redirect(route('home', absolute: false), navigate: true);
    }
}
