<button wire:loading.attr="disabled" {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center']) }}>
    {{ $slot }}
    @if ($target)
        <x-livewire-loading target="{{ $target }}" :text-color="$loadingTextColor" />
    @else
        <x-livewire-loading :text-color="$loadingTextColor" />
    @endif
</button>
