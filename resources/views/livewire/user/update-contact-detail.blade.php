<x-form-section submit="save">
    <x-slot name="title">
        {{ __('Demographic Informations') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your demographic information.') }}
    </x-slot>

    <x-slot name="form">    
        <x-alert />    
        <!-- Phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="phone" value="{{ __('Phone') }}" />
            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="phone" autocomplete="phone" />
            <x-input-error for="phone" class="mt-2" />
        </div>
        {{-- address --}}
        <div class="relative col-span-6 sm:col-span-4">
            <x-label for="address" value="{{ __('Address') }}" />
            <x-input wire:model="address" id="address" class="block mt-1 w-full"/>
            <x-input-error for="address"  class="mt-2" />           
        </div>
        {{-- city --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="city" value="{{ __('City') }}" />
            <x-input id="city" type="text" class="mt-1 block w-full" wire:model.defer="city" autocomplete="city" />
            <x-input-error for="city" class="mt-2" />
        </div>
        {{-- country --}}
        <div class="relative col-span-6 sm:col-span-4">
            <x-label for="country" value="{{ __('Country') }}" />
            <x-input id="country" class="block mt-1 w-full" type="text" wire:model="country"
                required autocomplete="country"/>
            <x-input-error for="country"  class="mt-2" />
            @if (count($countrySuggestions) > 0)
                <div id="countrySuggestionList"
                    class="absolute top-full z-50 bg-white w-full border border-gray-300 mt-1 rounded-xl shadow-md">
                    @foreach ($countrySuggestions as $c => $cSuggest)
                        <button type="button" wire:click="setCountry('{{ $cSuggest }}')"
                            class="block w-full py-1 px-4 text-start outline-none border-none">{{ $cSuggest }}</button>
                    @endforeach
                </div>
            @else
                <div id="countrySuggestionList" class="hidden"></div>
            @endif
        </div>                
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <button wire:loading.attr="disabled" class="inline-flex items-center px-4 py-2 my-bg-gradient border border-transparent rounded-md font-semibold text-xs text-primary-lighter uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition ease-in-out duration-150">
            {{ __('Save') }}
        </button>
    </x-slot>
</x-form-section>
