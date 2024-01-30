<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <br/>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

{{--                    @livewire('date-list')--}}
                    <livewire:date-list />
{{--                    <x-modal name="test" title="Test">--}}
{{--                        <x-slot:body>--}}
{{--                            <span class="p-5"> Body tag test</span>--}}
{{--                        </x-slot:body>--}}
{{--                    </x-modal>--}}
{{--                    <x-modal name="another-modal" title="Another Modal">--}}
{{--                        <x-slot:body>--}}
{{--                            <span class="p-5"> Body tag 1</span>--}}
{{--                        </x-slot:body>--}}
{{--                    </x-modal>--}}

{{--                    <button x-data x-on:click="$dispatch('open-modal', { name : 'test' })" class="btn">Open Modal</button>--}}
{{--                    <button x-data x-on:click="$dispatch('open-modal', { name : 'another-modal' })" class="btn">Open Modal</button>--}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
