<div
    class="w-full lg:w-7/12 mx-auto flex flex-col min-w-0 mt-6 px-6 py-6 break-words bg-white text-primary border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
    <x-alert />
    <x-action-overlay text="creating withdrawal" action="withdraw"/>
    <h3 class="text-2xl mb-3">
        Funds withdrawal
    </h3>
    <div class="mt-2 md:mt-4">
        <p class="futura-book text-3xl mb-px md:mb-2 font-extrabold">Portfolio balance: <span>${{ number_format(auth()->user()->acRoi) }}</span></p>
        <p class="text-xl futura-bold text-gray-700 leading-none">Trading session: {{auth()->user()->isEarning ? 'Active' : (auth()->user()->hasDeposited ? 'Inactive' : 'Dormant')}}</p>
        <span class="text-sm font-light">NB: You won't be able to make a withdrawal during an active trading session.</span>        
    </div>
    <div class="mt-2 md:mt-4">
        <x-label for="amount" class="font-semibold" value="{{ __('Amount to withdraw ($)') }}" />
        <x-input id="amount" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" type="number" wire:model="amount" min="1"
            required autocomplete="amount" placeholder="Enter amount to  deposit" />
        <x-input-error for="amount" />
    </div>
    <div class="mt-4">
        <x-label for="selectedWallet" class="font-semibold" value="{{ __('Choose your payment method') }}" />
        <x-input-error for="selectedWallet" />
        <x-input-error for="selectedAddress" />
        @if ($allWallets && count($allWallets) > 0)            
            <div class="mt-2 flex flex-wrap" x-data="{ selectedWallet: @entangle('selectedWallet') }">
                @foreach ($allWallets as $element)
                    <div class="p-px md:p-2">
                        <div class="flex items-center">
                            <button wire:click='tryValue("{{ $element->id }}")'                                 
                                x-bind:class="{ 'bg-primary-dark text-gray-100 border-primary-dark': selectedWallet === '{{ $element->name }}', 'border-gray-300 text-gray-700' : selectedWallet !== '{{ $element->name }}' }"
                                class="select-none cursor-pointer flex items-center justify-center rounded-lg border border-gray-300 py-2 px-4 font-semibold text-gray-700 text-sm transition-colors duration-200 ease-in-out">
                                <span>{{ $element->name }}</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="md:mt-2 flex flex-wrap">
                <p class="text-rose-600">You've not added withdrawal payment methods.</p>
            </div>
        @endif
    </div>    

    <div class="flex items-center justify-center mt-4">
        <x-secondary-button type="button" wire:click="withdraw"
            class="inline-block px-6 py-2.5 font-semibold text-center text-primary-lighter align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md bg-primary-dark hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-wide">
            {{ __('Withdraw funds') }}
        </x-secondary-button>
    </div>
    <div class="mt-4 flex">
        <a href="{{route('user.payment.create')}}" class="underline text-primary">Add your withdrawal payment method</a>
    </div>
</div>
