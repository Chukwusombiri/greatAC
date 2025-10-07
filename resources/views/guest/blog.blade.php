<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat text-gray-100">
        <div class="absolute inset-0 bg-gray-950 bg-opacity-70 backdrop-blur-[2px]"></div>

        <div class="relative z-10 px-6 py-20 md:py-32 flex flex-col items-center justify-center text-center">
            <!-- Accent Gradient Line -->
            <div
                class="w-20 h-[3px] bg-gradient-to-r from-blue-400 via-blue-600 to-blue-400 rounded-full mb-6 animate-pulse">
            </div>

            <h1 class="sedan-regular text-4xl md:text-6xl font-bold leading-tight text-white mb-6 max-w-3xl">
                Market News &amp; Insights
            </h1>

            <p class="futura-book text-lg md:text-2xl text-gray-300 max-w-2xl">
                Stay ahead of the curve with real-time updates and expert takes on global financial trends —
                from forex and crypto to equities and property markets.
            </p>
        </div>
    </section>

    <div class="w-full md:max-w-3xl mx-auto mb-16 px-4 h-screen overflow-y-auto">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a
                    href="https://www.tradingview.com/news-flow/?priority=top_stories" rel="noopener nofollow"
                    target="_blank"><span class="blue-text">Top stories by TradingView</span></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                {
                    "displayMode": "regular",
                    "feedMode": "all_symbols",
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "locale": "en",
                    "width": "100%",
                    "height": "100%"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</x-app-layout>
