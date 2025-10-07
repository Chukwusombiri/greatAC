<x-guest-layout>
    <div class="min-h-screen flex justify-center md:items-center bg-primary-dark">
        <div class="w-full md:w-1/2 h-full flex flex-col sm:justify-center items-center pt-6 pb-10 md:pb-16 px-4 text-primary-light">
            <div class="py-4">
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-gray-600 hover:border-blue-600 overflow-hidden rounded-xl">
                <h3 class="text-center futura-medium font-semibold text-2xl mb-6 capitalize">
                    Let’s get you started
                </h3>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <x-label for="name" value="{{ __('Username') }}"
                            class="text-primary-light text-sm capitalize sedan-regular tracking-wide" />
                        <x-input id="name"
                            class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter username..." />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email Address') }}"
                            class="text-primary-light text-sm capitalize sedan-regular tracking-wide" />
                        <x-input id="email"
                            class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light"
                            type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter email..." />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}"
                            class="text-primary-light text-sm capitalize sedan-regular tracking-wide" />
                        <x-input id="password"
                            class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light"
                            type="password" name="password" required autocomplete="new-password" placeholder="Unique password..." />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"
                            class="text-primary-light text-sm capitalize sedan-regular tracking-wide" />
                        <x-input id="password_confirmation"
                            class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light"
                            type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter unique password..." />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2 text-gray-400">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring focus:ring-offset focus:ring-blue-600">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring focus:ring-offset focus:ring-blue-600">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex flex-col items-center justify-end mt-5">                    
                        <x-button class="mb-5 px-6 py-3">
                            {{ __('Register') }}
                        </x-button>
                        <a class="underline text-md hover:text-primary-lighter tracking-wide"
                            href="{{ route('login') }}">
                            {{ __('Already have an account? Log-in') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
