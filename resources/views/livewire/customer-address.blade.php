<div class="col-span-12 md:col-span-9 mt-4 md:mt-0">
    @if ($modalOpen)
        @include('livewire.address-form')
    @endif
    <div class="md:col-span-1 flex justify-between mb-5">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">{{ __('Address') }}
                <button class="mx-2 btn-primary-sm" wire:loading.attr="disabled" wire:click="openModal">
                    Add New Address
                </button>
                <x-livewire-loading textColor="text-indigo-500" />
            </h3>
        </div>
    </div>

    <div class="mt-4">

        @if ($addresses->isNotEmpty())
            <div class="my-2 grid grid-cols-4 mb-3 gap-6">

                @foreach ($addresses as $address)
                    <div
                        class="col-span-4 sm:col-span-2 border rounded-md py-3 px-4 m-2 md:m-0 font-medium hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 ">


                        <div class="flex justify-between  text-base">
                            <p class="font-bold">
                                {{ $address->name }}
                                <span class="text-green-500">({{ $address->phone_number }})</span>
                            </p>

                            <div class="flex">
                                <div>

                                </div>
                                <button class="bg-indigo-500 hover:bg-indigo-600 p-1 text-white rounded mr-2"
                                    wire:loading.attr="disabled" wire:click="openModal({{ $address->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 p-1 text-white rounded"
                                    wire:loading.attr="disabled" wire:click="deleteAddress({{ $address }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                        <p class="text-sm text-gray-500">
                            {{ $address->address }}
                        </p>
                        @if ($address->address_description)
                            <p class="text-sm text-gray-500 mt-2 font-semibold flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $address->address_description }}
                            </p>
                        @endif

                    </div>
                @endforeach
            </div>
        @else
            <x-item-empty />
        @endif


    </div>
</div>
