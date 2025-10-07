<x-app-layout>
    {{-- Hero CTA and why choose us --}}
    <x-hero />
    {{-- how it works --}}
    <x-how-to-start />
    {{-- investment solutions --}}
    <x-investment-solution />
    {{-- Features --}}
    <section class="py-16 pb-0">
        <div class="container mx-auto px-6 md:px-10">
            {{-- Single region --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-10 md:pt-16 lg:pt-20 pb-8 md:pb-16 mb-8">
                <div
                    class="flex flex-col items-center md:items-start md:justify-center text-center md:text-left px-4 sm:px-6 lg:px-8">
                    <h6 class="text-sm sm:text-base mb-3 font-semibold text-gray-100 tracking-wide uppercase">
                        Portfolio & Asset Management
                    </h6>

                    <h2 class="font-extrabold text-3xl sm:text-4xl lg:text-6xl leading-tight text-gray-100 mb-4">
                        Building a <span class="text-blue-600">Strategy</span><br class="hidden sm:block">
                        That Grows With You
                    </h2>

                    <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mb-8 leading-relaxed">
                        At {{ $appName }}, we craft adaptive investment portfolios across <span
                            class="font-bold text-white">forex, crypto markets, stocks and Real estate</span> —
                        designed to grow sustainably, manage risk intelligently, and align seamlessly with your
                        financial goals.
                    </p>

                    <div>
                        <x-link-one href="{{ route('user.deposit.pricingTable') }}">
                            Build Your Portfolio
                        </x-link-one>
                    </div>
                </div>
                <div class="flex justify-center items-center overflow-hidden">
                    <div class="w-full md:h-[80vh]">
                        <x-portfolio-svg />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About us --}}
    <section class="text-primary py-16 md:pb-24">
        <div class="container mx-auto flex flex-col md:grid md:grid-cols-2 justify-around items-center">
            <div class="max-w-xl mx-auto mb-10 md:mb-0 px-6 md:px-10 md:order-2">
                <h6
                    class="text-center md:text-left text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">
                    Who We Are
                </h6>
                <h2 class="text-center md:text-left futura-medium font-extrabold text-3xl md:text-5xl mb-6">
                    Your Trusted Partner in Smart Investing
                </h2>
                <p
                    class="text-center md:text-left text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl leading-relaxed">
                    At {{ $appName }}, we’re redefining how people grow wealth in a digital economy.
                    With a commitment to <span class="font-bold text-white">transparency, data-driven strategy, and
                        lasting value</span>,
                    we help you invest confidently and build a portfolio designed to perform — today and in the future.
                </p>
                <div class="mt-6 flex items-center justify-center md:justify-start flex-wrap gap-4 md:gap-6">
                    <x-link-two href="{{ route('about') }}" class="py-4">Learn More</x-link-two>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center px-6 md:px-10 mb-6 md:mb-0">
                <x-about-us-svg />
            </div>
        </div>
        <div class="container px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 mt-10 md:mt-16">
            <div class="flex flex-col justify-start pb-4 md:pt-6 md:border-t border-gray-800" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-chart-candle w-12 h-12 text-gray-100" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M6 4l0 2" />
                        <path d="M6 11l0 9" />
                        <path d="M10 14m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M12 4l0 10" />
                        <path d="M12 19l0 1" />
                        <path d="M16 5m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M18 4l0 1" />
                        <path d="M18 11l0 9" />
                    </svg>
                </div>
                <h4 class="font-extrabold text-2xl text-center md:text-left md:text-3xl text-gray-100 mb-3">
                    Diversified Portfolios
                </h4>
                <p class="text-base md:text-xl text-center md:text-left text-gray-400 leading-relaxed">
                    Tap into a balanced mix of global markets — from forex and crypto to equities and alternative assets
                    —
                    designed to protect your capital while driving consistent growth.
                </p>
            </div>
            <div class="flex flex-col justify-center md:justify-start py-4 md:py-6 border-t border-gray-800"
                data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-presentation-analytics w-12 h-12 text-gray-100"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 12v-4" />
                        <path d="M15 12v-2" />
                        <path d="M12 12v-1" />
                        <path d="M3 4h18" />
                        <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                        <path d="M12 16v4" />
                        <path d="M9 20h6" />
                    </svg>
                </div>
                <h4 class="font-extrabold text-2xl text-center md:text-left md:text-3xl text-gray-100 mb-3">
                    Expert-Guided Investing
                </h4>
                <p class="text-base md:text-xl text-center md:text-left text-gray-400 leading-relaxed">
                    Every strategy is shaped by real market insight and backed by data-driven expertise — so you can
                    invest
                    with confidence and clarity, not guesswork.
                </p>
            </div>
            <div class="flex flex-col justify-start py-4 md:py-6 border-t border-gray-800" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-settings-automation w-12 h-12 text-gray-100" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                        <path d="M10 9v6l5 -3z" />
                    </svg>
                </div>
                <h4 class="font-extrabold text-2xl md:text-3xl text-center md:text-left text-gray-100 mb-3">
                    Seamless, Smart Experience
                </h4>
                <p class="text-base md:text-xl text-center md:text-left text-gray-400 leading-relaxed">
                    Set your goals, and let our intelligent platform handle the rest — streamlining every step from
                    strategy
                    to execution for effortless investing.
                </p>
            </div>
        </div>
    </section>
    {{-- Team region --}}
    <section class="py-16 md:py-24">
        <div class="px-6 md:px-10 w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="md:order-2 flex flex-col justify-center text-center md:text-left" data-aos="fade-up">
                <h2 class="font-extrabold text-3xl sm:text-5xl text-primary mb-8 leading-snug text-center md:text-left">
                    We’re Always Here for You — <span class="text-blue-600">Let’s Connect</span>
                </h2>

                <div>
                    <p class="text-xl font-semibold mb-2 text-gray-100 text-center md:text-left">Chat with a Real
                        Advisor</p>
                    <p class="text-base md:text-lg text-gray-400 mb-6 leading-relaxed text-center md:text-left">
                        Have questions or need quick clarity? Start a live chat and speak directly with our friendly
                        support team —
                        real people who understand your goals and care about your success.
                    </p>

                    <p class="text-xl font-semibold mb-2 text-gray-100 text-center md:text-left">Send Us an Email</p>
                    <p class="text-base md:text-lg text-gray-400 mb-6 leading-relaxed text-center md:text-left">
                        Prefer a detailed conversation or follow-up later? Drop us a message anytime — our experts
                        respond promptly,
                        seven days a week, with guidance tailored to your needs.
                    </p>

                    <p class="text-xl font-semibold mb-2 text-gray-100 text-center md:text-left">Stay Informed, Every
                        Day</p>
                    <p class="text-base md:text-lg text-gray-400 mb-6 leading-relaxed text-center md:text-left">
                        Keep your finger on the pulse of the markets with our daily insights, trends, and financial
                        updates.
                        <a href="/markets-news"
                            class="text-gray-50 hover:underkine font-bold hover:underline inline-flex items-center gap-1">
                            Explore now
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                                height="24" stroke-width="2">
                                <path d="M5 12l14 0"></path>
                                <path d="M13 18l6 -6"></path>
                                <path d="M13 6l6 6"></path>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
            <div class="md:order-1 flex justify-center items-center" data-aos="fade-up">
                <div class="w-full h-72 md:h-[60vh] overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ asset('/images/landing/customer-service.jpg') }}" alt="customer-agent.jpg"
                        class="h-full rounded-xl">
                </div>
            </div>
        </div>
    </section>
    {{-- testimonials --}}
    <x-testimonial-slide :reviews="$reviews" />
    {{-- Plans --}}
    <section class="py-16 md:py-32 md:min-h-screen">
        <div class="container mx-auto px-6 md:px-10 my-6 md:my-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start justify-center">
                <div class="col-span-3 md:col-span-1">
                    <h6
                        class="text-center md:text-left text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">
                        Plans & Pricing
                    </h6>
                    <h2
                        class="text-center md:text-left futura-medium text-4xl md:text-5xl font-extrabold text-primary-white mb-4">
                        Our Most Chosen Trading Options
                    </h2>
                    <p class="text-center md:text-left text-md md:text-xl mb-6 md:mb-10 text-primary-white">
                        At {{ $appName }}, every plan is crafted to help you grow confidently — combining smart
                        strategies with data-driven insights across crypto and forex markets.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 md:gap-6">
                        <x-link-two href="{{ route('pricing') }}">Explore Plans</x-link-two>
                        <x-link-one href="{{ route('contact') }}">Talk to an Expert</x-link-one>
                    </div>
                </div>


                @if (count($plans) > 0)
                    @foreach ($plans as $p => $plan)
                        <a x-data="{ mouseOver: false }" @mouseenter="mouseOver = true" @mouseleave="mouseOver = false"
                            href="{{ route('user.deposit.create', [$plan->id]) }}"
                            class="col-span-3 md:col-span-1 relative {{ $p == 0 ? 'bg-primary-lighter hover:bg-primary-light' : 'border border-primary-light hover:border-blue-600' }} rounded-xl overflow-hidden shadow-lg"
                            aria-label="Deposit Plan {{ $plan->name }}">
                            <div class="p-6 text-primary-{{ $p == 0 ? 'dark' : 'white' }}">
                                <div class="mb-6 flex justify-center md:justify-start">
                                    <span
                                        @if ($p == 0) :class="mouseOver ? 'bg-primary-lighter hover:shadow-lg' : 'bg-primary-light'" @endif
                                        class="px-4 py-2 {{ $p == 1 && 'bg-zinc-800 text-primary-white' }} rounded-full shadow-md uppercase text-sm futura-book tracking-widest">${{ number_format($plan->min) }}
                                        in assets</span>
                                </div>
                                <div class="flex justify-center md:justify-start items-center mb-6">
                                    <span
                                        class="sedan-regular text-4xl font-extrabold ml-2">{{ $plan->name }}</span>
                                    <span class="ml-2 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-6 h-6 text-primary">
                                            <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex justify-center md:justify-start items-end mb-6">
                                    <span class="text-4xl font-bold mr-2">{{ round($plan->perMonInt, 1) }}%</span>
                                    <span class="text-xl font-semibold">after {{ $plan->duration_str }}</span>
                                </div>
                                <div
                                    class="flex justify-center md:justify-start items-center mb-4 text-2xl font-bold gap-2">
                                    <span>Minimum:</span>
                                    <span class="expletus-sans">${{ number_format($plan->min) }}</span>
                                </div>
                                <div
                                    class="flex justify-center md:justify-start items-center mb-6 text-2xl font-bold gap-2">
                                    <span>Maximum:</span>
                                    <span class="expletus-sans">${{ number_format($plan->max) }}</span>
                                </div>
                                @if (!empty($plan->features))
                                    <h4 class="text-lg font-bold mb-2 text-center md:text-left">Top Features</h4>
                                    {{-- Decode features and display only first three --}}
                                    @php
                                        $features = json_decode($plan->features, true);
                                    @endphp
                                    @for ($i = 0; $i < min(3, count($features)); $i++)
                                        <div class="flex justify-center md:justify-start mb-px">
                                            <div class="inline-flex items-center gap-2 relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="w-5 h-5 text-green-500 absolute md:relative -left-8 md:left-0">
                                                    <path d="m4.5 12.75 6 6 9-13.5"></path>
                                                </svg>
                                                <span
                                                    class="text-md futura-book capitalize">{{ $features[$i] }}</span>
                                            </div>
                                        </div>
                                    @endfor
                                @endif
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- rewards --}}
    <section class="py-16 md:py-32">
        <div class="container mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-full sm:max-w-5xl md:max-w-6xl">
                <div class="flex flex-col justify-start text-primary-light max-w-3xl">
                    <h6 class="mb-3 md:mb-5 uppercase tracking-widest text-sm md:text-base text-primary/80 font-light text-center md:text-left">
                        Community & Rewards
                    </h6>

                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight mb-4 md:mb-6 text-center md:text-left">
                        Grow Your <span class="text-blue-500">Network</span> — <br class="hidden sm:block" />
                        Earn Meaningful <span class="text-blue-500">Rewards</span>
                    </h2>

                    <p class="text-base sm:text-lg md:text-xl text-primary-light/90 mb-6 md:mb-10 leading-relaxed text-center md:text-left">
                        Turn your connections into opportunities. Invite friends to join {{ config('app.name') }} and
                        earn <span class="font-bold">10% of their first deposit</span>.
                        Whether you share it with colleagues, friends, or family — it’s an easy, rewarding way
                        to grow alongside the people you trust.
                        <a href="{{ route('knowledge') . '#referrals' }}"
                            class="text-blue-500 hover:text-blue-400 font-semibold underline underline-offset-4 ml-1">
                            Learn more
                        </a>.
                    </p>

                    <div class="flex justify-center md:justify-start">
                        <x-link-two href="{{ route('user.referrals') }}">
                            Get Your Referral Link
                        </x-link-two>
                    </div>
                </div>
                <div class="flex">
                    <x-reward-svg />
                </div>
            </div>
        </div>
    </section>
     {{-- CTA --}}
    <section class="bg-primary-light bg-cover" style="background-image: url('images/landing/landing-cta.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 mt-6 md:mt-10 py-16 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div class="max-w-lg mx-auto flex flex-col items-center justify-center text-center">
                <h2
                    class="w-[70%] mx-auto md:w-full text-center sedan-regular text-4xl md:text-6xl text-primary-lighter mb-10">
                    Your Complete Investment Hub — All in One Place
                </h2>
                <p class="w-[70%] mx-auto md:w-full futura-book text-md md:text-2xl mb-10 text-primary-lighter">
                    Join {{ config('app.name') }} today and invest with confidence, knowing your assets is in expert
                    hands.
                </p>
                <div class="flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}">
                        Get Started Today
                    </x-link-two>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
