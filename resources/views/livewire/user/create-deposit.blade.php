<div
    class="relative w-full lg:w-7/12 mx-auto flex flex-col min-w-0 mt-6 px-4 py-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
    <x-alert />    
    <h3 class="futura-medium text-2xl mb-3 tracking-wide text-center">
        Complete Deposit
    </h3>
    <div class="mt-5 flex flex-col gap-1">
        <h4 class="text-xl expletus-sans tracking-wide">Portfolio Balance: ${{ number_format(auth()->user()->acRoi) }}</h4>
        @if (!auth()->user()->isEarning)
        <div class="flex items-center">
            <label for="isFundFromBal" class="flex items-center cursor-pointer">
                <!-- Label -->
                <span class="mr-3 text-md text-gray-700 capitalize futura-bold">Reinvesting? deposit from your portfolio balance</span>
                <!-- Toggle -->
                <div class="relative">
                    <input type="checkbox" id="isFundFromBal" wire:model="isFundFromBal"
                        class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-green-500 transition-colors"></div>
                    <div
                        class="absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full shadow-md transition-all peer-checked:translate-x-full">
                    </div>
                </div>
                
            </label>
        </div>
        @endif
        
    </div>
    <hr />
    @if ($isFundFromBal)
        @livewire('user.deposit-from-bal', ['sentPlan'=> $plan], key(1))
    @else
        @livewire('user.deposit-crypto', ['sentPlan' => $plan], key(2))
    @endif
</div>
