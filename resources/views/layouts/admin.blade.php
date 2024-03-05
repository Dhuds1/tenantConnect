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

<body class="bg-[#ffe666] font-sans antialiased flex">
  <aside class="fixed md:sticky md:left-0 top-0 rounded-lg bg-red-200 h-[100dvh]">
    <button data-collapse-toggle="navbar-hamburger" aria-controls="navbar-hamburger" aria-expanded="false" class="fixed top-2 left-2 peer-[mobile]">
        <i class="fa-solid fa-bars fa-xl"></i>
    </button>
    <div id="navbar-hamburger" class="hidden">
        @include('layouts.ad-nav-side')
    </div>
  </aside>
  <!-- Page Content -->
  <main class="mx-auto w-2/3">
      {{ $slot }}
  </main>
  @livewireScripts
</body>

</html>
