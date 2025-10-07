<x-app-layout>
    <!-- hero -->
    <section class="py-16 md:py-24">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-10 flex flex-col items-center justify-center">
            <div class="flex flex-col justify-center items-start max-w-4xl border-b border-gray-800 pb-10 md:pb-16">
                <h2 data-aos="fade-up"
                    class="text-center sedan-regular-bold text-3xl md:text-4xl lg:text-6xl font-bold mb-3 md:mb-6">
                    Asset Management & <span class="text-blue-600">Portfolio Solutions</span>.
                </h2>
                <p data-aos="fade-up" class="text-center text-md md:text-lg lg:text-2xl mb-6">
                    We build data-driven asset portfolios that maximize returns, manage risk, and keep your investments
                    aligned with your financial goals.
                </p>

                <div class="w-full flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Get Started</x-link-two>
                </div>
            </div>
        </div>
    </section>
    <!-- SOLUTIONS -->
    <section class="pt-10 pb-16 md:pb-24 text-primary" id="solutions">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light text-primary text-opacity-90">
                Portfolio Management Solutions
            </h5>

            <h2 data-aos="fade-up"
                class="futura-medium font-extrabold text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0 capitalize text-primary-white leading-tight">
                A <span class="text-blue-600">Well-Diversified Portfolio</span> Is the Foundation of Lasting Success
            </h2>

            <p data-aos="fade-up" class="max-w-3xl mb-12 text-gray-400 text-md md:text-lg leading-relaxed">
                At {{ config('app.name') }}, we design data-driven, multi-asset portfolios built to balance risk,
                capture
                opportunity, and deliver sustainable growth. Our strategies combine traditional assets with emerging
                market innovations—helping you stay ahead in an ever-evolving financial landscape.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $solutions = [
                        [
                            'title' => 'Foreign Exchange (Forex) Markets',
                            'desc' =>
                                'We leverage the depth and liquidity of global forex markets to identify opportunities in currency fluctuations—optimizing returns through macroeconomic insights and precise execution.',
                        ],
                        [
                            'title' => 'Digital Asset Exposure',
                            'desc' =>
                                'Gain intelligent exposure to leading digital assets such as Bitcoin and Ethereum. Our balanced approach captures the innovation-driven upside of crypto while managing market volatility.',
                        ],
                        [
                            'title' => 'Equity Market Allocation',
                            'desc' =>
                                'Our curated equity exposure targets high-performing sectors and growth-driven companies—fueling long-term capital appreciation and consistent income potential.',
                        ],
                        [
                            'title' => 'Real Estate Asset Integration',
                            'desc' =>
                                'We integrate real estate holdings across commercial and residential markets, adding a stable income stream and natural hedge against inflation and volatility.',
                        ],
                    ];
                @endphp

                @foreach ($solutions as $item)
                    <div
                        class="rounded-2xl border border-gray-800 bg-gray-950 p-6 shadow-sm transition hover:shadow-blue-900/30 hover:border-blue-700">
                        <span
                            class="inline-flex items-center justify-center p-3 mb-4 bg-blue-600/10 rounded-full text-blue-600">
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7" />
                            </svg>
                        </span>

                        <h3 class="text-lg font-semibold text-gray-100 mb-2">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-sm md:text-base text-gray-400 leading-relaxed">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- features --}}
    <section class="py-16 md:py-24 text-primary" id="features">
        <div class="w-full max-w-7xl mx-auto flex flex-col justify-center px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light text-primary text-opacity-90">
                Portfolio Features
            </h5>

            <h2 data-aos="fade-up"
                class="futura-medium font-extrabold text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0 text-primary-white leading-tight">
                Expertly <span class="text-blue-600">Managed</span>, Seamlessly <span class="text-blue-600">Yours</span>
            </h2>

            @php
                $features = [
                    [
                        'title' => 'Reliable & Diversified',
                        'desc' =>
                            'Your assets are spread across multiple markets and instruments — balancing risk, maximizing potential, and driving steady growth over time.',
                    ],
                    [
                        'title' => 'Built for Modern Investors',
                        'desc' =>
                            'Discover adaptive investment tools, curated insights, and a sleek interface built for today’s connected investor — intuitive, data-driven, and human-backed.',
                    ],
                    [
                        'title' => 'Withdraw Earnings Anytime',
                        'desc' =>
                            'Enjoy full liquidity and flexibility. Withdraw funds instantly through multiple secure payout channels — including Bitcoin, Ethereum, and more.',
                    ],
                    [
                        'title' => 'Managed by Experts',
                        'desc' =>
                            'Our financial strategists oversee your portfolio 24/7 — analyzing global trends and optimizing asset allocations for performance and stability.',
                    ],
                    [
                        'title' => '24/7 Client Support',
                        'desc' =>
                            'From technical help to investment inquiries — our global support team is available round the clock to assist you in real time.',
                    ],
                    [
                        'title' => 'Enterprise-Grade Security',
                        'desc' =>
                            'Your funds and data are safeguarded with advanced encryption, continuous monitoring, and compliance with global fintech security standards.',
                    ],
                ];
            @endphp

            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 divide-y divide-gray-800 md:divide-y-0 md:divide-x">
                <!-- Features -->
                @foreach ($features as $item)
                    <div
                        class="p-8 border border-transparent hover:border-blue-700/30 rounded-2xl transition bg-gray-950 hover:bg-gray-900/40">
                        <div class="flex items-center mb-6">
                            <div class="p-2 rounded-full bg-blue-600/10 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-4 text-xl font-semibold text-gray-100">{{ $item['title'] }}</div>
                        </div>
                        <p class="text-gray-400 leading-relaxed text-md">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- chart --}}
    <section class="py-16 md:py-24 pb-32 text-primary-light min-h-screen overflow-y-auto">
        <div class="container mx-auto px-6 md:px-10">
            <div class="flex flex-col gap-6 md:gap-10">
                <h2 class="text-4xl md:text-5xl font-extrabold max-w-2xl capitalize"><span
                        class="text-blue-600">real-time</span> Forex and Stock market moves</h2>
                <div class="w-full h-[100vh]">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="width: 100%; height: 100%;">
                        <iframe scrolling="no" allowtransparency="true" frameborder="0"
                            src="https://www.tradingview-widget.com/embed-widget/market-quotes/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22symbolsGroups%22%3A%5B%7B%22name%22%3A%22Forex%22%2C%22originalName%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22FX%3AEURUSD%22%2C%22displayName%22%3A%22EUR%20to%20USD%22%7D%2C%7B%22name%22%3A%22FX%3AGBPUSD%22%2C%22displayName%22%3A%22GBP%20to%20USD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDJPY%22%2C%22displayName%22%3A%22USD%20to%20JPY%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCHF%22%2C%22displayName%22%3A%22USD%20to%20CHF%22%7D%2C%7B%22name%22%3A%22FX%3AAUDUSD%22%2C%22displayName%22%3A%22AUD%20to%20USD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCAD%22%2C%22displayName%22%3A%22USD%20to%20CAD%22%7D%2C%7B%22name%22%3A%22FX%3AGBPJPY%22%2C%22displayName%22%3A%22British%20Pound%2FJapanese%20Yen%22%7D%2C%7B%22name%22%3A%22OANDA%3ANZDUSD%22%2C%22displayName%22%3A%22NZD%2FUSD%22%7D%2C%7B%22name%22%3A%22OANDA%3AEURAUD%22%2C%22displayName%22%3A%22%20EUR%2FAUD%22%7D%2C%7B%22name%22%3A%22OANDA%3AGBPCAD%22%2C%22displayName%22%3A%22%20GBP%2FCAD%22%7D%5D%7D%2C%7B%22name%22%3A%22stocks%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22NASDAQ%3ATSLA%22%2C%22displayName%22%3A%22%20Tesla%2C%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AAAPL%22%2C%22displayName%22%3A%22Apple%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AAMZN%22%2C%22displayName%22%3A%22Apple%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3APLTR%22%2C%22displayName%22%3A%22%20Palantir%20Technologies%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AMETA%22%2C%22displayName%22%3A%22%20Meta%20Platforms%2C%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AMSTR%22%2C%22displayName%22%3A%22%20MicroStrategy%20Incorporated%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AMSFT%22%2C%22displayName%22%3A%22%20Microsoft%20Corporation%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AAMD%22%2C%22displayName%22%3A%22%20Advanced%20Micro%20Devices%2C%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AGOOGL%22%2C%22displayName%22%3A%22Alphabet%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3ACOIN%22%2C%22displayName%22%3A%22%20Coinbase%20Global%2C%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3ANFLX%22%2C%22displayName%22%3A%22%20Netflix%2C%20Inc.%22%7D%2C%7B%22name%22%3A%22NASDAQ%3ANVDA%22%2C%22displayName%22%3A%22%20NVIDIA%20Corporation%22%7D%5D%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22isTransparent%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22rectaearners.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22market-quotes%22%2C%22page-uri%22%3A%22rectaearners.com%2Fportfolio-management%22%7D"
                            title="market quotes TradingView widget" lang="en"
                            style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"></iframe>
                        <div class="tradingview-widget-copyright"><a
                                href="https://www.tradingview.com/?utm_source=rectaearners.com&amp;utm_medium=widget_new&amp;utm_campaign=market-quotes"
                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                    TradingView</span></a></div>

                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2962FF !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #1E53E5 !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #1848CC !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2962FF !important;
                            }
                        </style>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>
    {{-- team --}}
    <section class="py-12 md:py-24">
        <div class="w-full max-w-7xl mx-auto grid grid-cols-3 gap-10 px-4 sm:px-6 md:px-8 lg:px-10 py-16">
            {{-- Illustration / Visual --}}
            <div class="col-span-3 md:col-span-1 flex justify-center" data-aos="fade-right">
                <x-cia />
            </div>

            {{-- Text Content --}}
            <div class="col-span-3 md:col-span-2 flex flex-col justify-center" data-aos="fade-left">
                <h2 class="futura-medium font-extrabold text-3xl lg:text-5xl leading-tight mb-8 text-white">
                    Expertly Managed. <br class="hidden md:block" />
                    <span class="text-blue-600">Built Around You.</span>
                </h2>

                {{-- Feature 1 --}}
                <div class="mb-8">
                    <h3 class="futura-medium text-lg md:text-xl lg:text-2xl text-white mb-3 flex items-center gap-2">
                        <span class="inline-block w-2 h-2 bg-blue-600 rounded-full"></span>
                        Advice You Can Rely On
                    </h3>
                    <p class="text-gray-400 text-base md:text-lg leading-relaxed">
                        Our licensed advisors provide data-driven insights backed by fiduciary responsibility — ensuring
                        every
                        recommendation aligns with your long-term goals, not market noise.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="mb-8">
                    <h3 class="futura-medium text-lg md:text-xl lg:text-2xl text-white mb-3 flex items-center gap-2">
                        <span class="inline-block w-2 h-2 bg-blue-600 rounded-full"></span>
                        Stability in Every Market
                    </h3>
                    <p class="text-gray-400 text-base md:text-lg leading-relaxed">
                        Instead of chasing short-term gains, we engineer portfolios with asset diversification designed
                        to
                        absorb volatility and deliver steady, sustainable performance over time.
                    </p>
                </div>

                {{-- CTA (Optional, uncomment if needed) --}}
                <div class="mt-4">
                    <x-link-two href="{{ route('contact') }}" class="py-4">
                        Speak with an Advisor
                    </x-link-two>
                </div>
            </div>
        </div>
    </section>
    {{-- quote --}}
    <section class="py-16 lg:py-24 bg-slate-100 text-gray-800">
        <div class="container mx-auto px-4 md:px-10 flex flex-col items-center">
            <!-- Decorative Quote Header -->
            <div class="w-full flex items-end mb-8">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-quote rotate-180 text-blue-500" width="40" height="40"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                    <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                </svg>
                <span class="flex-1 border-b border-blue-200"></span>
            </div>

            <!-- Quote Content -->
            <div class="w-full md:w-10/12 lg:w-8/12 text-left space-y-6">
                <h2 data-aos="fade-up"
                    class="futura-medium font-semibold text-2xl md:text-4xl leading-relaxed text-gray-900">
                    The smartest path to reaching your financial goals is through <span
                        class="text-blue-600">diversified, low-cost portfolios</span> built around your unique risk
                    profile.
                </h2>
                <h2 data-aos="fade-up" data-aos-delay="100"
                    class="futura-medium font-semibold text-2xl md:text-4xl leading-relaxed text-gray-900">
                    Our focus is simple — <span class="text-blue-600">steady, sustainable growth</span> designed to
                    help you thrive through every market cycle.
                </h2>

                <p data-aos="fade-up" data-aos-delay="200"
                    class="text-sm md:text-base uppercase tracking-widest text-gray-600 mt-6">
                    <span class="font-semibold text-gray-900">{{ config('app.officers.cio') }}</span>,
                    <span class="text-blue-600">( Chief Investment Officer )</span>
                </p>
            </div>
        </div>
    </section>
    {{-- lower fees --}}
    <section class="bg-cover bg-center" style="background-image: url('images/managedInvesting/low-fees.jpg')">
        <div class="pt-16 md:py-24 bg-primary-dark bg-opacity-60 text-primary-lighter">
            <div class="w-full max-w-3xl mx-auto py-16 lg:py-20 text-center">
                <div class="px-6 md:px-10">
                    <h2
                        class="text-4xl md:text-6xl font-extrabold futura-medium mb-6 md:mb-10 text-gray-100 leading-tight">
                        Grow Smarter. <span class="text-blue-300">Keep More.</span>
                    </h2>
                    <p class="text-base md:text-2xl text-gray-200 mb-8 md:mb-12 leading-relaxed">
                        You can’t predict the market — but you can choose strategies that minimize costs,
                        reduce risk, and let your earnings go further. Invest wisely and retain more of what you build.
                    </p>
                    <div class="flex flex-wrap justify-center items-center gap-4">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}">
                            Build Your Portfolio
                        </x-link-two>
                        <x-link-one href="{{ route('pricing') }}"
                            class="bg-blue-50 border border-blue-200 text-blue-700 hover:bg-blue-100 hover:text-blue-800 transition-all duration-200">
                            View Pricing Plans
                        </x-link-one>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQ --}}
    <section class="py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list></x-faq-list>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
