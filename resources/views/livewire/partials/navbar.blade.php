<header
    class="flex z-50 sticky top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-white text-sm py-3 md:py-0 dark:bg-gray-800 shadow-md">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:py-2 md:px-6 lg:px-8" aria-label="Global">
        <div class="relative md:flex md:items-center md:justify-between">
            <!-- Left Section: Logo and Hamburger -->
            <div class="flex items-center justify-between w-full md:w-auto">
                <!-- Logo and Brand Name -->
                <div class="flex items-center md:order-2">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-8 h-8 rounded-full">
                    <a class="flex-none text-xl font-[Orbitron] text-accent font-semibold ml-1 dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="/" aria-label="Brand">
                        TechHaven
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation-medium"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Tablet Hamburger Button -->
                <div class="hidden md:block lg:hidden md:order-1 md:mr-5">
                    <button type="button"
                        class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation-large"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Navigation Links Container screens > 1024px -->
            <div id="navbar-collapse-with-animation"
                class="font-heading font-medium tracking-wide hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
                    <div
                        class="flex flex-col md:flex-row md:items-center md:justify-between gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:mt-0 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                        <!-- Center Section: Main Navigation -->
                        <div class="flex flex-col md:flex-row md:items-center md:mx-auto gap-x-7 nav-small">
                            <a wire:navigate
                                class="{{ request()->is('/') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/" aria-current="page">Home</a>
                            <a wire:navigate
                                class="{{ request()->is('about-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/about-us">About
                                Us</a>
                            <!-- Categories Dropdown -->
                            <a wire:navigate
                                class="{{ request()->is('categories') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/categories">Categories</a>
                            {{-- Products --}}
                            <a wire:navigate
                                class="{{ request()->is('products') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/products">Products</a>
                            {{-- Contact Us --}}
                            <a wire:navigate
                                class="{{ request()->is('contact-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55  py-3 md:py-6"
                                href="/contact-us">Contact
                                Us</a>
                        </div>

                        <!-- Right Section: Cart and Login -->
                        <div class="flex flex-col md:flex-row md:items-center gap-x-2 nav-right-small">
                            <a wire:navigate
                                class="{{ request()->is('cart') ? 'text-accent' : 'text-secondary' }} flex items-center  hover:text-accent/55 py-3 md:py-6"
                                href="/cart">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                <span class="mr-1">Cart</span>
                                <sup
                                    class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent">
                                    {{ $total_count }}</sup>
                            </a>
                            <span class="text-secondary text-xl">|</span>
                            @guest
                                <div class="pt-3 md:pt-0">
                                    <a wire:navigate
                                        class="py-2.5 px-4 inline-flex items-center gap-x-2 text-secondary hover:text-accent  disabled:opacity-50 disabled:pointer-events-none transition duration-300 ease-in-out transform  hover:border hover:border-accent"
                                        href="/login">
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                            <circle cx="12" cy="7" r="4" />
                                        </svg>
                                        Sign in
                                    </a>
                                </div>
                            @endguest
                            @auth
                                <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                                    <button type="button"
                                        class="font-heading flex items-center w-full text-secondary hover:text-accent/55 font-medium">
                                        {{ auth()->user()->name }}
                                        <svg class="ms-2 w-4 h-4 transition-transform duration-300"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div
                                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                                        <a wire:navigate
                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 hover:text-accent/55"
                                            href="/my-orders">
                                            <!-- Orders Icon -->
                                            <svg viewBox="0 0 1024 1024" fill="currentColor"
                                                class="icon w-5 h-5 transition-colors duration-200 group-hover:text-accent/55"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                                                stroke-width="2">
                                                <path
                                                    d="M959.018 208.158c0.23-2.721 0.34-5.45 0.34-8.172 0-74.93-60.96-135.89-135.89-135.89-1.54 0-3.036 0.06-6.522 0.213l-611.757-0.043c-1.768-0.085-3.563-0.17-5.424-0.17-74.812 0-135.67 60.84-135.67 135.712l0.188 10.952h-0.306l0.391 594.972-0.162 20.382c0 74.03 60.22 134.25 134.24 134.25 1.668 0 7.007-0.239 7.1-0.239l608.934 0.085c2.985 0.357 6.216 0.468 9.55 0.468 35.815 0 69.514-13.954 94.879-39.302 25.373-25.34 39.344-58.987 39.344-94.794l-0.145-12.015h0.918l-0.008-606.41z m-757.655 693.82l-2.585-0.203c-42.524 0-76.146-34.863-76.537-79.309V332.671H900.79l0.46 485.186-0.885 2.865c-0.535 1.837-0.8 3.58-0.8 5.17 0 40.382-31.555 73.766-71.852 76.002l-10.816 0.621v-0.527l-615.533-0.01zM900.78 274.424H122.3l-0.375-65.934 0.85-2.924c0.52-1.82 0.782-3.63 0.782-5.247 0-42.236 34.727-76.665 78.179-76.809l0.45-0.068 618.177 0.018 2.662 0.203c42.329 0 76.767 34.439 76.767 76.768 0 1.326 0.196 2.687 0.655 4.532l0.332 0.884v68.577z"
                                                    fill=""></path>
                                                <path
                                                    d="M697.67 471.435c-7.882 0-15.314 3.078-20.918 8.682l-223.43 223.439L346.599 596.84c-5.544-5.603-12.95-8.69-20.842-8.69s-15.323 3.078-20.918 8.665c-5.578 5.518-8.674 12.9-8.7 20.79-0.017 7.908 3.07 15.357 8.69 20.994l127.55 127.558c5.57 5.56 13.01 8.622 20.943 8.622 7.925 0 15.364-3.06 20.934-8.63l244.247-244.247c5.578-5.511 8.674-12.883 8.7-20.783 0.017-7.942-3.079-15.408-8.682-20.986-5.552-5.612-12.958-8.698-20.85-8.698z"
                                                    fill=""></path>
                                            </svg>
                                            My Orders
                                        </a>

                                        <a wire:navigate
                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 hover:text-accent/55"
                                            href="/my-account">
                                            <!-- Account Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                            </svg>
                                            My Account
                                        </a>

                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 hover:text-accent/55"
                                            href="/logout">
                                            <!-- Sign Out Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M16 17l5-5-5-5" />
                                                <path d="M21 12H9" />
                                                <path d="M4 4h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4" />
                                            </svg>
                                            Sign Out
                                        </a>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Links Container screens < 768px -->
            <div id="navbar-collapse-with-animation-medium"
                class="font-heading font-medium tracking-wide hs-collapse block overflow-hidden transition-all duration-300 basis-full grow md:hidden">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
                    <div
                        class="flex flex-col md:flex-row md:items-center md:justify-between gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:mt-0 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                        <!-- Center Section: Main Navigation -->
                        <div class="flex flex-col md:flex-row md:items-center md:mx-auto gap-x-7">
                            <a class="{{ request()->is('/') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/" aria-current="page">Home</a>
                            <a class=" {{ request()->is('about-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/about-us">About
                                Us</a>
                            <!-- Categories -->
                            <a class=" {{ request()->is('categories') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/categories">Categories</a>
                            {{-- Products --}}
                            <a class="{{ request()->is('products') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3 md:py-6"
                                href="/products">Products</a>
                            {{-- Contact Us --}}
                            <a class="{{ request()->is('contact-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55  py-3 md:py-6"
                                href="/contact-us">Contact
                                Us</a>
                        </div>

                        <!-- Right Section: Cart and Login -->
                        <div class="flex flex-col gap-x-2">
                            <a wire:navigate
                                class="{{ request()->is('cart') ? 'text-accent' : 'text-secondary' }} flex items-center hover:text-accent/55 py-3  dark:text-gray-400 dark:hover:text-gray-500"
                                href="/cart">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                <span class="mr-1">Cart</span>
                                <sup
                                    class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent">
                                    {{ $total_count }}</sup>
                            </a>
                            @guest
                                <div class="pt-2">

                                    <a class="py-2.5 px-4 inline-flex rounded-lg items-center gap-x-2 bg-accent text-white hover:bg-accent/75 transition duration-300 ease-in-out transform border"
                                        href="/login">
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                            <circle cx="12" cy="7" r="4" />
                                        </svg>
                                        Sign in
                                    </a>
                                </div>
                            @endguest
                            @auth
                                <div>
                                    <div>
                                        <a wire:navigate
                                            class="flex items-center py-3 gap-x-1 rounded-lg text-sm text-secondary hover:text-accent/55"
                                            href="/my-account">
                                            <!-- Account Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                            </svg>
                                            <span class="mr-1">My Account</span>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a wire:navigate
                                            class="py-3 gap-x-1 flex items-center text-secondary hover:text-accent/55  disabled:opacity-50 disabled:pointer-events-none transition duration-300 ease-in-out"
                                            href="/logout">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M16 17l5-5-5-5" />
                                                <path d="M21 12H9" />
                                                <path d="M4 4h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4" />
                                            </svg>
                                            <span class="mr-1">Sign Out</span>
                                        </a>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Links Container 768px < screens < 1024px -->
            <div id="navbar-collapse-with-animation-large"
                class="hidden  lg:hidden absolute left-0 top-full mt-2 shadow-md font-heading font-medium tracking-wide hs-collapse overflow-hidden transition-all duration-300 w-full">
                <div class="bg-white dark:bg-gray-900 shadow-md p-4 overflow-hidden overflow-y-auto max-h-[75vh]">
                    <div class="flex flex-col gap-y-4 divide-y divide-dashed divide-gray-200 dark:divide-gray-700">

                        <!-- Center Section: Main Navigation -->
                        <div class="flex flex-col gap-y-2">
                            <a class="{{ request()->is('/') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3"
                                href="/" aria-current="page">Home</a>
                            <a class="{{ request()->is('about-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3"
                                href="/about-us">About Us</a>
                            <a class="{{ request()->is('categories') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3"
                                href="/categories">Categories</a>
                            <a class="{{ request()->is('products') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3"
                                href="/products">Products</a>
                            <a class="{{ request()->is('contact-us') ? 'text-accent' : 'text-secondary' }} hover:text-accent/55 py-3"
                                href="/contact-us">Contact Us</a>
                            @auth
                                <a class="py-3 gap-x-1 flex items-center text-secondary hover:text-accent/55  disabled:opacity-50 disabled:pointer-events-none transition duration-300 ease-in-out"
                                    href="/logout">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M16 17l5-5-5-5" />
                                        <path d="M21 12H9" />
                                        <path d="M4 4h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4" />
                                    </svg>
                                    <span class="mr-1">Sign Out</span>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="font-heading flex flex-row space-x-5">
                <!-- Cart (visible on md screens) -->
                <a class="hidden md:flex lg:hidden items-center text-secondary hover:text-accent/55" href="/cart">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z" />
                    </svg>
                    <span>Cart</span>
                    <sup
                        class="py-0.5 px-1.5 rounded-full text-xs bg-accent/10 border border-accent/45 text-accent">{{ $total_count }}</sup>
                </a>

                <!-- Sign In (visible on md screens) -->
                @guest
                    <a class="hidden md:flex lg:hidden py-2.5 px-4 inline-flex rounded-lg items-center gap-x-2 bg-accent text-white hover:bg-accent/75 transition duration-300 ease-in-out transform border"
                        href="/login">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Sign in
                    </a>
                @endguest
                @auth
                    <div>
                        <a wire:navigate
                            class="hidden md:flex lg:hidden items-center py-3 gap-x-1 rounded-lg text-sm text-secondary hover:text-accent/55"
                            href="/my-account">
                            <!-- Account Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            <span class="mr-1">My Account</span>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
