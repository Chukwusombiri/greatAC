@props(['text' => 'creating order', 'action' => 'deposit'])
<div class="fixed top-0 right-0 left-0 bottom-0 z-50 bg-gray-800 bg-opacity-30" wire:loading.delay.long
    wire:target={{$action}}>
    <div class="w-full h-full flex justify-center items-center">
        <svg class="animate-spin w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
            stroke-width="2">
            <path d="M3 12a9 9 0 0 0 9 9a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9"></path>
            <path d="M17 12a5 5 0 1 0 -5 5"></path>
        </svg>
        <span class="ml-2 text-md text-white">
            {{$text}}
        </span>
    </div>
</div>
