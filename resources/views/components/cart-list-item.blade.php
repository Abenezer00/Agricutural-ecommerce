 <li class="py-6 flex">
     <div class="flex-shrink-0 w-28 h-36 border border-gray-200 rounded-md overflow-hidden">
         <img src="{{ $cart->product->getFirstMediaUrl('product-images') }}" loading="lazy" decoding="async"
             alt="{{ $cart->product->name }}" class="w-full h-full object-center object-cover">
     </div>

     <div class="ml-4 flex-1 flex flex-col">
         <div>
             <div class="text-base font-medium text-gray-900">
                 <h3>
                     <a href="{{ route('products.show', $cart->product->slug) }}" class="hover:text-indigo-600">
                         {{ $cart->product->name }}
                     </a>
                 </h3>
             </div>

             @if ($showSubTotal)
                 <p class="mt-1 text-sm text-gray-500">
                     Br {{ number_format($cart->product->price * $cart->qty, 2) }}
                 </p>
             @else
                 <p class="mt-1 text-sm text-gray-500">
                     Br {{ number_format($cart->product->price, 2) }}
                 </p>
             @endif
         </div>


         <div class="mt-1">

             @if (session()->has('cart-quantity-update-' . $cart->id))
                 <span class="text-red-500 text-base  cursor-pointer">
                     <input type="checkbox" class="hidden" id="cart-quantity-update-id">
                     <label for="cart-quantity-update-id"
                         class="close cursor-pointer">{{ session('cart-quantity-update-' . $cart->id) }}</label>
                 </span>
             @endif
         </div>
         <div class="flex-1 flex items-end justify-between text-sm mt-5">
             <div class="col-span-1 md:col-span-2 lg:col-span-1">
                 <div class="flex items-center ">
                     <button wire:loading.attr="disabled" wire:click="setQuantity('-', {{ $cart }})"
                         class="w-full text-gray-500 text-lg bg-transparent border-l border-t border-b border-gray-200 hover:bg-gray-200 font-bold px-3 py-1 rounded-l outline-none focus:outline-none ease-linear transition-all duration-150"
                         type="button">
                         -
                     </button>
                     <span
                         class="w-full text-gray-500 text-lg text-center bg-transparent border border-solid border-gray-200 font-bold  px-3 py-1 outline-none"
                         type="button">
                         {{ $cart->qty }}
                     </span>
                     <button wire:loading.attr="disabled" wire:click="setQuantity('+', {{ $cart }})"
                         class="w-full text-gray-500 text-lg bg-transparent border-t border-b border-r border-gray-200 hover:bg-gray-200 font-bold px-3 py-1 rounded-r outline-none focus:outline-none ease-linear transition-all duration-150"
                         type="button">
                         +
                     </button>
                 </div>
             </div>

             <div class="flex">
                 <button wire:loading.attr="disabled"
                     wire:click='removeFromCart({{ $cart->id }}, "{{ $cart->product->name }}")' type="button"
                     class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
             </div>
         </div>
     </div>
 </li>
