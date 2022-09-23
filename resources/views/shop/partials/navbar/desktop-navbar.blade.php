<header class="relative bg-white">
    <nav aria-label="Top" class="max-w-full">
        <div>
            <div class="h-16 flex items-center mx-auto px-4 sm:px-6 lg:px-8">


                <!-- Logo -->
                <div>
                    <a href="{{ url('/') }}">
                        <x-logo />
                    </a>
                </div>

                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="h-full flex space-x-8">
                        <div class="ml-auto flex items-center">
                            <div class="flex inline-flex lg:ml-6">
                                <button class="flex p-2 text-gray-700 hover:text-indigo-500"
                                    @click="isCategorySidebar = true">
                                    <span class="sr-only">All</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h8m-8 6h16" />
                                    </svg>
                                    &nbsp;{{ __('All Categories') }}
                                </button>
                            </div>
                        </div>
                        <a href="{{ route('company-order.create') }}"
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-indigo-500">Make a
                            Request</a>
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                            <a href="{{ route('products.search-by-category', $category->id) }}"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-indigo-500">{{ $category->name }}</a>
                        @endforeach


                    </div>
                </div>

                <div class="ml-auto flex items-center">
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        @auth()
                            <div class="ml-3 relative">
                                <x-jet-dropdown align="right" width="64">
                                    <x-slot name="trigger">
                                        <button
                                            class="flex text-sm border-2 p-1 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">

                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}" />
                                            <span class="mt-2 ml-2">{{ Auth::user()->name }}</span>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="{{ route('profile-info') }}">
                                            {{ __('Account') }}
                                        </x-jet-dropdown-link>



                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Your Orders') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('my-orders.index') }}">
                                            {{ __('Track & Manage Your Orders') }}
                                        </x-jet-dropdown-link>


                                        <div class="border-t border-gray-100"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Your Account') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('address') }}">
                                            {{ __('Address') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign
                                in</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <a href="{{ route('login') }}"
                                class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                        @endauth

                    </div>


                    <!-- Search -->
                    <div class="hidden lg:flex lg:ml-6">
                        <button @click="isSearchOpen = true" type="button"
                            class="p-2 text-gray-500 hover:text-indigo-500">
                            <span class="sr-only">Search</span>
                            <!-- Heroicon name: outline/search -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Cart -->
                    <div class="hidden lg:flex ml-4 flow-root lg:ml-6">

                        <button
                            class="flex items-center  justify-center flex-shrink-0 h-auto relative focus:outline-none transform"
                            aria-label="cart-button" @click="isCartOpen = true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-indigo-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span
                                class="cart-counter-badge flex items-center justify-center bg-indigo-600 text-white absolute -right-1.5 -top-2.5 xl:-top-3 -end-2.5 xl:-end-3 rounded-full font-bold">
                                <livewire:sale.cart.cart-count />
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
