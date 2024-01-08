<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

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
    <script src="{{ asset('js/myscript.js') }}"></script>
    @livewireStyles
</head>

<body class="flex flex-col min-h-screen">
    <!-- Page Navigation -->
    <nav>
        @include('tech.layouts.navigation')

    </nav>
    <!-- Page Heading -->
    @if (isset($header))
    <header class="pt-24 pb-8 px-4">
        <div class="container mx-auto">
            {{ $header }}
        </div>
    </header>
    @endif
    <!-- Page Main -->
    <main class="flex-grow">
        <!-- Page Hero -->
        {{-- @if (isset($hero))
        {{$hero}}
        @endif --}}
        <!-- Page Hero -->
        <div class="px-4">
            {{ $slot }}

        </div>
    </main>
    <footer class="mt-auto">
        @include('tech.layouts.footer')

    </footer>
   @livewireScripts
</body>

</html>