@props(['action' => null, 'method' => 'POST'])

<form action="{{ $action }}" method="POST" class="inline">
    @csrf
    @method($method)

    {{ $slot }}
</form>
