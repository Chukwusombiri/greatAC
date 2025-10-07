<x-app-layout>
    {{-- Contact Hero --}}
    <section class="pt-16 md:pt-28 text-primary-light">
        <div class="flex flex-col items-center text-center px-6 md:px-10 max-w-4xl mx-auto" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold sedan-regular-bold mb-6">
                Get in <span class="text-blue-600 relative">
                    Touch
                    <span
                        class="absolute left-0 -bottom-1 h-[3px] w-full bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600 rounded-full animate-pulse"></span>
                </span>
            </h1>
            <p class="text-lg md:text-2xl text-gray-300 leading-relaxed">
                Our advisory and Client Success teams are always ready to help —
                from account setup and transfers to personalized financial guidance.
                Reach out and experience support that’s as seamless as our platform.
            </p>
        </div>
    </section>

    {{-- Quick Contact Options --}}
    <section class="pt-12 md:pt-20">
        <div class="px-6 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-10 max-w-7xl mx-auto">

            {{-- Market Insights --}}
            <a href="{{ config('app.socials.whatsapp_link') }}"
                class="group flex flex-col rounded-2xl border border-gray-700 hover:border-blue-600 hover:bg-gray-900 p-8 shadow-md hover:shadow-lg transition-all duration-300"
                data-aos="fade-up">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl md:text-4xl font-semibold mb-3">Market News & Insights</h2>
                        <p class="text-base md:text-lg text-gray-300">
                            Stay informed with real-time updates on forex, crypto, and equity markets.
                            Get daily insights curated by our financial analysts.
                        </p>
                    </div>
                    <span
                        class="flex items-center justify-center bg-blue-600 rounded-full p-3 text-white group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                </div>
            </a>

            {{-- Email Contact --}}
            <a href="mailto:{{ config('mail.mainTo.address') }}"
                class="group flex flex-col rounded-2xl border border-gray-700 hover:border-blue-600 hover:bg-gray-900 p-8 shadow-md hover:shadow-lg transition-all duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl md:text-4xl font-semibold mb-3">Email Our Team</h2>
                        <p class="text-base md:text-lg text-gray-300">
                            We’re available around the clock.
                            Send us a message anytime — our experts will get back to you promptly.
                        </p>
                    </div>
                    <span
                        class="flex items-center justify-center bg-blue-600 rounded-full p-3 text-white group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                </div>
            </a>
        </div>
    </section>

    {{-- Support Channels --}}
    <section class="pt-12 pb-24 md:pt-20">
        <div class="px-6 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-7xl mx-auto">

            {{-- Priority Support --}}
            <div data-aos="fade-up">
                <div
                    class="rounded-2xl border border-gray-700 hover:border-blue-600 p-8 hover:bg-gray-950 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-600">Priority Support</h3>
                        <p class="text-base md:text-lg text-gray-300 leading-relaxed">
                            We’re dedicated to making your {{ config('app.name') }} experience seamless.
                            For priority help, email us at
                            <a href="mailto:{{ config('mail.mainTo.address') }}" class="underline text-blue-600">
                                {{ config('mail.mainTo.address') }}
                            </a>
                            or connect with our Virtual Assistant anytime.
                            <br>While we don’t offer phone support, our team is always available online.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Chat With Us --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="rounded-2xl border border-gray-700 hover:border-blue-600 p-8 hover:bg-gray-950 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-600">Chat With Us</h3>
                        <p class="text-base md:text-lg text-gray-300">
                            Need quick answers?
                            Connect with our Virtual Assistant or live agents during business hours.
                        </p>
                        <ul class="mt-5 space-y-1 text-gray-300 text-base md:text-lg">
                            <li><strong>Monday–Friday:</strong> 9 am – 6 pm (UTC)</li>
                            <li><strong>Saturday & Sunday:</strong> Closed</li>
                        </ul>
                    </div>
                    <p class="text-sm text-gray-400 mt-6">
                        Business hours may vary on public holidays.
                    </p>
                </div>
            </div>

            {{-- Share a Concern --}}
            <div data-aos="fade-up">
                <a href="mailto:{{ config('mail.from.address') }}"
                    class="group rounded-2xl border border-gray-700 hover:border-blue-600 p-8 hover:bg-gray-950 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-600">Share Your Concern</h3>
                        <p class="text-base md:text-lg text-gray-300 leading-relaxed">
                            We value your feedback.
                            If something falls short of expectations, let us know —
                            we’ll review and resolve it promptly.
                        </p>
                    </div>
                    <div class="flex justify-end mt-6">
                        <span
                            class="flex items-center justify-center bg-blue-600 rounded-full p-3 text-white group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            {{-- Outstanding Balance --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <div
                    class="rounded-2xl border border-gray-700 hover:border-blue-600 p-8 hover:bg-gray-950 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-600">Outstanding Balance Support
                        </h3>
                        <p class="text-base md:text-lg text-gray-300 leading-relaxed">
                            Our Resolutions team assists with negative or pending balances.
                            Available weekdays, 9 am – 6 pm (UTC).
                            Email:
                            <a href="mailto:{{ config('mail.from.address') }}" class="underline text-blue-600">
                                {{ config('mail.from.address') }}
                            </a>.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
