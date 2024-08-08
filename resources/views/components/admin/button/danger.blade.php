@props(['value' => null, 'href' => null])

@if ($href)
    <a
        {{ $attributes->merge(['href' => $href, 'class' => 'block px-4 py-2 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg hover:bg-red-700']) }}>
        {{ $value ?? $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['type' => 'button', 'class' => 'block px-4 py-2 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg hover:bg-red-700']) }}>
        {{ $value ?? $slot }}
    </button>
@endif
