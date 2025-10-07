<div x-data='{isOpen:false}'>
    <div class="flex justify-between items-center w-full pl-3 pr-4 py-2 my-px text-left text-base font-medium text-gray-300 hover:text-gray-200 hover:bg-gray-900 hover:border-transparent focus:outline-none focus:text-gray-800 focus:bg-gray-900 focus:border-transparent cursor-pointer transition duration-150 ease-in-out"
        @click="isOpen=true">
        {{ $trigger }}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </div>
    <div x-show="isOpen"
        class="fixed inset-0 top-0 bottom-0 w-full z-50 bg-primary-dark flex transition ease-in-out duration-500">
        <div class="w-full h-full flex flex-col px-4 sm:px-6">
            <div class="flex-none flex justify-between items-center py-2">
                <button class="px-4 py-1.5 inline-flex items-center bg-gray-100 rounded-lg text-gray-700"
                    @click="isOpen=false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    <span class="ml-2">Back</span>
                </button>
                <button @click="open = !open"
                    class="p-2 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="divide-y divide-gray-800">
                {{ $items }}
            </ul>
        </div>
    </div>
</div>
