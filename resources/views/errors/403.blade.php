<x-app-layout>
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="text-center max-w-lg" data-aos="zoom-in" data-aos-duration="700">
            <h1 class="text-5xl futura-bold text-red-600 mb-4 animate-pulse">403</h1>
            <h2 class="text-2xl font-semibold text-white mb-2">Invalid Signature</h2>
            <p class="text-primary-light mb-6">
                The link you followed is invalid or has expired. Please check the URL or request a new one.
            </p>
            <a href="{{ url()->previous() }}"
               class="inline-block bg-primary-light text-primary-dark font-semibold px-6 py-2 rounded-lg hover:bg-white transition">
                Go Back
            </a>
        </div>
    </section>       
</x-app-layout>