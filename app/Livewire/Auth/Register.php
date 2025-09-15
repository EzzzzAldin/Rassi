<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Register extends Component
{
    public string $step = 'choose';
    public string $accountType = '';

    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $password = '';
    public string $password_confirmation = '';


    public ?string $company_name = null;
    public ?string $commercial_register = null;


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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string', 'max:20', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ];

        // لو حساب شركة ضيف قواعد التحقق الإضافية
        if ($this->accountType === 'company') {
            $rules['company_name'] = ['required', 'string', 'max:255'];
            $rules['commercial_register'] = ['required', 'string', 'max:255'];
        }

        $validated = $this->validate($rules);

        $validated['password'] = Hash::make($validated['password']);
        $validated['account_type'] = $this->accountType;

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
