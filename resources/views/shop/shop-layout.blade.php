<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('vendor/fonts.googleapis.com/family=Nunito') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            top: 0 !important;
        }

    </style>
    <script defer src="{{ mix('js/app.js') }}"></script>
    <script defer src="{{ asset('js/flowbite.js') }}"></script>
    <script defer src="{{ asset('vendor/alpinejs/collapse@3.x.x.min.js') }}"></script>
    <script defer src="{{ asset('vendor/alpinejs/alpinejs@3.x.x.min.js') }}"></script>
    @stack('scripts')
</head>

<body>
    <div x-data="alpineShop">
        @include('shop.partials.navbar.index')
        <main>
            {{ $slot }}
        </main>
        @include('shop.partials.footer')
        <x-sidebar.right-sidebar controller="isCartOpen">
            <livewire:sale.cart.cart-sidebar is-checkout-enabled="true" />
        </x-sidebar.right-sidebar>

        <x-sidebar.right-sidebar controller="isSearchOpen">
            <livewire:search-sidebar />
        </x-sidebar.right-sidebar>

        <x-sidebar.left-sidebar controller="isCategorySidebar">

            <div class="h-full flex flex-col bg-white">



                <div class="flex-1 py-3 py-6 overflow-y-auto">
                    <div class="flow-root ">
                        @php
                            $categories = \App\Models\Category::where('is_visible', true)
                                ->tree()
                                ->get()
                                ->toTree();
                        @endphp
                        @foreach ($categories as $category)
                            <x-left-sidebar-accordion :category="$category" />
                        @endforeach
                    </div>
                </div>
            </div>

        </x-sidebar.left-sidebar>

    </div>

    @livewireScripts
    @include('shop.partials.scripts')
    @include('shop.partials.notification')
</body>

</html>
