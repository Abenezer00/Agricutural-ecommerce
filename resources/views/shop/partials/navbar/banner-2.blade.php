@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

{{-- <div class="relative flex-grow">
    <div class="flex justify-center relative bg-gray-100 transition duration-200 ease-in py-4">
        <div class="w-full mx-auto max-w-screen px-4 md:px-8 2xl:px-16">
            <div class="relative text-center text-heading text-xs md:text-sm leading-6 md:leading-7 px-8">
                {{ $message }}
                <button
                    class="absolute h-full right-0 top-0 flex text-lg md:text-2xl items-center justify-center text-gray-500 opacity-50 focus:outline-none transition-opacity hover:opacity-100"
                    aria-label="close">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        class="text-black" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div> --}}



<div x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message]) }}" style="display: none;" x-show="show && message" x-init="document.addEventListener('banner-message', event => {
    style = event.detail.style;
    message = event.detail.message;
    show = true;
});">

    <div class="relative flex-grow ">
        <div class="flex justify-center relative  transition duration-200 ease-in py-4 bg-gray-100  text-gray-800"
            {{-- :class="{ 'bg-gray-100  text-gray-800  ': style == 'success', 'bg-red-600': style == 'danger' }" --}}>
            <div class="w-full mx-auto max-w-screen px-4 md:px-8 2xl:px-16">
                <div class="relative text-left sm:text-center leading-6 md:leading-7 px-2 sm:px-8">

                    <button class="absolute h-full right-0 top-0 flex items-center justify-center" {{-- :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }" --}}
                        aria-label="Dismiss" x-on:click="show = false" style="z-index:20000000;">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
