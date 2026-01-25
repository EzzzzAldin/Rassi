<div class="mt-4 flex flex-col gap-6">
    <flux:text class="text-center text-black-50">
        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
    </flux:text>

    @if (session('status') == 'verification-link-sent')
        <flux:text class="text-center text-black-50 font-medium !dark:text-green-400 !text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </flux:text>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <flux:button type="button" wire:click="sendVerification" wire:loading.attr="disabled"
            wire:target="sendVerification" variant="primary" class="w-full btn btn-gradient text-white">
            {{ __('Resend verification email') }}
        </flux:button>

        <flux:link class="text-sm cursor-pointer" href="javascript:void(0);" href="{{ route('logout') }}">
            {{ __('Log out') }}
        </flux:link>

    </div>
</div>
