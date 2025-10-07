<x-authentication-card>
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <div class="mb-4 text-md text-primary-light">
        {{ __('Enter the 6-digit code sent to your email. Check your spam folder if you don’t see it. Need a new one? Request another code.') }}
    </div>

    @if (session('status') == 'verification-code-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('We\'ve just sent a new verification code to the email you shared with us.') }}
        </div>
    @endif

    @if ($errors->has('code'))
        <div class="text-sm text-red-500 mb-4">{{ $errors->first('code') }}</div>
    @endif

    <form wire:submit.prevent="verify">
        <div class="flex flex-nowrap">
            <input id="code" wire:model="code" type="text" maxlength="6" required autofocus placeholder="ABC123"
                class="flex-grow p-3 bg-transparent text-md text-gray-100 placeholder:text-gray-500 border border-gray-700 focus:border-gray-400 outline-none ring-0 focus:ring-0 rounded-l-xl" />
            <button type="submit" class="text-primary-light p-3 w-max-content text-xs uppercase font-semibold my-bg-gradient rounded-r-xl">
                {{ __('Verify email') }}
            </button>
        </div>
    </form>
    <div class="mt-4 flex items-center justify-between">
        <div class="flex items-center">
            <button type="button" class="text-primary-light text-xs font-bold uppercase outline-none focus:outline-none pb-1 border-b-2 border-primary-light hover:text-white  tracking-wide" wire:click="resend">
                {{ __('Resend code') }}
            </button>
            <svg wire:loading class="animate-spin ml-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M3 12a9 9 0 0 0 9 9a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9" />
                <path d="M17 12a5 5 0 1 0 -5 5" />
            </svg>

        </div>
        <div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf

                <button type="submit"
                    class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 ml-2">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-authentication-card>
