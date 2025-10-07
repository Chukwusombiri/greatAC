@php
    $perks = [
        'Personalized Portfolio Setup at No Extra Cost',
        'Instant, Hassle-Free Withdrawals',
        'Round-the-Clock Access to Financial Experts',
    ];
@endphp

<section class="py-12 md:py-24 text-primary-light">
    <div class="container px-6 md:px-10 mx-auto flex justify-center items-center h-full pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
            <div class="flex flex-col justify-center items-start mb-10 md:mb-0" data-aos="fade-left">
                <h2
                    class="w-full text-center md:text-left font-semibold tracking-tight text-3xl md:text-5xl lg:text-6xl mb-4 md:mb-6 text-slate-100">
                    Smart Wealth Strategies <br class="md:hidden"> for <span class="text-blue-600">High-Value
                        Portfolios</span>
                </h2>

                <p
                    class="w-full text-center md:text-left text-base md:text-lg lg:text-xl text-slate-400 leading-relaxed mb-6">
                    Stay ahead of the markets with <span class="font-medium text-blue-600">{{ $appName }}</span> —
                    where data-driven insights and expert management help you grow and preserve your wealth.
                </p>

                <div class="w-full flex items-center justify-center md:justify-start flex-wrap gap-4 md:gap-6">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}">Start
                        investing</x-link-two>
                    <x-link-one href="{{ route('pricing') }}">View plans</x-link-one>
                </div>
                <ul role="listbox" class="w-full flex flex-col items-center md:items-start mt-4 lg:mt-7">
                    @foreach ($perks as $item)
                        <li class="flex flex-nowrap gap-2 text-md text-gray-400 mb-2 capitalize">
                            <svg class="text-green-500 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                width="24" height="24" stroke-width="2">
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span class="text-primary">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div x-data="{
                current: 0,
                isInView: false,
                slides: [
                    { src: '/images/landing/hero-fx.jpg', altImg: 'Hero image 1' },
                    { src: '/images/landing/hero-home.jpg', altImg: 'Hero image 2' },
                    { src: '/images/landing/hero-crypto.jpg', altImg: 'Hero image 3' }
                ],
                next() {
                    const nextItem = (this.current + 1) % this.slides.length
                    this.current = nextItem
                },
                prev() {
                    const prevItem = ((this.current - 1) + this.slides.length) % this.slides.length
                    this.current = prevItem
                },
                heroObserver: null,
                slideInterval: null,
                handleIsInView() {
                    if (this.slideInterval) clearInterval(this.slideInterval)
                    this.slideInterval = setInterval(() => {
                        this.next()
                    }, 3000)
                },
                init() {
                    this.heroObserver = new IntersectionObserver((entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                this.isInView = true
                            }
                        })
                    }, { threshold: 0.5 })
            
                    this.heroObserver.observe(this.$refs.hero)
            
                    this.$watch('isInView', (val) => this.handleIsInView())
                }
            }" x-ref="hero"
                class="relative flex justify-center items-center overflow-hidden h-[40vh] md:h-full">
                <button @click='prev()'
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 bg-primary text-white p-2 rounded-full hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>

                </button>
                <button @click='next()'
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 bg-primary text-white p-2 rounded-full hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
                <template x-for="(slide, index) in slides" :key="index">
                    <img :src="slide.src" :alt="slide.altImg"
                        class="absolute w-full h-56 md:h-96 rounded-xl transition-opacity duration-700"
                        :class="{ 'opacity-100': current === index, 'opacity-0': current !== index }">
                </template>

            </div>
        </div>

    </div>
    <div
        class="container mt-10 md:mt-16 px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 text-primary">
        <div class="flex flex-col justify-start items-center py-6 md:border-t border-gray-700" data-aos="fade-up">
            <h4 class="expletus-sans text-5xl md:text-6xl font-bold tracking-wide text-gray-50">
                <span class="count-up" data-start="9" data-end="99" data-duration="1000">99</span>%
            </h4>
            <p class="sedan-regular-bold text-lg md:text-2xl mt-2 md:mt-4">
                Client Profitability Rate
            </p>
        </div>

        <div class="flex flex-col justify-start items-center py-6 border-t border-gray-700" data-aos="fade-up">
            <h4 class="expletus-sans text-5xl md:text-6xl font-bold tracking-wide text-gray-50">
                $<span class="count-up" data-start="50" data-end="950" data-duration="1000">950</span>M+
            </h4>
            <p class="sedan-regular-bold text-lg md:text-2xl mt-2 md:mt-4">
                Assets Under Management
            </p>
        </div>

        <div class="flex flex-col justify-start items-center py-6 border-t border-gray-700" data-aos="fade-up">
            <h4 class="expletus-sans text-5xl md:text-6xl font-bold tracking-wide text-gray-50">
                <span class="count-up" data-start="1" data-end="14" data-duration="1000">14</span>+
            </h4>
            <p class="sedan-regular-bold text-lg md:text-2xl mt-2 md:mt-4">
                Years of Market Expertise
            </p>
        </div>
    </div>
</section>
