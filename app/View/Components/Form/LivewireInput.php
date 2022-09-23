<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class LivewireInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string $key,
        public string $type = "text",
        public string $placeholder = "",
        public bool $isDisabled = false,
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
        return view('components.form.livewire-input');
    }
}
