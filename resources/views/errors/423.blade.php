<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        
        <div class="text-center max-w-lg">
            <h1 class="text-5xl futura-bold text-red-500 mb-4 animate-bounce">423</h1>
            <h2 class="text-2xl font-semibold text-white mb-2">Account Restricted</h2>
            <p class="text-primary-light mb-6">
                Your account has been restricted due to non-compliance with our policies. If you believe this is an error, please contact us at <a href="mailto:{{config('mail.mainTo.address')}}">{{config('mail.mainTo.address')}}</a>
            </p>
            <div class="flex items-center justify-center">
                <div>                
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
    
                        <x-button type="submit" class="text-primary-light">
                            {{ __('Log Out') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
        

        
    </x-authentication-card>
</x-guest-layout>