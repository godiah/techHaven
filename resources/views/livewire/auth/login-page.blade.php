<div class="relative min-h-screen flex flex-col sm:justify-center items-center">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
        <div class="flex h-full items-center">
            <main class="w-full max-w-lg mx-auto p-6">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="font-heading block text-3xl font-semibold text-accent">Welcome Back</h1>
                            <p class="font-body text-text mt-2 text-sm">Sign in to your account</p>
                        </div>

                        <hr class="my-5 border-slate-300">

                        <!-- Form -->
                        <form wire:submit.prevent='save' class="font-body">
                            <div class="grid gap-y-4">
                                @if ($errors->has('login'))
                                    <div class="w-full flex justify-center mb-2">
                                        <div
                                            class="flex items-center bg-red-400 text-white p-4 rounded shadow-lg w-full">
                                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8.257 3.099c.765-1.36 2.675-1.36 3.44 0l6.514 11.59c.75 1.334-.213 3.011-1.72 3.011H3.463c-1.508 0-2.47-1.677-1.72-3.01L8.257 3.1zM9 13a1 1 0 102 0 1 1 0 00-2 0zm.25-4a.75.75 0 011.5 0v2a.75.75 0 01-1.5 0V9z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ $errors->first('login') }}</span>
                                        </div>
                                    </div>
                                @endif
                                <!-- Email Form Group -->
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" wire:model="email"
                                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
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
                                        <p class=" text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Password Form Group -->
                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="password"
                                            class="block text-sm mb-2 dark:text-white">Password</label>
                                        <a wire:navigate
                                            class="text-sm text-accent decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="/forgot-password">Forgot password?</a>
                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" wire:model="password"
                                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
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
                                        <p class=" text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm tracking-wide font-semibold rounded-lg border border-transparent bg-accent text-white hover:bg-accent/75 transition duration-300 ease-in-out transform disabled:opacity-50 disabled:pointer-events-none">
                                    <span wire:loading.remove>Sign in to your account</span>
                                    <span wire:loading>Signing in . . . </span>
                                </button>
                            </div>
                        </form>
                        <!-- End Form -->

                        <!-- Social Login -->
                        <div class="mt-6 text-center">
                            <div class="mt-6 flex items-center justify-center">
                                <div class="flex-grow border-t border-slate-300"></div>
                                <span class="mx-4 text-gray-600">OR</span>
                                <div class="flex-grow border-t border-slate-300"></div>
                            </div>

                            <div class="flex justify-center mt-4 font-body">
                                <a href=""
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm tracking-wide font-semibold rounded-lg border border-gray-300 bg-white text-gray-800 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-1 transition duration-300 ease-in-out transform disabled:opacity-50 disabled:pointer-events-none">
                                    <img src="{{ asset('images/google.png') }}" alt="Google Logo" class="w-5 h-5">
                                    <span>Sign in with Google</span>
                                </a>
                            </div>
                        </div>

                        <!-- New Here? Register Link -->
                        <div class="text-center">
                            <p class="font-body mt-4 text-sm text-gray-600 dark:text-gray-400">
                                Don't have an account yet?
                                <a wire:navigate
                                    class="font-body text-accent decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="/register">
                                    Sign up here
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <x-layouts.bottom_shape />
</div>
