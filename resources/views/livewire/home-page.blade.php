<div>
    {{-- Hero Section Begin --}}
    <div class="relative min-h-screen bg-cover  bg-center"
        style="background-image: url('{{ asset('images/bg-grad-1.png') }}');">
        <!-- Overlay -->
        {{-- <div class="absolute inset-0 bg-black/60"></div> --}}
        <div class="bg-[#FCF8F1] bg-opacity-30 py-8 sm:py-12 lg:py-12 min-h-screen">
            <div class=" px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="font-heading text-base font-semibold tracking-wide text-accent uppercase">Experience
                            the Latest Tech</p>
                        <h1 class="font-heading mt-4 text-3xl font-bold text-secondary lg:mt-6 sm:text-4xl xl:text-6xl">
                            Smart Shopping, <span>Big</span><span class="gradient-text"> Savings,</span> Better Living
                        </h1>
                        <p class="font-body text-justify mt-4 text-base text-text lg:mt-8 sm:text-xl">Discover the latest
                            in
                            tech—from
                            cutting-edge smartphones to powerful laptops—at unbeatable prices. Upgrade your tech game
                            and stay ahead of the curve.
                        </p>

                        <div class="flex flex-nowrap gap-4 overflow-x-auto mt-2">
                            {{-- Featured Deals --}}
                            <a href="/featured-deals" title="View Featured Deals"
                                class="font-heading inline-flex items-center px-4 py-2 mt-4 font-semibold text-xs sm:text-sm border-2 border-accent transition-all duration-300 bg-accent hover:bg-accent/75 hover:border-accent/25 hover:text-white md:px-6 md:py-4 md:text-base"
                                role="button">
                                <svg class="w-6 h-6 mr-1 -ml-2" xmlns="http://www.w3.org/2000/svg"
                                    stroke="currentColor"fill="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                                </svg>
                                Featured Deals
                            </a>
                            {{-- On Sale Deals --}}
                            <a href="/on-sale-deals" title="View On Sale Deals"
                                class="font-heading inline-flex items-center px-4 py-2 mt-4 font-semibold text-xs sm:text-sm transition-all duration-300 border-2 border-accent hover:bg-accent/75 hover:border-accent/25 hover:text-white md:px-6 md:py-4 md:text-base"
                                role="button">
                                <svg class="w-6 h-6 mr-1 -ml-2 stroke-current" viewBox="0 0 24 24" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5 8.5L8.5 15.5M9.5 9.5H9.51M14.5 14.5H14.51M10 9.5C10 9.77614 9.77614 10 9.5 10C9.22386 10 9 9.77614 9 9.5C9 9.22386 9.22386 9 9.5 9C9.77614 9 10 9.22386 10 9.5ZM15 14.5C15 14.7761 14.7761 15 14.5 15C14.2239 15 14 14.7761 14 14.5C14 14.2239 14.2239 14 14.5 14C14.7761 14 15 14.2239 15 14.5ZM16.3287 4.75855C17.0676 4.77963 17.8001 5.07212 18.364 5.636C18.9278 6.19989 19.2203 6.9324 19.2414 7.67121C19.2623 8.40232 19.2727 8.76787 19.2942 8.85296C19.3401 9.0351 19.2867 8.90625 19.383 9.06752C19.428 9.14286 19.6792 9.40876 20.1814 9.94045C20.6889 10.4778 21 11.2026 21 12C21 12.7974 20.6889 13.5222 20.1814 14.0595C19.6792 14.5912 19.428 14.8571 19.383 14.9325C19.2867 15.0937 19.3401 14.9649 19.2942 15.147C19.2727 15.2321 19.2623 15.5977 19.2414 16.3288C19.2203 17.0676 18.9278 17.8001 18.364 18.364C17.8001 18.9279 17.0676 19.2204 16.3287 19.2414C15.5976 19.2623 15.2321 19.2727 15.147 19.2942C14.9649 19.3401 15.0937 19.2868 14.9325 19.3831C14.8571 19.4281 14.5912 19.6792 14.0595 20.1814C13.5222 20.6889 12.7974 21 12 21C11.2026 21 10.4778 20.6889 9.94047 20.1814C9.40874 19.6792 9.14287 19.4281 9.06753 19.3831C8.90626 19.2868 9.0351 19.3401 8.85296 19.2942C8.76788 19.2727 8.40225 19.2623 7.67121 19.2414C6.93238 19.2204 6.19986 18.9279 5.63597 18.364C5.07207 17.8001 4.77959 17.0676 4.75852 16.3287C4.73766 15.5976 4.72724 15.2321 4.70578 15.147C4.65985 14.9649 4.71322 15.0937 4.61691 14.9324C4.57192 14.8571 4.32082 14.5912 3.81862 14.0595C3.31113 13.5222 3 12.7974 3 12C3 11.2026 3.31113 10.4778 3.81862 9.94048C4.32082 9.40876 4.57192 9.14289 4.61691 9.06755C4.71322 8.90628 4.65985 9.03512 4.70578 8.85299C4.72724 8.7679 4.73766 8.40235 4.75852 7.67126C4.77959 6.93243 5.07207 6.1999 5.63597 5.636C6.19986 5.07211 6.93238 4.77963 7.67121 4.75855C8.40232 4.73769 8.76788 4.72727 8.85296 4.70581C9.0351 4.65988 8.90626 4.71325 9.06753 4.61694C9.14287 4.57195 9.40876 4.32082 9.94047 3.81863C10.4778 3.31113 11.2026 3 12 3C12.7974 3 13.5222 3.31114 14.0595 3.81864C14.5913 4.32084 14.8571 4.57194 14.9325 4.61693C15.0937 4.71324 14.9649 4.65988 15.147 4.70581C15.2321 4.72726 15.5976 4.73769 16.3287 4.75855Z"
                                        stroke-width="2"></path>
                                </svg>
                                On Sale Deals
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="custom-shape-divider-bottom-1739880734">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div> --}}
    </div>
    {{-- Hero Section End --}}

    {{-- Brands Section Begin --}}
    <section class="py-20">
        <div class="max-w-4xl mx-auto">
            <div class="px-4 text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="font-heading text-3xl font-bold text-secondary sm:text-4xl xl:text-4xl"> Shop By<span
                            class="gradient-text">
                            Brand
                        </span> </h1>
                    <div class="flex w-40 mt-4 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-[#ffc107]">
                        </div>
                        <div class="flex-1 h-2 bg-[#ffb200]">
                        </div>
                        <div class="flex-1 h-2 bg-[#ff8a00]">
                        </div>
                    </div>
                </div>
                <p class="px-4 font-body mb-12 text-base text-center text-gray-500">
                    Discover a wide selection of top electronics brands, from industry giants to rising stars. Find the
                    perfect tech to fit your needs, all in one place.
                </p>
            </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
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
        </div>
        <div class="flex justify-end max-w-6xl px-4 py-4 mx-auto font-heading">
            <a wire:navigate href="/brands"
                class="group inline-flex items-center gap-1 text-sm underline decoration-1 text-accent hover:text-primary">
                <span>See more brands</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-200"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </section>
    {{-- Brands Section End --}}

    {{-- Categories Section Begin --}}
    <div class="bg-orange-50 py-20">
        <div class="max-w-4xl mx-auto">
            <div class="px-4 text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="font-heading text-3xl font-bold text-secondary sm:text-4xl xl:text-4xl"> Browse
                        Popular<span class="gradient-text">
                            Categories
                        </span> </h1>
                    <div class="flex w-40 mt-4 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-[#ffc107]">
                        </div>
                        <div class="flex-1 h-2 bg-[#ffb200]">
                        </div>
                        <div class="flex-1 h-2 bg-[#ff8a00]">
                        </div>
                    </div>
                </div>
                <p class="px-4 font-body mb-12 text-base text-center text-gray-500">
                    Navigate our curated categories to find exactly what you need. Whether you're upgrading your home
                    office, looking for the latest gaming gear, or seeking portable tech, we've got you covered.
                </p>
            </div>
        </div>

        <div class="font-body max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

                @foreach ($categories as $category)
                    <a wire:key="{{ $category->id }}"
                        class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-xl transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="/products?selected_categories[0]={{ $category->id }}">
                        <div class="p-4 md:p-5">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img class="h-[2.375rem] w-[2.375rem] rounded-full"
                                        src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                    <div class="ms-3">
                                        <h3
                                            class="group-hover:text-accent font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                            {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>
    {{-- Categories Section End --}}

    {{-- Customer Review Section Begin --}}
    <section class="py-20">
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center ">
                    <div class="relative flex flex-col items-center">
                        <h1 class="font-heading text-3xl font-bold text-secondary sm:text-4xl xl:text-4xl">
                            Customer<span class="gradient-text">
                                Reviews
                            </span> </h1>
                        <div class="flex w-40 mt-4 mb-6 overflow-hidden rounded">
                            <div class="flex-1 h-2 bg-[#ffc107]">
                            </div>
                            <div class="flex-1 h-2 bg-[#ffb200]">
                            </div>
                            <div class="flex-1 h-2 bg-[#ff8a00]">
                            </div>
                        </div>
                    </div>
                    <p class="font-body mb-12 text-base text-center text-gray-500">
                        Join the conversation! Browse customer reviews and share your own experiences with the latest
                        tech.
                    </p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col-reverse bg-white rounded-b-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                                " With Preline, we're able to easily track our performance in full detail. It's become
                                an essential tool for us to grow and engage with our audience. "
                            </p>
                        </div>

                        <div class="p-4 bg-gray-100 md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                        Josh Tyson
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">
                                        Product Manager | Capsule
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                                " In September, I will be using this theme for 2 years. I went through multiple updates
                                and changes and I'm very glad to see the consistency and effort made by the team. "
                            </p>
                        </div>

                        <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                        Luisa
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">
                                        Senior Director of Operations | Fitbit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col-reverse bg-white rounded-b-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                                " With Preline, we're able to easily track our performance in full detail. It's become
                                an essential tool for us to grow and engage with our audience. "
                            </p>
                        </div>

                        <div class="p-4 bg-gray-100 md:px-7 dark:bg-neutral-800">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                        Josh Tyson
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-neutral-400">
                                        Product Manager | Capsule
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    {{-- Customer Review Section End --}}
</div>
