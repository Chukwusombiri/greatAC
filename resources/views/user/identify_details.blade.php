<x-guest-layout>
    <div class="min-h-screen md:h-screen flex md:items-center justify-center bg-primary-dark text-primary-light">
        <div class="w-full md:w-1/2">
            <div class="h-full flex flex-col md:justify-center items-center pt-6 sm:pt-0 px-4">
                <div class="">
                    <x-authentication-card-logo />
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-gray-600 hover:border-gray-800 overflow-hidden rounded-xl">                    
                    <h3 class="futura-medium font-semibold text-2xl mb-3">
                        Personal Information
                    </h3>
                    <p class="futura-book mb-6">
                        This information is required to deliver tailored services and ensure a more seamless experience across the platform.
                    </p>

                    <x-validation-errors class="mb-4" />
                    
                    <form method="POST" action="{{ route('user.info.personal') }}">
                        @csrf 
                        @if (auth()->user()->username==null)
                        <div>
                            <x-label for="username" value="{{ __('Username') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="username" class="block mt-1 w-full px-4 py-2 md:py-4 placeholder:text-gray-500 text-primary-light bg-transparent" type="text" name="username"
                                :value="old('username')" required autofocus autocomplete="username" placeholder="Enter preferred username"/>
                            <x-input-error for="username" />
                        </div>
                        @endif                                               
                        <div class="mt-4">
                            <x-label for="first_name" value="{{ __('First name') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="first_name" class="block mt-1 w-full px-4 py-2 md:py-4 placeholder:text-gray-500 text-primary-light bg-transparent" type="text" name="first_name" required
                                autocomplete="first_name" placeholder="Enter your first name"/>
                                <x-input-error for="first_name" />
                        </div>
                        <div class="mt-4">
                            <x-label for="last_name" value="{{ __('Last name') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="last_name" class="block mt-1 w-full px-4 py-2 md:py-4 placeholder:text-gray-500 text-primary-light bg-transparent" type="text" name="last_name" required
                                autocomplete="last_name" placeholder="Enter your last name"/>
                                <x-input-error for="last_name" />
                        </div>

                        <div class="flex items-center justify-center mt-4">                           
                            <x-secondary-button type="submit" class="ml-4 text-sm font-semibold">
                                {{ __('submit') }}
                            </x-secondary-button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>