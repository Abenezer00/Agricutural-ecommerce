<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <div class="my-2 bg-white space-y-6">
        <div class="flex-1 flex flex-col overflow-hidden">
            <x-form.label :key="$key" :label="$label" />
            <main class="overflow-x-hidden overflow-y-auto">
                <div
                    class="p-2 border-2 border-gray-300 border-dashed rounded-md relative col-span-6 sm:col-span-6 grid grid-cols-6 gap-6
                     @error($errorKey) border-red-300 @enderror">

                    <div class="col-span-6 sm:col-span-6 mb-2">
                        <input type="file" {{ $multiple ? 'multiple' : '' }} accept="file/*"
                            class="cursor-pointer relative block opacity-0 w-full h-full p-5 z-40"
                            wire:model="{{ $key }}">
                        <div class="text-center p-2 absolute top-0 right-0 left-0 m-auto">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                {{-- <div class="relative pt-1">
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-200">
                                        <div :style="{ width: progress + '%'}"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="relative pt-1" x-show="isUploading" x-cloak>
                                    <div class="flex mb-2 items-center justify-between">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-indigo-600 bg-indigo-200">
                                                Uploading in progress
                                            </span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-xs font-semibold inline-block text-indigo-600"
                                                x-text="progress + '%'">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
                                        <div :style="{ width: progress + '%'}"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blue-600">Upload a file or drag
                                    and
                                    drop
                                    <span
                                        class="font-black text-green-500">{{ $totalNewFilesCount ? '(' . $totalNewFilesCount . ' new files)' : '' }}</span>
                                    <span
                                        class="font-black text-indigo-500">{{ $oldFilesCount ? '(' . $oldFilesCount . ' old files)' : '' }}</span>
                                </p>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF, PDF up to 10MB
                                </p>
                                <div wire:loading wire:target="{{ $key }}" class="m-5">
                                    <span class="mt-3 flex w-full sm:mt-0 sm:w-auto">
                                        <div class="inline-flex justify-center w-full  px-4 py-2">
                                            <svg class="animate-spin mr-5 h-5 w-5 text-indigo-700"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                                    stroke="currentColor" stroke-width="4">
                                                </circle>
                                                <path class="opacity-75" fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                </path>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="grid grid-cols-1  col-span-6 sm:col-span-6">
                        <div>
                            @if ($totalNewFilesCount)
                                <ul class="mt-5 p-2 grid md:grid-cols-6 md:gap-3 rounded border-2 border-green-200">
                                    @foreach ($totalNewFiles as $file)

                                        <li class="col-span-2 flex items-center justify-between "
                                            wire:key="{{ $loop->index . '-new-file' }}">
                                            <span class="w-48">
                                                @if (is_object($file))
                                                    @php
                                                        try {
                                                            $path = $file->temporaryUrl();
                                                        } catch (\Throwable $th) {
                                                            $path = '';
                                                        }
                                                        
                                                        try {
                                                            $fileName = $file->getClientOriginalName();
                                                            $fileSize = $file->getClientOriginalName();
                                                            $fileExtension = $file->extension();
                                                        } catch (\Throwable $th) {
                                                            $fileName = '';
                                                            $fileSize = '';
                                                            $fileExtension = '';
                                                        }
                                                        
                                                    @endphp
                                                    <div class="relative group flex flex-col-reverse">
                                                        <div
                                                            class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                                            @if ($path)
                                                                <img src="{{ $path }}"
                                                                    class="object-center object-cover">
                                                            @else
                                                                <div class="m-2 text-gray-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 w-6 object-center object-cover"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                                    </svg>
                                                                    {{ $fileName }}
                                                                    <br>
                                                                    <div class="font-bold text-indigo-500">
                                                                        ({{ $fileSize }} bytes)</div>
                                                                </div>
                                                            @endif
                                                            <div class="flex items-start p-4">
                                                                <a href="{{ $path }}" target="_blank"
                                                                    class="relative z-10 bg-indigo-500 bg-opacity-75 py-1 px-2 rounded-md text-sm text-white opacity-0 group-hover:opacity-100 focus:opacity-100 mr-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 w-6" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                    </svg>
                                                                </a>
                                                                <button type="button"
                                                                    class="relative z-10 bg-red-500 bg-opacity-75 py-1 px-2 rounded-md text-sm text-white opacity-0 group-hover:opacity-100 focus:opacity-100"
                                                                    wire:loading.attr="disabled"
                                                                    wire:click="removeFromTotalNewFiles({{ $loop->index }})">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 w-6" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </span>
                                        </li>

                                    @endforeach

                                </ul>
                            @endif
                        </div>



                        <div>
                            @if ($oldFilesCount)
                                <ul class="mt-5 p-2 grid md:grid-cols-6 md:gap-3 rounded border-2 border-indigo-200">
                                    @foreach ($oldFiles as $file)
                                        <li class="col-span-2 flex items-center justify-between my-1"
                                            wire:key="{{ $loop->index . '-old-file' }}">
                                            <span class="w-48">
                                                <div class="relative group flex flex-col-reverse">
                                                    <div
                                                        class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                                        @php
                                                            $isImage = str_contains($file->mime_type, 'image');
                                                        @endphp
                                                        @if ($isImage)
                                                            <img src="{{ $file->getFullUrl() }}"
                                                                class="object-center object-cover">
                                                        @else
                                                            <div class="m-2 text-gray-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 object-center object-cover"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                                </svg>
                                                                {{ $file->name }}
                                                                <br>
                                                                <div class="font-bold text-indigo-500">
                                                                    ({{ $file->human_readable_size }})</div>
                                                            </div>
                                                        @endif
                                                        <div class="flex items-start p-4">
                                                            <a href="{{ $file->getFullUrl() }}" target="_blank"
                                                                class="relative z-10 bg-indigo-500 bg-opacity-75 py-1 px-2 rounded-md text-sm text-white opacity-0 group-hover:opacity-100 focus:opacity-100 mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <button type="button"
                                                                class="relative z-10 bg-red-500 bg-opacity-75 py-1 px-2 rounded-md text-sm text-white opacity-0 group-hover:opacity-100 focus:opacity-100"
                                                                wire:loading.attr="disabled"
                                                                wire:click="removeFromOldFiles({{ $loop->index }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="col-span-6 sm:col-span-6 pl-3 pb-3">
        @error($errorKey) <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
        @error($errorKey . '.*') <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
    </div>
</div>
