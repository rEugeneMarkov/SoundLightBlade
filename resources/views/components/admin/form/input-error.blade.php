@props(['messages' => null])

<div class="mt-2 text-red-700">
    {{ $messages ? $messages : '' }}
</div>
