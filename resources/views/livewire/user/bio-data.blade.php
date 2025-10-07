<x-form-section submit="save">
    <x-slot name="title">
        {{ __('Personal Informations') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your personal information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- first name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="first_name" value="{{ __('First Name') }}" />
            <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model.defer="first_name" autocomplete="first_name" />
            <x-input-error for="first_name" class="mt-2" />
        </div>

        <!-- last name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="last_name" value="{{ __('Last Name') }}" />
            <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="last_name" autocomplete="last_name" />
            <x-input-error for="last_name" class="mt-2" />
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
