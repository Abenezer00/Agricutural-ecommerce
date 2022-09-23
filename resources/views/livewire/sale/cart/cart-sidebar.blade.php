 <div class="h-full flex flex-col bg-white">
     <x-jet-confirmation-modal wire:model="orderMinimumNoticeCart">
         <x-slot name="title">
             <span class="text-red-500">Warning</span>
         </x-slot>

         <x-slot name="content">
             <span class="text-red-500"> {{ session('order-minimum') }} </span>
         </x-slot>

         <x-slot name="footer">
             <x-jet-secondary-button wire:click="$toggle('orderMinimumNoticeCart')" wire:loading.attr="disabled">
                 {{ __('Continue shopping') }}
             </x-jet-secondary-button>
         </x-slot>
     </x-jet-confirmation-modal>

     @if (session()->has('cart-updated-message'))
         <x-modal :open="true" key="{{ uniqid() }}">
             <div>
                 <div class="font-medium text-red-600">{{ __('Attention! There has been an update.') }}</div>
                 <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                     @foreach (session('cart-updated-message') as $message)
                         <li>{{ $message }}</li>
                     @endforeach
                 </ul>
             </div>
         </x-modal>
     @endif

     <div class="text-lg font-medium text-white mb-2 bg-indigo-600 p-3">{{ __($cartTitle) }}
         <x-livewire-loading textColor="text-white" />
     </div>
     @if ($carts->count())
         <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
             <div class="flow-root">
                 <ul role=" list" class="-my-6 divide-y divide-gray-200">
                     @foreach ($carts as $cart)
                         <x-cart-list-item :cart="$cart" :show-sub-total="$showSubTotal" />
                     @endforeach
                 </ul>
             </div>
         </div>


         <div class="border-t border-gray-200 py-3 px-4 sm:px-6">

             <div class="flex justify-between text-base font-medium text-gray-900">
                 <p>Subtotal</p>
                 @php
                     $subtotal = $carts->sum(fn($cart) => $cart->product->price * $cart->qty);
                 @endphp
                 <p>Br
                     {{ number_format($subtotal, 2) }}
                 </p>
             </div>
             @if ($isCheckoutEnabled)
                 {{-- <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p> --}}

                 <div class="mt-3">
                     <button wire:loading.attr="disabled" wire:click="checkout"
                         class="w-full flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Checkout</button>
                 </div>
                 <div class="mt-3 flex justify-center text-sm text-center text-gray-500">
                     <p>
                         or <button @click="isCartOpen = false" type="button"
                             class="text-indigo-600 font-medium hover:text-indigo-500">Continue
                             Shopping<span aria-hidden="true"> &rarr;</span></button>
                     </p>
                 </div>
         </div>
     @else
 </div>
 <div class="border-t border-gray-200 py-3 px-4 sm:px-6">
     <div class="flex justify-between text-base font-medium text-gray-900">
         <p>Delivery</p>
         @php
             $total = $subtotal;
         @endphp
         <p>{{ 'Free' }} </p>
     </div>
 </div>

 <div class="border-t border-gray-200 py-3 px-4 sm:px-6">
     <div class="flex justify-between text-base font-medium text-gray-900">
         <p>Total</p>
         <p>Br {{ number_format($total, 2) }}</p>
     </div>
     <p class="text-sm text-gray-500">{{ $notice ?? '' }} </p>
 </div>
 @endif
@else
 @include('livewire.sale.cart.empty')
 @endif


 </div>
