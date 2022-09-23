<x-shop-layout>
    <div class="px-2 sm:px-3 lg:px-8">
        <div class="xl:px-32 2xl:px-44 3xl:px-56 py-16 lg:py-20">
            <div
                class="bg-green-50 rounded-lg border-2 border-green-500 border-opacity-75 px-4 lg:px-5 py-4 rounded-md flex items-center justify-start text-heading text-sm md:text-base mb-6 lg:mb-8">
                <span
                    class="w-10 h-10 me-3 lg:me-4 rounded-full bg-transparent flex items-center justify-center flex-shrink-0 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </span>
                @if ($order->transactions->isEmpty())
                    Thank you. Your order has been received.
                @else
                    <p>
                        Thank you. We've received the payment details you submitted for your order
                        <a class="text-indigo-600 hover:text-indigo-900"
                            href="{{ route('my-orders.show', $order->uuid) }}">
                            #{{ $order->id }}
                        </a>
                        .If the payment details are correct your order will be approved within 5 minutes.
                    </p>
                @endif

            </div>
            <ul class="border border-gray-300 bg-gray-50 rounded-md flex flex-col md:flex-row mb-5">
                <li
                    class="text-heading font-semibold text-base lg:text-lg border-b md:border-b-0 md:border-r border-dashed border-gray-300 px-4 lg:px-6 xl:px-8 py-4 md:py-5 lg:py-6 last:border-0">
                    <span class="uppercase text-[11px] block text-body font-normal leading-5">Order
                        ID:</span>{{ $order->id }}
                </li>
                <li
                    class="text-heading font-semibold text-base lg:text-lg border-b md:border-b-0 md:border-r border-dashed border-gray-300 px-4 lg:px-6 xl:px-8 py-4 md:py-5 lg:py-6 last:border-0">
                    <span class="uppercase text-[11px] block text-body font-normal leading-5">Date:</span>
                    {{ $order->created_at->format('F d, Y') }}
                </li>
                <li
                    class="text-heading font-semibold text-base lg:text-lg border-b md:border-b-0 md:border-r border-dashed border-gray-300 px-4 lg:px-6 xl:px-8 py-4 md:py-5 lg:py-6 last:border-0">
                    <span class="uppercase text-[11px] block text-body font-normal leading-5">Phone
                        Number:</span>{{ $order->address->phone_number }}
                </li>
                <li
                    class="text-heading font-semibold text-base lg:text-lg border-b md:border-b-0 md:border-r border-dashed border-gray-300 px-4 lg:px-6 xl:px-8 py-4 md:py-5 lg:py-6 last:border-0">
                    <span class="uppercase text-[11px] block text-body font-normal leading-5">Total:
                    </span>Br {{ number_format($order->total_price, 2) }}
                </li>
            </ul>

            @if ($order->transactions->isEmpty())
                <div>
                    PAYMENT INFO PAY WITH CBE ETC......
                    <a href="{{ route('order-payment', $order->uuid) }}">
                        Pay using this link
                    </a>
                </div>
            @endif


        </div>
    </div>
</x-shop-layout>
