 <div class="h-full flex flex-col bg-white">
     <div class="text-lg font-medium text-white mb-2 bg-indigo-600 p-3"> {{ __('SEARCH OUR SITE') }}
         <x-livewire-loading textColor="text-white" />
     </div>
     <div class="relative mx-8 mt-5">
         <input
             class="w-full border border-gray-300 pl-8 rounded-full  pr-10 py-2 focus:ring-indigo-500 focus:border-indigo-500 "
             type="text" placeholder="Search for products" wire:model.debounce.500ms="search"
             wire:keydown.enter="searchProduct">
         <span class="absolute inset-y-0 left-0 px-3 flex items-center rounded-full">
             <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                 <path
                     d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
             </svg>
         </span>
     </div>

     <div class="flex-1 border-t border-gray-200 py-3 py-6 overflow-y-auto mt-5">
         <div class="flow-root">
             @if ($products->count())
                 <ul role=" list" class="-my-6 divide-y divide-gray-200 px-4 sm:px-6">
                     @foreach ($products as $product)
                         <x-search-list-item :product="$product" />
                     @endforeach
                 </ul>
             @endif
         </div>
     </div>

 </div>
