<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="container mx-auto">
        <div>
            @include('includes.main.navigation')
        </div>
        <main class="max-w-7xl">
            <div class="md:flex">
                <div>
                    @include('includes.main.sidebar')
                </div>
                <div class="w-full px-6 pt-6 lg:px-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>
