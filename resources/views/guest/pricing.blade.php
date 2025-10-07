<x-app-layout>
    <!-- hero -->
    <section class="md:h-[60vh] py-12 md:py-24 bg-primary-dark text-white flex items-center">
        <div class="container mx-auto h-full flex flex-col justify-center items-center px-6 md:px-10 text-center">
            <h1 class="futura-medium font-extrabold text-4xl md:text-6xl max-w-2xl mx-auto mb-6 leading-tight">
                Transparent <span class="text-blue-600">Plans & Pricing</span>
            </h1>
            <p class="text-base md:text-2xl max-w-3xl mx-auto text-gray-300 leading-relaxed">
                Whether you’re starting out or scaling your investments, our flexible plans grow with you —
                giving you the tools, insights, and rewards to build lasting wealth with confidence.
            </p>
        </div>
    </section>
    <!-- plans -->
    <section class="md:min-h-screen pt-0 pb-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 md:px-10">
            @if (count($plans) > 0)
                <div class="flex flex-wrap justify-center gap-8">
                    @php
                        $plansData = [
                            ['bg' => 'from-gray-700 to-gray-800', 'text' => 'Low-fee, easy-to-understand package'],
                            ['bg' => 'from-slate-700 to-slate-800', 'text' => 'Low-cost plans with smart guidance'],
                            ['bg' => 'from-neutral-700 to-neutral-800', 'text' => 'Personalized advice from experts'],
                            ['bg' => 'from-zinc-700 to-zinc-800', 'text' => 'Diversified assets for steady growth'],
                            ['bg' => 'from-blue-800 to-blue-900', 'text' => 'Hands-off investing with automation'],
                            ['bg' => 'from-green-800 to-green-900', 'text' => 'Flexible options to match your goals'],
                        ];
                    @endphp

                    @foreach ($plans as $index => $plan)
                        @php
                            $style = $plansData[$index % count($plansData)];
                        @endphp

                        <div id="{{ Str::slug($plan->name) }}"
                            class="w-full sm:w-[48%] lg:w-[30%] transition-transform duration-300 hover:-translate-y-2">
                            <div
                                class="relative rounded-2xl p-8 bg-gray-900 shadow-md hover:shadow-2xl border border-gray-800 transition-all duration-300">

                                {{-- Header --}}
                                <div class="mb-6">
                                    <h2 class="sedan-regular-bold text-3xl md:text-4xl mb-2 text-gray-100">
                                        {{ $plan->name }}
                                    </h2>
                                    <p class="text-gray-400 text-sm md:text-base">
                                        {{ $style['text'] }}
                                    </p>
                                </div>

                                {{-- Percentage --}}
                                <div class="flex items-center mb-6">
                                    <span
                                        class="inline-flex items-center py-2.5 px-5 rounded-full bg-gradient-to-r {{ $style['bg'] }} text-white font-semibold text-lg shadow-sm">
                                        {{ round($plan->perMonInt, 1) }}%
                                        <span class="ml-2 font-normal text-sm">after {{ $plan->duration_str }}</span>
                                    </span>
                                </div>

                                {{-- Limits --}}
                                <div class="space-y-2 mb-6 text-gray-300">
                                    <p><span class="font-semibold">Minimum:</span> <span
                                            class="expletus-san font-bold tracking-wide">${{ number_format($plan->min) }}</span>
                                    </p>
                                    <p><span class="font-semibold">Maximum:</span> <span
                                            class="expletus-san font-bold tracking-wide">${{ number_format($plan->max) }}</span>
                                    </p>
                                </div>

                                {{-- Features --}}
                                @if (!empty($plan->features))
                                    <div class="mb-6">
                                        <p class="futura-medium text-lg mb-3 text-gray-100">Benefits
                                        </p>
                                        <ul class="space-y-2 text-sm md:text-base text-gray-300">
                                            @foreach (json_decode($plan->features, true) as $feature)
                                                <li class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-5 h-5 text-green-400 shrink-0">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m4.5 12.75 6 6 9-13.5" />
                                                    </svg>
                                                    <span>{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- Action Button --}}
                                <div class="mt-8 flex flex-col">
                                    @php
                                        $user = auth()->user();
                                        $btnText = 'Deposit';
                                        if ($user && $user->plan_id !== null && $user->plan_id !== $plan->id) {
                                            $btnText = 'Upgrade';
                                        }
                                    @endphp

                                    <x-link-two href="{{ route('user.deposit.create', [$plan->id]) }}">
                                        {{ $btnText }}
                                    </x-link-two>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!-- features -->
    <section class="py-20 md:py-28 bg-gray-900 text-gray-100">
        <div class="px-6 md:px-16 grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-16 items-start">
            {{-- Left: Heading --}}
            <div class="col-span-1 md:col-span-3">
                <h2 class="futura-medium text-4xl lg:text-5xl font-extrabold leading-tight max-w-2xl">
                    Investing made simple — <br class="hidden md:block">
                    with <span class="text-blue-500">stronger security</span> and smarter growth.
                </h2>
                <p class="text-gray-400 text-lg md:text-xl mt-4 max-w-lg">
                    Designed for clarity, built for confidence — we combine technology and human expertise to make
                    investing effortless, transparent, and secure.
                </p>
            </div>

            {{-- Right: Features --}}
            <div class="col-span-1 md:col-span-2">
                @php
                    $features = [
                        [
                            'heading' => 'Seamless Investing',
                            'description' =>
                                'From your first deposit to your retirement goals, our intuitive platform and expert advisors make every step effortless — so you can focus on what matters most.',
                        ],
                        [
                            'heading' => 'Smarter Financial Moves',
                            'description' =>
                                'Harness automation, compound growth, and real-time insights. Our system works around the clock to optimize your portfolio and help you stay ahead of the curve.',
                        ],
                        [
                            'heading' => 'Consistent, Data-Driven Returns',
                            'description' =>
                                'At ' .
                                $appName .
                                ', we blend financial intelligence with smart algorithms — driving consistent results and long-term performance that adapts to the market.',
                        ],
                    ];
                @endphp

                @foreach ($features as $item)
                    <div class="flex flex-col mb-8">
                        <h4 class="futura-medium text-xl md:text-2xl tracking-wide flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                class="h-7 w-7 text-emerald-500 shrink-0" fill="currentColor">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z" />
                            </svg>
                            {{ $item['heading'] }}
                        </h4>
                        <p class="text-gray-300 text-base md:text-xl mt-2 leading-relaxed">
                            {{ $item['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="md:min-h-screen py-16 md:py-24 bg-primary-white">
        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-6 px-6 md:px-10">
            <div class="col-span-1 md:col-span-2">
                <x-cia />
            </div>
            <div class="col-span-1 md:col-span-2 text-gray-100">
                <h2
                    class="futura-medium font-extrabold text-3xl md:text-4xl lg:text-5xl mb-6 leading-tight w-full md:max-w-[85%]">
                    Let’s Build Smarter <span class="text-blue-500">Growth</span> Together
                </h2>

                <p class="text-base md:text-xl text-gray-300 mb-6 md:mb-10 w-full md:max-w-[85%] leading-relaxed">
                    Looking to create a custom investment plan, form a long-term partnership, or explore strategic
                    financial
                    opportunities? Our advisors are here to help you design a plan that fits your vision and scales with
                    your goals.
                    Schedule a one-on-one consultation to get expert insights and actionable guidance from the
                    {{ $appName }} team.
                </p>

                <div class="flex">
                    <x-link-one href="{{ route('contact') }}">
                        Schedule a Meeting
                    </x-link-one>
                </div>
            </div>

        </div>
    </section>
    <!-- reviews -->
    <section class="py-16">
        <div class="text-primary-light pt-8" id="reviews">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-10">
                <div class="mb-10">
                    <h2 class="sedan-regular text-4xl md:text-5xl max-w-xl">
                        Hear What <span class="text-blue-600">Our Clients</span> Say
                    </h2>
                </div>
                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
                    @foreach ($reviews as $item)
                        <x-review-card :image-url="$item->photoUrl" :occupation="$item->occupation">
                            <x-slot:client>{{ $item->client }}</x-slot>
                            <x-slot:comment>{{ $item->comment }}</x-slot>
                        </x-review-card>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- cta -->
    <section class="bg-center bg-cover" style="background-image: url('images/managedInvesting/low-fees.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 mt-6 md:mt-10 py-16 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div class="max-w-3xl mx-auto flex flex-col items-center justify-center text-center py-20">
                <h2 class="sedan-regular text-4xl md:text-6xl font-bold leading-tight text-gray-100 mb-6">
                    Flexible Plans Built Around <span class="text-blue-500">Your Goals</span>
                </h2>
                <p class="futura-book text-lg md:text-2xl text-gray-300 mb-10 max-w-xl">
                    Open your {{ $appName }} account today and start growing your wealth with strategies designed
                    to adapt to you — simple, transparent, and built for long-term success.
                </p>
                <div class="flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4 px-8 text-lg">
                        Get Started Today
                    </x-link-two>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
