<div class="mb-9 md:mb-9 lg:mb-10 xl:mb-12 mx-3 lg:mx-8 my-16">
    <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
        <h3 class="text-gray-800 text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">
            {{ __('Products') }}
        </h3>
    </div>
    @php
        $products = \App\Models\Product::with('featuredImage')
            ->where('is_visible', true)
            ->get();
    @endphp
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($products as $product)
            <x-product-item :product="$product" />
        @endforeach
    </div>
</div>
