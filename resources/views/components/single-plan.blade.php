@props(['currentPlan'])

<div class="col-span-6 sm:col-span-3 lg:col-span-2 bg-primary-dark text-primary-lighter rounded-2xl shadow-lg border border-gray-800 hover:border-blue-600 hover:shadow-blue-600/20 transition-all duration-300">
    <div class="w-full p-6 flex flex-col justify-between h-full">        
        <!-- Plan Title -->
        <a href="{{ route('user.deposit.create', [$currentPlan->id]) }}" class="flex items-center justify-between mb-6 group cursor-pointer">
            <h3 class="sedan-regular text-2xl md:text-3xl font-bold text-gray-100">
                {{ $currentPlan->name }}
            </h3>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 text-blue-600 transition-transform duration-200 group-hover:translate-x-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
            </svg>
        </a>

        <!-- Plan Details -->
        <div class="space-y-4 mb-6">
            <p class="futura-medium text-gray-300">                
                <span class="font-bold text-blue-500 ml-1 text-3xl mr-2">{{ round($currentPlan->perMonInt, 1) }}%</span>
                <span class="text-md font-semibold tracking-wide">Interest Rate</span>
            </p>
            <p class="text-lg futura-medium font-bold text-gray-300">
                Duration:
                <span class="text-blue-500 ml-1">{{ $currentPlan->duration_str }}</span>
            </p>
            <p class="text-lg futura-medium font-bold text-gray-300">
                Minimum:
                <span class="text-blue-500 ml-1 expletus-sans">{{ number_format($currentPlan->min) }}</span>
            </p>
            <p class="text-lg futura-medium font-bold text-gray-300">
                Maximum:
                <span class="text-blue-500 ml-1 expletus-sans">{{ number_format($currentPlan->max) }}</span>
            </p>
        </div>

        <!-- Features -->
        @if ($currentPlan->features)
            <div class="border-t border-gray-800 pt-4">
                <h4 class="text-lg futura-medium text-blue-500 mb-3 tracking-wide">Key Features</h4>
                <ul class="space-y-3">
                    @foreach (json_decode($currentPlan->features) as $feature)
                        <li class="flex items-start text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 text-blue-500 flex-shrink-0 mt-[2px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span class="ml-2 leading-relaxed">{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- CTA -->
        <div class="mt-8 flex justify-center">
            <a href="{{ route('user.deposit.create', [$currentPlan->id]) }}"
                class="w-full inline-flex justify-center px-6 py-3 rounded-xl border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 uppercase text-sm font-semibold tracking-wide">
                {{ (auth()->user()->plan_id && $currentPlan->id !== auth()->user()->plan_id) ? 'Upgrade' : 'Deposit' }}
            </a>
        </div>
    </div>
</div>

