<x-admin.button.delete class="ml-2" x-data=""
    x-on:click="$dispatch('open-modal', 'confirm-language-deletion-{{ $language->id }}')" />

<x-admin.modal name="confirm-language-deletion-{{ $language->id }}">
    <div class="p-6">
        <div class="text-lg font-bold">
            {{ $language->name }}
        </div>

        {{ __('Are you sure you want to delete this language?') }}

        <x-admin.form method='delete' action="{{ route('admin.languages.destroy', $language) }}">
            <div class="flex items-center justify-end mt-4">

                <x-admin.button.danger type="submit" class="ml-2">
                    {{ __('Delete') }}
                </x-admin.button.danger>

                <x-admin.button.secondary type="button" class="ml-2"
                    x-on:click="$dispatch('close-modal', 'confirm-language-deletion-{{ $language->id }}')">
                    {{ __('Cancel') }}
                </x-admin.button.secondary>
            </div>

        </x-admin.form>
    </div>
</x-admin.modal>
