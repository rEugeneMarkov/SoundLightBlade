<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-admin.profile.danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-admin.profile.danger-button>

    <x-admin.profile.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-admin.profile.input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-admin.profile.text-input id="password" name="password" type="password" class="block w-3/4 mt-1"
                    placeholder="{{ __('Password') }}" />

                <x-admin.profile.input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-6">
                <x-admin.profile.secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-admin.profile.secondary-button>

                <x-admin.profile.danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-admin.profile.danger-button>
            </div>
        </form>
    </x-admin.profile.modal>
</section>
