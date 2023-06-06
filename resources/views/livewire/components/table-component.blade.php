<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-purple-600 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="ml-3 mr-3 mt-3 mb-3">
                    @livewire('user-datatable')
                </div>
            </div>
        </div>
    </div>
</div>
