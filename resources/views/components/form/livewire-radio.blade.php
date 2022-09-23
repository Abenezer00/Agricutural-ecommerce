<div>
    <fieldset>
        <div>
            <x-form.label :key="$key" :label="$label" />
        </div>
        <div class="mt-4 space-y-4">
            @foreach ($choices as $item)
                <div class="flex items-center">
                    <input wire:model.lazy="{{ $key }}" id="{{ $item['value'] }}"
                        name="{{ $item['value'] }}" type="radio"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                        value="{{ $item['value'] }}">
                    <span class="ml-3 mt-1">
                        <x-form.label :key="$item['value']" :label="$item['label']" />
                    </span>
                </div>
            @endforeach
        </div>
        @error($key) <span class="text-red-500">{{ $message }}</span> @enderror
    </fieldset>
</div>
