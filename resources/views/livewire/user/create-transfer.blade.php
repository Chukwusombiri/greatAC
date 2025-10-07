<div
    class="w-full lg:w-7/12 mx-auto flex flex-col min-w-0 mt-6 px-6 py-6 break-words bg-white text-primary border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
    <x-alert />
    <h3 class="font-semibold text-2xl mb-3">
        Funds transfer to another user
    </h3>
    <div class="mt-2 md:mt-4">
        <p class="futura-book text-3xl font-extrabold mb-px md:mb-2">Portfolio balance:
            <span>${{ number_format(auth()->user()->acRoi) }}</span>
        </p>
        <p class="text-xl futura-bold text-gray-700 leading-none">Trading session:
            {{ auth()->user()->isEarning ? 'Active' : (auth()->user()->hasDeposited ? 'Inactive' : 'Dormant') }}</p>
        <span class="text-sm font-light">NB: You won't be able to transfer funds during an active trading
            session.</span>
    </div>
    <div class="mt-2 md:mt-4">
        <x-label for="amount" class="font-semibold" value="{{ __('Amount to transfer ($)') }}" />
        <x-input id="amount" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" type="number"
            wire:model="amount" min="1" required autocomplete="amount" placeholder="Enter amount to  deposit" />
        <x-input-error for="amount" />
    </div>
    <div class="mt-4">
        <x-label for="receiverName" value="{{ 'Beneficiary Name' }}" />
        <x-input id="receiverName" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" wire:model="receiverName"
            required placeholder="Type name here..." />
        <x-input-error for="receiverName" />
    </div>
    <div class="mt-4">
        <x-label for="receiverEmail" value="{{ __('Beneficiary Email') }}" />
        <x-input id="receiverEmail" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" wire:model="receiverEmail"
            required placeholder="Type email here..." />
        <x-input-error for="receiverEmail" />
    </div>
    <div x-data="{
        showModal: false,
        transfer() {
            $wire.transfer();
            showModal = false;
        }
    }">
        <div x-show="showModal" class="fixed top-0 left-0 w-full h-full inset-0 z-[9999] flex">
            <div
                class="w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm flex flex-col justify-end md:justify-center items-center pb-20 px-6">
                <div class="w-full max-w-lg flex">
                    <div class="w-full bg-white rounded-2xl p-6">
                        <p class="text-md futura-medium tracking-wide">Are you sure you are willing to proceed with
                            funds transfer {{ $recieverEmail ?? '' }}?</p>
                        <div class="flex items-center justify-end mt-4 gap-4">
                            <button @click="showModal=false"
                                class="px-6 py-2.5 font-bold text-primary-dark bg-transparent rounded-lg cursor-pointer text-xs uppercase border border-gray-400 transition-all ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px">cancel</button>
                            <button @click="transfer()"
                                class="px-6 py-2.5 font-bold text-white bg-slate-800 rounded-lg cursor-pointer text-xs uppercase border border-slate-800 transition-all ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px">Proceed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <x-button type="button" @click="showModal=true"
                class="inline-block px-6 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">
                {{ __('Transfer funds') }}
            </x-button>
        </div>
    </div>

</div>
