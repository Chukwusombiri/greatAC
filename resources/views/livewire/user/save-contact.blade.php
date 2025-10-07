<div class="w-full mb-10 mt-6 px-6 py-4 border border-gray-600 hover:border-gray-800 rounded-xl">
    <h3 class="futura-medium font-semibold text-2xl mb-3">
        Contact Information
    </h3>
    <p class="futura-book mb-6">
        Providing these details is optional at this stage—you may choose to skip and update them later as needed.
    </p>
    <x-alert />
    <x-validation-errors class="mb-4" />

    <div>
        <div class="relative w-full">
            <x-label for="address" value="{{ __('Address') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
            <x-input wire:model="address" id="address" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" placeholder="Enter your address"/>
            <x-input-error for="address" />            
        </div>
        <div class="grid grid-cols-2 gap-6 mt-4">
            <div class="col-span-2 md:col-span-1">
                <x-label for="phone" value="{{ __('Phone') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                <x-input id="phone" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" type="text" wire:model="phone"
                    required autofocus autocomplete="phone" placeholder="Enter your phone number" />
                <x-input-error for="phone" />
            </div>
            <div class="col-span-2 md:col-span-1">
                <x-label for="city" value="{{ __('city of residence') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                <x-input id="city" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" type="text" wire:model="city"
                    required autofocus autocomplete="city" placeholder="Enter your city" />
                <x-input-error for="city" />
            </div>
        </div>

        <div class="grid grid-cols-2 gap-6 mt-4">
            <div class="relative col-span-2 md:col-span-1">
                <x-label for="country" value="{{ __('Country') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                <x-input id="country" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" type="text" wire:model="country"
                    required autofocus autocomplete="country" placeholder="Enter your country" />
                <x-input-error for="country" />
                @if (count($countrySuggestions) > 0)
                    <div id="countrySuggestionList"
                        class="absolute top-full z-50 bg-gray-700 w-full mt-1 rounded-xl shadow-md">
                        @foreach ($countrySuggestions as $c => $cSuggest)
                            <button type="button" wire:click="setCountry('{{ $cSuggest }}')"
                                class="block w-full py-1 px-4 text-start outline-none border-none">{{ $cSuggest }}</button>
                        @endforeach
                    </div>
                @else
                    <div id="countrySuggestionList" class="hidden"></div>
                @endif
            </div>            
        </div>        
        <div class="flex items-center justify-center mt-4">
            <x-secondary-button type="button" wire:click="save" class="ml-4 text-sm font-semibold">
                {{ __('submit') }}
            </x-secondary-button>
        </div>
        <div class="flex justify-center mt-4">            
            <button wire:click="redirectToDestination" class="inline-flex gap-2 flex-nowrap hover:underline outline-none border-0 text-blue-500 hover:text-blue-600 cursor-pointer text-base futura-medium tracking-wide"><span>I'll fill later, skip now!</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                <path d="M5 12l14 0"></path>
                <path d="M15 16l4 -4"></path>
                <path d="M15 8l4 4"></path>
              </svg></button>
        </div>
    </div>
</div>
