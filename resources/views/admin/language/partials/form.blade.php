<section>
    <x-admin.form action="{{ $action }}" method="{{ $method }}">

        <div class="mt-2">
            <x-admin.form.input-label for="id" :value="__('ID')" />
            <x-admin.form.text-input name="id" :value="old('id', $language->id)" required />
            <x-admin.form.input-error :messages="$errors->get('id')" />
        </div>

        <div class="mt-2">
            <x-admin.form.input-label for="name" :value="__('Name')" />
            <x-admin.form.text-input name="name" :value="old('name', $language->name)" required />
            <x-admin.form.input-error :messages="$errors->get('name')" />
        </div>

        <div class="mt-2">
            <x-admin.form.input-label for="active" :value="__('Active')" />
            <x-admin.form.checkbox name="active" :value="1" :checked="old('active', $language->active)" />
            <x-admin.form.input-error :messages="$errors->get('active')" />
        </div>

        <div class="mt-2">
            <x-admin.form.input-label for="default" :value="__('Default')" />
            <x-admin.form.checkbox name="default" :value="1" :checked="old('default', $language->default)" />
            <x-admin.form.input-error :messages="$errors->get('default')" />
        </div>

        <div class="mt-2">
            <x-admin.form.input-label for="fallback" :value="__('Fallback')" />
            <x-admin.form.checkbox name="fallback" :value="1" :checked="old('fallback', $language->fallback)" />
            <x-admin.form.input-error :messages="$errors->get('fallback')" />
        </div>

        <div class="flex flex-row">
            <x-admin.button.primary type="submit">
                {{ __('Save') }}
            </x-admin.button.primary>
            <x-admin.button.secondary href="{{ route('admin.languages.index') }}" class="ml-2">
                {{ __('Cancel') }}
            </x-admin.button.secondary>
        </div>

    </x-admin.form>
</section>
