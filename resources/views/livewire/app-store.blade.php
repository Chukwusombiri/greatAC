<div class="futura-book bg-white text-gray-700">   
    <div class="w-5/6 mx-auto py-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
          </svg>          
        <p class="mb-4">Sorry! {{config('app.name')}} App is not yet available in your region.<br>Stay connected so as to get notified as soon as it becomes available in your region</p>
        <div class="text-center">
            <x-button wire:click="$emit('closeModal')">Close</x-button>            
        </div>
    </div>
</div>