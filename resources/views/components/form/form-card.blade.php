<div class="col-span-1 shadow rounded-md my-5 bg-white">
    @if (isset($title))
        <div class="px-4 py-3 space-y-6 sm:p-5 sm:pt-3 sm:pb-0 font-semibold">{{ $title }}
        </div>
    @endif
    <div class="px-4 py-3 rounded-md space-y-6 sm:p-6">
        {{ $slot }}
    </div>
</div>
