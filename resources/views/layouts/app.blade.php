<!-- resources/views/layouts/app.blade.php -->
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
    <div>@yield('navbar')</div>

    {{-- <nav>Header Navigasi</nav> --}}
    <div class="container">
        @yield('sidebar')
        @yield('content') <!-- Tempat konten unik -->
    </div>
    <footer>@yield('footer')</footer>
</body>

</html>
