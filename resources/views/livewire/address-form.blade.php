<div class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
            x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button wire:loading.attr="disabled" wire:click="$toggle('modalOpen')" type="button"
                    class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="save" method="POST">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="my-3">
                        <x-form.livewire-input label="Name" key="address.name" />
                    </div>
                    <div class="my-3">
                        <x-form.livewire-input label="Phone Number" key="address.phone_number" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-form.livewire-input label="City" key="address.city" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-form.livewire-input label="State" key="address.state" />
                    </div>
                    <div class="my-3">
                        <x-form.livewire-input label="Address" key="address.address" />
                    </div>
                    <div class="my-3">
                        <x-form.livewire-text-area label="Address Description" key="address.address_description" />
                    </div>
                </div>


                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-indigo-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-indigo-700 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm ml-0 md:ml-3">
                        Save
                    </button>
                    <button wire:loading.attr="disabled" wire:click="$toggle('modalOpen')" type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>

                    <div class="mx-2">
                        <x-livewire-loading target="save" textColor="text-indigo-500" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
