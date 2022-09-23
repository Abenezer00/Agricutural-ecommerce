<link rel="stylesheet" href="{{ asset('vendor/viewer/css/viewer.min.css') }}">
<script src="{{ asset('vendor/viewer/js/viewer.min.js') }}"></script>
<div class="grid grid-cols-5 gap-y-8 gap-x-6">


    <div class="sm:col-span-1 lg:col-span-1 overflow-y-auto px-1 hidden md:block" style="height: 70vh"
        id="desktop-images">


        @foreach ($product->media as $index => $media)
            <div
                class="border-2 rounded border-indigo-200 my-3  cursor-pointer
            @if (($url = $media->getFullUrl()) == $selectedImageUrl) ring-2 ring-indigo-500 @endif">
                <img wire:click="setImage({{ $index }})" src="{{ $url }}"
                    alt="{{ $product->description }}" loading="lazy" decoding="async"
                    class="object-center object-cover rounded">
            </div>
        @endforeach
    </div>

    <div id="{{ $selectedImageUrl }}"
        class="col-span-5 md:col-span-4 aspect-w-3 aspect-h-4 rounded-lg bg-gray-100 overflow-hidden cursor-pointer">
        <img loading="lazy" decoding="async" src="{{ $selectedImageUrl }}" class="object-center object-cover"
            alt="{{ $product->description }}" onclick="desktopGallery.show()" />
    </div>

    <div class="col-span-5 md:col-span-4 overflow-hidden flex md:hidden">

        <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 gap-4" id="mobile-images">
            @foreach ($product->media as $index => $media)
                <label
                    class="border-2 rounded border-indigo-200 cursor-pointer mx-1 my-3
                @if (($url = $media->getFullUrl()) == $selectedImageUrl) ring-2 ring-indigo-500 @endif">
                    <img wire:click="setImage({{ $index }})" loading="lazy" decoding="async"
                        src="{{ $url }}" alt="{{ $product->description }}" class="rounded">
                </label>
            @endforeach

        </div>
    </div>

</div>

<script>
    const desktopGallery = new Viewer(document.getElementById("desktop-images"));
    const mobileGallery = new Viewer(document.getElementById("mobile-images"));
</script>
