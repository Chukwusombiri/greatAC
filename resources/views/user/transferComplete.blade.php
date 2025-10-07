<x-user-layout>
    <x-user-nav page="Funds transfer" />
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                <div
                    class="w-full lg:w-7/12 mx-auto flex flex-col items-center min-w-0 mt-6 px-6 pt-6 pb-10 break-words bg-primary-lighter shadow-xl rounded-2xl">

                    <!-- Heading -->
                    <h2
                        class="futura-medium text-2xl md:text-3xl mt-5 mb-4 md:mb-6 tracking-wide text-center text-primary-dark">
                        Transfer Submitted Successfully
                    </h2>

                    <!-- Main message -->
                    <p class="futura-book text-md md:text-lg mb-4 text-center text-primary-dark">
                        Your transfer of <span
                            class="font-semibold text-primary-dark">${{ number_format($data['amount']) }}</span>
                        to <span class="font-semibold">{{ $data['receiver'] }}</span> has been initiated and is currently
                        under review.
                        Funds will remain in your portfolio until approval, after which they will be deducted.
                    </p>

                    <!-- Instructional note -->
                    <p class="futura-book text-md md:text-lg mb-6 text-center text-primary-dark">
                        To track your transfer, visit the <a href="{{ route('user.transfers') }}"
                            class="text-blue-500 font-semibold hover:underline">transfer history page</a>, where you can
                        view all incoming and outgoing records.
                    </p>

                    <!-- Action buttons -->
                    <div class="flex justify-center items-center flex-wrap gap-3">
                        <x-link-two href="{{ route('user.dashboard') }}" class="tracking-wide py-3 px-6">Go to Dashboard</x-link-two>                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-user-footer />
</x-user-layout>
