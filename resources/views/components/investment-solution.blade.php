 @php
     $solutions = [
         [
             'title' => 'Global Forex Markets',
             'imgSrc' => 'forex.jpg',
             'desc' =>
                 'Trade across major and emerging currency pairs with real-time insights and precision-driven strategies designed for consistent performance.',
         ],
         [
             'title' => 'Digital Assets & Crypto',
             'imgSrc' => 'feature-1.jpg',
             'desc' =>
                 'Access the future of finance with expertly managed crypto portfolios—balancing innovation, opportunity, and long-term growth potential.',
         ],
         [
             'title' => 'Equity & Stock Portfolios',
             'imgSrc' => 'stock.jpg',
             'desc' =>
                 'Invest in world-class companies and growth sectors through diversified portfolios designed to build wealth and reduce volatility.',
         ],
         [
             'title' => 'Real Estate Investments',
             'imgSrc' => 'get-home.jpg',
             'desc' =>
                 'Own a stake in premium real estate assets—backed by stability, consistent yields, and long-term appreciation potential.',
         ],
     ];

 @endphp

 <section class="py-16 md:py-24 px-6 md:px-10">
     <div class="w-full mx-auto max-w-8xl">
         <div class="max-w-3xl">
             <h2 class="futura-medium text-3xl font-extrabold md:text-5xl capitalize">
                 Smarter Strategies. <span class="text-blue-600">Stronger</span> Returns.
             </h2>
             <p class="mt-4 text-lg max-w-md mb-2">
                 Our data-driven investment models are built to protect your capital and deliver sustainable
                 growth—designed to thrive through every market cycle.
             </p>
             <a href="{{ route('managedInvesting') }}"
                 class="hover:underline font-bold inline-flex items-center flex-nowrap gap-1 text-md tracking-wide futura-medium">
                 <span>Learn More</span>
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                     <path d="M5 12l14 0"></path>
                     <path d="M13 18l6 -6"></path>
                     <path d="M13 6l6 6"></path>
                 </svg>
             </a>
         </div>

         <div
             class="mt-12 grid grid-cols-1 gap-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
             @foreach ($solutions as $item)
                 <div class="shadow-lg rounded-xl overflow-hidden">
                     <div class="h-48 overflow-hidden transition-all duration-500 ease-in-out">
                         <img src="{{ asset('/images/landing/' . $item['imgSrc']) }}" alt="{{ $item['title'] }}"
                             class="w-full h-full hover:scale-125 transition ease-in-out duration-500">
                     </div>
                     <div class="py-4">
                         <h4 class="text-lg font-semibold">{{ $item['title'] }}</h4>
                         <p class="mt-2 backdrop-blur-lg text-lg">{{ $item['desc'] }}</p>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
