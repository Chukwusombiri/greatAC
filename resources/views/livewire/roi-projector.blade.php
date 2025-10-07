<div class="px-4 md:px-8 lg:px-10">
    <h2 class="text-xl md:text-3xl lg:text-5xl font-bold mb-6 text-center">Calculate potential Investment R.O.I</h2>
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="">
                <x-label for="full_name" value="{{__('Full Name')}}" />
                <x-input class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900" type="text" id="full_name" wire:model="name" required placeholder="Enter full name..."/>
                <x-input-error for="name" class="mt-1" />
            </div>
            <div class="">
                <x-label for="email" value="{{__('Email Address')}}" />
                <x-input class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900" type="text" id="email" wire:model="email" required placeholder="Enter email address..."/>
                <x-input-error for="email" class="mt-1" />
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="">
                <x-label for="amount" value="{{__('Amount intended to invest')}}" />
                <x-input class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900" type="number" id="amount" wire:model="amount" required placeholder="Enter intended amount to invest..."/>
                <x-input-error for="amount" class="mt-1" />
            </div>
            <div class="">
                <x-label for="rate" value="{{__('Intended investment rate')}}" />
                <x-select class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900" type="text" id="rate" wire:model="rate" required>
                    <option value="days" selected>Days</option>
                    <option value="weeks">Weeks</option>
                    <option value="months">Months</option>
                    <option value="years">Years</option>
                </x-select>
                <x-input-error for="rate" class="mt-1" />
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="">
                <x-label for="duration" value="{{__('Duration')}}" />
                <x-input class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900" type="number" id="duration" wire:model="duration" required placeholder="Enter duration in digits..."/>
                <x-input-error for="duration" class="mt-1" />
            </div>
            <div class="">
                <x-label for="comments" value="{{__('Additional Comments')}}" />
                <textarea class="p-4 mt-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:border-neutral-900 shadow-sm sm:text-sm" rows="4" placeholder="Enter additional comment..." id="comment" wire:model="comment" required></textarea>
                <x-input-error for="comments" class="mt-1" />
            </div>
        </div>
        <div class="flex justify-center items-center">
            <x-button wire:click.prevent="submit" class="px-8 py-3 rounded-xl bg-neutral-700 text-white hover:bg-neutral-800" type="button">Get result</x-button>
        </div>
    </div>
</div>
