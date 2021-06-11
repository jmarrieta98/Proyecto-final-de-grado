<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nuestra historia</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @livewireStyles

</head>
<body class=" flex flex-col gap-4">

<x-Menu/>

<main class="container flex flex-col gap-4 mx-auto w-full max-w-screen-lg">

    <div class="flex justify-center items-center">
        <h1 class="text-6xl text-purple-800">Nuestra Historia</h1>
    </div>
    <p class="text-xl">La historia del Grupo Scout Chiclana se divide en cuatro etapas:</p>
    <ul class="flex flex-col gap-4">
        <li class="text-xl">
            <bold class="font-bold">PRIMERA ETAPA</bold>
            <p class="py-2">Está situada entre 1977 (Fundación del grupo perteneciente a La Salle) y 1989.</p>
            <p class="py-2">Existen las ramas de Lobatos y Rangers.</p>
            <p class="py-2">En el 84 se crea la rama de Pioneros.</p>
            <p class="py-2">En el curso 84 – 85 empieza a debilitarse el grupo y su relación con La Salle.</p>
            <p class="py-2">En el 87 con el crecimiento de otro grupo en La Salle (Jena) los Scouts van siendo
                desplazados
                poco a poco quedándose además pocos responsables y el ayuntamiento expropia el terreno donde estaba el
                local
                Scout y desde esa fecha no había un lugar donde reunirse.</p>
            <p class="py-2">Durante un campamento, Jesús Estudillo único responsable asistente a éste les explica a los
                pioneros mayores que los responsables van a abandonar el grupo y en enero de 1989 Jesús Estudillo,
                Dionisio
                Fernández, Lorenzo y Ana María Junquera presentaban la dimisión al colegio de La Salle.</p>
        </li>
        <li>
            <bold class="font-bold">SEGUNDA ETAPA</bold>
            <p class="py-2">En febrero de 89 se tuvo una reunión de pioneros y se les propone la búsqueda de un nuevo local, para continuar con el grupo fuera de La Salle y tras esto, el grupo se instala en una base en la calle Hormaza, conseguido gracias a Carlos Daza.</p>
            <p class="py-2">En septiembre del año 89 existe un primer contacto entre el grupo y la Delegación de Cádiz formando parte del Movimiento Scout Católico y en este año aparece el Comité de Padres y el primer Clan Ruta (Ituci), siendo responsable de ello Pepe Reyes que se incorporo ese mismo año.</p>
            <p class="py-2">En el 91 el grupo se reincorpora a la delegación de Cádiz como miembro de pleno derecho y en septiembre del 91, renace la rama Rangers.</p>
            <p class="py-2">En el curso 93-94 el grupo se instala en el Parque de Santa Ana en unos locales que le cede el ayuntamiento.</p>
        </li>
        <li>
            <bold class="font-bold">TERCERA ETAPA</bold>
            <p class="py-2">Del 95 al 99 el grupo vive su época de mayor esplendor, con un nutrido y formado grupo de responsables como Juan Alberto Panés, Carlos Daza, Faly, Andrés “Bagheera”, la familia Flores (Luis, Mamen y Manoli), Jesús Estudillo, Dioni, Laura, Manolo Vázquez y Rosa Palmero entre otros. Así el grupo afronta grandes retos como la reapertura de la Rama de Lobatos (sus primeras responsables fueron Almudena Rodríguez y Mamen Fernández).</p>
            <p class="py-2">En el 99 se produce una crisis ante la marcha de la mayoría de los responsables quedándose a cargo del grupo Juan Alberto, Andrés “Bagheera” y Priscila que solicitan la ayuda de miembros del Clan Ruta Clin Clon Clan (Pepe, Tomy, Samuel, Félix y Manu entre otros) para poder continuar con las actividades del Grupo Scout Chiclana.</p>
            <p class="py-2">Tras salir de esta crisis, Tomy pasa a ser jefe de grupo y siguen uniéndose scouts de antiguos y nuevos clanes ruta. Gracias a ellos y a otros nuevos responsables que se han ido incorporando nuevamente al grupo, el grupo sigue adelante.</p>
        </li>
        <li>
            <bold class="font-bold">CUARTA ETAPA</bold>
            <p class="py-2">En el año 2007 en Grupo Scout Chiclana pasa a ser la Asociación Juvenil Grupo Scout Chiclana 1977, siendo los socios promotores Tomy, Pepe, Mari, Borja, Ana y Diego.</p>
            <p class="py-2">Los clanes Reserva 86, Decimos Tercius, y Verde Rebelde son los que pasan a engrosar el núcleo del kraal de responsables, siendo jefe de grupo Borja y bien asesorados por responsables de mayor experiencia como Tomy, Carlos, Cesar, Mari, Capote, Felix, etc.</p>
            <p class="py-2">Ante la perdida de estos responsables, el grupo se ve reforzado por la incorporación de antiguos scouts, Rutas y responsables llegados desde fuera del grupo como Maribel y Rocío.</p>
        </li>
        <li>
            <bold class="font-bold">ETAPA ACTUAL</bold>
            <p class="py-2">En esta última etapa se ha ido nutriendo de responsables, ha aumentado el número de scouts en todas sus ramas.</p>
            <p class="py-2">Se ha conseguido la apertura de la rama de Castores, cuyas primeras responsables son Ana y María Leal.</p>
            <p class="py-2">Se ha añadido un lazo amarillo a la pañoleta como símbolo de la Promesa Scout.</p>
            <p class="py-2">En 2012 se crea la primera rama de Castores del Grupo Scout Chiclana</p>
            <p class="py-2">En 2014 el grupo abandona al Movimiento Scout Católico, para pertenecer a una organización pluriconfesional, ASDE Scouts de España.</p>
            <p class="py-2">Actualmente Miguel Cabello es el Coordinador de Grupo.</p>
            <p class="py-2">En el curso actual 2020/2021, nuestro grupo esta compuesto por unos 70 miembros, de los que 12 son Scouters</p>
        </li>
    </ul>
</main>

<x-Pie/>

</body>
</html>
