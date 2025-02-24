<div class="w-full max-w-[85rem] py-6 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Bread Crumb -->
    <div class="p-4 font-heading">
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                <a wire:navigate
                    class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="/products">
                    <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                    </svg>
                    Products
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-xs md:text-sm font-semibold text-accent truncate dark:text-neutral-200"
                aria-current="page">
                Cart
            </li>
        </ol>
    </div>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    @if (count($cart_items) === 0)
                        <div class="flex flex-col items-center justify-center pb-10">
                            <svg class="w-20 h-20 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            <h2 class="mt-4 text-2xl font-medium text-gray-600 font-details">Your cart is empty!</h2>
                            <p class="text-gray-500 font-details">Looks like you haven't added anything yet</p>
                            <a href="/products"
                                class="mt-4 inline-flex items-center px-6 py-3 font-details border border-transparent rounded-lg shadow-sm text-white bg-accent hover:bg-accent/75 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent/75">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                Browse Products
                            </a>
                        </div>
                    @else
                        <!-- Cart Details Section -->
                        <div class="space-y-4">
                            @foreach ($cart_items as $item)
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6 font-inter">
                                    <div
                                        class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <!-- Image -->
                                        <a wire:navigate href="/products/{{ $item['slug'] }}"
                                            class="shrink-0 md:order-1">
                                            <img class="h-20 w-20 dark:hidden"
                                                src="{{ url('storage', $item['featured_image']) }}"
                                                alt="{{ $item['name'] }}" />
                                        </a>

                                        <!-- Quantity -->
                                        <div class="flex items-center gap-3 justify-between md:order-3 md:justify-end">
                                            <div class="flex items-center">
                                                <button wire:click="decreaseQty({{ $item['product_id'] }})"
                                                    type="button"
                                                    class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <span
                                                    class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white">
                                                    {{ $item['quantity'] }}
                                                </span>
                                                <button wire:click="increaseQty({{ $item['product_id'] }})"
                                                    type="button"
                                                    class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="text-end md:order-4 md:w-32">
                                                <p class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ Number::currency($item['total_amount'], 'Ksh.') }}</p>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-1 md:order-2 md:max-w-md">
                                            <a wire:navigate href="/products/{{ $item['slug'] }}"
                                                class="text-base font-medium text-gray-900 hover:underline dark:text-white">
                                                {{ $item['name'] }}
                                            </a>

                                            <div class="flex items-center gap-3">
                                                <button type="button"
                                                    class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                                                    <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                                    </svg>
                                                    <span>Add to Favorites</span>
                                                </button>

                                                <button wire:click.prevent="removeItem({{ $item['product_id'] }})"
                                                    class="inline-flex text-sm font-medium group p-2 rounded-lg transition-all duration-200">
                                                    <svg wire:loading.remove
                                                        wire:target="removeItem({{ $item['product_id'] }})"
                                                        class="w-5 h-5 text-gray-500 group-hover:text-red-500 mr-1 transition-all duration-300"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    <span wire:loading.remove
                                                        wire:target="removeItem({{ $item['product_id'] }})"
                                                        class="text-gray-500 group-hover:text-red-500 group-hover:underline transition-all duration-300">
                                                        Remove
                                                    </span>
                                                    <span wire:loading
                                                        wire:target="removeItem({{ $item['product_id'] }})"
                                                        class="text-red-500 group-hover:text-red-500  transition-all duration-300">
                                                        . . .
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                </div>

                <!-- Order Summary -->
                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-base font-semibold text-gray-900 uppercase font-inter dark:text-white">Order
                            summary</p>

                        <div class="space-y-4 font-inter">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">
                                        {{ Number::currency($grand_total, 'Ksh.') }}</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-base font-medium text-gray-900">{{ Number::currency(0, 'Ksh.') }}
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">
                                        {{ Number::currency(0, 'Ksh.') }}</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Grand Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">
                                    {{ Number::currency($grand_total, 'Ksh.') }}</dd>
                            </dl>
                        </div>

                        <a href="/checkout"
                            class="bg-accent hover:bg-accent/75 text-white block text-center text-sm font-heading py-2 px-4 rounded-lg mt-4 w-full">Proceed
                            To Checkout</a>

                        <div class="flex items-center justify-center gap-2 font-body">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a wire:navigate href="/products"
                                class="inline-flex items-center gap-2 text-sm font-medium text-primary underline hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Voucher -->
                    {{-- <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Do you have a
                                    voucher or gift card? </label>
                                <input type="text" id="voucher"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="" required />
                            </div>
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Apply
                                Code</button>
                        </form>
                    </div> --}}
                </div>
                @endif
            </div>
        </div>
    </section>
</div>
