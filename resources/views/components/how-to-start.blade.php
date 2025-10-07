@php
    $stepList = [
    [
        'icon' => '
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-800 w-1/2 h-1/2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" /></svg>',
        'step' => '1',
        'title' => 'Open Your Free Account',
        'description' => 'Get started in minutes—create your secure account and verify your email to unlock full access to your dashboard.',
        'href' => route('register'),
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="text-gray-800 w-1/2 h-1/2" alt="Translate icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5">
                            </path>
                        </svg>',
        'step' => '2',
        'title' => 'Choose Your Investment Plan',
        'description' => 'Browse our expertly designed portfolios and pick a plan that fits your financial goals and comfort level.',
        'href' => route('pricing'),
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="text-gray-800 w-1/2 h-1/2" alt="Export icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                            </path>
                        </svg>',
        'step' => '3',
        'title' => 'Fund and Watch It Grow',
        'description' => 'Make your first deposit and let your money start working for you—track your growth in real time, anytime.',
        'href' => route('user.dashboard'),
    ],
];

@endphp

<section class="py-16 md:py-24">
    <div class="mx-auto w-full max-w-7xl px-6 md:px-8 lg:px-10">
        <h2 class="futura-medium font-bold text-3xl md:text-4xl text-center md:text-left mb-8 sm:mb-10">Getting Started with Us</h2>
        <div x-ref="howToDiv" class="grid sm:grid-cols-3 gap-y-12 gap-x-8">
            @foreach ($stepList as $item)
                <div x-data="{
            isInView: false,
            iconObserver: null,
            init() {                
                this.iconObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            this.isInView = true;
                            setTimeout(() => this.isInView = false, 1000); // reset after spin
                        }
                    })
                }, {
                    threshold: 0.7
                });
                this.iconObserver.observe($el);
            }
        }" class="flex flex-col items-center lg:items-start text-center lg:text-left">
                    <div class="relative w-16 h-16 sm:w-20 sm:h-20">
                        <div  @mouseenter="isInView = true; setTimeout(() => isInView = false, 1000)"
                        :class="isInView && 'animate-revolver'"
                            class="z-10 relative w-full h-full bg-white rounded-full border border-gray-300 shadow flex items-center justify-center">
                            {!! $item['icon'] !!}
                        </div>
                        <div class="absolute inset-0 -translate-x-2 -translate-y-2 bg-blue-600 rounded-full"></div>
                    </div>
                    <a class="flex items-center futura-medium font-semibold text-xl mt-6 sm:mt-10 hover:underline">{{ $item['step'] }}. {{ $item['title'] }} <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right ml-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg></a>
                    <p class="leading-relaxed mt-4 text-center md:text-left text-gray-400 text-md sm:text-lg">
                        {{ $item['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
