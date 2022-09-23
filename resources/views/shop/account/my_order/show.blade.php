<x-shop-layout>

    <div class="py-16 lg:py-20 px-0 xl:max-w-screen-xl mx-auto">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-9 mt-4 md:mt-0">

                <div class=" sm:rounded-lg border">

                    <div class="grid grid-cols-5 gap-6">
                        <div class="col-span-5 md:col-span-1 px-4 py-5 sm:px-6">
                            <h3 class=" text-sm font-bold leading-6 text-gray-900">
                                Order id
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ $order->id }}
                            </p>
                        </div>
                        <div class="col-span-5 md:col-span-1 px-4 py-5 sm:px-6">
                            <h3 class=" text-sm font-bold leading-6 text-gray-900">
                                Date Placed
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ $order->created_at->format('M d, Y') }}
                            </p>
                        </div>
                        <div class="col-span-5 md:col-span-1 px-4 py-5 sm:px-6">
                            <h3 class=" text-sm font-bold leading-6 text-gray-900">
                                Total amount
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm  font-bold">
                                Br {{ number_format($order->total_price, 2) }}
                            </p>
                        </div>
                        <div class="col-span-5 md:col-span-1  px-1 py-5 ">
                            @if ($order->status == 'processing')
                                <a href="{{ route('cancel-order', $order->uuid) }}"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    {{ __('Cancel') }}
                                </a>
                                <a href="{{ route('order-payment', $order->uuid) }}"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 m bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm mt-2 sm:mt-0">
                                    {{ __('Pay') }}
                                </a>
                            @elseif($order->status == 'canceled')
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-red-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    Canceled
                                </div>
                            @else
                                {{ $order->status }}
                            @endif

                        </div>
                    </div>

                    <div>
                        @foreach ($order->orderItems as $orderItem)
                            <hr>
                            <div class="m-5">
                                <div class="flex rounded-lg bg-transparent">
                                    <div class="flex flex-shrink-0 w-32 sm:w-44 md:w-36 lg:w-44">
                                        <div
                                            class="inline-block max-w-full overflow-hidden relative box-border m-0 rounded">
                                            <div class="box-border block max-w-full">
                                                <img alt="" aria-hidden="true"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTc2IiBoZWlnaHQ9IjE3NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                                    class="max-w-full block m-0 p-0">
                                            </div>
                                            <img alt="{{ $orderItem->product->name }}"
                                                src="{{ $orderItem->product->getFirstMediaUrl('product-images') }}"
                                                decoding="async" loading="lazy"
                                                class="bg-gray-300 object-cover rounded-s-md absolute box-border p-0 m-auto block w-0 h-0 min-w-full max-w-full min-h-full max-h-full inset-0">
                                        </div>
                                    </div>
                                    <div class="w-full overflow-hidden px-4 lg:px-5 2xl:px-4  ">
                                        <div class="flex flex-col md:flex-row justify-between">
                                            <h2
                                                class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:mb-1.5 pb-0">
                                                {{ $orderItem->product->name }}</h2>
                                            <div class="font-bold">
                                                Br {{ number_format($orderItem->unit_price, 2) }} X
                                                {{ $orderItem->qty }}
                                            </div>
                                        </div>


                                        <p
                                            class="text-gray-500 text-xs lg:text-sm leading-normal xl:leading-relaxed my-5">
                                            {!! $orderItem->product->description !!}</p>

                                        <div class="flex flex-col md:flex-row justify-between mt-3">
                                            <div class="flex"> </div>
                                            <div class="text-xs text-indigo-500 font-bold md:text-sm">
                                                <a href="{{ route('products.show', $orderItem->product->slug) }}">View
                                                    product
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-shop-layout>
