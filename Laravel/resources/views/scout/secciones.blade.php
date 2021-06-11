<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nuestra historia</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @livewireStyles

</head>
<body class="">

<x-Menu/>

<main class="container flex flex-col gap-4 mx-auto w-full max-w-screen-lg">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-6xl text-purple-800 col-span-2 text-center">Secciones</h1>
    </div>
    <p class="text-xl">El Grupo Scout Chiclana se compone de varias secciones:</p>
    <ul>
        <li class="text-xl">Castores – Colonia Yungui Yungui (Actualmente cerrada)</li>
        <li class="text-xl">Lobatos – Manada Dewanee</li>
        <li class="text-xl">Scouts o Troperos – Tropa Ashanti</li>
        <li class="text-xl">Escultas – Unidad Ultreia</li>
        <li class="text-xl">Rovers – Comunidad Kune</li>
    </ul>
    <div class="flex flex-col gap-2">
        <h2 class="text-3xl text-bold">Castores</h2>
        <p class="text-xl">Los Castores son los niños y niñas de 6 a 8 años. Es la edad de la máxima ilusión por
            descubrirlo todo. Es también la primera vez que salen de casa y comienzan a acercarse a los demás.
            Contemplan con curiosidad todo lo que les rodea, desarrollando la creatividad.</p>
        <p class="text-xl">Los castores se organizan en “Colonias” donde aprenden a vivir en grupo y a participar
            activamente de las actividades junto a otros de su misma edad. El lema “Compartir” fomenta la igualdad y la
            solidaridad entre ellos.</p>
    </div>
    <div class="flex flex-col gap-2">
        <h2 class="text-3xl text-bold">Lobatos</h2>
        <p class="text-xl">Tras su paso por la Colonia y al cumplir los 8 años, niños y niñas entran a formar parte de
            la Manada de Lobatos.</p>
        <p class="text-xl">Su imaginación está al servicio de una incesante actividad y del juego, su medio de aprender.
            Su compromiso es “Haremos lo mejor”.De nuevo es el desarrollo de la imaginación la que permite al educador
            hablar un lenguaje accesible para el niño.</p>
        <p class="text-xl">En esta etapa los niños y niñas aprenden a convivir en pequeños grupos de seis, llamados
            “seisenas”, en las que se reparten responsabilidades y aprenden a trabajar juntos, desplegando sus hábitos
            sociales y responsabilizándose de su tarea.</p>
    </div>
    <div class="flex flex-col gap-2">
        <h2 class="text-3xl text-bold">Scouts / Troperos</h2>
        <p class="text-xl">Al alcanzar los once años llega el momento de entrar a formar parte de la Sección Scout.</p>
        <p class="text-xl">Es el tiempo de la afirmación de uno mismo; el deseo de aventura se hace más patente, se
            desarrolla el carácter, las actitudes y la capacidad de vivir en grupo, enriqueciéndose personalmente.</p>
        <p class="text-xl">En la Sección Scout se trabaja en Patrullas, donde se potencia el compromiso personal. Eligen
            sus propios líderes y programan las actividades, con apoyo de sus educadores. Los chicos y chicas adquieren
            así sus propias responsabilidades y aprenden a valorar el trabajo en equipo.</p>
        <p class="text-xl">La imaginación deja paso a la sed de aventuras. El contacto directo con la Naturaleza y las
            destrezas para desenvolverse en el medio natural les permiten ir más allá en la formación de sí mismos y de
            su personalidad.</p>
    </div>
    <div class="flex flex-col gap-2">
        <h2 class="text-3xl text-bold">Escultas</h2>
        <p class="text-xl">Cumplidos los 14 años, los chicos y chicas comienzan a trabajar en la Unidad Esculta.</p>
        <p class="text-xl">Este es un momento crucial para las ideas, los interrogantes y las ambiciones. Los chicos y
            las chicas empiezan a perfilar su personalidad definitiva.</p>
        <p class="text-xl">El grupo cobra enorme importancia y se hacen hombres y mujeres activos. No aceptan el ocio
            pasivo y dirigido que se oferta a los jóvenes. Elaboran sus propios proyectos, abiertos al servicio
            comunitario, se abren a la sociedad y afianzan su pertenencia y su responsabilidad ciudadana.</p>
        <p class="text-xl">Conciben sus propios “proyectos de cambio”. Son ellos y ellas los verdaderos protagonistas de
            su futuro. Conciben la “Empresa o Proyecto” desde la idea hasta la ejecución, con la mera supervisión del
            educador adulto. Se responsabilizan de sus acciones y se impulsan en su propia motivación.</p>
    </div>
    <div class="flex flex-col gap-2">
        <h2 class="text-3xl text-bold">Rovers</h2>
        <p class="text-xl">La última etapa de la educación scout es el Clan Rover formado por jóvenes a partir de 17
            años. Ser Rover es vivir intensamente cada paso, tomar las riendas y hacer un proyecto de su propia vida,
            empeñarse en cambiar el mundo y, sobre todo, creer que es posible.</p>
        <p class="text-xl">Se comprometen colectiva e individualmente en acciones de cambio y se esfuerzan por crecer al
            tiempo como persona. Elaboran sus propios proyectos personales, se marcan metas y se ayudan mutuamente a
            madurar y crecer como adultos comprometidos.</p>
        <p class="text-xl">Colectivamente, se esfuerzan por hacer suya la máxima scout de “tratar de dejar el mundo en
            mejores condiciones de cómo lo encontramos”. Son jóvenes comprometidos socialmente, dinamizan, conciencian y
            ayudan a los demás con la esperanza de cambiar el mundo.</p>
    </div>
</main>

<x-Pie/>

</body>
</html>
