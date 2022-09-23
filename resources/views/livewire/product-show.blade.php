<div class="w-full relative flex items-center px-4 pt-14 pb-8 sm:px-6 sm:pt-8 md:p-6 lg:p-8">
    <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
        <div class="sm:col-span-4 lg:col-span-5">
            @include('livewire.product-show.image')
        </div>
        <div class="sm:col-span-8 lg:col-span-7">
            @include('livewire.product-show.product-information')
        </div>
    </div>
    <x-jet-confirmation-modal wire:model="orderMinimumNoticeProductShow">
        <x-slot name="title">
            <span class="text-red-500">Warning</span>
        </x-slot>

        <x-slot name="content">
            <span class="text-red-500"> {{ session('order-minimum') }} </span>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('orderMinimumNoticeProductShow')" wire:loading.attr="disabled">
                {{ __('Continue shopping') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-confirmation-modal>


</div>
