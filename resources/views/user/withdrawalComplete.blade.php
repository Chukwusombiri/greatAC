<x-user-layout>
    <x-user-nav page="Withdrawal" />
    <div class="futura-book w-full px-6 py-10 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-3xl mx-auto px-3">
                <div
                    class="bg-primary-dark/60 backdrop-blur-lg border border-primary/20 shadow-lg rounded-2xl p-8 md:p-10 flex flex-col items-center text-center">

                    {{-- <x-success-svg /> --}}
                    <h2 class="text-2xl md:text-3xl font-semibold text-primary-lighter mb-4">Withdrawal Initiated
                        Successfully</h2>

                    <p class="text-primary-light text-base md:text-lg leading-relaxed mb-8">
                        Your withdrawal of
                        <span
                            class="font-semibold text-primary-lighter">${{ number_format($withdrawal['amount']) }}</span>
                        to your <span class="uppercase font-semibold">{{ $withdrawal['wallet'] }}</span> wallet has been
                        successfully submitted.
                        Our team is reviewing the transaction and will release your funds shortly.
                        You can track the status via your email or your <a href="{{ route('user.withdrawals') }}"
                            class="text-blue-500 hover:underline font-semibold">withdrawal history</a>.
                    </p>


                    <!-- Buttons -->
                    <div class="flex flex-wrap justify-center gap-4">                        
                        <a href="{{ route('user.dashboard') }}"
                            class="rounded-full text-sm font-semibold tracking-wide py-3 px-8 bg-gradient-to-r from-white to-gray-200 text-gray-950 hover:opacity-90 transition-all">
                            Go to Dashboard
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-user-footer />
</x-user-layout>
