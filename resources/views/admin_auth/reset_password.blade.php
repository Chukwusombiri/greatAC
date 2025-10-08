<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('admin.password.reset.complete') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="block">               
                <label for="email" class="text-gray-400 text-sm">Email </label>
                <x-input id="email" class="block mt-1 w-full bg-transparent text-gray-200" type="email" name="email" :value="old('email', $email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">                
                <label for="password" class="text-gray-400 text-sm">Password </label>
                <x-input id="password" class="block mt-1 w-full bg-transparent text-gray-200" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">                
                <label for="password_confirmation" class="text-gray-400 text-sm">Confirm Password </label>
                <x-input id="password_confirmation" class="block mt-1 w-full bg-transparent text-gray-200" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
