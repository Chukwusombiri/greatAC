@php
    $navItems = [
        [
            'label' => 'Return Home',
            'route' => 'guestHome',
            'icon' => 'home',
            'match' => ['guestHome'],
        ],
        [
            'label' => 'Dashboard',
            'route' => 'user.dashboard',
            'icon' => 'ni ni-tv-2',
            'match' => ['user.dashboard'],
        ],
        [
            'label' => 'Withdrawal Wallets',
            'route' => 'user.payments',
            'icon' => 'wallet',
            'match' => ['user.payments', 'user.payment*'],
        ],
        [
            'label' => 'Invest funds',
            'route' => 'user.deposit.pricingTable',
            'icon' => 'invest',
            'match' => ['user.deposit.pricingTable', 'deposit.complete*', 'deposit.create*'],
        ],
        [
            'label' => 'Investment history',
            'route' => 'user.deposits',
            'icon' => 'history',
            'match' => ['user.deposits', 'deposit.upload*'],
        ],
        [
            'label' => 'Withdraw Income',
            'route' => 'user.withdrawal.create',
            'icon' => 'withdraw',
            'match' => ['user.withdrawal.create'],
        ],
        [
            'label' => 'Withdrawal history',
            'route' => 'user.withdrawals',
            'icon' => 'list',
            'match' => ['user.withdrawals'],
        ],
        [
            'label' => 'Transfer funds',
            'route' => 'user.transfer.create',
            'icon' => 'transfer',
            'match' => ['user.transfer.create', 'transfer.complete*'],
        ],
        [
            'label' => 'Funds transfer history',
            'route' => 'user.transfers',
            'icon' => 'funds',
            'match' => ['user.transfers'],
        ],
        [
            'label' => 'Transactions',
            'route' => 'user.transactions',
            'icon' => 'ni ni-single-copy-04',
            'match' => ['user.transactions'],
        ],
        [
            'label' => 'Referrals & rewards',
            'route' => 'user.referrals',
            'icon' => 'referrals',
            'match' => ['user.referrals*'],
        ],
    ];
@endphp

<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-x-hidden overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-md max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="relative h-20 xl:h-16 flex flex-col items-center justify-center bg-primary-dark pt-1">
        <div class="w-full flex justify-end pr-3 pb-1 xl:hidden">
            <span class="opacity-70 cursor-pointer text-gray-200 text-xl" sidenav-close>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </span>
        </div>
        <a class="px-4 m-0 whitespace-nowrap text-slate-100" href="{{ route('guestHome') }}">
            <x-application-mark-user class="h-full w-full transition-all duration-200 ease-nav-brand" />
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div
        class="futura-book items-center block w-auto min-h-screen overflow-y-auto overflow-x-hidden{{-- h-sidenav --}} grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            @foreach ($navItems as $item)
                @php
                    $isActive = collect($item['match'])->contains(fn($r) => request()->routeIs($r));
                @endphp
                <li class="mt-0.5 w-full">
                    <a href="{{ route($item['route']) }}"
                        class="py-2.5 px-4 ease-nav-brand my-0 mx-2 flex items-center text-sm transition-colors
             {{ $isActive ? 'rounded-lg font-semibold text-gray-900 bg-blue-100' : '' }}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg">
                            {{-- Icon handling: use @svg or inline --}}
                            @if (str_starts_with($item['icon'], 'ni'))
                                <i class="text-primary {{ $item['icon'] }}"></i>
                            @else
                                {{-- Example: put your heroicons in a Blade component --}}
                                <x-icon :name="$item['icon']" class="w-5 h-5 text-primary" />
                            @endif
                        </div>
                        <span class="ml-1 text-md">{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach

            {{-- Account Section --}}
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold uppercase opacity-60">Account</h6>
            </li>

            {{-- profile --}}
            <li class="mt-0.5 w-full">
                    <a href="{{ route('profile.show') }}"
                        class="py-2.5 px-4 ease-nav-brand my-0 mx-2 flex items-center text-sm transition-colors
             {{ collect(['profile.show'])->contains(fn($r) => request()->routeIs($r)) ? 'rounded-lg font-semibold text-gray-900 bg-blue-100' : '' }}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg">                           
                              <i class="text-primary ni ni-single-02"></i>                            
                        </div>
                        <span class="ml-1 text-md">Profile Setting</span>
                    </a>
                </li>
            {{-- Logout --}}
            <li class="mt-0.5 w-full">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="py-2.5 px-4 flex items-center text-sm transition-colors">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center">
                            <i class="text-primary-dark ni ni-button-power"></i>
                        </div>
                        <span class="ml-1">Sign Out</span>
                    </button>
                </form>
            </li>

            {{-- Support --}}
            <li class="mt-0.5 w-full">
                <div class="px-4 py-2 text-sm">
                    <h2 class="text-xl mb-4">Questions?</h2>
                    <p class="mb-2">
                        <a href="mailto:{{ config('mail.mainTo.address') }}">
                            Email: <span class="underline">{{ config('mail.mainTo.address') }}</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:underline flex items-center">
                            <span class="mr-2">Chat: Use Livechat in real-time</span>
                        </a>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</aside>
