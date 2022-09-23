@if ($category->children->isNotEmpty())
    <div class="transition" x-data="{ show: false }">
        <div x-on:click="show = !show"
            class="accordion-header flex justify-start cursor-pointer text-gray-700 hover:bg-gray-100 rounded-md px-2 py-2 my-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 border mx-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" x-show="!show">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 border mx-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" x-show="show">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
            </svg>
            <div class="flex-grow font-medium px-2 truncate">
                {{ $category->name }}
            </div>
        </div>


        <div class="ml-5" x-show="show" x-collapse>
            <a href="{{ route('products.search-by-category', $category->id) }}"
                class="hover:text-indigo-600 underline">
                All {{ $category->name }}
            </a>
            @foreach ($category->children as $child)
                <x-left-sidebar-accordion :category="$child" />
            @endforeach
        </div>
    </div>
@else
    <a href="{{ route('products.search-by-category', $category->id) }}"
        class="flex justify-start cursor-pointer text-gray-700 hover:bg-gray-100 rounded-md px-2 py-2 ml-1">
        <span class="bg-indigo-600 h-2 w-2 m-2 rounded-full"></span>
        <div class="flex-grow font-medium px-2 truncate">
            {{ $category->name }}
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
@endif
