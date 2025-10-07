<div class="flex flex-wrap items-center mb-5">
    @if (session('subscribed'))
        <div x-data="{ open: true }" class="w-full">
            <div x-show="open"
                class="bg-emerald-100 text-emerald-900 font-semibold text-sm m-2 rounded-lg p-4 flex justify-between">
                <span>{{ session('subscribed') }}</span>
                <button @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="flex flex-col w-full md:w-7/12 mb-2 md:mb-0 mr-0 md:mr-3">
        <input type="text" wire:model="email" id="subscribe_button" class="w-full appearance-none futura-medium outline-none px-4 py-2 md:py-4 rounded-full border border-gray-900 mr-3 text-gray-900" placeholder="Enter your email">
        <x-input-error for="email" class="mt-1 futura-book"/>
    </div>
    <x-secondary-button type="button" wire:click="submit">subscribe</x-secondary-button>
</div>
