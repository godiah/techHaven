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
            <li class="inline-flex items-center text-sm font-semibold text-accent truncate dark:text-neutral-200"
                aria-current="page">
                Brands
            </li>
        </ol>
    </div>
    <div class="px-4 mx-auto max-w-7xl md:px-6">
        <div class="grid grid-cols-2 gap-6 lg:grid-cols-4 md:grid-cols-2">
            @foreach ($brands as $brand)
                <div wire:key={{ $brand->id }}
                    class="bg-white rounded-lg shadow-md transition-transform transform hover:shadow-xl">
                    <figure class="flex flex-col items-center">
                        {{-- Image container --}}
                        <div class="flex justify-center w-full overflow-hidden">
                            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
                                class="object-contain rounded-t-lg w-24 h-24 sm:w-28 sm:h-28 md:w-40 md:h-40">
                        </div>

                        <figcaption class="p-2 w-full space-y-2">
                            <a wire:navigate href="{{ route('brands.show', $brand->slug) }}"
                                class="font-heading font-bold tracking-tight text-secondary block">
                                <div
                                    class="py-1 flex items-center text-sm sm:text-lg text-gray-800  before:flex-1 before:border-t before:border-gray-200 before:me-6 
                                    after:flex-1 after:border-t after:border-gray-200 after:ms-6 
                                    dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600 -mt-6">
                                    {{ $brand->name }}
                                </div>
                            </a>

                            <div class="hidden md:flex font-body flex-wrap justify-center gap-1">
                                <span
                                    class="items-center px-3 py-1 rounded-full text-base sm:text-xs md:text-sm lg:text-xs bg-gray-100 text-gray-800">
                                    Phones
                                </span>
                                <span
                                    class="items-center px-3 py-1 rounded-full text-base sm:text-xs md:text-sm lg:text-xs bg-gray-100 text-gray-800">
                                    Watches
                                </span>
                                <span
                                    class="items-center px-3 py-1 rounded-full text-base sm:text-xs md:text-sm lg:text-xs bg-gray-100 text-gray-800">
                                    Accessories
                                </span>
                            </div>

                            <div class="flex justify-center md:gap-4 md:pt-2 pb-2">
                                <a wire:navigate href="{{ route('brands.show', $brand->slug) }}"
                                    class="inline-flex items-center gap-1 text-sm text-primary hover:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                    </svg>
                                    Explore Collection
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>

        <div class="mt-6 py-2">
            {{ $brands->links() }}
        </div>
    </div>
</div>
