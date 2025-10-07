<div class="flex flex-wrap -mx-3">

    <!-- Payment Information -->
    <div class="w-full md:w-7/12 px-3 mt-6">
        <x-alert />
        <div
            class="bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 border border-gray-600 shadow-2xl rounded-2xl overflow-hidden">
            <!-- Header -->
            <div class="flex justify-between items-center p-6 border-b border-gray-700">
                <h2 class="text-2xl sedan-regular text-primary-lighter">Payment Information</h2>
            </div>

            <!-- Wallet List -->
            <div class="p-6">
                <ul class="space-y-4">
                    @forelse ($wallets as $wallet)
                        <li
                            class="flex flex-col md:flex-row items-start md:items-center justify-between bg-gray-700 shadow rounded-2xl p-4">
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold mb-1 text-white tracking-wider">{{ $wallet->name }}</h3>
                                <p class="text-sm text-gray-200 break-all mb-1"><span
                                        class="font-semibold">Address:</span> {{ $wallet->address }}</p>
                                <p class="text-sm text-gray-200"><span class="font-semibold">Added on:</span>
                                    {{ date('M d, Y', strtotime($wallet->created_at)) }}</p>
                            </div>
                            <div class="flex gap-2 mt-3 md:mt-0">
                                <button wire:click="deleteWallet('{{ $wallet->id }}')"
                                    class="px-4 py-2 text-xs font-bold uppercase text-red-600 border-2 border-red-600 rounded-xl hover:bg-red-50 transition">
                                    Delete
                                </button>
                                <a href="{{ route('user.payment.edit', [$wallet->id]) }}"
                                    class="px-4 py-2 text-xs font-bold uppercase text-blue-600 border-2 border-blue-600 rounded-xl hover:bg-blue-50 transition">
                                    Edit
                                </a>
                            </div>
                        </li>
                    @empty
                        <li class="text-center text-sm text-slate-400 py-6">No wallets added yet.</li>
                    @endforelse
                </ul>

                <div class="mt-4">
                    {{ $wallets->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Payment Transactions -->
    <div class="w-full md:w-5/12 px-3 mt-6">
        <div
            class="bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 border border-gray-600 shadow-2xl rounded-2xl overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-700">
                <h2 class="text-2xl sedan-regular text-primary-lighter">Recent Transactions</h2>
            </div>

            <!-- Transactions List -->
            <div class="p-6">
                <ul class="space-y-3">
                    @forelse ($latest as $txn)
                        <li class="flex justify-between items-center shadow rounded-2xl p-4">
                            <div class="flex items-center gap-4">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-50 text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                    </svg>
                                </span>
                                <div class="flex flex-col">
                                    <h3 class="text-sm font-semibold text-gray-100 tracking-wider">{{ $txn->wallet }}</h3>
                                    <span
                                        class="text-xs text-gray-300">{{ date('M d, Y H:i', strtotime($txn->created_at)) }}</span>
                                </div>
                            </div>
                            <div>
                                <p
                                    class="text-sm font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-red-600 to-orange-600">
                                    ${{ number_format($txn->amount) }}
                                </p>
                            </div>
                        </li>
                    @empty
                        <li class="text-center text-sm text-slate-400 py-6">No recent transactions found.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

</div>
