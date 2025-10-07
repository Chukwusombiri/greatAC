<div class="pt-16 md:pt-24 text-primary-light">
    <div class="w-full px-6 md:px-12">
        <div class="flex flex-col">
            {{-- subscribe call to action --}}
            <div class="w-full flex md:justify-between items-center flex-wrap border-b border-gray-300 pb-10">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-sm flex flex-col">
                        <h3
                            class="futura-medium font-extrabold text-2xl sm:text-3xl md:text-4xl mb-4 text-primary-light">
                            Stay Informed. Stay Ahead.
                        </h3>
                        <p class="text-base sm:text-lg text-primary-light/90 leading-relaxed">
                            Join our weekly newsletter for smart insights on finance, markets, and growth opportunities
                            —
                            practical, timely, and made to keep you one step ahead.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex flex-col">
                    @livewire('subscribe')
                    <p class="futura-light text-sm max-w-sm text-primary-lighter">
                        By entering your email, you agree to receive communications from {{ config('app.name') }} Media
                        Inc. For details, please see our <a href="{{ route('policy.show') }}" class="underline">Privacy
                            Policy</a> or contact us at {{ config('mail.mainTo.address') }} or
                        {{ config('app.company.address') }}.
                    </p>
                </div>
            </div>
            {{-- footer items --}}
            <div class="w-full py-10 border-b border-gray-300">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-10 text-primary-light">
                    {{-- Company --}}
                    <div>
                        <p class="font-semibold text-sm tracking-wider uppercase mb-3 text-primary-light/80">Company</p>
                        <ul class="space-y-2">
                            <li><a href="{{ route('about') }}"
                                    class="text-sm hover:text-blue-500 transition-colors">About Us</a></li>
                            <li><a href="{{ route('about') . '#team' }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Our Team</a></li>
                            <li><a href="{{ route('pricing') . '#reviews' }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Client Reviews</a></li>
                            <li><a href="{{ route('knowledge') . '#faqs' }}"
                                    class="text-sm hover:text-blue-500 transition-colors">FAQs</a></li>
                        </ul>
                    </div>

                    {{-- Products --}}
                    <div>
                        <p class="font-semibold text-sm tracking-wider uppercase mb-3 text-primary-light/80">Products
                        </p>
                        <ul class="space-y-2">
                            <li><a href="{{ route('managedInvesting') }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Portfolio Management</a></li>
                            <li><a href="{{ route('pricing') }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Investment Plans</a></li>
                            <li><a href="{{ route('managedInvesting') . '#features' }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Portfolio Features</a></li>
                            <li><a href="{{ route('managedInvesting') . '#faqs' }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Management FAQs</a></li>
                        </ul>
                    </div>

                    {{-- Legal --}}
                    <div>
                        <p class="font-semibold text-sm tracking-wider uppercase mb-3 text-primary-light/80">Legal</p>
                        <ul class="space-y-2">
                            <li><a href="{{ route('policy.show') }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Privacy Policy</a></li>
                            <li><a href="{{ route('terms.show') }}"
                                    class="text-sm hover:text-blue-500 transition-colors">Terms of Use</a></li>
                        </ul>
                    </div>

                    {{-- Company Info & Contact --}}
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <div class="mb-4">
                            <x-application-logo class="h-8 w-auto mb-3" />
                            <p class="text-sm md:text-base text-primary-light/90 leading-relaxed max-w-md">
                                {{ config('app.name') }} is a technology-driven investment platform empowering users to
                                grow wealth confidently.
                                We combine intelligent automation, expert insights, and transparency to make investing
                                smarter, simpler, and more human.
                            </p>
                        </div>

                        <div class="mt-6">
                            <p class="font-semibold text-sm tracking-wider uppercase mb-3 text-primary-light/80">Contact
                                Us</p>
                            <div class="flex flex-col gap-4 text-sm">
                                <a href="{{ config('app.socials.whatsapp_link') }}"
                                    class="flex items-center hover:text-blue-500 transition-colors">
                                    <svg class="w-5 h-5 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                        <path
                                            d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                    </svg>
                                    <span>{{ config('app.socials.whatsapp') }}</span>
                                </a>

                                <a href="mailto:{{ config('mail.mainTo.address') }}"
                                    class="flex items-center hover:text-blue-500 transition-colors">
                                    <svg class="w-5 h-5 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                    <span>{{ config('mail.mainTo.address') }}</span>
                                </a>
                            </div>

                            <div id="google_translate_element" class="mt-4"></div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- copyright --}}
            <div class="pt-10 pb-6">
                <div class="w-full flex items-center justify-center">
                    <div class="max-w-2xl mx-auto flex flex-col items-center">
                        <p class="futura-light text-sm mb-px">
                            © 2014–{{ now()->year }}, {{ config('app.name') }} Inc. All Rights
                            Reserved.
                        </p>
                        <p class="futura-light text-sm mb-px">
                            By using this website, you accept our <a href="{{ route('terms.show') }}"
                                class="underline">Terms of Use</a> and <a href="{{ route('policy.show') }}"
                                class="underline">Privacy Policy.</a>
                        </p>
                        <p class="futura-light text-sm mb-px">
                            For information about filing a complaint please visit <a href="{{ route('contact') }}"
                                class="underline">our contact page</a> and use subject 'How to File a Complaint'.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
