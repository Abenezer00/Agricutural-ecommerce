 <h2 class="text-lg md:text-xl xl:text-2xl font-bold text-heading mb-6 xl:mb-8">Shipping Address</h2>
 <div class="grid grid-cols-6 gap-6">

     @if ($addressChoice == 'previous')

         <div class="col-span-6 sm:col-span-3">
             <label for="address" class="block text-sm font-medium text-gray-700">Select Address
                 <button wire:loading.attr="disabled" wire:click="$set('addressChoice', 'new')"
                     class="btn-primary-sm mb-2">or Click To Add New
                     Address</button>
             </label>
             <x-form.livewire-select label="" key="previousSelectedAddress" :collection="$previousAddresses" value-key="id"
                 display-key="name,phone_number,address" />

         </div>
     @else
         <div class="col-span-6 sm:col-span-3">
             <div class="mb-2">
                 <x-form.livewire-input label="Full Name" key="fullName" wire:key="fullName" />
             </div>
             @if (is_null($fullName))
                 <span class="mt-3">
                     <input type="checkbox"
                         class=" focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                         wire:loading.attr="disabled" wire:click="setFullName">
                     Use {{ auth()->user()->name }}?
                 </span>
             @endif

         </div>

         <div class="col-span-6 sm:col-span-3">
             <div class="mb-2">
                 <x-form.livewire-input label="Phone (0929194872)" key="phoneNumber" wire:key="phoneNumber" />
             </div>
         </div>

         <div class="col-span-6 sm:col-span-3">
             <x-form.livewire-input label="State" key="state" wire:key="state" />
         </div>
         <div class="col-span-6 sm:col-span-3">
             <x-form.livewire-input label="City" key="city" wire:key="city" />
         </div>
         <div class="col-span-6  sm:col-span-3">
             <x-form.livewire-input label="Address" key="address" wire:key="address" />
         </div>

     @endif

     <div class="col-span-6">
         <x-form.livewire-text-area label="Order Notes (Optional)" key="note" wire:key="note"
             placeholder="Notes about your order, e.g. special notes for delivery" />
     </div>

 </div>
