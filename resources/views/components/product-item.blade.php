<a href="{{ route('products.show', ['slug' => $product->slug, 'p' => $product->id]) }}"
    class="group box-border overflow-hidden flex rounded-md cursor-pointer   md:pb-1 flex-col items-start bg-white"
    role="button" title="{{ $product->name }}">


    <div class="flex mb-3 md:mb-3.5 pb-0">
        <div class="inline-block max-w-full overflow-hidden relative box-border m-0">
            <div class="max-w-full block m-0 p-0">
                <img alt="" aria-hidden="true" class="max-w-full block m-0 p-0"
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzI0IiBoZWlnaHQ9IjMyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
            </div>
            <div
                class="bg-gray-50 object-cover rounded-s-md rounded-md transition duration-150 ease-linear transform group-hover:scale-105
                            absolute box-border p-0 m-auto block w-0 h-0 min-w-full max-w-full min-h-full  inset-0 ">

                <img alt="{{ $product->name }}" src="{{ $product->featuredImage?->getUrl() }}" loading="lazy"
                    decoding="async"
                    class="bg-gray-50 object-cover rounded-s-md rounded-md transition duration-150 ease-linear transform group-hover:scale-105
                            absolute box-border p-0 m-auto block w-0 h-0 min-w-full max-w-full min-h-full max-h-full inset-0">
            </div>
        </div>
    </div>

    <div class="w-full overflow-hidden ">
        <h2 class="text-sm font-semibold mb-1 md:mb-1.5 notranslate">
            {{ $product->name }}
        </h2>
        @if ($showDescription)
            <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                {{ $product->description }}
            </p>
        @endif

        <div class="text-md font-bold font-heading text-indigo-500  mt-1.5 space-s-2  md:mt-2.5 2xl:mt-3">
            <span class="inline-block mr-1">Br
                {{ number_format($product->price, 0) }}</span>

            @if ($product->old_price)
                <del
                    class="text-xs text-gray-500 font-semibold font-heading line-through flex flex-col sm:flex-row sm:inline-flex">Br
                    {{ number_format($product->old_price, 0) }}</del>
            @endif
        </div>
    </div>
</a>
