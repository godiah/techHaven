<div class="w-full max-w-[85rem] py-6 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Bread Crumb -->
    <div class="p-4 font-heading">
        <ol class="flex items-center whitespace-nowrap">
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
                {{ $product->name }}
            </li>
        </ol>
    </div>

    <section class="overflow-hidden bg-white rounded-lg">
        <div class="max-w-7xl px-4 py-4 mx-auto">
            <div class="flex flex-col md:flex-row flex-wrap -mx-3">
                <!-- Product Images Gallery -->
                <div class="hidden md:block w-full mb-8 md:w-1/2 md:mb-0" x-data="{ mainImage: '{{ url('storage', $product->featured_image) }}' }">
                    <div class="sticky top-0 overflow-hidden">
                        <div
                            class="relative mx-auto flex items-center justify-center mb-4 w-40 h-40  md:w-64 md:h-64 lg:w-96 lg:h-96 overflow-hidden aspect-square">
                            <img x-bind:src="mainImage" alt="{{ $product->name }}"
                                class="object-cover w-full h-full">
                        </div>
                        <div class="flex-wrap flex -mt-2">
                            <!-- Featured Image Thumbnail -->
                            <div class="w-1/2 p-2 sm:w-1/4 flex items-center justify-center overflow-hidden aspect-square"
                                x-on:click="mainImage='{{ url('storage', $product->featured_image) }}'">
                                <img src="{{ url('storage', $product->featured_image) }}"
                                    alt="{{ $product->name }} - Featured"
                                    class="object-cover w-full h-full cursor-pointer hover:border hover:border-slate-300">
                            </div>
                            <!-- Other Images -->
                            @foreach ($product->images as $image)
                                <div class="w-1/2 p-2 sm:w-1/4 flex items-center justify-center overflow-hidden aspect-square"
                                    x-on:click="mainImage='{{ url('storage', $image) }}'">
                                    <img src="{{ url('storage', $image) }}" alt="{{ $product->name }}"
                                        class="object-cover w-full h-full cursor-pointer hover:border hover:border-slate-300">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Mobile Version -->
                <div data-hs-carousel='{
                      "loadingClasses": "opacity-0",
                      "dotsItemClasses": "hs-carousel-active:bg-accent hs-carousel-active:border-accent size-2 border border-gray-400 rounded-full cursor-pointer"
                    }'
                    class="relative bblock md:hidden">
                    <div class="hs-carousel relative overflow-hidden w-full min-h-80 bg-white rounded-lg">
                        <div
                            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            <!-- Featured Image Slide -->
                            <div class="hs-carousel-slide">
                                <div
                                    class="flex mx-auto items-center justify-center w-72 h-72 aspect-square dark:bg-neutral-900">
                                    <img src="{{ url('storage', $product->featured_image) }}"
                                        alt="{{ $product->name }} - Featured" class="object-contain w-full h-full">
                                </div>
                            </div>
                            <!-- Other Images Slides -->
                            @foreach ($product->images as $image)
                                <div class="hs-carousel-slide">
                                    <div
                                        class="flex mx-auto items-center justify-center w-72 h-72 aspect-square dark:bg-neutral-900">
                                        <img src="{{ url('storage', $image) }}" alt="{{ $product->name }}"
                                            class="object-contain w-full h-full">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="hs-carousel-pagination flex justify-center absolute  bottom-2 start-0 end-0 space-x-2">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-8 [&>ul]:list-disc [&>ul]:ml-4">
                            <h2 class="max-w-xl mt-4 mb-2  font-bold font-heading md:text-2xl">
                                {{ $product->name }}
                            </h2>
                            <p
                                class="inline-block mb-2 md:mb-4 text-base md:text-lg font-semibold font-heading text-accent">
                                <span>{{ Number::currency($product->price, 'Ksh.') }}</span>
                            </p>
                            <hr class="w-6 h-0.5 bg-gray-400 border-0 rounded-sm">
                            <div class="max-w-md text-secondary mt-1 md:mt-4 [&>p]:font-body [&>p]:text-justify">
                                {!! Str::markdown($product->description) !!}
                            </div>
                        </div>
                        <div class="w-32 mb-8">
                            <label class="w-full text-base font-heading font-semibold text-secondary mb-2 block">
                                Quantity
                            </label>
                            <div
                                class="relative flex h-10 rounded-lg overflow-hidden border border-gray-200 shadow-sm">
                                <button wire:click='decreaseQty'
                                    class="w-12 flex items-center justify-center bg-white hover:bg-gray-50 border-r border-gray-200">
                                    <span class="text-2xl text-secondary">−</span>
                                </button>

                                <input type="number" wire:model='quantity' readonly
                                    class="w-12 flex items-center justify-center text-center text-secondary font-semibold bg-white border-none appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                    placeholder="1">

                                <button wire:click='increaseQty'
                                    class="w-12 flex items-center justify-center bg-white hover:bg-gray-50 border-l border-gray-200">
                                    <span class="text-2xl text-secondary">+</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4">
                            <button wire:click.prevent="addToCart({{ $product->id }})"
                                class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md lg:w-2/5 text-white bg-accent hover:bg-accent/75 hover:shadow-md transition-all duration-300">
                                <svg class="mr-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                <span wire:loading.remove wire:target="addToCart({{ $product->id }})">
                                    Add to Cart
                                </span>
                                <span wire:loading wire:target="addToCart({{ $product->id }})">
                                    Adding...
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
