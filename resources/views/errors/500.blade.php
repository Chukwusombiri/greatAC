<x-app-layout>
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="text-center max-w-lg" data-aos="fade-down" data-aos-duration="700">
            <h1 class="text-5xl futura-bold text-red-600 mb-4 animate-pulse">500</h1>
            <h2 class="text-2xl font-semibold text-white mb-2">Internal Server Error</h2>
            <p class="text-primary-light mb-6">
                Oops! Something went wrong on our end. We're working to fix it — please try again later.
            </p>
            <a href="{{ route('guestHome') }}"
               class="inline-block bg-red-500 text-primary-dark font-semibold px-6 py-2 rounded-lg hover:bg-white transition">
                Back to Home
            </a>
        </div>
    </section>        
</x-app-layout>