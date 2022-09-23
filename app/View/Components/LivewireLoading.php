<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LivewireLoading extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public  ?string $target = null,
        public string $textColor = 'text-white'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.livewire-loading');
    }
}
