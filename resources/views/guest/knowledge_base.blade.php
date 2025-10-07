<x-app-layout>
    <!-- Knowledge Hub Hero -->
    <section class="relative py-24 md:py-32 flex items-center justify-center text-center overflow-hidden">
        <!-- Glow background accent -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-blue-900/5 to-blue-950/20"></div>

        <div class="relative z-10 px-6 md:px-10 flex flex-col items-center justify-center max-w-4xl mx-auto">
            <h1
                class="sedan-regular text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                Welcome to the <span class="text-blue-600">{{ $appName }}</span> Knowledge Hub
            </h1>
            <p class="futura-book text-lg md:text-2xl text-gray-400 max-w-2xl mb-10">
                Your go-to destination for expert insights, quick answers, and trusted resources — all designed to help
                you make confident financial decisions.
            </p>
            <x-link-two href="#start"
                class="py-4 px-10 text-lg tracking-wide bg-blue-600 hover:bg-blue-500 text-white rounded-xl shadow-lg shadow-blue-800/40 transition-all duration-300">
                Start Exploring
            </x-link-two>
        </div>

        <!-- Ambient glow -->
        <div
            class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-blue-600/20 blur-3xl rounded-full">
        </div>
    </section>
    {{-- Table of Contents / Usage Guide --}}
    <section id="start" class="relative py-20 md:py-28 text-gray-300 overflow-hidden">
        <!-- Subtle background gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-950/10 via-transparent to-blue-900/5"></div>

        <div class="relative z-10 px-6 md:px-12 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Left Column: Section Title -->
            <div>
                <div class="inline-block mb-4">
                    <div
                        class="h-1 w-20 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-400 rounded-full animate-pulse">
                    </div>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight text-white futura-medium">
                    {{ $appName }} Usage <span class="text-blue-600">Guide</span>
                </h2>
                <p class="mt-4 text-gray-400 text-lg max-w-sm">
                    A quick start to mastering your account — learn the essentials, from creating your profile to
                    managing withdrawals and beyond.
                </p>
            </div>

            <!-- Right Column: Interactive TOC -->
            <div class="md:col-span-2">
                <div
                    class="bg-blue-950/10 backdrop-blur-sm border border-blue-900/40 rounded-2xl p-6 md:p-8 shadow-lg shadow-blue-900/20">
                    <ul class="space-y-4 md:space-y-3">
                        @php
                            $links = [
                                ['#register', 'Create your account'],
                                ['#investment', 'Make your first deposit'],
                                ['#withdrawal', 'Withdraw your returns step by step'],
                                ['#referrals', 'Grow your network with referrals'],
                                ['#forgot-password', 'Reset a forgotten password'],
                                ['#change-pasword', 'Change your account password'],
                                ['#session', 'Manage your active sessions'],
                                ['#delete-account', 'Delete your account'],
                            ];
                        @endphp

                        @foreach ($links as [$href, $label])
                            <li>
                                <a href="{{ $href }}"
                                    class="group flex items-center gap-3 text-lg md:text-xl text-gray-300 hover:text-blue-500 transition-colors duration-300">
                                    <span
                                        class="flex items-center justify-center w-6 h-6 rounded-full border border-blue-700/50 text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="underline-offset-4 group-hover:underline">{{ $label }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-10 border-t border-blue-900/40 pt-6">
                        <p class="text-gray-400 text-base md:text-lg">
                            Need more help? Our support team is always here to guide you.
                        </p>
                        <x-link-two href="mailto:{{ config('mail.mainTo.address') }}"
                            class="mt-4 inline-block bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-lg text-lg font-semibold transition-all duration-300 shadow-md shadow-blue-800/30">
                            Contact Support
                        </x-link-two>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- how tos --}}
    <section class="py-10 md:py-24 h-full bg-[#0d0f15] text-gray-100">
        <div class="container mx-auto px-4 md:px-10">

            {{-- registration --}}
            <div
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <div>
                        <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl md:text-left mb-3 relative group">
                            Create your account
                            <span
                                class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                        </h2>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            @foreach (['Click “Get Started” on our homepage or use the “Login” button in the menu.', 'Select “New here? Create an account” to open the sign-up page.', 'Complete the registration form and submit it.', 'After registering, follow the prompt to verify your email.', 'Open the “Verify Email” message in your inbox and confirm your email.', 'You’ll be redirected to your dashboard. Welcome aboard!'] as $index => $text)
                                <li class="mb-4 md:mb-6">
                                    <h4 class="futura-medium text-lg mb-2 font-semibold">Step {{ $index + 1 }}</h4>
                                    <p class="text-lg text-gray-300">{{ $text }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- deposit --}}
            <div id="investment"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Make your first deposit
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg text-gray-300">Log in to your {{ $appName }} account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg text-gray-300">Pick your preferred plan from your dashboard.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg text-gray-300">Complete the deposit form:</p>
                                <ul class="ml-4 list-disc text-gray-400">
                                    <li>Enter an amount within the plan’s range.</li>
                                    <li>Select your crypto funding option.</li>
                                    <li>Submit the form.</li>
                                </ul>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg text-gray-300">Follow the deposit instructions on the next page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p class="text-lg text-gray-300">Copy the wallet address, send your crypto, and take a
                                    screenshot.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 6</h4>
                                <p class="text-lg text-gray-300">Upload the screenshot under “Deposits” to speed up
                                    approval.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- withdrawal --}}
            <div id="withdrawal"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Withdraw your earnings
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none text-gray-300">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p>Log in and click “Withdrawals” on your dashboard to access your withdrawal page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p>Enter your desired amount (not exceeding your available ROI).</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p>Select an existing wallet or click “Add Wallet” to add one.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p>Fill in your crypto details and submit your request.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p>Once approved, your funds will be sent to your wallet promptly.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- referrals --}}
            <div id="referrals"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Grow your network with referrals
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                    <p class="text-lg md:text-xl mb-2 text-gray-300">
                        When you invite a friend to {{ $appName }}, you’ll earn <strong
                            class="text-blue-400">10%</strong> of their first deposit.
                    </p>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <p class="text-lg md:text-xl mb-px md:mb-2 font-semibold text-gray-100">How to Refer a Friend
                        </p>
                        <p class="text-lg mb-4 text-gray-300">Invite friends in just a few simple steps:</p>
                        <ul class="list-style-none text-gray-300">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p>Log in to your {{ $appName }} account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p>Open “Referrals” in your menu to access your referral page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p>Copy your referral link and share it with friends, family, or colleagues.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p>Earn 10% when they deposit — your bonus appears in your portfolio instantly.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- forgot-password --}}
            <div id="forgot-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col relative">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Reset a forgotten password
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none text-gray-300">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Go to the login page and click “Forgot password…”. You’ll be taken
                                    to the reset page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Enter your email address and submit. Check your inbox for the reset
                                    email or request a new link.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">Open the email and click “Reset Password”. You’ll be redirected to
                                    our site.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 4</h4>
                                <p class="text-lg">Keep your email, set your new password, confirm, and log in again
                                    with it.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- change-password --}}
            <div id="change-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col relative">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Change your account password
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none text-gray-300">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Log in and open the menu → “Profile”.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Click “Change Password”, fill in the fields, and click “Save”.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">You’ll be logged out automatically — sign in again with your new
                                    password.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- session --}}
            <div id="session"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-700">
                <div class="col-span-3 md:col-span-1 flex flex-col relative">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Manage your active sessions
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none text-gray-300">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Go to “Profile” from your dashboard.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Scroll to the “Browser Sessions” section.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">Click “Log Out Other Browser Sessions”.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 4</h4>
                                <p class="text-lg">Enter your password to confirm — you’ll now be logged out everywhere
                                    else.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- delete-account --}}
            <div id="delete-account" class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center md:pb-16">
                <div class="col-span-3 md:col-span-1 flex flex-col relative">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-3 relative group">
                        Delete your account
                        <span
                            class="block w-16 h-[3px] mt-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-full animate-gradient-move"></span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%] text-gray-300">
                        <ul class="list-style-none">
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Go to your dashboard → “Profile”.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Scroll to the “Delete Account” section.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">Click “Delete Account”.</p>
                            </li>
                            <li>
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 4</h4>
                                <p class="text-lg">Confirm by entering your password — your account will be permanently
                                    removed.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
    <section class="bg-primary-white py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list />
                </div>
            </div>
        </div>
    </section>
    {{-- cta --}}
    <section class="bg-gray-950 py-20 px-6 lg:px-10">
        <div
            class="relative bg-gradient-to-r from-blue-600 to-blue-500 rounded-2xl shadow-xl w-full mx-auto p-8 lg:p-14 flex flex-col lg:flex-row items-center justify-between overflow-hidden">

            <!-- Accent Gradient Line -->
            <div
                class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-400 via-blue-600 to-blue-400 animate-pulse">
            </div>

            <!-- Text Content -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left mb-6 lg:mb-0">
                <h2 class="sedan-regular text-4xl md:text-5xl font-bold text-white mb-3 leading-tight">
                    New to {{ $appName }}?
                </h2>
                <p class="futura-book text-lg md:text-xl text-blue-100 max-w-lg">
                    Discover a smarter, faster, and more secure way to grow your investments — built for clarity and
                    control.
                </p>
            </div>

            <!-- CTA Button -->
            <div class="flex-shrink-0 flex items-center justify-center mt-6 lg:mt-0">
                <x-link-one href="{{ route('user.deposit.pricingTable') }}" class="px-8 py-4 text-lg">
                    Get Started
                </x-link-one>
            </div>
        </div>
    </section>
</x-app-layout>
