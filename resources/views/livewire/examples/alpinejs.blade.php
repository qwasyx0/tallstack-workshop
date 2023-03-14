<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alpine.js') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <div x-data="{ open: false }" >
                        <button @click="open = true">Show More...</button>

                        <ul x-show="open" @click.outside="open = false" x-cloak x-transition>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div> --}}
                    <div x-data="{ open: @entangle('showDropdown') }">
                        <button @click="open = true">Show More...</button>

                        <ul x-show="open" @click.outside="open = false" x-cloak x-transition.duration.500ms>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>

                    <div class="my-6">Backend showDropdown: {{ $showDropdown ? 'true' : 'false' }}</div>

                </div>
            </div>
        </div>
    </div>
</div>
