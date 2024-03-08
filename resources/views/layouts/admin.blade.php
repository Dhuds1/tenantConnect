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
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/09b7d5371f.js" crossorigin="anonymous"></script>
</head>

<body class="bg-yl-500 font-sans antialiased flex">
    <x-mobile-toggle />
    <x-desktop-toggle />
    <!-- Page Content -->
    <main class="mx-auto md:w-2/3 mt-4 flex flex-col gap-4">
        {{ $slot }}
    </main>
    @livewireScripts
</body>

</html>
