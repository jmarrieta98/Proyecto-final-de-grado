<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @livewireStyles

    <title>Preinscripción</title>
</head>

<body class="">

<x-Menu/>

<main class="container flex flex-col gap-4 mx-auto w-full max-w-screen-md">
    <h1 class="text-6xl text-purple-800 col-span-2 text-center">Preincripción</h1>
    <p class="text-xl">Si quieres formar parte de alguna de las Secciones del Grupo Scout
        Chiclana ¡Completa los datos que se piden a continuación!
    </p>
<form class="space-y-3" action="{{route('preinscripcion.store')}}" method="post">
        @csrf
        <fieldset class="flex flex-col gap-4">
            <legend class="text-2xl my-4">Información Personal</legend>
            <div class="grid grid-cols-2">
                <label for="nombre" class="text-xl">Nombre: </label>
                <input class="input-N" name="nombre" id="nombre" type="text" required value="{{old('nombre')}}">
                @error('nombre')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>
            <div class="grid grid-cols-2">
                <label for="apellidos" class="text-xl">Apellidos: </label>
                <input class="input-N" name="apellidos" id="apellidos" type="text" required value="{{old('apellidos')}}">
                @error('apellidos')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>
            <div class="grid grid-cols-2">
                <label for="fecha-nacimiento" class="text-xl">Fecha de nacimiento:</label>
                <input class="input-N" name="fecha-nacimiento" id="fecha-nacimiento" type="date" required value="{{old('fecha-nacimiento')}}">
                @error('fecha-nacimiento')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>
            <div class="grid grid-cols-2">
                <label for="telefono" class="text-xl">Teléfono de contacto: </label>
                <input class="input-N" name="telefono" id="telefono" type="tel" required value="{{old('telefono')}}">
                @error('telefono')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>
            <div class="grid grid-cols-2">
                <label for="nombre-tutor" class="text-xl">Nombre del tutor/a: </label>
                <input class="input-N" name="nombre-tutor" id="nombre-tutor" type="tel" required value="{{old('nombre-tutor')}}">
                @error('nombre-tutor')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>

        </fieldset>

        <fieldset class="flex flex-col gap-4">
            <legend class="text-2xl my-4">Información adicional</legend>
            <p class="text-xl">Cualquier información que pueda ser del interés para
                el equipo de educadores, así como aquella que deba ser tenida en cuenta de
                forma especial según los criterios de selección</p>

            <textarea class="w-full" name="informacion-adicional" id="informacion-adicional" cols="50" rows="5" >{{old('nombre')}}</textarea>

            <p class="text-xl">CONDICIONANTES A TENER EN CUENTA:
                Por motivos organizativos el Grupo Scout Chiclana '77 tiene limitado el
                número de socios por sección, por lo que nos vemos obligados a atender a
                los criterios de prioridad que se detallan a continuación y según el
                orden indicado:
            </p>
            <ul>
                <li class="text-xl">Año de nacimiento</li>
                <li class="text-xl">Familiares inscritos</li>
                <li class="text-xl">Paridad</li>
                <li class="text-xl">Fecha de Inscripción</li>
            </ul>
            <div class="flex justify-center content-center">
                <button class="bg-green-200 text-purple-600 font-bold btn rounded w-20" type="submit">Enviar</button>
            </div>
            <br>
        </fieldset>
    </form>
</main>

<x-Pie/>

</body>

</html>
