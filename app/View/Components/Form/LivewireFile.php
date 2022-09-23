<?php

namespace App\View\Components\Form;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class LivewireFile extends Component
{
    public $totalNewFilesCount, $oldFilesCount;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public array $totalNewFiles,
        public Collection $oldFiles,
        public bool $multiple = true,
        public string $label = "Files",
        public string $key = "newFiles",
        public string $errorKey = "totalNewFiles",

    ) {
        $this->totalNewFilesCount = count($this->totalNewFiles);
        $this->oldFilesCount = count($this->oldFiles);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.livewire-file');
    }
}
