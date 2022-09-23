<div class="fixed overflow-hidden inset-0 flex z-40 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true"
    x-show="{{ $controller }}" x-cloak wire:ignore>
    <div class="absolute inset-0 overflow-hidden">
        <div x-show="{{ $controller }}" x-transition:enter="ease-in-out duration-500"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true">
        </div>

        <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
            <div x-show="{{ $controller }}" @click.outside="{{ $controller }} = false"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="relative w-screen max-w-md">

                <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                    <button type="button" @click="{{ $controller }} = false"
                        class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="h-full flex flex-col bg-white shadow-xl ">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
