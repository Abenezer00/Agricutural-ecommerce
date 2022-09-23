<?php

namespace App\View\Components\Form;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class LivewireImage extends Component
{
    public $totalNewImagesCount, $oldImagesCount;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public array $totalNewImages,
        public Collection $oldImages,
        public bool $multiple = true,
        public string $label = "Images",
        public string $key = "newImages",
        public string $errorKey = "totalNewImages",

    ) {
        $this->totalNewImagesCount = count($this->totalNewImages);
        $this->oldImagesCount = count($this->oldImages);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.livewire-image');
    }
}
