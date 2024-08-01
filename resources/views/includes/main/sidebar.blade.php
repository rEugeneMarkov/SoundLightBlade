<!-- component -->
<div
    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 md:h-[calc(100vh-10rem)] w-full md:max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5 sm:max-w-full">
    <div class="p-4 mb-2">
        <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-gray-900">
            {{ __('Categories') }}
        </h5>
    </div>
    <nav class="flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700 hidden md:flex">
        <x-main.sidebar.item>
            SOUND equipment
        </x-main.sidebar.item>
        <x-main.sidebar.item>
            LIGHT equipment
        </x-main.sidebar.item>
        <x-main.sidebar.item>
            DJ equipment
        </x-main.sidebar.item>
        <x-main.sidebar.item>
            STAGE equipment
        </x-main.sidebar.item>
    </nav>
</div>
