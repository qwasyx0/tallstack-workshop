<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Image upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        @if ($photo)
                            Photo Preview:
                            <img src="{{ $photo->temporaryUrl() }}">
                        @endif
                        <input type="file" wire:model="photo">

                        @error('photo')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <button type="submit">Save Photo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
