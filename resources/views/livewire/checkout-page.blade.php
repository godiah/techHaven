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
            <li class="inline-flex items-center">
                <a wire:navigate
                    class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="/cart">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="shrink-0 me-3 size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z" />
                    </svg>
                    Cart
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
                Checkout
            </li>
        </ol>
    </div>

    <form wire:submit.prevent='placeOrder'>
        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <!-- Card -->
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <!-- Billing Contact -->
                    <div class="mb-6">
                        <h2 class="text-lg font-bold font-inter text-gray-700 dark:text-white mb-2">
                            Billing contact
                        </h2>
                        <div class="grid grid-cols-2 gap-4 font-inter text-sm">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                    First Name
                                </label>
                                <input
                                    class="py-2 px-3 pe-11 block w-full shadow-sm text-sm rounded-lg border  disabled:opacity-50 disabled:pointer-events-none
                                    @error('first_name')
                                        border-red-500
                                    @enderror"
                                    wire:model='first_name' id="first_name" type="text">
                                </input>
                                @error('first_name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                    Last Name
                                </label>
                                <input
                                    class="py-2 px-3 pe-11 block w-full shadow-sm text-sm rounded-lg border  disabled:opacity-50 disabled:pointer-events-none
                                    @error('last_name')
                                        border-red-500
                                    @enderror"
                                    wire:model='last_name' id="last_name" type="text">
                                </input>
                                @error('last_name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 font-inter text-sm">
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="phone">
                                    Phone
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none
                                @error('phone')
                                        border-red-500
                                    @enderror"
                                    wire:model='phone' id="phone" type="text">
                                </input>
                                @error('phone')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none
                                @error('email')
                                        border-red-500
                                    @enderror"
                                    wire:model='email' id="email" type="email">
                                </input>
                                @error('email')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-6">

                        <h2 class="text-lg font-bold font-inter text-gray-700 dark:text-white mb-2">
                            Billing address
                        </h2>

                        <div class="font-inter text-sm">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="county">
                                    County
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none
                                @error('county')
                                        border-red-500
                                    @enderror"
                                    wire:model='county' id="city" type="text">
                                </input>
                                @error('county')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="grid grid-cols-3 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="town">
                                        Town
                                    </label>
                                    <input
                                        class="py-2 px-3 pe-11 block w-full shadow-sm text-sm rounded-lg border  disabled:opacity-50 disabled:pointer-events-none
                                    @error('town')
                                        border-red-500
                                    @enderror"
                                        wire:model='town' id="town" type="text">
                                    </input>
                                    @error('town')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="estate">
                                        Estate/Street/Area
                                    </label>
                                    <input
                                        class="py-2 px-3 pe-11 block w-full shadow-sm text-sm rounded-lg border  disabled:opacity-50 disabled:pointer-events-none
                                    @error('estate')
                                        border-red-500
                                    @enderror"
                                        wire:model='estate' id="estate" type="text">
                                    </input>
                                    @error('estate')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="house_no">
                                        House/Plot No.
                                    </label>
                                    <input
                                        class="py-2 px-3 pe-11 block w-full shadow-sm text-sm rounded-lg border  disabled:opacity-50 disabled:pointer-events-none
                                    @error('house_no')
                                        border-red-500
                                    @enderror"
                                        wire:model='house_no' id="house_no" type="text">
                                    </input>
                                    @error('house_no')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <h2 class="text-lg font-bold font-inter text-gray-700 mb-2">
                        Select payment method
                    </h2>

                    <ul class="grid w-full gap-6 md:grid-cols-2 font-inter">
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="hosting-small" required=""
                                type="radio" value="cod" />
                            <label
                                class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700  peer-checked:border-accent peer-checked:text-accent hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                for="hosting-small">
                                <div class="block">
                                    <div class="w-full text-sm font-semibold">
                                        Cash on Delivery
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="hosting-big" type="radio"
                                value="stripe">
                            <label
                                class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-accent peer-checked:text-accent hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                for="hosting-big">
                                <div class="block">
                                    <div class="w-full text-sm font-semibold">
                                        Card
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                            </input>
                        </li>
                        @error('payment_method')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </ul>
                </div>
                <!-- End Card -->
            </div>

            <!-- Order & Cart Summary -->
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-lg font-semibold font-inter  text-gray-700">
                        Order summary
                    </div>
                    <hr class="my-2 bg-slate-400 rounded">
                    <div class="flex justify-between mb-2 font-inter">
                        <span class="text-base font-normal text-gray-500">
                            Subtotal
                        </span>
                        <span class="text-base font-medium text-gray-900">
                            {{ Number::currency($grand_total, 'Ksh.') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-inter">
                        <span class="text-base font-normal text-gray-500">
                            Taxes
                        </span>
                        <span class="text-base font-medium text-gray-900">
                            {{ Number::currency(0, 'Ksh.') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-inter">
                        <span class="text-base font-normal text-gray-500">
                            Shipping Cost
                        </span>
                        <span class="text-base font-medium text-gray-900">
                            {{ Number::currency(0, 'Ksh.') }}
                        </span>
                    </div>
                    <hr class="my-2 bg-slate-400 rounded">
                    <div class="flex justify-between mb-2 font-bold font-inter text-gray-900">
                        <span>
                            Grand Total
                        </span>
                        <span>
                            {{ Number::currency($grand_total, 'Ksh.') }}
                        </span>
                    </div>
                    <hr class="my-2 bg-slate-400 rounded">
                </div>

                <button type="submit"
                    class="font-heading bg-accent mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-accent/75">
                    <span wire:loading.remove>Place Order</span>
                    <span wire:loading>Processing . . . </span>
                </button>

                <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-lg font-semibold font-inter  text-gray-700">
                        Cart summary
                    </div>
                    <hr class="my-2 bg-slate-400 rounded">
                    <ul class="font-inter divide-y divide-gray-200 dark:divide-gray-700" role="list">
                        @foreach ($cart_items as $item)
                            <li wire:key='{{ $item['product_id'] }}' class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="{{ $item['name'] }}" class="w-12 h-12 rounded-full"
                                            src="{{ url('storage', $item['featured_image']) }}">
                                        </img>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $item['name'] }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Quantity: {{ $item['quantity'] }}
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-sm font-semibold text-gray-900 dark:text-white">
                                        {{ Number::currency($item['total_amount'], 'Ksh.') }}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
