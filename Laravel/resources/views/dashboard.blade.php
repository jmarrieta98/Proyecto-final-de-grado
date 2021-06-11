<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administración</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

@livewire('navigation-menu')

@if (isset($header))
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endif

<main class="container text-center py-4">
    <h1 class="text-2xl sm:text-6xl text-purple-800">Bienvenido al panel de administración</h1>
    <p class="sm:text-xl">Desde el menú que tienes arriba puedes acceder a las diferentes tablas de la base de datos, las
        cuales puedes añadir, modificar y eliminar los datos que sean necesarios.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <a href="{{route('campamentos')}}">
            <div class="text-xl lg:text-6xl text-black lg:text-white flex justify-center items-center w-full h-40 sm:h-80  bg-yellow-200">Campamentos</div>
        </a>
        <a href="{{route('preinscripciones')}}">
            <div class="text-xl lg:text-6xl text-black lg:text-white flex justify-center items-center w-full h-40 sm:h-80  bg-green-200">Preinscripciones</div>
        </a>
        <a href="{{route('materiales')}}">
            <div class="text-xl lg:text-6xl text-black lg:text-white flex justify-center items-center w-full h-40 sm:h-80 bg-blue-200">Materiales</div>
        </a>
        <a href="{{route('socios')}}">
            <div class="text-xl lg:text-6xl text-black lg:text-white flex justify-center items-center w-full h-40 sm:h-80 bg-red-200">Socios</div>
        </a>
    </div>
</main>

</body>
