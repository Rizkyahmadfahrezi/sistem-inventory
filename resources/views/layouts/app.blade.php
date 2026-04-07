<!-- resources/views/layouts/app.blade.php -->
<html>

<head>
    <title>@yield('title')</title>
    @stack('styles')
</head>

<body>
    {{--  --}}
    {{-- <nav>Header Navigasi</nav> --}}
    <div class="container">
        @yield('content') <!-- Tempat konten unik -->
    </div>
    <footer>@yield('footer')</footer>
</body>

</html>
