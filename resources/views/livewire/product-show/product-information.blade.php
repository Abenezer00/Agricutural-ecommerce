@if (session()->has('cart-add-error'))
    <div class="relative px-4 py-3 mb-2 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert"
        id="error-message">
        <span class="absolute inset-y-0 left-0 flex items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>

        <span class="absolute inset-y-0 right-0 flex items-center mr-4 pl-2"
            @click="document.getElementById('error-message').remove()">
            <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                <path
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
        </span>
    </div>
@endif

<h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">
    {{ $product->name }}
    <x-livewire-loading textColor="text-indigo-600" />
</h2>

<section aria-labelledby="information-heading" class="grid grid-cols-3 gap-6 flex justify-between mt-3">
    <h3 id="information-heading" class="sr-only">Product information</h3>

    <p class="col-span-3 md:col-span-2 lg:col-span-2 text-2xl text-gray-900">

        Price: Br {{ number_format($product->price, 0) }}
        @if ($product->old_price > $product->price)
            <del class="ml-1 text-base text-red-700">Br
                {{ number_format($product->old_price, 0) }}</del>
            <br>
        @endif
    </p>
</section>
<div>
    <p class="text-gray-500 mt-2">
        {!! $product->description !!}
    </p>
</div>

<section aria-labelledby="options-heading" class="mt-5">

    @if ($product->qty > 0)
        @include('livewire.product-show.add-to-cart')
    @else
        <span class="text-red-500 text-lg bg-red-100 p-2 rounded-lg cursor-pointer flex mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            OUT of Stock
        </span>
    @endif

</section>
