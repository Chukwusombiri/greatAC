<x-app-layout>
    {{-- hero --}}
    <section class="relative bg-cover bg-center bg-no-repeat dark:bg-gray-800" style="background: linear-gradient(rgba(28, 27, 27, 0.5), rgba(20, 20, 20, 0.5)), url('/images/reviews/hero.jpg') no-repeat center; background-size: cover;">
        <div class="relative mx-auto max-w-screen-xl px-4 py-24 sm:px-10 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center sm:text-left text-neutral-100">
                <h1 class="sedan-regular text-3xl font-bold sm:text-5xl md:text-6xl tracking-wide mb-6">
                    What are people saying about us?
                </h1>
    
                <p class="mt-4 max-w-lg sm:text-lg lg:text-xl/relaxed">
                    Read on to find out what our clients and partners have to say about us and our services. We truly stand out in what we do - Excellence.
                </p>
            </div>
        </div>
    </section>    
    {{-- testimonial --}}
    <section class="bg-neutral-100 py-16 md:py-24">
        <div class="flex px-6 md:px-10">
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6">
                    {{-- individual review --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Annabel Mckay</h3>
                                        <div class="text-base font-medium text-gray-500">Rio de Janeiro, Brazil</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} has been instrumental in helping me take my
                                                startup to the next level. Their team provided invaluable advice and
                                                resources that have helped me grow my business faster than I ever
                                                thought possible."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Emily Rodriguez</h3>
                                        <div class="text-base font-medium text-gray-500">Sydney, Australia</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"As a serial entrepreneur, I've worked with many investment firms over
                                                the years. {{ config('app.name') }} is hands down one of the best. They
                                                have a deep understanding of the startup landscape and bring a wealth of
                                                experience to the table."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Lucy Kim</h3>
                                        <div class="text-base font-medium text-gray-500">Miami, FL</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} is more than just an investment firm. They
                                                truly care about their portfolio companies and go above and beyond to
                                                help them succeed."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Sandall Johnson</h3>
                                        <div class="text-base font-medium text-gray-500">New York, NY</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"Working with {{ config('app.name') }} has been an absolute pleasure.
                                                They are responsive, professional, and have a keen eye for identifying
                                                promising startups."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Michael Leon</h3>
                                        <div class="text-base font-medium text-gray-500">Los Angeles, CA</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} has a proven track record of investing in some
                                                of the most successful startups in recent years. I'm grateful to have
                                                them as a partner in my business."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Miley Garcia</h3>
                                        <div class="text-base font-medium text-gray-500">Houston, TX</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"If you're a startup looking for a partner who can help you scale
                                                quickly, {{ config('app.name') }} is the firm to work with. They bring
                                                a wealth of resources and expertise to the table that few others can
                                                match."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Cameron Ortiz</h3>
                                        <div class="text-base font-medium text-gray-500">Cairo, Egypt</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"I was blown away by the level of insight and guidance provided by the
                                                team at {{ config('app.name') }}. They have a deep understanding of the
                                                startup landscape and know what it takes to build a successful company."
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Alex Davis</h3>
                                        <div class="text-base font-medium text-gray-500">Toronto, Canada</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} is one of the few investment firms that truly
                                                understands the needs of early-stage startups. Their team is always
                                                willing to go the extra mile to help their portfolio companies succeed."
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Noami Lee</h3>
                                        <div class="text-base font-medium text-gray-500">Berlin, Germany</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"I've worked with many investment firms over the years, but
                                                {{ config('app.name') }} stands out as one of the best. They are
                                                knowledgeable, approachable, and genuinely invested in the success of
                                                their portfolio companies."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Coufal Ramirez</h3>
                                        <div class="text-base font-medium text-gray-500">London, United Kingdom</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} is a great partner for any startup looking to
                                                scale quickly. Their team provides valuable resources and insights that
                                                can help take your business to the next level."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">William Chen</h3>
                                        <div class="text-base font-medium text-gray-500">Istanbul, Turkey</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"The team at {{ config('app.name') }} has been an invaluable resource
                                                for my business. They have provided us with access to key investors,
                                                industry experts, and other resources that have helped us grow faster
                                                than we ever thought possible."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Evans Jackson</h3>
                                        <div class="text-base font-medium text-gray-500">Moscow, Russia</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} is a top-tier investment firm with a deep
                                                understanding of the startup landscape. Their team is professional,
                                                responsive, and truly cares about the success of their portfolio
                                                companies."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Hannah Huang</h3>
                                        <div class="text-base font-medium text-gray-500">Beijing, China</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"I was impressed by the level of due diligence performed by
                                                {{ config('app.name') }} before investing in my company. Their team
                                                asked thoughtful questions and provided valuable feedback that helped us
                                                refine our strategy and positioning."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Mia Wilson</h3>
                                        <div class="text-base font-medium text-gray-500">New York, United States</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"{{ config('app.name') }} is more than just an investment firm. They are
                                                true partners who are invested in the long-term success of their
                                                portfolio companies."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- single --}}
                    <div class="mt-5 md:mt-0 md:col-span-1">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-4">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote rotate-180" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                            <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                                          </svg>
                                    </span>
                                    <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Daniel Garcia</h3>
                                        <div class="text-base font-medium text-gray-500">Tokyo, Japan</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                            <p>"Working with {{ config('app.name') }} has been a game-changer for my
                                                business. Their team has provided us with the resources and guidance we
                                                need to scale quickly and achieve our growth goals."</p>
                                        </div>
                                        <div class="mt-4">
                                            <span class="text-sm font-medium text-gray-900">Rating:</span>
                                            <span class="ml-1 inline-flex items-center">
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled w-4 h-4 text-yellow-500" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eab308" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of single review --}}
                </div>
            </div>
        </div>
    </section>
    {{-- contact-us CTA --}}
    <section class="py-16 md:py-24 bg-neutral-100">
        <div class="w-full max-w-6xl mx-auto px-6 sm:px-10 relative">
            <div class="shadow rounded-xl relative">
                <div class="grid overflow-hidden text-gray-100 shadow-xl md:grid-cols-2 bg-dark rounded-xl">
                    <div class="p-8 md:p-16 flex flex-col text-neutral-100">
                        <h2 class="sedan-regular text-2xl font-bold tracking-wide md:text-4xl font-headline text-neutral-100">
                            Do you have specific needs and setups for your account?
                        </h2>
    
                        <p class="font-medium text-md md:text-2xl mt-6 text-neutral-100 dark:text-neutral-200">
                            Get in touch with us to discuss them.
                        </p>
    
                        <div class="mt-6 flex">
                            <x-link-two href="{{ route('contact') }}">
                                Contact us
                            </x-link-two>
                        </div>
                    </div>
    
                    <div class="relative hidden md:block">
                        <img class="absolute inset-0 object-cover object-left-top w-full h-full mt-16 -mr-16 rounded-tl-lg"
                            src="{{ url('images/reviews/support.jpg') }}" alt="support photo">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    {{-- get started cta --}}
    <section class="md:h-screen py-16 md:py-24 bg-blue">
        <div class="flex flex-col px-6 px-10 justify-center items-center">
            <h2 class="text-3xl md:text-6xl mb-10 text-center sedan-regular max-w-xl text-neutral-900">
                Start investing in minutes
            </h2>
            <p class="text-md md:text-2xl text-center mb-10 text-neutral-800">
                Open an account, make a deposit, and put your money to work.
            </p>
            <div class="flex justify-center">
                <x-link-two href="{{route('user.deposit.pricingTable')}}">Get started today</x-link-two>
            </div>
        </div>
    </section>    
</x-app-layout>