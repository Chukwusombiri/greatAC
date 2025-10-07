@props(['imageUrl','occupation'])
<div
    class="aspect-auto p-8 border border-blue-100 rounded-3xl bg-gray-900 shadow-2xl shadow-blue-600/10">    
    <div class="flex gap-4"> 
        <x-avatar-svg class="w-12 h-12"/>      
        <div>
            <h6 class="text-lg font-medium text-primary-lighter">{{$client}}</h6>
            <p class="text-sm">{{$occupation}}</p>
        </div>
    </div>
    <p class="mt-8">
        {{$comment}}
    </p>
</div>