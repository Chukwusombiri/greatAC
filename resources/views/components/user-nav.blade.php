@props(['page' => $page])
<nav class="futura-book relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap"
    navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-md leading-normal">
                    <a class="text-primary-light  opacity-70 capitalize" href="javascript:;">{{ $page }}</a>
                </li>
                <li class="text-md pl-2 capitalize leading-normal text-primary-light before:float-left before:pr-2 before:text-primary-light before:content-['/']"
                    aria-current="page">{{ auth()->user()->username }}</li>
            </ol>
        </nav>

        <div class="w-3/4 flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex justify-end pl-0 mb-0 list-none md:max-w-full">
                <li>
                    <x-dropdown>
                        <x-slot name="trigger">
                            @if (auth()->user()->profile_photo_path)
                                <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}" alt="user image"
                                    class="w-14 h-14 rounded-full shadow cursor-pointer">
                            @else
                                <x-avatar-svg class="size-10 cursor-pointer" />
                            @endif
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('user.dashboard') }}"
                                class="hover:text-primary-light hover:bg-gray-700">
                                {{ __('View portfolio') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('profile.show') }}"
                                class="hover:text-primary-light hover:bg-gray-700">
                                {{ __('Update profile') }}
                            </x-dropdown-link>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:text-primary-light hover:bg-gray-700 ">{{ __('Sign out') }}</button>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:void(0);"
                        class="block p-0 text-sm text-primary-light transition-all ease-nav-brand" sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-primary-light transition-all"></i>
                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-primary-light transition-all"></i>
                            <i class="ease relative block h-0.5 rounded-sm bg-primary-light transition-all"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
