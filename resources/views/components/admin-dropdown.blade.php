<!-- resources/views/components/dropdown.blade.php -->
<div x-data="{
    open: false,
    x: 0,
    y: 0,
    dropdownX: 0,
    dropdownY: 0,
    dropdownWidth: 192, // adjust if your dropdown has fixed width (48 * 4 = 192px)
    toggle($el) {
        this.open = !this.open;
        if (this.open) {
            const btn = this.$refs.button.getBoundingClientRect();
            this.dropdownX = btn.right - this.dropdownWidth;
            this.dropdownY = btn.bottom + 10 + window.scrollY;
        }
    }
}" class="inline-block relative">
    <!-- Trigger button -->
    <button x-ref="button" @click="toggle" type="button" class="">
        {{ $trigger }}
    </button>

    <!-- Teleport dropdown to body -->
    <template x-teleport="body">
        <div x-show="open" @click.away="open = false" @click="open = false" x-transition
            class="absolute z-[9999] bg-white border border-gray-300 rounded shadow-lg w-48"
            x-bind:style="'left: ' + dropdownX + 'px; top: ' + dropdownY + 'px;'">
            {{ $slot }}
        </div>
    </template>
</div>

{{-- 
<x-admin-dropdown>
                                        <x-slot name="trigger">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                        </x-slot>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage deposit') }}
                                        </div>
                                        @if ($deposit->receipt != null)
                                            <a href="{{ asset('storage/' . $deposit->receipt) }}"
                                                class="flex item-center w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-receipt w-5 h-5"
                                                        width="40" height="40" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="#000000" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                                                    </svg>
                                                </span>
                                                Receipt
                                            </a>
                                        @endif
                                        @if (!$deposit->isApproved)
                                            <button
                                                class="flex item-center w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                               x-on:click="Livewire.emit('approve', '{{ $deposit->id }}')">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-discount-check-filled w-5 h-5"
                                                        width="40" height="40" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="#000000" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                            stroke-width="0" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                Approve
                                            </button>
                                            <button
                                                class="flex item-center w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                                wire:click='$emit("openModal","admin.edit-deposit",@json([$deposit->id]))'>
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit w-5 h-5"
                                                        width="40" height="40" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="#000000" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>
                                                </span>
                                                Edit
                                            </button>
                                        @endif
                                        <button
                                            class="flex item-center w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                            wire:click="delete('{{ $deposit->id }}')">
                                            <span class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash-x w-5 h-5"
                                                    width="40" height="40" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="#000000" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7h16" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    <path d="M10 12l4 4m0 -4l-4 4" />
                                                </svg>
                                            </span>
                                            Delete deposit
                                        </button>
                                    </x-admin-dropdown>
--}}
