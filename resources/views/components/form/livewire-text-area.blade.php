<div>
    <x-form.label :key="$key" :label="$label" />
    <div class="mt-1">
        <textarea wire:model.lazy="{{ $key }}" id="{{ $key }}" name="{{ $key }}"
            rows="{{ $rows }}"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md
                    @error($key) border-red-300 @enderror"
            placeholder="{{ $placeholder }}"></textarea>
        @error($key) <span class="text-red-500">{{ $message }}</span> @enderror

    </div>
</div>
