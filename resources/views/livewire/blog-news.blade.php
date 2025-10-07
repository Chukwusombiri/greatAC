<div class="mt-8 space-y-8">
    @if (count($blogs)>0)
        @foreach ($blogs as $item)
        <div class="flex">
            <a href="{{$item['url']}}" class="w-full rounded-xl p-4 border border-primary-light hover:border-blue-600 md:inline-flex gap-4">
                <img src="{{$item['urlToImage']}}" alt="{{$item['title']}}" class="w-full md:w-32 h-40 md:h-36 mb-3 md:mb-0">
                <div class="grow">
                    <p class="text-lg md:text-xl hover:underline tracking-wide leading-lose mb-2 futura-medium">{{$item['title']}}</p>
                    <p class="w-full flex flex-nowrap text-sm text-gray-300 mb-4"><span class="futura-light uppercase mr-2">Published: </span>{{date('M d, y', strtotime($item['time']))}}</p>
                    <p class="text-md hover:underline tracking-wide mb-2 text-wrap word-wrap">{{$item['snippet']}}</p> 
                    <p class="text-sm flex gap-2 flex-nowrap items-center"><span>Source</span><span class="inline-block bg-gray-600 text-primary-light p-2 shadow rounded">{{$item['source']}}</span></p>                   
                </div>
            </a>
        </div>            
        @endforeach 
    @else
    <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col bg-gray-500 text-primary-light p-2">
        <h4 class="futura-medium text-2xl">
            No news to display...    
        </h4>   
        <p class="text-lg mt-4">
            Check back later or refresh page using button below to see news instantly.
        </p>
    </div>                   
    @endif
    <div class="col-span-1 md:col-span-2 lg:col-span-3 flex justify-end">
        <button wire:click="refreshComponent" class="outline-none border border-blue-600 text-blue-600 rounded-lg px-4 py-2 flex gap-2 justify-center flex-nowrap items-center">            
            <span>Refresh</span>
        </button>
    </div>
</div>