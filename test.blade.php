{{-- <div class="flex flex-col lg:flex-row gap-4">
                <div class="lg:w-3/4 overflow-x-auto bg-white rounded-lg shadow-md font-inter">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Quantity</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Total</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 ">
                                    @foreach ($cart_items as $item)
                                        <tr wire:key="{{ $item['product_id'] }}">
                                            <td class="px-6 py-4">

                                                <img class="h-16 w-16"
                                                    src="{{ url('storage', $item['featured_image']) }}"
                                                    alt="{{ $item['name'] }}">

                                            </td>
                                            <td class="px-6 py-4 whitespace-normal text-sm font-medium text-gray-800">
                                                {{ $item['name'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ Number::currency($item['unit_amount'], 'Ksh.') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <div class="inline-flex items-center border rounded-lg shadow-sm">
                                                    <button wire:click="decreaseQty({{ $item['product_id'] }})"
                                                        class="px-3 py-2 text-gray-600 hover:text-gray-700 hover:bg-gray-100 border-r transition-colors duration-200 focus:outline-none">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M20 12H4" />
                                                        </svg>
                                                    </button>
                                                    <span class="px-4 py-2 w-12 text-center font-medium text-gray-700">
                                                        {{ $item['quantity'] }}
                                                    </span>
                                                    <button wire:click="increaseQty({{ $item['product_id'] }})"
                                                        class="px-3 py-2 text-gray-600 hover:text-gray-700 hover:bg-gray-100 border-l transition-colors duration-200 focus:outline-none">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ Number::currency($item['total_amount'], 'Ksh.') }}
                                            </td>
                                            <td>
                                                <button wire:click.prevent="removeItem({{ $item['product_id'] }})"
                                                    class="group p-2 rounded-lg transition-all duration-200">
                                                    <svg wire:loading.remove
                                                        wire:target="removeItem({{ $item['product_id'] }})"
                                                        class="w-5 h-5 text-gray-500 group-hover:text-red-500 group-hover:rotate-12 transition-all duration-300"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    <span wire:loading
                                                        wire:target="removeItem({{ $item['product_id'] }})"
                                                        class="text-red-500">. . .</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Order Summary -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-lg font-inter shadow-md p-6">
                        <h2 class="text-sm mb-2 font-semibold uppercase text-secondary">Order Summary</h2>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2 text-sm">
                            <span>Subtotal</span>
                            <span>{{ Number::currency($grand_total, 'Ksh.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2 text-sm">
                            <span>Taxes</span>
                            <span>{{ Number::currency(0, 'Ksh.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2 text-sm">
                            <span>Shipping</span>
                            <span>{{ Number::currency(0, 'Ksh.') }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2 text-sm uppercase">
                            <span class="font-semibold">Grand Total</span>
                            <span class="font-semibold">{{ Number::currency($grand_total, 'Ksh.') }}</span>
                        </div>
                        <a href="/checkout"
                            class="bg-accent hover:bg-accent/75 text-white block text-center text-sm font-heading py-2 px-4 rounded-lg mt-4 w-full">Proceed
                            To Checkout</a>
                    </div>
                </div>
            </div> --}}
