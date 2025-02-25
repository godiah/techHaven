<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="font-inter">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- SVG Background Pattern -->
            <div class="relative bg-gradient-to-r from-red-50 to-gray-50 p-6 sm:p-8">
                <div class="absolute inset-0 opacity-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <defs>
                            <pattern id="error-pattern" x="0" y="0" width="40" height="40"
                                patternUnits="userSpaceOnUse">
                                <path d="M0 20 L40 20 M20 0 L20 40" stroke="currentColor" stroke-width="1"
                                    fill="none" />
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#error-pattern)" />
                    </svg>
                </div>

                <!-- Error Icon -->
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="text-center relative z-10">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Payment Failed</h1>
                    <p class="text-gray-600 mb-6">Your order has been cancelled due to a payment issue</p>

                    <!-- Order Information Card -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 mb-6 text-left">
                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">ORDER DETAILS</h3>
                            <div class="flex flex-col sm:flex-row sm:justify-between mt-1">
                                <div>
                                    <span x-data="{ orderNumber: '{{ $orderNumber ?? 'N/A' }}' }" x-text="orderNumber"
                                        class="text-lg font-semibold text-gray-800">ORDER-12345</span>
                                </div>
                                <div class="mt-2 sm:mt-0">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Cancelled
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-4 mb-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500 mb-1">PAYMENT METHOD</h3>
                                    <p x-data="{ paymentMethod: '{{ $paymentMethod ?? 'Credit Card' }}' }" x-text="paymentMethod" class="text-gray-800">Credit Card
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500 mb-1">DATE</h3>
                                    <p x-data="{ date: '{{ $date ?? now()->format('M d, Y') }}' }" x-text="date" class="text-gray-800">Feb 25, 2025</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-4">
                            <h3 class="text-sm font-medium text-gray-500 mb-2">FAILURE REASON</h3>
                            <p x-data="{ errorMessage: '{{ $errorMessage ?? 'Your payment was declined. Please check your payment details and try again.' }}' }" x-text="errorMessage" class="text-gray-800 text-sm">Your payment
                                was declined. Please check your payment details and try again.</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                        <a href="/checkout"
                            class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-5 py-2.5 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                            Try Again
                        </a>
                        <a href="/"
                            class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-5 py-2.5 rounded-lg bg-white text-gray-700 font-medium border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>

            <!-- Help Section -->
            <div class="border-t border-gray-100 bg-gray-50 p-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Common Payment Issues</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mt-0.5 flex-shrink-0"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Check if your card has sufficient funds or credit limit</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mt-0.5 flex-shrink-0"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Verify your card details and billing information</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mt-0.5 flex-shrink-0"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Contact your bank if you suspect the transaction was flagged</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
