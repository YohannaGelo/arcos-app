<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo_arcos.png') }}">

    <title>@yield('title', 'Catálogo de Arcos')</title>

    <!-- Bootstrap CSS -->
    @vite('resources/css/app.css')

    <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet"> -->
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">
    <!-- Header -->
    <header>
        @include('layouts.navigation')
    </header>

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto">
        @include('layouts.footer')
    </footer>

    <!-- Bootstrap JS y dependencias -->
    @vite('resources/js/app.js')

    <!-- <script src="{{ asset('js/bootstrap.bundle.js') }}"></script> -->
</body>

</html>