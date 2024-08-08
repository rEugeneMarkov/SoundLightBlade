@php($languages = App\Models\Language::getActive())

<section x-data="{ openLanuagesSwitcher: false }">
    <div class="relative">
        <button x-on:click="openLanuagesSwitcher = !openLanuagesSwitcher" type="button"
            class="flex items-center text-sm font-semibold leading-6 text-gray-900 gap-x-1" aria-expanded="false">
            {{ $languages->firstWhere('id', app()->getLocale())?->name }}
            <svg class="flex-none w-5 h-5 text-gray-400" :class="{ 'rotate-180': openLanuagesSwitcher }"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="openLanuagesSwitcher" x-on:click.away="openLanuagesSwitcher = false"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
            class="absolute z-10 w-screen max-w-sm mt-3 overflow-hidden bg-white shadow-lg md:w-max top-full rounded-3xl ring-1 ring-gray-900/5">

            <div class="relative flex items-center p-4 text-sm leading-6 rounded-lg hover:bg-gray-50">
                <div class="flex flex-col">
                    @foreach ($languages as $language)
                        <a href="{{ route('language', $language) }}"
                            class="block py-2 font-semibold text-gray-900 hover:text-gray-500">
                            {{ $language->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
