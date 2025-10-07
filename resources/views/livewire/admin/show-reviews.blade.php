<div class="w-full">
    <div class="flex justify-between flex-wrap pt-4 pb-6">
        <h2 class="futura-medium text-2xl tracking-wide mb-2 md:mb-0">Client Reviews</h2>
        <x-link-two href="{{route('admin.review.create')}}">Create new</x-link-two>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($reviews as $item)
        <div class="rounded-xl border border-gray-300 shadow p-6">
            <div class="flex gap-2 flex-nowrap">
                <img src="{{$item->photoUrl}}" alt="{{$item->client}}'s photo" class="w-16 h-16 rounded-full shadow">
                <div class="flex flex-col">
                    <h4 class="futura-medium text-lg break-words">{{$item->client}}</h4>
                    <h6 class="text-sm text-gray-600 futura-medium mt-1">{{$item->occupation}}</h6>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-sm text-gray-800 break-words">{{$item->comment}}</p>
            </div>
            <div class="flex justify-end gap-3 mt-2 pt-2 border-t border-gray-300">
                <button wire:click="delete('{{$item->id}}')" class="px-6 py-2.5 font-bold text-gray-50 bg-rose-700 rounded-lg cursor-pointer text-xs uppercase border border-rose-700 transition-all ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px">delete</button>
                <a href="/admin/review/edit/{{$item->id}}" class="px-6 py-2.5 font-bold text-white bg-slate-800 rounded-lg cursor-pointer text-xs uppercase border border-slate-800 transition-all ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px">update</a>                            
            </div>
        </div>
        @endforeach            
    </div>
    <div class="mt-4 pb-8">
        {{$reviews->links()}}
    </div>
</div>
