 <div
     class="lg:hidden fixed z-10 bottom-0 flex items-center justify-between shadow-t text-indigo-600 body-font bg-white w-full h-14 sm:h-16 px-4">
     <button aria-label="Menu" @click="isCategorySidebar = true"
         class="flex flex-col items-center justify-center flex-shrink-0 outline-none focus:outline-none">
         <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 25.567 18">
             <g transform="translate(-776 -462)">
                 <rect id="Rectangle_941" data-name="Rectangle 941" width="12.749" height="2.499" rx="1.25"
                     transform="translate(776 462)" fill="currentColor"></rect>
                 <rect id="Rectangle_942" data-name="Rectangle 942" width="25.567" height="2.499" rx="1.25"
                     transform="translate(776 469.75)" fill="currentColor"></rect>
                 <rect id="Rectangle_943" data-name="Rectangle 943" width="17.972" height="2.499" rx="1.25"
                     transform="translate(776 477.501)" fill="currentColor"></rect>
             </g>
         </svg>
     </button>
     <button @click="isSearchOpen = true"
         class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none"
         aria-label="search-button">
         <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" aria-hidden="true">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
         </svg>
     </button>
     <a class="flex-shrink-0" href="{{ route('shop.index') }}">
         <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 17.996 20.442">
             <path
                 d="M48.187,7.823,39.851.182A.7.7,0,0,0,38.9.2L31.03,7.841a.7.7,0,0,0-.211.5V19.311a.694.694,0,0,0,.694.694H37.3A.694.694,0,0,0,38,19.311V14.217h3.242v5.095a.694.694,0,0,0,.694.694h5.789a.694.694,0,0,0,.694-.694V8.335a.7.7,0,0,0-.228-.512ZM47.023,18.617h-4.4V13.522a.694.694,0,0,0-.694-.694H37.3a.694.694,0,0,0-.694.694v5.095H32.2V8.63l7.192-6.98L47.02,8.642v9.975Z"
                 transform="translate(-30.619 0.236)" fill="currentColor" stroke="currentColor" stroke-width="0.4">
             </path>
         </svg>
     </a>
     <button class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none transform"
         aria-label="cart-button" @click="toggleCart">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
         </svg>
         <span
             class="cart-counter-badge flex items-center justify-center bg-indigo-600 text-white absolute -right-1.5 -top-2.5 xl:-top-3 -end-2.5 xl:-end-3 rounded-full font-bold">
             <livewire:sale.cart.cart-count />
         </span>
     </button>



     <style>
         .filter-green {
             filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(86deg) brightness(118%) contrast(119%);
         }

     </style>
     {{-- <a class="flex-shrink-0 focus:outline-none" href="javascript:void(Tawk_API.toggle())">
         <div>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" class="h-6 w-6 ">
                 <path style="fill: rgb(79,70,229);"
                     d="M400 26.2c-193.3 0-350 156.7-350 350 0 136.2 77.9 254.3 191.5 312.1 15.4 8.1 31.4 15.1 48.1 20.8l-16.5 63.5c-2 7.8 5.4 14.7 13 12.1l229.8-77.6c14.6-5.3 28.8-11.6 42.4-18.7C672 630.6 750 512.5 750 376.2c0-193.3-156.7-350-350-350zm211.1 510.7c-10.8 26.5-41.9 77.2-121.5 77.2-79.9 0-110.9-51-121.6-77.4-2.8-6.8 5-13.4 13.8-11.8 76.2 13.7 147.7 13 215.3.3 8.9-1.8 16.8 4.8 14 11.7z">
                 </path>
             </svg>
         </div>
     </a> --}}

     @auth()
         <button class="flex-shrink-0 focus:outline-none" @click="isMobileAccountSidebar = true">
             <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 16.577 18.6">
                 <path
                     d="M-7722.37,2933a.63.63,0,0,1-.63-.63c0-4.424,2.837-6.862,7.989-6.862s7.989,2.438,7.989,6.862a.629.629,0,0,1-.63.63Zm.647-1.251h13.428c-.246-3.31-2.5-4.986-6.713-4.986s-6.471,1.673-6.714,4.986Zm2.564-12.518a4.1,4.1,0,0,1,1.172-3,4.1,4.1,0,0,1,2.979-1.229,4.1,4.1,0,0,1,2.979,1.229,4.1,4.1,0,0,1,1.171,3,4.341,4.341,0,0,1-4.149,4.5,4.344,4.344,0,0,1-4.16-4.5Zm1.251,0a3.1,3.1,0,0,0,2.9,3.254,3.094,3.094,0,0,0,2.9-3.253,2.878,2.878,0,0,0-.813-2.109,2.88,2.88,0,0,0-2.085-.872,2.843,2.843,0,0,0-2.1.856,2.841,2.841,0,0,0-.806,2.122Z"
                     transform="translate(7723.3 -2914.703)" fill="currentColor" stroke="currentColor" stroke-width="0.6">
                 </path>
             </svg>
         </button>
     @else
         <a class="flex-shrink-0 focus:outline-none" href="{{ route('login') }}">
             <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 16.577 18.6">
                 <path
                     d="M-7722.37,2933a.63.63,0,0,1-.63-.63c0-4.424,2.837-6.862,7.989-6.862s7.989,2.438,7.989,6.862a.629.629,0,0,1-.63.63Zm.647-1.251h13.428c-.246-3.31-2.5-4.986-6.713-4.986s-6.471,1.673-6.714,4.986Zm2.564-12.518a4.1,4.1,0,0,1,1.172-3,4.1,4.1,0,0,1,2.979-1.229,4.1,4.1,0,0,1,2.979,1.229,4.1,4.1,0,0,1,1.171,3,4.341,4.341,0,0,1-4.149,4.5,4.344,4.344,0,0,1-4.16-4.5Zm1.251,0a3.1,3.1,0,0,0,2.9,3.254,3.094,3.094,0,0,0,2.9-3.253,2.878,2.878,0,0,0-.813-2.109,2.88,2.88,0,0,0-2.085-.872,2.843,2.843,0,0,0-2.1.856,2.841,2.841,0,0,0-.806,2.122Z"
                     transform="translate(7723.3 -2914.703)" fill="currentColor" stroke="currentColor" stroke-width="0.6">
                 </path>
             </svg>
         </a>
     @endauth
 </div>
 {{-- @include('shop.partials.navbar.mobile_menu.category') --}}
 @include('shop.partials.navbar.mobile_menu.account')
