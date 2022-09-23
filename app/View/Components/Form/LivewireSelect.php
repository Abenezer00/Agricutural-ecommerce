<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Collection;

class LivewireSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string $key,
        public string $valueKey,
        public string $displayKey,
        public Collection $collection,
        public bool $containEmpty = true,
        public bool $showSelectHint = true,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.livewire-select');
    }
}
