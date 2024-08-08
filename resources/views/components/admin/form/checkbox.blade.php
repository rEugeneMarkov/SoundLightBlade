@props(['name', 'value' => null, 'checked' => null])

<input type="checkbox" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
    @checked($checked)
    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
