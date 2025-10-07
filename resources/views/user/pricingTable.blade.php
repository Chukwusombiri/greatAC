<x-user-layout>
    <!-- Navbar -->
    <x-user-nav page="dashboard" />
    <!-- cards -->
    <div class="futura-book w-full px-6 py-6 mx-auto">
        <!-- cards row 2 -->
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0">
                <h2 class="futura-medium text-2xl mb-4 text-primary-lighter tracking-wide">
                    Choose your preferred investment plan
                </h2>
                <div class="w-full relative flex py-6 min-w-0 mb-6">
                    <div class="grid grid-cols-6 gap-6 justify-center">
                        @if (auth()->user()->plan_id !== null)
                            <x-single-plan :current-plan="auth()->user()->activePlan" />
                        @endif
                        @foreach ($plans as $item)
                            <x-single-plan :current-plan="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <x-user-footer />
    </div>
</x-user-layout>
