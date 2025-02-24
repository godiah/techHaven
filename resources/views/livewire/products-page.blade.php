<div class="w-full max-w-[85rem] py-6 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Bread Crumb -->
    <div class="p-4 font-heading">
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                <a wire:navigate
                    class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="/">
                    <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Home
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a wire:navigate
                    class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="/brands">
                    <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                        <path
                            d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3">
                        </path>
                    </svg>
                    Brands
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-accent truncate dark:text-neutral-200"
                aria-current="page">
                All Products
            </li>
        </ol>
    </div>
    <section class="py-2 bg-gray-50 rounded-lg">
        <div class="px-4 py-4 mx-auto max-w-7xl">
            <div class="flex flex-wrap mb-24 -mx-3">
                <div class="w-full pr-2 lg:w-1/5 lg:block">
                    <!-- Fresh Finds & Deals -->
                    <div
                        class="p-2 md:p-4 mb-5 bg-white rounded-lg shadow-sm border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                        <div
                            class="font-heading text-lg font-bold py-2 flex items-center text-secondary before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                            Hot Picks</div>
                        <ul class="font-body space-y-1">
                            <li>
                                <label for="new_arrival"
                                    class="flex items-center justify-between p-0.5 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <div class="flex items-center">
                                        <input wire:model.live="new_arrival" id="new_arrival" value="1"
                                            type="checkbox" class="form-checkbox w-4 h-4 text-orange-500 mr-2">
                                        <span class="font-body text-base text-gray-700 dark:text-gray-300">New
                                            Arrivals</span>
                                    </div>
                                    <span
                                        class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent ml-2">
                                        {{ $newArrivals ?? 0 }}
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="featured"
                                    class="flex items-center justify-between p-0.5 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <div class="flex items-center">
                                        <input wire:model.live="featured" id="featured" value="1" type="checkbox"
                                            class="form-checkbox w-4 h-4 text-orange-500 mr-2">
                                        <span class="font-body text-base text-gray-700 dark:text-gray-300">Featured
                                            Deals</span>
                                    </div>
                                    <span
                                        class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent ml-2">
                                        {{ $featuredCounts ?? 0 }}
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="on_sale"
                                    class="flex items-center justify-between p-0.5 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <div class="flex items-center">
                                        <input wire:model.live="on_sale" id="on_sale" value="1" type="checkbox"
                                            class="form-checkbox w-4 h-4 text-orange-500 mr-2">
                                        <span class="font-body text-base text-gray-700 dark:text-gray-300">On
                                            Sale</span>
                                    </div>
                                    <span
                                        class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent ml-2">
                                        {{ $onSaleCounts ?? 0 }}
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <!-- Categories -->
                    <div
                        class="p-2 md:p-4 mb-5 bg-white rounded-lg shadow-sm border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                        <div
                            class="font-heading text-lg font-bold py-2 flex items-center text-secondary before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                            Categories</div>
                        <ul class="font-body space-y-1">
                            @foreach ($categories as $category)
                                <li wire:key="{{ $category->id }}">
                                    <label for="{{ $category->slug }}"
                                        class="flex items-center justify-between p-0.5 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <div class="flex items-center">
                                            <input wire:model.live="selected_categories" id="{{ $category->slug }}"
                                                value="{{ $category->id }}" type="checkbox"
                                                class="form-checkbox w-4 h-4 text-orange-500 mr-2">
                                            <span
                                                class="font-body text-base text-gray-700 dark:text-gray-300">{{ $category->name }}</span>
                                        </div>
                                        <span
                                            class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent ml-2">
                                            {{ $categoryCounts[$category->id] ?? 0 }}
                                        </span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Brands -->
                    <div
                        class="p-2 md:p-4 mb-5 bg-white rounded-lg shadow-sm border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                        <div
                            class="font-heading text-lg font-bold py-2 flex items-center text-secondary before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                            Brands</div>
                        <ul class="font-body space-y-1">
                            @foreach ($brands as $brand)
                                <li wire:key="{{ $brand->id }}">
                                    <label for="{{ $brand->slug }}"
                                        class="flex items-center justify-between p-0.5 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <div class="flex items-center">
                                            <input wire:model.live="selected_brands" id="{{ $brand->slug }}"
                                                value="{{ $brand->id }}" type="checkbox"
                                                class="form-checkbox w-4 h-4 text-orange-500 mr-2">
                                            <span
                                                class="font-body text-base text-gray-700 dark:text-gray-300">{{ $brand->name }}</span>
                                        </div>
                                        <span
                                            class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent ml-2">
                                            {{ $brandCounts[$brand->id] ?? 0 }}
                                        </span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Price Range -->
                    <div
                        class="p-2 md:p-4 mb-5 bg-white rounded-lg shadow-sm border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                        <div
                            class="font-heading text-lg font-bold py-2 flex items-center text-secondary before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                            Price</div>
                        <div>
                            <div class="font-body text-sm">{{ Number::currency($price_range, 'KSH.') }}</div>
                            <input type="range" wire:model.live='price_range'
                                class="w-full h-1 mb-4 bg-primary rounded appearance-none cursor-pointer"
                                max="500000" value="300000" step="1000">
                            <div class="flex justify-between ">
                                <span
                                    class="inline-block text-sm font-bold text-primary">{{ Number::currency(1, 'KSH.') }}</span>
                                <span
                                    class="inline-block text-sm font-bold text-primary">{{ Number::currency(500000, 'KSH.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-3 lg:w-4/5">
                    <div class="font-heading px-3 mb-4 flex items-center justify-between">
                        <h2 class="text-lg font-semibold tracking-wide text-gray-900 dark:text-white sm:text-2xl">
                            Products
                        </h2>
                        <!-- Sort By Filter -->
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-48 px-4 py-2 border border-gray-300 rounded-md bg-white text-gray-700 focus:outline-none  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600">
                                <span class="font-heading">Sort</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                class="absolute z-10 w-48 mt-1 bg-white rounded-md shadow-lg text-sm font-body">
                                <div class="py-1">
                                    <button wire:click="sort('latest')"
                                        class="flex items-center w-full px-4 py-2 text-left hover:text-accent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Latest</span>
                                    </button>

                                    <button wire:click="sort('price_high_low')"
                                        class="flex items-center w-full px-4 py-2 text-left hover:text-accent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                        </svg>
                                        <span>Price: High to Low</span>
                                    </button>

                                    <button wire:click="sort('price_low_high')"
                                        class="flex items-center w-full px-4 py-2 text-left hover:text-accent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                        </svg>
                                        <span>Price: Low to High</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end m-2 font-body">
                        @if (
                            !empty($selected_brands) ||
                                $featured ||
                                $on_sale ||
                                $new_arrival ||
                                $price_range != 300000 ||
                                $sortBy != 'latest' ||
                                $selected_categories)
                            <button type="button" wire:click="resetFilters"
                                class="group inline-flex items-center text-sm font-semibold text-accent hover:underline transition-colors duration-200">
                                Reset All Filters
                                <svg class="ml-1 w-5 h-5 transition-transform duration-200 transform group-hover:rotate-90"
                                    stroke="currentColor" fill="currentColor" viewBox="0 0 512 512"
                                    data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M64,256H34A222,222,0,0,1,430,118.15V85h30V190H355V160h67.27A192.21,192.21,0,0,0,256,64C150.13,64,64,150.13,64,256Zm384,0c0,105.87-86.13,192-192,192A192.21,192.21,0,0,1,89.73,352H157V322H52V427H82V393.85A222,222,0,0,0,478,256Z">
                                    </path>
                                </svg>
                            </button>
                        @endif
                    </div>

                    <!-- Products Grid -->
                    <div wire:loading.class="opacity-50"
                        class="mb-4 grid gap-4 transition-opacity duration-300 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 custom-image-container">
                        @if ($products->count())
                            @foreach ($products as $product)
                                <div wire:key="{{ $product->id }}"
                                    class="flex flex-col rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                                    <div
                                        class="mx-auto flex items-center justify-center w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-40 lg:h-40 overflow-hidden aspect">
                                        <a wire:navigate href="/products/{{ $product->slug }}">
                                            <img src="{{ url('storage', $product->featured_image) }}"
                                                alt="{{ $product->name }}" class="object-contain w-full h-full">
                                        </a>
                                    </div>
                                    <div class="pt-2 flex flex-col flex-grow">
                                        <div class="font-body mb-3 flex items-center justify-between gap-4">
                                            <span
                                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                                                Up to 35% off
                                            </span>
                                            {{-- Add to wishlist --}}
                                            <div class="flex items-center justify-end gap-1">
                                                <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    <span class="sr-only"> Add to Favorites </span>
                                                    <svg class="h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                                    </svg>
                                                </button>
                                                <div id="tooltip-add-to-favorites" role="tooltip"
                                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                    data-popper-placement="top">
                                                    Add to favorites
                                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                                </div>
                                            </div>
                                        </div>

                                        <a wire:navigate href="/products/{{ $product->slug }}"
                                            class="font-heading block text-sm font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                            {{ $product->name }}
                                        </a>
                                        <p class="font-body mt-1 text-xs text-primary">
                                            {{ $product->short_description }}
                                        </p>

                                        <div class="mt-auto">
                                            <hr class="w-6 h-0.5 mx-auto my-2 bg-gray-400 border-0 rounded-sm">
                                            <p
                                                class="font-body text-sm font-semibold leading-tight mt-2 mb-2 text-gray-900 dark:text-white text-start">
                                                {{ Number::currency($product->price, 'Ksh.') }}
                                            </p>

                                            <div class="w-full mt-2 font-heading">
                                                <a wire:click.prevent='addToCart({{ $product->id }})' href="#"
                                                    class="w-full inline-flex items-center justify-center text-sm px-4 py-2 rounded-lg font-medium bg-accent text-white hover:bg-accent/75 hover:shadow-lg transition duration-300 ease-in-out">
                                                    <svg class="mr-2 h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                                    </svg>
                                                    <span wire:loading.remove
                                                        wire:target='addToCart({{ $product->id }})'>
                                                        Add to Cart
                                                    </span>
                                                    <span wire:loading wire:target='addToCart({{ $product->id }})'>
                                                        Adding . . .
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-span-full py-12 text-center">
                                <div class="mb-4 text-gray-500 dark:text-gray-400">
                                    <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linecap="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-heading text-lg font-medium text-gray-900 dark:text-white">
                                    Oops! No current products found matching your criteria
                                </h3>
                                <p class="font-body mt-2 text-gray-600 dark:text-gray-300">
                                    Try adjusting your filters or
                                    <button wire:click="resetFilters"
                                        class="text-accent hover:text-accent/75 decoration-2 hover:underline focus:outline-none">
                                        reset all filters
                                    </button>
                                </p>
                            </div>
                        @endif
                    </div>

                    <!-- pagination start -->
                    @if ($products->hasPages())
                        <div class="mt-8">
                            {{ $products->links() }}
                        </div>
                    @endif
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </section>
</div>
