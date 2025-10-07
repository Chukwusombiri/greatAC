<x-app-layout>
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="text-center max-w-lg" data-aos="flip-left" data-aos-duration="700">
            <h1 class="text-5xl futura-bold text-blue-400 mb-4 animate-pulse">419</h1>
            <h2 class="text-2xl font-semibold text-white mb-2">Page Expired</h2>
            <p class="text-primary-light mb-6">
                Your session has expired. Please refresh the page or try again.
            </p>
            <a href="{{ url()->previous() }}"
               class="inline-block bg-blue-400 text-primary-dark font-semibold px-6 py-2 rounded-lg hover:bg-white transition">
                Reload Page
            </a>
        </div>
    </section>      
</x-app-layout>