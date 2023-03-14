<div wire:init="initiate">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nested components') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="flex justify-between mb-4" x-data>
                        <div class="flex gap-6">
                            <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded-lg" wire:click='emitAll'>
                                Emit all</button>
                            <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded-lg" wire:click='emitChild1'>
                                Emit child1 z backendu</button>
                            <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded-lg"
                                x-on:click="$wire.emitTo('examples.child2', 'setAttribute', '{{ $text }}')">
                                Emit child2 na clientovi</button>
                        </div>
                        <div wire:loading.class="text-red-500 float-right">Backend pracuje...</div>
                    </div>

                    <div class="flex gap-6">
                        <span>Child1</span>
                        <livewire:examples.child1 />
                    </div>
                    <div class="flex gap-6">
                        <span>Child2</span>
                        <livewire:examples.child2 />
                    </div>



                    <button class="bg-purple-500 hover:bg-purple-700 py-2 px-4 rounded-lg mt-6"
                        wire:click.prefetch="prefetch">Prefetch</button>
                    <span>{{ $prefetch }}</span>


                    <div class="flex justify-start gap-6">
                        @foreach ($array as $value)
                            {{ $value->id ?? '' }}
                        @endforeach
                    </div>

                    <div class="flex justify-between gap-6 mt-6">
                        <input type="text" wire:model="param" class=" bg-white text-gray-900">
                        <span>{{ $text }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
