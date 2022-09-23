<?php

namespace App\View\Components\Form;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class LivewireMultiSelect extends Component
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
        public bool $selectAllEnabled = true
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
        return view('components.form.livewire-multi-select');
    }
}
