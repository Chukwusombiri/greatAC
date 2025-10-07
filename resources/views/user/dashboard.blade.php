<x-user-layout>
    <!-- Navbar -->
    <x-user-nav page="dashboard" />
    <!-- cards -->
    <div class="futura-book w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- card1 -->
            <x-link-two href="{{ route('user.deposit.pricingTable') }}"
                class="py-4 flex justify-center gap-2 flex-nowrap">
                invest funds
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 4.5 15 15m0 0V8.25m0 11.25H8.25" />
                </svg>
            </x-link-two>
            <!-- card2 -->
            <x-link-two href="{{ route('user.withdrawal.create') }}" class="py-4 flex justify-center gap-2 flex-nowrap">
                Withdraw income
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                </svg>
            </x-link-two>
            <!-- card3 -->
            <x-link-two href="{{ route('user.deposit.pricingTable') }}"
                class="py-4 flex justify-center gap-2 flex-nowrap">
                Transfer funds
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                </svg>
            </x-link-two>
            <!-- card4 -->
            <x-link-two href="{{ route('user.payment.create') }}" class="py-4 flex justify-center gap-2 flex-nowrap">
                Add wallet
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </x-link-two>
        </div>
        <!-- row 2 -->
        <div class="mt-10 grid grid-cols-2 gap-4">
            <!-- card1 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="expletus-sans mb-2 text-4xl text-primary font-bold">
                                    ${{ number_format(auth()->user()->acRoi) }}</p>
                                <p class="expletus-sans mb-0 text-xl md:text-2xl max-w-[70%] uppercase text-stone-700">
                                    Portfolio balance
                                </p>
                                @if (auth()->user()->acRoi > 0 && !auth()->user()->isEarning)
                                    <div class="mt-4">
                                        <a href="{{ route('user.deposit.pricingTable') }}"
                                            class="bg-indigo-600 text-white font-semibold tracking-wide text-xs py-2 uppercase flex justify-center items-center gap-2 flex-nowrap rounded-xl">
                                            Re-invest funds
                                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 7l-4 -4l-4 4" />
                                                <path d="M17 3v11a3 3 0 0 1 -3 3h-11" />
                                                <path d="M7 13l-4 4l4 4" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="px-3 flex justify-end basis-1/3">
                            <div
                                class="inline-block w-16 h-16 flex items-center justify-center rounded-full shadow-md bg-primary-dark">
                                <svg class="size-10" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                    <path d="M12 12l0 .01" />
                                    <path d="M3 13a20 20 0 0 0 18 0" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- card2 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="expletus-sans mb-2 text-4xl text-primary font-bold">
                                    ${{ number_format(auth()->user()->acBal) }}</p>
                                <p class="expletus-sans mb-0 text-xl md:text-2xl max-w-[70%] uppercase text-stone-700">
                                    Active capital
                                </p>
                            </div>
                        </div>
                        <div class="px-3 flex justify-end basis-1/3">
                            <div
                                class="inline-block w-16 h-16 flex items-center justify-center rounded-full shadow-md bg-primary-dark">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="#fff" class="size-10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card3 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="expletus-sans mb-2 text-4xl text-primary font-bold">
                                    ${{ number_format(auth()->user()->perMonRoi) }}</p>
                                <p class="expletus-sans mb-0 text-xl md:text-2xl max-w-[70%] uppercase text-stone-700">
                                    Monthly Earnings
                                </p>
                            </div>
                        </div>
                        <div class="px-3 flex justify-end basis-1/3">
                            <div
                                class="inline-block w-16 h-16 flex items-center justify-center rounded-full shadow-md bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="#fff" class="size-10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card4 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                @if (!auth()->user()->currentPlan && !auth()->user()->prevPlan)
                                    <p class="expletus-sans mb-2 text-4xl text-gray-600 font-bold">Yet to invest</p>
                                @else
                                    <p class="expletus-sans mb-2 text-4xl text-primary font-bold">
                                        {{ auth()->user()->currentPlan->name ?? auth()->user()->prevPlan->name }}</p>
                                @endif
                                <p class="expletus-sans mb-0 text-xl md:text-2xl max-w-[70%] uppercase text-stone-700">
                                    Latest plan
                                </p>
                            </div>
                        </div>
                        <div class="px-3 flex justify-end basis-1/3">
                            <div
                                class="inline-block w-16 h-16 flex items-center justify-center rounded-full shadow-md bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#fff" class="size-10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards row 3 -->
        <div class="flex flex-wrap mt-10 -mx-3">
            <div class="w-full max-w-full px-3 mt-0">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow rounded-2xl bg-clip-border">
                    <h6 class="p-6 pb-0 mb-0 text-2xl expletus-sans">Recent <span
                            class="text-indigo-600">Activity</span></h6>
                    <div class="flex-auto px-0 py-6">
                        @if (count($newtransactions) > 0)
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-collapse text-secondary">
                                    <tbody class="divide-y divide-stone-400">
                                        @foreach ($newtransactions as $item)
                                            <tr class="hover:bg-stone-200 transition-colors duration-300">
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex gap-4">
                                                        @if (isset($item->plan))
                                                            <span class="p-2 rounded bg-emerald-100"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-6 h-6 text-emerald-500">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                                                </svg></span>
                                                        @else
                                                            <span class="p-2 rounded bg-rose-100">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-6 h-6 text-rose-500">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                                                </svg>
                                                            </span>
                                                        @endif
                                                        <div class="flex flex-col justify-center">
                                                            <h6
                                                                class="text-xl mb-0 text-sm leading-normal expletus-sans">
                                                                ${{ number_format($item->amount) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="text-lg mb-0 text-xs font-semibold leading-tight">
                                                        {{ $item->wallet }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">
                                                        {{ date('M d, Y', strtotime($item->created_at)) }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex items-center">
                                                        @if ($item->isApproved)
                                                            <span
                                                                class="futura-book text-emerald-400 bg-emerald-100 p-2 rounded-xl">approved</span>
                                                        @else
                                                            <span
                                                                class="futura-book text-yellow-600 bg-yellow-100 p-2 rounded-xl">pending</span>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>        
        {{-- footer --}}
        <x-user-footer />
    </div>
</x-user-layout>
