<div>
    <x-action-overlay />
    <x-input-error for="portfolioBal" />
    <div class="mt-4">
        <x-label for="amount"
            class="font-semibold">{{ "Amount to deposit ($" . number_format($plan->min) . " -- $" . number_format($plan->max) . ')' }}</x-label>
        <x-input id="amount" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" type="number"
            wire:model="amount" required autocomplete="amount" placeholder="Enter amount to  deposit" />
        <x-input-error for="amount" />       
    </div>
    <div class="flex items-center justify-center mt-4">
        <x-secondary-button type="button" wire:click="deposit"
            class="inline-block px-6 py-2.5 bg-primary-dark font-semibold leading-normal text-center text-white align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-wider">
            {{ __('Deposit') }}
        </x-secondary-button>
    </div>
</div>
