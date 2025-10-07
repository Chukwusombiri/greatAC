<x-user-layout>
    <x-user-nav page="Deposit" />
    <div class="futura-book w-full px-6 py-10 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-3xl mx-auto px-3">
            <div class="bg-primary-dark/60 backdrop-blur-lg border border-primary/20 shadow-lg rounded-2xl p-8 md:p-10 flex flex-col items-center text-center">

                {{-- <x-success-svg /> --}}
                <h2 class="text-2xl md:text-3xl font-semibold text-primary-lighter mb-4">Deposit Initiated Successfully</h2>

                <p class="text-primary-light text-base md:text-lg leading-relaxed mb-8">
                    You’re almost there — send 
                    <span class="font-semibold text-primary-lighter">${{ number_format($deposit['amount']) }}</span> 
                    in <span class="uppercase font-semibold">{{ $deposit['wallet'] }}</span> 
                    to the wallet address below. Then upload your transaction screenshot for faster review and approval.  
                    A copy of this deposit instruction has also been sent to your email.
                </p>

                <!-- Wallet Address Box -->
                <div class="w-full md:w-11/12 mb-6" 
                     x-data="{ 
                         inputValue: {{ json_encode($deposit['address']) }}, 
                         copied: false, 
                         copy() { 
                             navigator.clipboard.writeText(this.inputValue); 
                             this.copied = true; 
                             setTimeout(() => this.copied = false, 2500);
                         } 
                     }">
                    <p class="text-primary-lighter font-medium text-lg mb-3">
                        {{ ucfirst($deposit['wallet']) }} Wallet Address
                    </p>

                    <div class="flex items-center justify-between bg-gray-950 border border-primary/30 rounded-xl px-4 py-3 shadow-md">
                        <span class="truncate text-primary-light text-sm md:text-base" x-text="inputValue"></span>
                        <button x-on:click="copy" class="ml-3 text-primary-lighter hover:text-primary transition-colors duration-200">
                            <svg x-show="!copied" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 16.5V6.75A2.25 2.25 0 0110.25 4.5h7.5A2.25 2.25 0 0120 6.75v9.75A2.25 2.25 0 0117.75 18H10.5l-2.5 2.25V16.5z" />
                            </svg>
                            <svg x-show="copied" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </button>
                    </div>

                    <p class="text-xs text-primary-muted mt-2">Click to copy your wallet address</p>
                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center gap-4">
                    <x-link-two href="{{ route('user.deposits') }}" class="tracking-wide py-3 px-8">View Deposits</x-link-two>
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
