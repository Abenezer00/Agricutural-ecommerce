<div>
    @once
        <style>
            .svg-icon {
                width: 1em;
                height: 1em;
            }

            .svg-icon path,
            .svg-icon polygon,
            .svg-icon rect {
                fill: #333;
            }

            .svg-icon circle {
                stroke: #4691f6;
                stroke-width: 1;
            }

        </style>
    @endonce

    <select x-cloak class="hidden" id="{{ $key }}">
        @foreach ($collection as $item)
            <option value="{{ $item->$valueKey }}">{{ $item->$displayKey }}</option>
        @endforeach
    </select>

    {{-- @entangle($key).defer --}}

    <div x-data="dropdown(@entangle($key), '{{ $key }}')" x-init="loadOptions('{{ $key }}')"
        class="w-full ">
        <input name="values" type="hidden" x-bind:value="selectedValues('{{ $key }}')">
        <div>
            <x-form.label :key=" $key" :label="$label" />
        </div>
        <div>
            <div class="flex flex-col items-center relative">
                <div class="w-full">
                    <div
                        class="my-2 p-1 flex border border-gray-200 bg-white rounded mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                @error($key) border-red-300 @enderror">
                        <div x-on:click="open" class="flex flex-auto flex-wrap">
                            <template x-for="(option, index) in selected"
                                :key="index + '-selected-{{ $key }}'">
                                <div
                                    class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-gray-100 border">
                                    <div class="text-xs font-normal leading-none max-w-full flex-initial" x-model="
                                        options[option]" x-text="options[option].text"></div>
                                    <div class="flex flex-auto flex-row-reverse">
                                        <div x-on:click.stop="remove(index,option)">
                                            <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                           c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                           l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                           C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </template>
                            <div x-show="selected.length == 0" class="flex-1" x-cloak>
                                <input placeholder="Select a option"
                                    class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                    x-bind:value="selectedValues('{{ $key }}')">
                            </div>
                        </div>
                        @if ($selectAllEnabled)
                            <div class="text-gray-300 w-8  py-1 px-2 border-l flex items-center border-gray-200">
                                <button type="button" x-cloak title="Select All" x-on:click="selectAll"
                                    class="cursor-pointer w-6 h-6 text-gray-800 bg-gray-50 hover:bg-gray-200 outline-none focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </button>
                            </div>
                        @else
                            <div class="text-gray-300 w-8 py-1 px-2 border-l flex items-center border-gray-200">
                                <button type="button" x-cloak x-show="isOpen() === true" x-on:click="open"
                                    class="cursor-pointer w-6 h-6 text-gray-400 outline-none focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <button type="button" x-show="isOpen() === false" @click="close"
                                    class="cursor-pointer w-6 h-6 text-gray-400 outline-none focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 15l7-7 7 7" />
                                    </svg>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="w-full px-4">
                    <div x-show.transition.origin.top="isOpen()"
                        class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select"
                        x-on:click.away="close">


                        <div class="w-full flex rounded-lg shadow-sm mb-5">
                            <div class="relative flex-none md:flex-grow focus-within:z-10">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" stroke="currentColor"
                                        fill="none">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input x-model="searchKey"
                                    class="w-full pl-10 py-3 text-sm leading-4 block rounded-t border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 focus:outline-none"
                                    type="text" />
                                <div class="absolute inset-y-0 right-0 pr-2 flex items-center">
                                    <button class="text-gray-300 hover:text-red-600 focus:outline-none"
                                        @click="searchKey = ''">
                                        <x-icons.x-circle class="h-5 w-5 stroke-current" />
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col w-full overflow-y-auto h-32">
                            <template x-for="(option, index) in filteredOptions" :key="index" class="overflow-auto">
                                <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                    @click="select(option, $event)">
                                    <div
                                        class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                        <div class="w-full items-center flex justify-between">
                                            <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                            <div x-show="option.selected">
                                                <svg class="svg-icon" viewBox="0 0 20 20">
                                                    <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
       C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
       L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @error($key) <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
    </div>
    @once
        <script>
            function dropdown(selected, id) {
                return {
                    options: [],
                    selected: selected,
                    show: false,
                    searchKey: "",
                    open() {
                        this.show = true;
                    },
                    close() {
                        this.show = false;
                    },
                    isOpen() {
                        return this.show === true;
                    },
                    select(option, event) {
                        let optionIndex = null;
                        const length = this.options.length;

                        for (let index = 0; index < length; index++) {
                            let fromOptions = this.options[index];
                            if (fromOptions.uid == option.uid) {
                                if (!fromOptions.selected) {
                                    fromOptions.selected = true;
                                    fromOptions.element = event.target;
                                    this.selected.push(index);
                                } else {
                                    this.selected.splice(this.selected.lastIndexOf(index), 1);
                                    fromOptions.selected = false;
                                }
                                break;
                            }
                        }

                        // if (optionIndex) {
                        //     if (!this.options[optionIndex].selected) {
                        //         this.options[optionIndex].selected = true;
                        //         this.options[optionIndex].element = event.target;
                        //         this.selected.push(optionIndex);
                        //     } else {
                        //         this.selected.splice(this.selected.lastIndexOf(optionIndex), 1);
                        //         this.options[optionIndex].selected = false;
                        //     }
                        // }
                    },
                    selectAll() {
                        this.selected = [];
                        let options = this.filteredOptions();
                        let length = options.length;

                        console.log(options);

                        for (let index = 0; index < length; index++) {
                            let option = options[index];
                            option.selected = true;
                            option.element = null;
                            this.selected.push(option.uid);
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);
                    },
                    loadOptions(key) {
                        const options = document.getElementById(id).options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                uid: i,
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute("selected") != null ?
                                    options[i].getAttribute("selected") : false,
                            });
                        }

                        let temp = [];
                        let selectedLength = this.selected.length;
                        let optionsLength = this.options.length;

                        for (let selectedIndex = 0; selectedIndex < selectedLength; selectedIndex++) {
                            const selectedElement = this.selected[selectedIndex];
                            for (let optionsIndex = 0; optionsIndex < optionsLength; optionsIndex++) {
                                const optionElement = this.options[optionsIndex];
                                if (selectedElement == optionElement.value) {
                                    optionElement.selected = true;
                                    temp.push(optionsIndex);
                                }
                            }
                        }

                        this.selected = temp;
                    },
                    selectedValues(key) {
                        // let v = this.selected.map((option) => {
                        //     console.log("Option", this.option);
                        //     return this.options[option].value;
                        // });
                        // console.log('V', v);

                        return this.selected;
                    },
                    filteredOptions() {
                        if (this.searchKey === "") {
                            return this.options;
                        }

                        return this.options.filter((option) => {
                            return option.text
                                .toLowerCase()
                                .includes(this.searchKey.toLowerCase());
                        });
                    }
                };
            }
        </script>
    @endonce
</div>
