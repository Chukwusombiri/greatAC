<div>
    <div class="px-4 py-4 relative">
        <div wire:loading.delay.long wire:target="submit">
            <div class="absolute top-1/2 left-1/2 h-24 w-24 flex" style="transform: translate(-50%, -50%);">
                <div class="relative rounded-full w-full h-full border-t-8 border-b-8 border-blue-500 animate-spin"></div>
            </div>
        </div>
        <h2 class="futura-medium text-lg text-gray-700 text-center">Create new withdrawal</h2>         
        <div class="w-full mb-2">
            <x-label for="wallet" value="{{ __('Payment method') }}" />
            <x-select wire:model="wallet" class="block w-full mt-2" id="wallet">
                <option value="">select wallet</option>
                @foreach ($wallets as $wallet)
                    <option value="{{ $wallet->name }}" wire:key="wallet-{{ $wallet->id }}">{{ $wallet->name }}</option>
                @endforeach
            </x-select>
            <x-input-error for="wallet" class="mt-1" />
        </div>
        <div class="w-full mb-2">
            <x-label for="amount" value="{{ __('Amount') }}" />
            <x-input type="number" wire:model="amount" class="block w-full mt-2" />
            <x-input-error for="amount" class="mt-1" />
        </div>
        <div class="w-full flex justify-end items-center p-2">        
            <button wire:click="submit" class="px-4 py-2 bg-sky-600 rounded-md text-sm text-gray-100 active:bg-sky-700">create withdrawal</button>
        </div>
    </div>
</div>
