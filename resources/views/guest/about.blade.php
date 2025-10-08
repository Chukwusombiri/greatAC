<x-app-layout>
    {{-- Hero --}}
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('/images/about/about.jpg');">
        <div
            class="relative px-6 py-20 md:px-12 lg:px-16 flex flex-col justify-center items-center bg-gray-950/70 backdrop-blur-[2px]">

            <div class="max-w-3xl mx-auto text-center text-gray-100" data-aos="fade-up">
                <h1 class="futura-medium text-3xl md:text-5xl font-bold leading-snug mb-6">
                    Building a future of <span class="text-blue-500">financial confidence</span> — whether you’re
                    starting fresh
                    or expanding your portfolio, our team empowers you to make data-driven, strategic investment
                    decisions
                    with clarity and control.
                </h1>

                <p class="mt-6 text-lg md:text-xl text-gray-300 uppercase tracking-wide futura-medium">
                    — {{ config('app.officers.ceo') }}, Chief Executive Officer
                </p>
            </div>

            <div class="flex flex-col items-center mt-12 md:mt-16">
                <a href="#workEthics"
                    class="text-gray-200 text-lg md:text-xl font-semibold tracking-wide hover:text-blue-400 transition duration-200 futura-medium">
                    Learn More
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="28" height="28" stroke-width="2"
                    class="mt-3 animate-bounce text-blue-400">
                    <path d="M12 5v14"></path>
                    <path d="M19 12l-7 7"></path>
                    <path d="M5 12l7-7"></path>
                </svg>
            </div>
        </div>
    </section>
    {{-- Who We Are --}}
    <section class="py-20 bg-gray-950 text-gray-100">
        <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 md:grid-cols-3 md:gap-10 items-start">
            <div class="col-span-1 mb-10 md:mb-0">
                <div data-aos="fade-up">
                    <h2
                        class="futura-medium text-3xl md:text-5xl font-extrabold tracking-tight text-white capitalize leading-tight relative inline-block">
                        {{ $appFullName }}: Who We Are
                        <span
                            class="block h-[3px] w-20 md:w-28 mt-3 bg-gradient-to-r from-blue-500 via-emerald-500 to-cyan-400 rounded-full animate-[pulse_3s_ease-in-out_infinite]"></span>
                    </h2>
                </div>
            </div>

            <div class="col-span-2" data-aos="fade-up">
                <div class="space-y-6 text-lg md:text-xl leading-relaxed text-gray-300 md:w-5/6">
                    <p>
                        At {{ config('app.name') }}, we help individuals and institutions unlock financial freedom
                        through
                        innovation, transparency, and intelligent investment strategies. Our mission is simple — to make
                        wealth creation accessible, informed, and enduring.
                    </p>

                    <p>
                        Guided by integrity and expertise, our team of financial specialists partners with clients to
                        craft
                        personalized strategies that adapt to changing markets and evolving ambitions.
                    </p>

                    <p>
                        From our early vision to redefine the investment experience, we’ve grown into a trusted ally —
                        empowering our clients with strategic insight, cutting-edge tools, and a clear path toward
                        lasting
                        financial success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- What We Do --}}
    <section id="workEthics" class="py-20 bg-gray-900 text-gray-100 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 md:grid-cols-3 md:gap-10 items-start">
            <div class="col-span-1 mb-10 md:mb-0" data-aos="fade-up">
                <h2
                    class="futura-medium text-3xl md:text-5xl font-extrabold tracking-tight text-blue-400 capitalize leading-tight relative inline-block">
                    Beyond Portfolio Management
                    <span
                        class="block h-[3px] w-20 md:w-28 mt-3 bg-gradient-to-r from-blue-500 via-cyan-400 to-emerald-400 rounded-full animate-[pulse_3s_ease-in-out_infinite]"></span>
                </h2>
            </div>

            <div class="col-span-2 space-y-6 text-lg md:text-xl leading-relaxed text-gray-300" data-aos="fade-up">
                <p>
                    We go beyond managing investments — we build tailored financial ecosystems. From cryptocurrency
                    assets
                    to diversified portfolios, our services are designed to align with your personal goals and growth
                    trajectory.
                </p>

                <p>
                    Our experienced advisors combine strategic foresight with deep market knowledge to provide
                    actionable,
                    data-backed guidance that inspires confidence and delivers measurable value.
                </p>

                <p>
                    Since inception, we’ve championed smarter investing through innovation, analytics, and a commitment
                    to
                    your success — ensuring every decision brings you closer to your financial aspirations.
                </p>
            </div>
        </div>
    </section>
    <!-- Key Business Metrics -->
    <section class="py-20 bg-gray-950 text-white">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight futura-medium mb-4">
                    Our Business Numbers
                </h2>
                <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">
                    Consistent growth, strong performance, and a trusted community of investors — the numbers say it
                    all.
                </p>
            </div>

            @php
                $metrics = [
                    ['label' => 'Active Years', 'prefix' => '', 'value' => 14, 'suffix' => '+'],
                    ['label' => 'Assets Managed', 'prefix' => '$', 'value' => 5, 'suffix' => 'B+'],
                    ['label' => 'Profitable', 'prefix' => '', 'value' => 99, 'suffix' => '%'],
                    ['label' => 'Active Investors', 'prefix' => '', 'value' => 5000, 'suffix' => '+'],
                    ['label' => 'Active Deposits', 'prefix' => '$', 'value' => 610, 'suffix' => 'M+'],
                    ['label' => 'Funds Withdrawn', 'prefix' => '$', 'value' => 350, 'suffix' => 'M+'],
                ];
            @endphp

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-12" data-aos="fade-up" data-aos-delay="100">
                @foreach ($metrics as $metric)
                    <div
                        class="flex flex-col items-center border-b sm:border-0 sm:border-r border-gray-800 pb-8 sm:pb-0 last:border-0">
                        <h2 class="text-5xl md:text-6xl font-bold text-gray-100 expletus-sans">
                            {{ $metric['prefix'] }}<span class="count-up expletus-sans" data-start="1"
                                data-end="{{ $metric['value'] }}" data-duration="1500">
                                {{ $metric['value'] }}
                            </span>{{ $metric['suffix'] }}
                        </h2>
                        <span class="text-gray-300 text-lg md:text-xl mt-3 tracking-wide futura-medium">
                            {{ $metric['label'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Board of directors --}}
    <section id="team" class="py-20 bg-gray-950 text-gray-100">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            {{-- Section Heading --}}
            <div data-aos="fade-up" class="text-center md:text-left mb-12">
                <h2
                    class="futura-medium text-3xl md:text-5xl font-extrabold tracking-tight text-white inline-block relative">
                    Board of <span class="text-blue-600">Directors</span>
                    <span
                        class="block h-[3px] w-24 md:w-32 mt-3 bg-gradient-to-r from-blue-500 via-cyan-400 to-emerald-400 rounded-full animate-[pulse_3s_ease-in-out_infinite] mx-auto md:mx-0"></span>
                </h2>
                <p class="mt-4 text-gray-400 text-base md:text-lg max-w-2xl md:max-w-3xl">
                    Meet the visionaries guiding {{ config('app.name') }}’s strategic direction — a board composed of
                    seasoned financial experts, industry innovators, and trusted advisors dedicated to driving
                    sustainable growth and client success.
                </p>
            </div>

            {{-- Directors Grid --}}
            <div data-aos="fade-up"
                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-6 gap-y-10 md:gap-x-10 md:gap-y-14">

                @php
                    $directors = [
                        ['name' => config('app.officers.ceo'), 'role' => 'Executive & Board Director'],
                        ['name' => 'Edward N. Langston', 'role' => 'Finance Executive & Chartered Accountant'],
                        ['name' => 'Raymond C. Wexler', 'role' => 'Strategic Advisor & Chartered Accountant'],
                        ['name' => 'Adrian P. Whitmore', 'role' => 'Senior Executive & Chartered Accountant'],
                        ['name' => 'Nathaniel J. Crayton', 'role' => 'Corporate Strategist & Chartered Accountant'],
                        ['name' => 'Sebastian M. Leighton', 'role' => 'Executive Consultant & Chartered Accountant'],
                        ['name' => 'Olivia Trent', 'role' => 'Senior Wealth Advisor'],
                        ['name' => 'Gregory V. Hollis', 'role' => 'Financial Executive & Chartered Accountant'],
                        ['name' => 'David Linwood', 'role' => 'Chartered Wealth Manager'],
                        ['name' => config('app.officers.cia'), 'role' => 'Investment Advisor & Chartered Manager'],
                        ['name' => config('app.officers.cio'), 'role' => 'Chief Investment Officer'],
                    ];
                @endphp

                @foreach ($directors as $director)
                    <div class="flex flex-col items-center md:items-start text-center md:text-left group">
                        <h4
                            class="futura-medium text-lg md:text-2xl font-semibold mb-1 text-white group-hover:text-blue-600 transition-colors duration-300">
                            {{ $director['name'] }}
                        </h4>
                        <p class="text-sm md:text-base text-gray-300">
                            {{ $director['role'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Map --}}
    <section class="py-16 md:py-24 bg-slate-900" id="locations">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <!-- Section Header -->
            <div data-aos="fade-up" class="text-center md:text-left mb-12">
                <h2 class="futura-medium text-3xl md:text-5xl font-extrabold text-blue-600 relative inline-block">
                    Our Global Presence
                </h2>
                <p
                    class="mt-6 text-gray-300 max-w-2xl text-center md:text-left mx-auto md:mx-0 text-base md:text-lg leading-relaxed">
                    We operate across strategic locations to ensure seamless service delivery and personalized financial
                    support
                    wherever you are. Explore our offices and reach out to a team near you.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <!-- Map -->
                <div data-aos="fade-right"
                    class="order-1 md:order-2 rounded-2xl overflow-hidden shadow-md border border-gray-100">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.260647933237!2d-0.09583382472936068!3d51.47172981331027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603800ce5642d%3A0xb8da4b75f7b6b91c!2s88%20Denmark%20Hill%2C%20London%20SE5%208RX%2C%20UK!5e0!3m2!1sen!2sng!4v1759928628300!5m2!1sen!2sng"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Address and Details -->
                <div data-aos="fade-left" class="order-2 md:order-1">
                    <div class="flex items-start space-x-4 border-b border-gray-600 pb-6">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-600" width="40" height="40"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21h18" />
                                <path d="M5 21v-14l8 -4v18" />
                                <path d="M19 21v-10l-6 -4" />
                                <path d="M9 9h.01" />
                                <path d="M9 12h.01" />
                                <path d="M9 15h.01" />
                                <path d="M9 18h.01" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-semibold text-gray-50 mb-1">
                                Head Office
                            </h4>
                            <p class="text-gray-300 text-base leading-relaxed">
                                {{ config('app.company.address') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 text-gray-400 text-base md:text-lg leading-relaxed">
                        <p>Our headquarters is strategically positioned to serve clients across regions,
                            providing hands-on support and a robust financial ecosystem for businesses and investors
                            alike.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
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
    <!-- cta -->
    <section class="bg-center bg-cover" style="background-image: url('images/about/cta.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 py-16 md:py-24 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div
                class="max-w-4xl mx-auto flex flex-col items-center justify-center text-center py-24 px-6 md:px-10 relative overflow-hidden">
                <!-- Soft gradient glow accent -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-blue-600/10 via-transparent to-transparent pointer-events-none">
                </div>

                <!-- Section Heading -->
                <h2 data-aos="fade-up"
                    class="sedan-regular text-4xl md:text-6xl font-bold leading-tight text-gray-100 mb-6 relative">
                    Take Control — Invest in <span class="text-blue-600 relative">
                        Minutes
                        <!-- Animated underline accent -->
                        <span
                            class="absolute left-0 -bottom-1 h-[3px] w-full bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600 rounded-full animate-pulse"></span>
                    </span>
                </h2>

                <!-- Supporting Text -->
                <p data-aos="fade-up" data-aos-delay="100"
                    class="futura-book text-lg md:text-2xl text-gray-300 mb-10 max-w-2xl leading-relaxed">
                    Empower your financial journey with smart, transparent investment tools —
                    built for speed, simplicity, and long-term growth.
                    Because your wealth deserves to work as efficiently as you do.
                </p>

                <!-- CTA Button -->
                <div class="flex justify-center">
                    <x-link-two href="{{ route('register') }}"
                        class="py-4 px-10 text-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                        Get Started Today
                    </x-link-two>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
