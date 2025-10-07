<div>
    <x-action-overlay />
    <div class="mt-4">
        <x-label for="amount"
            class="font-semibold text-lg">{{ "Amount to deposit ($" . number_format($plan->min) . " to $". number_format($plan->max) . ')' }}</x-label>
        <x-input id="amount" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" type="number" wire:model="amount"
            required autocomplete="amount" placeholder="Enter amount to  deposit" />
        <x-input-error for="amount" />
    </div>
    <div class="mt-4">
        <x-label for="selectedWallet" class="font-semibold text-lg"
            value="{{ __('Select your preferred funding source from the available cryptocurrencies.') }}" />

        <x-input-error for="selectedWallet" />
        <div class="mt-2 flex flex-wrap gap-3" x-data="{ selectedWallet: @entangle('selectedWallet') }">
            @foreach ($allWallets as $element)
                <div class="flex items-center">
                    <button wire:click="tryValue('{{ $element['id'] }}')"
                        x-bind:class="selectedWallet == '{{ $element['id'] }}' ?
                            'bg-gray-950 text-white border-gray-950' :
                            'border-gray-600 text-gray-600 bg-white'"
                        class="select-none cursor-pointer flex items-center justify-center rounded-lg border py-[4px] px-4 font-semibold text-sm transition-colors duration-200 ease-in-out">
                        <span>{{ $element['name'] }}</span>
                    </button>
                </div>
            @endforeach
        </div>

    </div>


    <div class="flex items-center justify-center mt-4">
        <x-secondary-button type="button" wire:click="deposit"
            class="inline-block px-6 py-2.5 bg-primary-dark font-semibold leading-normal text-center text-white align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-wider">
            {{ __('Deposit') }}
        </x-secondary-button>
    </div>
</div>
