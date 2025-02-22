<div class="relative min-h-screen flex flex-col sm:justify-center items-center">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
        <div class="flex h-full items-center">
            <main class="w-full max-w-xl mx-auto p-6">
                <div
                    class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="font-heading block text-3xl font-semibold text-accent">Forgot password?</h1>
                            <p class="font-body mt-2 text-sm text-text dark:text-gray-400">
                                Remember your password?
                                <a wire:navigate class="text-accent font-body decoration-2 hover:underline font-medium"
                                    href="/login">
                                    Sign in here
                                </a>
                            </p>
                        </div>

                        <hr class="my-5 border-slate-300">

                        <div class="mt-5">
                            <!-- Form -->
                            <form wire:submit.prevent='save' class="font-body">
                                <div class="grid gap-y-4">
                                    @if (session('success'))
                                        <div class="w-full flex justify-center mb-2">
                                            <div
                                                class="flex items-center bg-green-400 text-white p-4 rounded shadow-lg w-full">
                                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 111.414-1.414L8.414 12.172l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span>{{ session('success') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Form Group -->
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
                                            <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- End Form Group -->
                                    <button type="submit"
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm tracking-wide font-semibold rounded-lg border border-transparent bg-accent text-white hover:bg-accent/75 transition duration-300 ease-in-out transform disabled:opacity-50 disabled:pointer-events-none">
                                        <span wire:loading.remove>Reset password</span>
                                        <span wire:loading>Almost there - preparing your reset link . . . </span>
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <x-layouts.bottom_shape />
</div>
