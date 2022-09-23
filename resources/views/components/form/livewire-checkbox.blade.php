<div class="flex items-start">
    <div class="flex items-center h-5">
        <input wire:model.lazy="{{ $key }}" id="{{ $key }}" name="{{ $key }}" type="checkbox"
            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded
                            @error($key) border-red-300 @enderror">
    </div>
    <div class="ml-3 text-sm">
        <x-form.label :key="$key" :label="$label" />
        @error($key) <p class="text-red-500">{{ $message }}</p> @enderror
    </div>
</div>
