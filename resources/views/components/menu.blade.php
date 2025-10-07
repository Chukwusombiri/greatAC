@php
    $navItems = [
        [
            'name' => 'Services',
            'route' => 'managedInvesting',
            'active' => request()->routeIs('managedInvesting'),
            'subItems' => [
                ['name' => 'Asset management', 'route' => route('managedInvesting')],
                ['name' => 'What You Get', 'route' => route('managedInvesting') . '#features'],
                ['name' => 'Common Questions', 'route' => route('managedInvesting') . '#faqs'],
            ],
            'title' => 'Asset management with ' . $appName,
            'detailedDescription' => $appName .' brings asset management, accounting, and financial insights together—smart, seamless, and fee-free.',
            'listTitle' => 'SERVICES',
        ],
        [
            'name' => 'Our Plans',
            'route' => route('pricing'),
            'active' => request()->routeIs('pricing'),
        ],
        [
            'name' => 'Company',
            'route' => route('about'),
            'active' => request()->routeIs('about'),
            'subItems' => [
                ['name' => 'About Us', 'route' => route('about')],
                ['name' => 'Our Values & Culture', 'route' => route('about') . '#workEthics'],
                ['name' => 'Leadership Team', 'route' => route('about') . '#team'],
                ['name' => 'Company FAQs', 'route' => route('about') . '#faqs'],
            ],
            'title' => $appName,
            'detailedDescription' => $appName .' is redefining how people invest — combining smart technology with expert financial insight. Whether you’re just starting out or growing your portfolio, we make investing seamless, transparent, and accessible.',
            'listTitle' => 'Company',
        ],
        [
            'name' => 'Support & Resources',
            'route' => route('knowledge'),
            'active' => request()->routeIs('knowledge'),
            'subItems' => [
                ['name' => 'Contact Support', 'route' => route('contact')],
                ['name' => 'Knowledge Hub', 'route' => route('knowledge')],
                ['name' => 'Help & FAQs', 'route' => route('knowledge') . '#faqs'],
            ],
            'title' => 'Support & Resources',
            'detailedDescription' =>'Our team is always here to help — from onboarding to advanced investing guidance. Explore our Knowledge Hub for step-by-step resources, FAQs, and insights to make the most of your experience on ' .$appName .'.',
            'listTitle' => 'Resources',
        ],
        [
            'name' => 'Market Insights',
            'route' => route('blog'),
            'active' => request()->routeIs('blog'),
        ],
    ];
@endphp

<div x-data="{ open: false }" class="futura-medium bg-primary-dark shadow w-full z-30 fixed-menu">
    <div class="h-16 lg:h-20 flex flex-nowrap justify-center px-4 sm:px-6 md:px-8 lg:px-10 items-center">
        <div class="w-full max-w-6xl mx-auto flex items-center justify-between flex-nowrap">
            {{-- logo --}}
            <div class="flex">
                <a href="{{ route('guestHome') }}">
                    <x-application-logo class="block h-9 w-auto" />
                </a>
            </div>
            {{-- desktop --}}
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                @foreach ($navItems as $item)
                    @if ($item['subItems'] ?? false)
                        <x-nav-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link href="javascript:void()" :active="$item['active']">
                                    {{ $item['name'] }}
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-content action="{{ $item['route'] }}">
                                    <x-slot name="title">{{ $item['title'] }}</x-slot>
                                    <x-slot name="description">{{ $item['detailedDescription'] }} </x-slot>
                                    <x-slot name="listTitle">{{ $item['listTitle'] }}</x-slot>
                                    <x-slot name="listItems">
                                        @foreach ($item['subItems'] as $subItem)
                                            <li class="py-3">
                                                <x-link-list-item href="{{ $subItem['route'] }}">
                                                    {{ $subItem['name'] }}
                                                </x-link-list-item>
                                            </li>
                                        @endforeach
                                    </x-slot>
                                </x-dropdown-content>
                            </x-slot>
                        </x-nav-dropdown>
                    @else
                        <x-nav-link href="{{ $item['route'] }}" :active="$item['active']">
                            {{ $item['name'] }}
                        </x-nav-link>
                    @endif
                @endforeach
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @if (!auth('admin')->check() && !auth('web')->check())
                        <x-link-one href="/login" class="mr-2">Sign in
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-arrow-narrow-right w-5 h-5" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </x-link-one>
                    @endif

                    @admin
                        <x-link-one href="{{ route('admin.dashboard') }}">Control panel</x-link-one>
                    @endadmin
                    @auth
                        <x-dropdown align="right" width="48" contentClasses="bg-gray-800 text-primary-light">
                            <x-slot name="trigger">
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-primary transition">
                                    @if (auth()->user()->profile_photo_path)
                                        <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                            alt="{{ Auth::user()->username }}"
                                            class="h-8 w-8 rounded-full shadow object-cover">
                                    @else
                                        <x-avatar-svg class="size-10 cursor-pointer" />
                                    @endif
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-500 text-opacity-90">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('user.dashboard') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('View portfolio') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('profile.show') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Update profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.deposit.pricingTable') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Deposit funds') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.withdrawal.create') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Withdraw income') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.payment.create') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Wallets') }}
                                </x-dropdown-link>
                                <div class="border-t border-primary-light"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                        class="text-primary-light hover:bg-gray-700">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth
                </div>
            </div>
            {{-- hamburger --}}
            <div class="-mr-2 flex items-center sm:hidden hamburger">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-blue-600 hover:text-blue-500 focus:outline-none focus:text-blue-700 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-right h-8 w-8"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M10 12l10 0" />
                        <path d="M6 18l14 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- responsive --}}
    <div :class="{ 'block': open, 'hidden': !open }"
        class="hidden sm:hidden fixed inset-0 top-0 bottom-0 w-full z-50 bg-primary-dark text-gray-300 transition ease-in-out duration-500 flex">
        <div class="w-full h-full flex flex-col px-4 sm:px-6">
            <div class="flex-none flex justify-between items-center py-2 border-b border-gray-700">
                <a href="{{ route('guestHome') }}"><x-application-logo /></a>
                <button @click="open = !open"
                    class="p-2 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-grow flex flex-col overflow-y-auto">
                <ul class="w-full pt-2 pb-3 divide-y divide-gray-800">
                    @foreach ($navItems as $mobileItem)
                        @if ($mobileItem['subItems'] ?? false)
                            <x-responsive-menu-group>
                                <x-slot name="trigger">
                                    {{ $mobileItem['name'] }}
                                </x-slot>
                                <x-slot name="items">
                                    @foreach ($mobileItem['subItems'] as $subItem)
                                        <li>
                                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                                href="{{ $subItem['route'] }}">
                                                {{ $subItem['name'] }}
                                            </x-link-list-item>
                                        </li>
                                    @endforeach
                                </x-slot>
                            </x-responsive-menu-group>
                        @else
                            <x-responsive-nav-link href="{{ $mobileItem['route'] }}" :active="$mobileItem['active']">
                                {{ $mobileItem['name'] }}
                            </x-responsive-nav-link>
                        @endif
                    @endforeach
                </ul>
                <!-- Responsive Settings Options -->
                <div class="mt-auto pt-4 pb-4 border-t border-gray-800">
                    @auth
                        <div class="flex items-center px-4">
                            <div class="shrink-0 mr-3">
                                @if (auth()->user()->profile_photo_path)
                                    <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                        alt="{{ Auth::user()->username }}"
                                        class="h-10 w-10 rounded-full shadow object-cover">
                                @else
                                    <x-avatar-svg class="size-10 cursor-pointer" />
                                @endif
                            </div>
                            <div class="flex flex-col">
                                <p class="text-md text-primary-light mb-px">{{ auth()->user()->username }}</p>
                                <p class="text-md text-primary-light">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <div class="mt-2 space-y-1 divide-y divide-primary-light">
                            <!-- Account Management -->
                            <x-responsive-nav-link href="{{ route('user.dashboard') }}" class="inline-flex items-center"
                                :active="request()->routeIs('user.dashboard')">
                                {{ __('View Portfolio') }}
                                <svg class="text-gray-200 size-5 ml-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg>

                            </x-responsive-nav-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-responsive-nav-link class="inline-flex items-center" href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                    <svg class="text-gray-200 size-5 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 12l10 0" />
                                        <path d="M4 12l4 4" />
                                        <path d="M4 12l4 -4" />
                                        <path d="M20 4l0 16" />
                                    </svg>

                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    @endauth
                    @admin
                        <div class="flex justify-center items-center">
                            <x-link-one href="{{ route('admin.dashboard') }}">Control panel</x-link-one>
                        </div>
                    @endadmin
                    @if (!auth('admin')->check() && !auth('web')->check())
                        <div class="flex justify-center items-center">
                            <x-link-one href="/login" class="mr-4">Login</x-link-one>
                            <x-link-two href="/pricing">Get started</x-link-two>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="cryptohopper-web-widget" data-id="2"></div>
</div>
