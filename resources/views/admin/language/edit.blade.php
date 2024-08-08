<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Language edit') }}
            </h2>
        </div>
    </x-slot>


    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        @include('admin.language.partials.form', [
            'action' => route('admin.languages.update', $language->id),
            'method' => 'PUT',
        ])
    </div>
</x-admin-layout>
