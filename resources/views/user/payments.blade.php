<x-user-layout>
    <x-user-nav page="Payment" />
    <div class="relative futura-book w-full px-6 py-6 mx-auto">        
        <!-- content -->
        <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
        <div class="bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 border border-gray-600 shadow-2xl rounded-2xl overflow-hidden mt-6">
            
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between p-6 border-b border-gray-700">
                <h2 class="text-2xl md:text-3xl sedan-regular text-primary-lighter flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-3.866 0-7 3.134-7 7h14c0-3.866-3.134-7-7-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2v4m0 12v4m4-8h4M4 12h4" />
                    </svg>
                    Payment Methods
                </h2>
                <x-link-one href="{{ route('user.payment.create') }}" class="text-sm md:text-base">
                    Add New Wallet
                </x-link-one>
            </div>

            <!-- Content -->
            <div class="p-6">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <p class="text-primary-light text-md md:text-lg">
                            Manage your profit withdrawal methods here. Review all your wallets, update details, delete old ones, or add new payment options with ease.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

        <livewire:user.payments />
    </div>
    <x-user-footer />
</x-user-layout>
