<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        main {
            height: 85vh;
        }

        @media screen and (max-width: 768px) {
            main {
                height: 100%;
            }
        }
    </style>

    @livewireStyles

</head>
<body class="">

<x-Menu/>

<main class="container flex items-center justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12">
        <img src="img/grupo.png" alt="Grupo" srcset="" class="">
        <section class="flex flex-col gap-2 px-2 ">
            <h1 class="text-6xl text-purple-800">Bienvenidos</h1>
            <p class="text-xl">
                Bienvenidos a la web del grupo scout Chiclana, aquí tenéis toda la información sobre nosotros, historia
                del grupo, historia del escultismo, ¿Qué es el escultismo? y las secciones que tenemos.
            </p>

            <p class="text-xl">
                Además tenéis un formulario de preinscripción para todas las personas que quieran entrar en el grupo.
            </p>
            <p class="text-xl">
                Cualquier duda podéis enviar un correo a gschiclana@scout.com o enviar un WhatsApp al numero de teléfono
                123 456 789.
            </p>
            <p class="text-xl">
                ⚜Siempre Listos para servir⚜
            </p>
            <a href="{{route('preinscripcion')}}">
                <button class="bg-green-200 text-purple-600 font-bold btn rounded p-1 w-20">Inscríbete</button>
            </a>

        </section>
    </div>

</main>

<footer class="container h-auto">
    <div class="flex justify-center">
        <a href="https://www.instagram.com/gscoutchiclana/?hl=es"><img class="logo" src="img/instagram.png"
                                                                       alt="Instagram"></a>
        <a href="https://www.facebook.com/GrupoScoutChiclana77/"><img class="logo" src="img/facebook.png"
                                                                      alt="Facebook"></a>
        <a href=""><img class="logo" src="img/twitter.png" alt="Twitter"></a>
    </div>
</footer>

<x-Pie/>

{{--        <livewire:counter/>--}}
{{--        @livewireScripts--}}

</body>
</html>
