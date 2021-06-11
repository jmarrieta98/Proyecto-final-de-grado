<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @livewireStyles

    <title>Descubriendo el escultismo</title>
</head>

<body class="flex flex-col gap-4">

<x-Menu/>

<main class="container  grid grid-cols-1 md:grid-cols-2 gap-4 px-2">
    <h1 class="text-6xl text-purple-800 md:col-span-2 text-center">Descubriendo el escultismo</h1>
    <div>
        <p class="text-xl">El escultismo (del inglés scouting, que significa explorar) es un movimiento
            infantil y juvenil que busca educar a niños y jóvenes, con base en valores y juegos al aire
            libre como método de enseñanza no formal, que actualmente está presente en 165 países y
            territorios, con aproximadamente 40.000.000 de miembros en todo el mundo, agrupados en distintas
            organizaciones.
        </p>
        <p class="text-xl">El Movimiento Scout nació como una manera de combatir la delincuencia en la
            Inglaterra de principios del siglo xx, buscando el desarrollo físico, espiritual y mental de los
            jóvenes para que llegaran a ser «buenos ciudadanos» a través de un método específico inspirado
            en la vida militar y al aire libre cuyas directrices serían establecidas en el manual Escultismo
            para muchachos (1908), del General británico Robert Stephenson Smith Baden-Powell of Gilwell,
            que en 1909 fue nombrado caballero y recibió el título de sir, pasando a ser en 1929 lord
            Baden-Powell, I barón de Gilwell.
        </p>
        <p class="text-xl">En 1907 se realizó el primer campamento experimental en la isla de Brownsea, Bahía
            de Poole, Dorset, en la costa sur de Inglaterra, en el que participaron 20 muchachos separados
            en 4 patrullas; «Lobos», «Toros», «Chorlitos» y «Cuervos»; hijos de conocidos militares que
            hicieron campaña, en África o Asia, con Baden-Powell y de obreros de Londres. Como consecuencia
            del éxito del nuevo sistema, Baden-Powell escribió un libro donde recopilaba experiencias y
            anécdotas relacionadas con esta práctica, lo que terminó siendo el ya mencionado Escultismo para
            muchachos.
        </p>
    </div>
    <div class="flex items-center justify-center">
        <img class="imagen-M" src="img/badenpowell.png" alt="Baden Powell">
    </div>
    <div class="flex items-center justify-center">
        <img class="imagen-M" src="img/flordelis.png" alt="Flor de lis">
    </div>

    <div>
        <p class="text-xl">El Movimiento Scout pone énfasis en las actividades lúdicas con objetivos
            educativos, en las actividades al aire libre y en el servicio comunitario, estas últimas con el
            objeto de formar el carácter y enseñar de forma práctica valores humanos, al contrario de la
            formación académica teórica, por eso el énfasis recae en el ejemplo del monitor. Toma como base
            de su sistema educativo el «lobatismo» en el caso de los niños entre 8 y 11 años (ambiente de
            familia feliz) y el sistema de patrullas (pequeños grupos de amigos, basado en el concepto de
            pandilla). A su vez, dependiendo del grupo scout y la asociación correspondiente a cada país,
            existen unidades mayores de jóvenes Caminantes o Rovers, así como niños más pequeños como
            Castores, en edades comprendidas entre 6 y 8 años.
        </p>
    </div>

</main>

<x-Pie/>

</body>

</html>
