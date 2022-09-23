<x-shop-layout>
    <div class="py-16 lg:py-20 px-0 xl:max-w-screen-xl mx-auto">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-9 mt-4 md:mt-0">
                <div class="md:col-span-1 flex justify-between mb-5">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Orders') }}</h3>

                        <p class="mt-1 text-sm text-gray-600">
                            Check the status of recent orders, manage returns, and discover similar products
                        </p>
                    </div>
                </div>
                <div class="flex flex-col">
                    @if ($orders->isNotEmpty())


                        <div class="-my-2 overflow-x-auto mx-6 md:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Order
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Date
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Total
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <a class="text-indigo-600 hover:text-indigo-900"
                                                            href="{{ route('my-orders.show', $order->uuid) }}">#{{ $order->id }}</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $order->created_at->format('M d, Y') }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $order->status }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Br {{ number_format($order->total_price, 2) }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="{{ route('my-orders.show', $order->uuid) }}"
                                                            class="text-white hover:bg-indigo-700 mr-2 bg-indigo-600 px-2 py-1 rounded">View</a>
                                                        @if ($order->status == 'Awaiting Payment')
                                                            <a href="{{ route('order-payment', $order->uuid) }}"
                                                                class="text-white hover:bg-green-600 mr-2 bg-green-500 px-2 py-1 rounded">Pay</a>
                                                            <a href="{{ route('cancel-order', $order->uuid) }}"
                                                                class="text-white hover:bg-red-700 mr-2 bg-red-600 px-2 py-1 rounded">{{ __('Cancel') }}</a>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="my-5">{{ $orders->links() }}</div>
                            </div>
                        </div>
                    @else
                        <x-item-empty />
                    @endif
                </div>

            </div>
        </div>
    </div>

</x-shop-layout>
