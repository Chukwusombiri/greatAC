<x-user-layout>
    <x-user-nav page="Profile"/>

    <div class="futura-book w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">    
            <div class="flex-none w-full max-w-full px-3">        
                <div class="relative mb-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-3xl rounded-2xl bg-clip-border">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')
            
                            <x-section-border />
                        @endif
            
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10">
                                @livewire('profile.update-password-form')
                            </div>
            
                            <x-section-border />
                        @endif

                        {{-- personal details --}}
                        <div class="mt-10">
                            @livewire('user.bio-data')
                        </div>
        
                        <x-section-border />
                        {{-- contact detail --}}
                        <div class="mt-10">
                            @livewire('user.update-contact-detail')
                        </div>
        
                        <x-section-border />
            
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10">
                                @livewire('profile.two-factor-authentication-form')
                            </div>
            
                            <x-section-border />
                        @endif
            
                        <div class="mt-10 ">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <x-section-border />
            
                            <div class="mt-10">
                                @livewire('profile.delete-user-form')
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