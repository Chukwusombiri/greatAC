<x-user-layout>
    <x-user-nav page="Deposit" />
    <div class="futura-book w-full px-6 py-6 mx-auto">
        <!-- content -->
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                <div class="w-full lg:w-7/12 mx-auto flex flex-col items-center min-w-0 mt-6 px-3 md:px-6 pt-4 pb-10 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                    <x-success-svg />
                    <h2 class="text-2xl mt-5 mb-4 md:mb-7 text-primary">Excellent! You deposit was successful.</h2>
                    <p class="futura-book text-md text-center mb-4 md:mb-7  text-primary-dark px-4">
                        You have successfully re-invested ${{$deposit['amount']}} into the {{$deposit['plan']}} using your portfolio balance.
                    </p>                    
                
                    <div class="flex justify-center items-center flex-wrap">
                        <x-link-two href="{{route('user.deposits')}}" class="tracking-wide py-3 mb-4 md:mb-0 md:mr-3">View deposits</x-link-two>                        
                        <x-link-one href="{{route('user.dashboard')}}" class="font-semibold tracking-wide py-3">Dashboard</x-link-one>                                                                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-user-footer />
</x-user-layout>