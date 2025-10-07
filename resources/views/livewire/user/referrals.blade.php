<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative mb-6 break-words bg-primary-lighter shadow-xl rounded-2xl px-6 pt-6 pb-8">
                
                <!-- Header -->
                <h4 class="text-2xl futura-medium mb-6 text-primary-dark">Referrals & Rewards</h4>
                
                <!-- Summary -->
                <div class="flex flex-wrap justify-between items-center gap-6">
                    <div class="flex flex-col space-y-1">
                        <h6 class="expletus-sans text-lg font-semibold text-primary-dark">
                            Total Referral Bonus: ${{ number_format(auth()->user()->downlines()->sum('bonus')) }}
                        </h6>
                        <h6 class="expletus-sans text-lg font-semibold text-primary-dark">
                            Latest Bonus: ${{ number_format(auth()->user()->refBonus) }}
                        </h6>
                    </div>

                    <!-- Referral Link Copy -->
                    <div class="flex flex-col w-full sm:w-auto">
                        <h6 class="futura-book mb-2 md:mb-4 text-primary-dark">Referral Link</h6>
                        <div class="flex items-center w-full px-3 py-2 border rounded-xl shadow-md bg-primary-white text-primary"
                             x-data="{
                                isClicked: false,
                                refLink: {{ json_encode(config('app.url').'/register?ref=' . auth()->user()->referralId) }},
                                copyToClipboard() {
                                    navigator.clipboard.writeText(this.refLink);
                                    this.isClicked = true;
                                    setTimeout(() => this.isClicked = false, 3000);
                                }
                             }">
                            <span class="flex-grow truncate text-sm" x-text="refLink"></span>
                            <button @click="copyToClipboard()" class="ml-2 w-7 h-7 text-gray-800">
                                <svg x-show="!isClicked" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                </svg>
                                <svg x-show="isClicked" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="my-8 w-full flex items-center">
                    <div class="flex items-center w-full p-4 h-12 border rounded-full shadow">
                        <input type="text" wire:model="search" placeholder="Filter by username or reward"
                               class="w-full border-none outline-none focus:ring-0 text-sm text-primary-dark">
                        <button wire:click="clear" type="button" class="ml-2 text-gray-500 hover:text-gray-600">
                            clear
                        </button>
                    </div>
                </div>

                <!-- Referral Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-primary-dark border-collapse">
                        <thead class="bg-primary-lighter">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-6 py-2">Downline</th>
                            <th class="px-6 py-2">Bonus</th>
                            <th class="px-6 py-2 text-center">Joined</th>
                            <th class="px-6 py-2 text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($referrals as $index => $referral)
                            <tr class="bg-primary-white rounded-xl shadow-sm mb-2">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-6 py-3 font-semibold">{{ $referral->downlineUsername }}</td>
                                <td class="px-6 py-3 font-semibold">${{ number_format($referral->bonus) }}</td>
                                <td class="px-6 py-3 text-center">{{ date('M d, Y', strtotime($referral->updated_at)) }}</td>
                                <td class="px-6 py-3 text-center">
                                    @if($referral->bonus > 0)
                                        <span class="px-3 py-1 rounded-xl bg-emerald-50 text-emerald-600 font-semibold text-xs">Active</span>
                                    @else
                                        <span class="px-3 py-1 rounded-xl bg-yellow-50 text-yellow-600 font-semibold text-xs">Dormant</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No referrals yet.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $referrals->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
