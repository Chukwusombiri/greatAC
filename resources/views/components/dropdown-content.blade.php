@props(['action'])
<div class="w-full h-full flex items-center bg-slate-700 text-gray-300">
    <div class="w-1/3 h-full bg-slate-600 flex flex-col justify-center p-6">
        <h2 class="sedan-regular text-3xl mb-4">{{ $title }}</h2>
        <p class="futura-book text-lg text-md mb-4">
            {{ $description }}
        </p>
        <div class="w-full flex">
            <a href="{{ $action }}" class="bg-slate-800 p-2 hover:px-4 rounded-full transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
    <div class="w-2/3 h-full bg-slate-800 p-6 flex items-center">
        <div class="w-full">
            <p class="max-w-lg futura-light font-normal uppercase text-md border-b border-gray-400 pb-2 mb-4 tracking-widest">
                {{ $listTitle }}</p>
            <ul class="futura-book text-lg list-style-none" role="list">
                {{ $listItems }}
            </ul>
        </div>
    </div>
</div>