<div class="relative min-h-screen flex flex-col sm:justify-center items-center">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
        <div class="flex h-full items-center">
            <main class="w-full max-w-lg mx-auto p-6">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="font-heading block text-3xl font-semibold text-accent">Create an account</h1>
                            <p class="font-body text-text mt-2 text-sm">Sign up to get started</p>

                        </div>
                        <hr class="my-5 border-slate-300">
                        <!-- Form -->
                        <form wire:submit.prevent='save' class="font-body">
                            <div class="grid gap-y-4">
                                <!-- Form Group -->

                                <div>
                                    <label for="name" class="block text-sm mb-2 dark:text-white">Name
                                        <sup>*</sup></label>
                                    <div class="relative">
                                        <input type="text" id="name" wire:model="name"
                                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="email-error" placeholder="John Doe">
                                        @error('name')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('name')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                        address<sup>*</sup></label>
                                    <div class="relative">
                                        <input type="email" id="email" wire:model="email"
                                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="email-error" placeholder="name@email.com">
                                        @error('email')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('email')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="password"
                                            class="block text-sm mb-2 dark:text-white">Password<sup>*</sup></label>

                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" wire:model="password"
                                            class="py-3 border px-4 block w-full border-gray-200 rounded-lg text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="password-error" placeholder="********">
                                        @error('password')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('password')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="password" class="block text-sm mb-2 dark:text-white">Confirm
                                            Password<sup>*</sup></label>

                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password_confirmation"
                                            wire:model="password_confirmation"
                                            class="py-3 border px-4 block w-full border-gray-200 rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="password-error" placeholder="********">
                                        @error('password_confirmation')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('password_confirmation')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->


                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm tracking-wide font-semibold rounded-lg border border-transparent bg-accent text-white hover:bg-accent/75 transition duration-300 ease-in-out transform disabled:opacity-50 disabled:pointer-events-none">
                                    <span wire:loading.remove>Create your account</span>
                                    <span wire:loading>Creating account . . . </span>
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->

                        <!-- Already have an account? -->
                        <div class="text-center">
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                Already have an account?
                                <a wire:navigate
                                    class="font-body text-accent decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="/login">
                                    Sign in here
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <x-layouts.bottom_shape />
</div>
