<div class="px-2 sm:px-3 lg:px-8 my-10 flex justify-center ">

    <div class="w-full md:w-2/5">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            <span class="font-bold text-lg">CONFIRM YOUR PAYMENT FOR ORDER #{{ $order->id }}</span>
        </div>


        <div>
            You will find the transaction number to put in the form on the receipt while making deposit.

        </div>

        <x-form.livewire-input label="Transaction number" key="transactionNumber" wire:key="transactionNumber" />

        <div class="mt-3 text-center">
            <button wire:click="store" wire:loading.remove
                class="w-full cursor-pointer flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                Confirm Payment
            </button>
            <span class="ml-2 mt-1 text-center">
                <x-livewire-loading target="store" textColor="text-indigo-500" />
            </span>
        </div>

    </div>
</div>
