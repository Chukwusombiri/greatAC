<div
    class="w-full lg:w-7/12 mx-auto flex flex-col min-w-0 mt-6 px-4 py-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
    <x-alert />
    <div class="flex justify-between items-center flex-wrap gap-y-2 mb-3">
        <h3 class="text-2xl tracking-wide text-dark">
            Add payment method
        </h3>
        <a href="{{route('user.payments')}}" class="text-sm font-semibold uppercase flex gap-x-2 flex-nowrap items-center text-blue-600 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>              
            back
        </a>
    </div>    

    <div class="mt-4">
        <x-label for="name" class="font-semibold" value="{{ __('Wallet name') }}" />
        <x-input id="name" class="block mt-1 w-full px-4 py-2 md:py-4" type="text" wire:model="name" required
            autocomplete="name" placeholder="Enter cryptocurrency wallet name" />
        <x-input-error for="name" />
    </div>
    <div class="mt-4">
        <x-label for="address" class="font-semibold" value="{{ __('Wallet Address') }}" />
        <x-input id="address" class="block mt-1 w-full px-4 py-2 md:py-4" type="text" wire:model="address" required
            autocomplete="address" placeholder="Enter wallet address" />
        <x-input-error for="address" />
    </div>

    <div class="flex items-center justify-center mt-4">
        <x-secondary-button type="button" wire:click="save"
            class="inline-block px-6 py-2.5 bg-primary-dark font-semibold tracking-wide text-center text-primary-light align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md active:opacity-85 hover:-translate-y-px">
            {{ __('submit') }}
        </x-secondary-button>
    </div>

    </form>
</div>