<div class="flex flex-col items-center px-4 md:px-6 py-4">
    <x-admin-alert />
    <div class="w-full">
        <div class="grid grid-cols-2 items-center justify-center gap-2">
            <div class="col-span-2 md:col-span-1">
                <x-label for="client" value="{{ __('Client') }}" />
                <x-input type="text" wire:model="client" name="name" class="mt-2 block w-full" />
                <x-input-error for="client" class="mt-1" />
            </div>
            <div class="col-span-2 md:col-span-1">
                <x-label for="occupation" value="{{ __('Occupation') }}" />
                <x-input type="text" wire:model="occupation" name="occupation" class="mt-2 block w-full" />
                <x-input-error for="occupation" class="mt-1" />
            </div>
        </div>
        <div class="grid grid-cols-2 items-center justify-center gap-2 mt-4">
            <div class="col-span-2">
                <x-label for="comment" value="{{ __('Client review') }}" />
                <textarea rows="4" wire:model="comment" name="comment" class="mt-2 block w-full rounded-xl border border-gray-300"></textarea>
                <x-input-error for="comment" class="mt-1" />
            </div>
        </div>
        <div class="grid grid-cols-2 items-center justify-center gap-2 mt-4">
            <div class="col-span-2">
                <!-- Preview -->
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" alt="" class="w-20 h-20 rounded-full mb-4">
                @endif

                <!-- Progress Bar -->
                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">

                    <!-- Label Wrapped Around Input -->
                    <label
                        class="cursor-pointer px-4 py-2 mb-2 text-xs capitalize font-bold tracking-wide text-white bg-slate-600 rounded-xl">
                        Add a picture
                        <input type="file" wire:model="photo" id="photo" name="photo" class="hidden">
                    </label>

                    <div x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                </div>

                <x-input-error for="photo" class="mt-1" />
            </div>

        </div>
    </div>
    <div class="w-full flex justify-end items-center mt-3 pt-3 border-t border-gray-200">
        <x-secondary-button class="rounded-xl" wire:click="save">save review</x-secondary-button>
    </div>
</div>
