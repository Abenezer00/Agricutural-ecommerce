<div>
    <x-form.label :key=" $key" :label="$label" />
    <select wire:model.lazy="{{ $key }}" id="{{ $key }}" name="{{ $key }}"
        autocomplete="{{ $key }}"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm
    @error($key) border-red-500 @enderror">

        @if ($showSelectHint)
            <option disabled value="">--- Select {{ __($label) }} ---</option>
        @endif

        @if ($containEmpty)
            <option value="">--- Empty ---</option>
        @endif


        @foreach ($collection as $item)
            @if (is_array($item))
                @php
                    $displayArray = [];
                    $props = explode(',', $displayKey);
                    
                    foreach ($props as $prop) {
                        if ($value = $item[trim($prop)]) {
                            $displayArray[] = $value;
                        }
                    }
                    
                    $displayValue = implode(' / ', $displayArray);
                @endphp
                <option value="{{ $item[$valueKey] }}">{{ $displayValue }}</option>
            @else
                @php
                    $displayArray = [];
                    $props = explode(',', $displayKey);
                    foreach ($props as $prop) {
                        $itemkey = trim($prop);
                        if ($value = $item->$itemkey) {
                            $displayArray[] = $item->$itemkey;
                        }
                    }
                    
                    $displayValue = implode(' / ', $displayArray);
                @endphp
                <option value="{{ $item->$valueKey }}">{{ $displayValue }}</option>
            @endif
        @endforeach
    </select>

    @error($key) <span class="text-red-500">{{ $message }}</span> @enderror
</div>
