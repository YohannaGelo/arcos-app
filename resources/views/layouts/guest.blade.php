<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo_arcos.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- <body class="font-sans bg-white antialiased"> -->
<body class="d-flex flex-column" style="min-height: 100vh;">
    <!-- Header -->
    <header>
        @include('layouts.navigation')
    </header>

    <!-- main -->
    <div class="d-flex flex-column justify-content-center align-items-center my-5">
        <div class="text-center mb-4">
            <a href="/">
                <!-- Logo -->
                <img src="{{ asset('img/logo_arcos.png') }}" alt="Logo" class="img-fluid" style="width: 200px; height: 200px;">
            </a>
        </div>

        <div class="w-100" style="max-width: 600px;">
            <div class="card shadow bg-light-subtle">
                <div class="card-body p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto">
        @include('layouts.footer')
    </footer>

</body>

</html>