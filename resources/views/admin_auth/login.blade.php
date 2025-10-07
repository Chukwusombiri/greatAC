<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">
    <title>{{ config('app.name') }} | Sign-in your account</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('myassets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('myassets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('myassets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body
    class="futura-book m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <!-- Navbar -->
                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white bg-oapcity-30 backdrop-blur-sm">
                    <div class="flex items-center justify-between flex-wrap w-full">
                        <a class="mr-4 whitespace-nowrap flex items-center sedan-regular-bold"
                            href="{{ route('guestHome') }}">
                            <span class= 'inline-flex items-center gap-2 sedan-regular-bold'>
                                <span
                                    class="text-blue-600 lowercase font-extrabold text-2xl tracking-wider">{{ $appName }}</span>
                                <span class="w-[2px] h-6 bg-blue-600"></span>
                                <span
                                    class="text-[14px] font-semibold text-slate-900 lowercase tracking-widest">capitals</span>
                            </span>
                        </a>
                        <button navbar-trigger
                            class="px-3 py-1 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div navbar-menu
                            class="flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                            <ul class="flex flex-col list-none lg:flex-row xl:ml-auto">
                                <li>
                                    <a class="flex items-center px-4 py-2 mr-2 font-semibold tracking-wide transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        aria-current="page" href="{{ route('guestHome') }}">
                                        <i class="mr-1 fa fa-home opacity-60"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center px-4 py-2 mr-2 font-semibold tracking-wide transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        aria-current="page" href="{{ route('admin.dashboard') }}">
                                        <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-semibold tracking-wide transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        href="{{ route('admin.admin_profile') }}">
                                        <i class="mr-1 fa fa-user opacity-60"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-semibold tracking-wide transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        href="{{ route('contact') }}">
                                        <i class="mr-1 fas fa-user-circle opacity-60"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="mt-14 md:mt-10 transition-all duration-200 ease-in-out">
        <section>
            <div
                class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex justify-center -mx-3">
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py-4 rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0">
                                    <h4 class="font-bold text-center">Admin Sign-In</h4>
                                    <p class="mb-0 text-center">Enter your email and password to sign in</p>
                                </div>
                                @if (session('status'))
                                    <div class="p-6 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <x-validation-errors class="p-4" />
                                <div class="flex-auto p-6">
                                    <form role="form" method="POST"
                                        action="{{ route('admin.login.authenticate') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Email"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" name="password" placeholder="Password"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
                                        <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                                            <input id="rememberMe" name="remember"
                                                class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox" />
                                            <label
                                                class="ml-2 font-normal cursor-pointer select-none text-sm text-slate-700"
                                                for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-neutral-900 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25"
                                                style="background-color: #171717">Sign in</button>
                                        </div>
                                    </form>
                                    <div class="flex items-center justify-center mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500"
                                            href="{{ route('admin.password.forgot') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="{{ route('guestHome') }}" target="_blank"
                        class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">Home</a>
                    <a href="{{ route('about') }}" target="_blank"
                        class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">Company</a>
                    <a href="{{ route('contact') }}" target="_blank"
                        class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Contact</a>
                    <a href="{{ route('about') . '#team' }}" target="_blank"
                        class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">Team</a>
                </div>
                <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-facebook"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-linkedin"></span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        {{ config('app.name') }}
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- plugin for scrollbar  -->
<script src="{{ asset('myassets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('myassets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>

</html>
