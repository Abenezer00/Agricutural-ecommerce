 <div>
     <x-form.label :key="$label" :label="$label" wire:key="{{ $label }}" />

     <livewire:ckeditor :value="$keyValue" :key="$key" :property="$key" wire:key="{{ $key }}"
         :emit-key="$emitKey" />
     @error($key) <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
 </div>
