<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Collection;

class LivewireFilePond extends Component
{

    public bool $required = true;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        // public array $totalNewFiles,
        public ?Collection $oldFiles,
        public string $label = "Files",
        public string $model = "newFiles",

        public bool $multiple = true,
        public bool $allowImagePreview = true,
        public bool $allowFileTypeValidation = true,
        public bool $allowFileSizeValidation = true,
        public int $imagePreviewMaxHeight = 250,
        public array $acceptedFileTypes = [],
        public ?string $maxFileSize = null,
        public ?int $maxFiles = null,
    ) {

        if ($this->oldFiles == null) {
            $this->oldFiles = collect();
        } else {
            $this->oldFiles = $oldFiles->map(function ($image) {
                return [
                    'source' => $image->id,
                    'options' => [
                        'type' => 'local',
                        'file' => [
                            'name' => $image->file_name,
                            'size' => $image->size,
                            'type' => $image->mime_type,
                        ],
                        'metadata' => [
                            'poster' => $image?->getUrl(),
                        ],
                    ],
                ];
            });
        }



        $this->required = $this->oldFiles->isEmpty();
        $this->maxFiles = $maxFiles ?? systemSettings('file.file-upload-max-quantity');

        if ($maxFiles == 1) {
            $this->multiple = false;
        }
        $this->maxFileSize = $maxFileSize ?? systemSettings('file.file-upload-max-size');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.livewire-file-pond');
    }
}
