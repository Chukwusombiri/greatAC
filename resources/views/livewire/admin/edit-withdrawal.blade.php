<div class="futura-book">
    <div class="px-4 py-4">        
        <h2 class="text-lg text-gray-700 text-center">Edit withdrawal before approval</h2>
        @if (session()->has('result'))
            <div class="w-full my-4 bg-rose-100 text-rose-900 p-2 rounded-lg">
                {{ session('result') }}
            </div>
        @endif
        <div class="w-full mb-2">
            <x-label for="wallet" value="{{__('Payment method')}}" />
            <x-select wire:model="wallet" class="block w-full mt-2" id="wallet">
                <option value="">select wallet</option>                
               @foreach ($wallets as $wallet)
                    <option value="{{$wallet->name}}" @if($withdrawal->wallet==$wallet->name) {{'selected'}} @endif wire:key="wallet-{{ $wallet->id }}">{{$wallet->name}}</option>                   
               @endforeach
            </x-select>
            <x-input-error for="wallet" class="mt-1"/>
        </div>                 
        <div class="w-full mb-2">
            <x-label for="amount" value="{{__('Amount')}}" />
            <x-input type="number" wire:model="amount" class="block w-full mt-2" />
            <x-input-error for="amount" class="mt-1"/>
        </div>                          
    </div>
    <div class="w-full flex justify-end items-center p-4 bg-gray-200">
        <button onclick='Livewire.emit("closeModal")'
         class="px-4 py-2 bg-rose-600 rounded-md text-sm text-gray-100 mr-4">close</button>
        <button wire:click="save" class="px-4 py-2 bg-sky-600 rounded-md text-sm text-gray-100">save</button>
    </div>
</div>
