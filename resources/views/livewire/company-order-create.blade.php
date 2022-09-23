<div class="m-10">
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <x-form.button wire:click="submit"
            class="mt-5 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
            {{ __('Make a request') }}
        </x-form.button>
    </form>

</div>
