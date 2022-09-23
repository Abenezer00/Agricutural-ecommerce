<div class="px-2 sm:px-3 lg:px-8 my-10 justify-self-center lg:grid lg:grid-cols-7 lg:gap-6">

    <div class="mt-5 lg:mt-0 lg:col-span-4">
        <div class="grid grid-cols-1">
            @include('livewire.shipping-address')
        </div>
    </div>
    <div class="mt-5 lg:mt-0 lg:col-span-3">
        <div class="grid grid-cols-1">
            <livewire:sale.cart.cart-sidebar :is-checkout-enabled="false" cart-title="Product" :show-sub-total="true"
                wire:key="checkout-form-summary" />

            <div class="mt-3 text-center">
                @error('selectedPaymentMethod')
                    <div class="text-red-500 border border-red-500 m-5 mb-8 bg-red-50 rounded">
                        <a href="#selectedPaymentMethodID">{{ $message }}
                            Click here to add payment method
                        </a>
                    </div>
                @enderror
                <button wire:click="store" wire:loading.remove
                    class="w-full cursor-pointer flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    {{ __('Order') }}
                </button>
                <span class="ml-2 mt-1 text-center">
                    <x-livewire-loading target="store" textColor="text-indigo-500" />
                </span>
            </div>


            <div class=" px-4 sm:px-6">
                <div class=" flex items-center justify-center ">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class=" ml-2 fond-bold text-lg">How to pay?</h3>
                </div>
                Pay VIA BANK ETC.....
            </div>
        </div>
    </div>
</div>
