<div class="py-3 px-0 border-b border-gray-150 relative last:border-b-0">
    <a class="group w-full h-auto flex justify-start items-center" href="{{ route('products.show', $product->slug) }}">
        <div class="relative flex w-24 h-24 rounded-md overflow-hidden bg-gray-200 flex-shrink-0 cursor-pointer mr-4">
            <div class="inline-block max-w-full overflow-hidden relative box-border m-0">
                <div class="box-border block max-w-full">
                    <img alt="" aria-hidden="true"
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTYiIGhlaWdodD0iOTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"
                        class="max-w-full block m-0 p-0">
                </div>
                <img alt="{{ $product->name }}" src="{{ $product->featuredImage?->getUrl() }}" loading="lazy"
                    decoding="async"
                    class="bg-gray-200 object-cover absolute box-border p-0 m-auto block w-0 h-0 min-w-full max-w-full min-h-full max-h-full inset-0">
            </div>
        </div>
        <div class="flex flex-col w-full overflow-hidden">
            <h3 class="text-sm text-heading mb-2">{{ $product->name }}</h3>
            <div class="text-heading font-semibold text-sm">Br
                {{ number_format($product->price, 2) }}
                @if ($product->old_price > $product->price)
                    <del class="ps-2 text-gray-400 font-normal">Br
                        {{ number_format($product->old_price, 2) }}</del>
                @endif
            </div>
        </div>
    </a>
</div>
