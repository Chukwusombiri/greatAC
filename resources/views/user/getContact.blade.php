<x-guest-layout>
    <div class="min-h-screen flex md:items-center justify-center bg-primary-dark text-primary-light">
        <div class="w-full h-full md:w-7/12">
            <div class="h-full flex flex-col md:justify-center items-center pt-6 sm:pt-0 px-4">
                <div class="pt-10">
                    <x-authentication-card-logo />
                </div>

                @livewire('user.save-contact')
            </div>
        </div>
    </div>
</x-guest-layout>