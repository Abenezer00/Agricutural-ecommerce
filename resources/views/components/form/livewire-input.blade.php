<div>
    <x-form.label :key=" $key" :label="$label" />
    <input wire:model.lazy="{{ $key }}" type="{{ $type }}" name="{{ $key }}"
        id="{{ $key }}" autocomplete="{{ $key }}" placeholder="{{ $placeholder }}"
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                @error($key) border-red-500 @enderror"
        @if ($isDisabled)
    disabled
    @endif >
    @error($key) <span class="text-red-500">{{ $message }}</span> @enderror
</div>
