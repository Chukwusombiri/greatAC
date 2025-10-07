<div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
        <div class="bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 border border-gray-600 shadow-2xl rounded-2xl overflow-hidden">
            
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between p-6 border-b border-gray-700">
                <h2 class="text-xl md:text-2xl futura-medium text-primary-lighter flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M3 14h18m-9 4V6" />
                    </svg>
                    Withdrawal History
                </h2>
                <x-link-two href="{{ route('user.withdrawal.create') }}" class="rounded-xl text-sm md:text-base">
                    + New Withdrawal
                </x-link-two>
            </div>

            <!-- Search Filter -->
            <div class="w-full px-6 py-8">
                <div class="relative w-full flex items-center bg-gray-900 border border-primary/20 rounded-full shadow-md focus-within:border-primary transition">
                    <input 
                        type="text" 
                        wire:model="search"
                        placeholder="Filter by plan, wallet, amount..."
                        class="w-full bg-transparent text-primary-light px-5 py-3 rounded-full focus:outline-none placeholder:text-primary-muted"
                    >
                    <button wire:click="clear" type="button" class="absolute right-3 text-primary-lighter hover:text-primary-light transition">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6" 
                             fill="currentColor" 
                             viewBox="0 0 24 24">
                             <path d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto px-4 pb-8">
                <table class="w-full text-left text-sm text-primary-light">
                    <thead class="text-xs uppercase text-primary-muted border-b border-primary/20">
                        <tr>
                            <th class="px-6 py-3">Amount</th>                            
                            <th class="px-6 py-3">Wallet</th>
                            <th class="px-6 py-3 text-center">Created</th>
                            <th class="px-6 py-3 text-center">Status</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($withdrawals as $withdrawal)
                            <tr class="border-b border-gray-800 hover:bg-gray-900/50 transition">
                                <td class="px-6 py-4 font-semibold text-primary-lighter">${{ number_format($withdrawal->amount) }}</td>                                
                                <td class="px-6 py-4 text-primary-light">{{ $withdrawal->wallet }}</td>
                                <td class="px-6 py-4 text-center text-sm text-primary-muted">
                                    {{ date('M d, Y | H:i', strtotime($withdrawal->created_at)) }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    @if ($withdrawal->isApproved)
                                        <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-medium">Approved</span>
                                    @else
                                        <span class="px-3 py-1 rounded-full bg-yellow-500/10 text-yellow-400 text-xs font-medium">Pending</span>
                                    @endif
                                </td>                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-primary-muted">
                                    No withdrawals found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="pt-6">
                    {{ $withdrawals->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
