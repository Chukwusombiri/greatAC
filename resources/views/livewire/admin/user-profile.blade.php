<div class="">
    <div class="bg-gray-100 p-4 sm:px-6 sm:py-4">
        <h3 class="futura-medium text-lg leading-6 font-medium text-gray-900">
            {{ $user->username }}'s Profile
        </h3>
        <p class="mt-4 text-md font-semibold">Return on investment: ${{ number_format($user->acRoi) }}</p>
        <p class="mt-2 text-md font-semibold">Capital: ${{ number_format($user->acBal) }}</p>
        <p class="mt-2 text-md font-semibold">Current earnings: ${{ number_format($user->perMonRoi) }}</p>
        <p class="mt-2 text-md font-semibold">Current plan:
            {{ $user->activePlan !== null ? $user->activePlan->name : 'None' }}</p>
        <div class="mt-4">
            <x-label for="acRoi" value="{{ __('Edit ROI') }}" />
            <div class="flex flex-nowrap mb-2">
                <input type="number" id="acRoi" wire:model="acRoi" placeholder="Enter amount to add"
                    class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                <button type="button" wire:click='editRoi'
                    class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-cyan-500 hover:shadow-xs active:opacity-85 ">
                    Save
                </button>
            </div>
            <x-action-message on="savedRoi" />
            <x-input-error for="acRoi" class="mt-1" />
        </div>
        <div class="mt-4">
            <x-label for="acBal" value="{{ __('Edit capital') }}" />
            <div class="flex flex-nowrap mb-2">
                <input type="number" id="acBal" wire:model="acBal" placeholder="Enter amount to add"
                    class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline  text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                <button type="button" wire:click='editCapital'
                    class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-cyan-500 hover:shadow-xs active:opacity-85 ">
                    Save
                </button>
            </div>
            <x-action-message on="savedCapital" class="text-emerald-500" />
            <x-input-error for="acBal" class="mt-1" />
        </div>
        {{-- edit perMonRoi --}}
        <div class="mt-4">
            <x-label for="perMonRoi" value="{{ __('Edit Current earnings') }}" />
            <div class="flex flex-nowrap mb-2">
                <input type="number" id="perMonRoi" wire:model="perMonRoi" placeholder="Enter amount to add"
                    class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline  text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                <button type="button" wire:click='editPerMonRoi'
                    class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-cyan-500 hover:shadow-xs active:opacity-85 ">
                    Save
                </button>
            </div>
            <x-action-message on="savedPerMonRoi" class="text-emerald-500" />
            <x-input-error for="perMonRoi" class="mt-1" />
        </div>
        {{-- add profit --}}
        <div class="mt-4">
            <x-label for="plusRoi" value="{{ __('Add profit') }}" />
            <p class="futura-light text-sm mb-2">"Add profit" will update the User's Current earnings value and ROI
                value by adding inputed amount to both fields.</p>
            <div class="flex flex-nowrap mb-2">
                <input type="text" id="plusRoi" wire:model="plusRoi" placeholder="Enter amount to add"
                    class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline  text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                <button type="button" wire:click='addProfit'
                    class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-cyan-500 hover:shadow-xs active:opacity-85 ">
                    Add
                </button>
            </div>
            <x-action-message on="savedProfit" />
            <x-input-error for="plusRoi" class="mt-1" />
        </div>
        {{-- set plan --}}
        <div class="mt-4">
            <x-label for="currentPlan" value="{{ __('Change current plan') }}" />
            <div class="flex flex-nowrap mb-2">
                <select id="currentPlan" wire:model="currentPlan"
                    class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline  text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                    <option value="">none</option>
                    @foreach ($plans as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <button type="button" wire:click='setPlan'
                    class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-cyan-500 hover:shadow-xs active:opacity-85 ">
                    save
                </button>
            </div>
            <x-action-message on="savedPlan" />
            <x-input-error for="currentPlan" class="mt-1" />
        </div>
    </div>
    <div class="bg-white px-4 sm:p-6 rounded-xl shadow-xl mb-6">
        {{-- personal infos --}}
        <div class="space-y-6 mb-4">
            <h2 class="futura-medium text-lg">Personal information</h2>
            <div class="flex flex-col px-2 py-6">
                @if ($photo)
                    <span class="font-semibold">Photo:</span>
                    <img class="rounded-full mt-2 h-24 w-24 shadow" src="{{ $photo->temporaryUrl() }}">
                @elseif($user->profile_photo_path !== null)
                    <span class="font-semibold">Photo:</span>
                    <img class="rounded-full mt-2 h-24 w-24 shadow"
                        src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile photo" />
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-24 shadow" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-linecap="round" stroke-linejoin="round" width="24"
                        height="24" stroke-width="2">
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                    </svg>
                @endif
                <x-input-error for="photo" class="mt-2" />
                <p class="futura-light text-sm mt-2">Always remember to save after selecting the new image to be
                    uploaded.</p>
                <div class="flex" x-data>
                    <div class="flex mt-2 mr-4">
                        <button x-on:click.prevent="$refs.photo.click()"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Upload
                        </button>
                        <input class="hidden" type="file" id="profile_image" wire:model="photo" x-ref="photo">
                    </div>
                    @if ($user->profile_photo_path !== null)
                        <div class="flex mt-2">
                            <button
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                wire:click='removeImage'>
                                remove
                            </button>
                            <div class="flex items-center">
                                <x-action-message on="removedPhoto">Removed photo</x-action-message>
                            </div>
                        </div>
                    @else
                        <div class="hidden"></div>
                    @endif
                </div>
            </div>
            <div class="grid grid-cols-2 items-center justify-center gap-2">
                <div class="col-span-2 md:col-span-1">
                    <x-label for="username" value="{{ __('Username') }}" />
                    <x-input type="text" wire:model="username" class="mt-2 block w-full" />
                    <x-input-error for="username" class="mt-1" />
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input type="text" wire:model="email" class="mt-2 block w-full" />
                    <x-input-error for="email" class="mt-1" />
                </div>
            </div>
            <div class="grid grid-cols-2 items-center justify-center gap-2">
                <div class="col-span-2 md:col-span-1">
                    <x-label for="first_name" value="{{ __('First name') }}" />
                    <x-input type="text" wire:model="first_name" class="mt-2 block w-full" />
                    <x-input-error for="first_name" class="mt-1" />
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-label for="last_name" value="{{ __('Last name') }}" />
                    <x-input type="text" wire:model="last_name" class="mt-2 block w-full" />
                    <x-input-error for="last_name" class="mt-1" />
                </div>
            </div>
            <div class="flex justify-end items-center">
                <x-action-message on="savedPersonal" />
                <x-secondary-button class="ml-3" wire:click="savePersonal">Save</x-secondary-button>
            </div>
        </div>
        <hr><br><br>
        {{-- contact information --}}
        <div class="space-y-6 mb-4">
            <h2 class="futura-medium text-lg">Contact information</h2>
            <div class="grid grid-cols-2 items-center justify-center gap-2">
                <div class="col-span-2">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input type="text" wire:model="address" class="mt-2 block w-full" />
                    <x-input-error for="address" class="mt-1" />
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input type="text" wire:model="phone" class="mt-2 block w-full" />
                    <x-input-error for="phone" class="mt-1" />
                </div>
                <div class="col-span-2 md:col-span-1">
                    <x-label for="city" value="{{ __('City') }}" />
                    <x-input type="text" wire:model="city" class="mt-2 block w-full" />
                    <x-input-error for="city" class="mt-1" />
                </div>
            </div>
            <div class="grid grid-cols-2 items-center justify-center gap-2">
                <div class="col-span-2 md:col-span-1">
                    <x-label for="country" value="{{ __('Country of residence') }}" />
                    <x-input type="text" wire:model="country" class="mt-2 block w-full" />
                    <x-input-error for="country" class="mt-1" />
                </div>
            </div>
            <div class="flex justify-end items-center">
                <x-action-message on="savedContact" />
                <x-secondary-button class="ml-3" wire:click="saveContact">Save</x-secondary-button>
            </div>
        </div>
    </div>
</div>
