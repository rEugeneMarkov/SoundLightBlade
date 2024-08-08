@props(['value' => null, 'href' => null])

@if ($href)
    <a
        {{ $attributes->merge(['href' => $href, 'class' => 'border border-gray-300 bg-white rounded-md shadow-sm block px-4 py-2 mt-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 hover:text-gray-900 hover:bg-gray-100']) }}>
        {{ $value ?? $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['type' => 'button', 'class' => 'border border-gray-300 bg-white rounded-md shadow-sm block px-4 py-2 mt-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 hover:text-gray-900 hover:bg-gray-100']) }}>
        {{ $value ?? $slot }}
    </button>
@endif
