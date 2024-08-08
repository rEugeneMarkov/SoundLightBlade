@props(['name' => 'name', 'value' => null, 'required' => false])

<input type="text" name="{{ $name }}" id="{{ $name }}" autocomplete="id"
    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
    value="{{ $value }}" {{ $required ? 'required' : '' }}>
