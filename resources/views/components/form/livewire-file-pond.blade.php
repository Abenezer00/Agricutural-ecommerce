<div class="border-2 border-dashed my-5 rounded-md">


    <style>
        .filepond--credits {
            display: none;
        }

        .filepond--item {
            width: calc(50% - 0.5em);
        }

    </style>



    <div class="m-2 @error('newFiles') border-2 border-red-300 rounded-md @enderror">
        <x-form.label :key="$model" :label="$label" />
        <div wire:ignore x-data x-init="() => {
            const newPond = FilePond.create($refs.newFilepondInput);
            newPond.setOptions({
                allowMultiple: @js($multiple),
                maxFiles: @js($maxFiles),
                maxFileSize: @js($maxFileSize),
                allowReorder: true,
                allowImagePreview: @js($allowFileTypeValidation),
                imagePreviewMaxHeight: @js($imagePreviewMaxHeight),
                allowFileTypeValidation: @js($allowFileTypeValidation),
                acceptedFileTypes: @js($acceptedFileTypes),
                allowFileSizeValidation: @js($allowFileSizeValidation),
        
                server: {
                    process: (
                        fieldName,
                        file,
                        metadata,
                        load,
                        error,
                        progress,
                        abort,
                        transfer,
                        options,
                    ) => {
                        @this.upload('{{ $model }}', file, load, error,
                            progress)
                    },
                    revert: (filename, load) => {
                        @this.removeUpload('{{ $model }}', filename, load)
                    },
                },
            });
        }">
            <input type="file" x-ref="newFilepondInput" />
        </div>
        <div class="p-2">
            @error('newFiles')
                <div class="text-red-500 mt-2">{{ $message }}</div>
            @enderror
        </div>

    </div>


    @if ($oldFilesCount = $oldFiles->count())
        <div class="border-t-2 border-dashed"></div>
        <div wire:ignore x-data="" x-init="() => {
            const oldPond = FilePond.create($refs.oldFilepondInput);
            oldPond.setOptions({
                allowPaste: false,
                allowBrowse: false,
                allowDrop: false,
                labelIdle: `<span='text-indigo-600'>Total ({{ $oldFilesCount }})</span>`,
                allowMultiple: true,
                filePosterMaxHeight: @js($imagePreviewMaxHeight),
                server: {
                    remove: (source, load, error) => {
                        @this.removeLocalImage(source).then(() => {
                            load();
                        });
                    },
                },
                files: @js($oldFiles)
            });
        }" class="m-2">
            <input type="file" x-ref="oldFilepondInput" />
        </div>
    @endif

</div>
