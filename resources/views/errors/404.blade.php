<x-app-layout>
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="text-center max-w-lg" data-aos="fade-up" data-aos-duration="700">
            <h1 class="text-5xl futura-bold text-gray-400 mb-4 animate-bounce">404</h1>
            <h2 class="text-2xl font-semibold text-white mb-2">Page Not Found</h2>
            <p class="text-primary-light mb-6">
                Sorry, we couldn’t find the page you were looking for. It may have been moved or deleted.
            </p>
            <a href="{{ route('guestHome') }}"
               class="inline-block bg-gray-400 text-primary-dark font-semibold px-6 py-2 rounded-lg hover:bg-white transition">
                Back to Home
            </a>
        </div>
    </section>    
</x-app-layout>