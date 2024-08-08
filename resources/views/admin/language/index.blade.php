<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Languages') }}
            </h2>
            <x-admin.button.primary href="{{ route('admin.languages.create') }}">
                {{ __('Create') }}
            </x-admin.button.primary>
        </div>
    </x-slot>


    @if ($languages->isEmpty())
        {{ __('No languages found') }}
    @else
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">{{ __('ID') }}</th>
                    <th class="hidden px-4 py-2 sm:table-cell">{{ __('Name') }}</th>
                    <th class="px-4 py-2">{{ __('Properties') }}</th>
                    <th class="px-4 py-2">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($languages as $language)
                    <tr>
                        <td class="px-4 py-2 border">{{ $language->id }}</td>
                        <td class="hidden px-4 py-2 border sm:table-cell">{{ $language->name }}</td>
                        <td class="px-4 py-2 border">
                            {{ $language->getStateText() }}
                        </td>
                        <td class="flex px-4 py-2 border">
                            <x-admin.button.edit href="{{ route('admin.languages.edit', $language) }}" />

                            @include('admin.language.partials.delete-form', [
                                'language' => $language,
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-admin-layout>
