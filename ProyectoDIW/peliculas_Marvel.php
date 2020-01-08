<!DOCTYPE html>
<html>

<head>
    <?php include "includes/contenidoHead.php"; ?>
    <?php include "includes/valoracion.php"; ?>
</head>
<title>MCU</title>

<body>

    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

    <!--CARRUSEL-->
    <section class="container-fluid p-0">
        <!-- intervalo 4000 y que no se pare si entra el ratón sobre la imagen-->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a title="peli1" href="#peli1"><img src="assets/img/peliculas/capitanaB.jpg" class="d-block w-100" alt="imagen1" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli2" href="#peli2"><img src="assets/img/peliculas/capitanB.jpg" class="d-block w-100" alt="imagen2"></a>
                </div>
                <div class="carousel-item">
                    <a title="peli3" href="#peli3"><img src="assets/img/peliculas/thorB.jpg" class="d-block w-100" alt="imagen3" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli4" href="#peli4"><img src="assets/img/peliculas/guardianesB.jpg" class="d-block w-100" alt="imagen4"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

    <!--CUERPO-->
    <!-- primera película-->
    <section class="container-fluid">
        <div class="row mt-4">
            <!--Para centarla: align-self-center-->
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/peliculas/capitanaC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli1" class="ancla">
                    <h1 class="font-weight-bold text-warning">Capitana Marvel</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>8 de marzo de 2019</p>
                    <h3 class="text-success">Director</h3>
                    <p>Anna Boden, Tyan Fleck</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>La historia sigue a Carol Danvers mientras se convierte en uno de los héroes más poderosos del universo, cuando la Tierra se encuentra atrapada en medio de una guerra galáctica entre dos razas alienígenas. Situada en los años 90, 'Capitana Marvel' es una historia nueva de un período de tiempo nunca antes visto en la historia del Universo Cinematográfico de Marvel.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa1" aria-expanded="false">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa1">
                    <div class="card card-body bg-secondary">
                        <p>Lo único que importa de verdad es el contenido ideológico. El resto, poco importa. Anivel visual resulta predecible y vvulgar, contiene graves problesmas de ritmo y el resultado no deja de ser agridulce.</p>
                        <p>Beatriz Martínez: Diario El Periódico</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>Tiene grandes virtudes y mejores momentos. Da por superados los discursos feministas en este tipo de historias y se dedica directamente a aplicarlos. Un personaje estupendo que, quizás, merecía una película mucho más redonda. </p>
                        <p>Mireia Mullor: Fotogramas</p>
                    </div>
                </div>
                <!-- FIN BOTÓN -->
                <!-- VALORACIÓN -->
                <div class="text-center">
                    <p>Envíanos tu valoración:</p>
                    <?php $nombre = "peli1";
                    crear($nombre) ?>
                </div>
            </div>
        </div>
    </section>

    <!-- segunda película-->
    <section class="container-fluid">
        <div class="row mt-4">
            <!--Para centarla: align-self-center-->
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/peliculas/capitanC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli2" class="ancla">
                    <h1 class="font-weight-bold text-warning">Capitán América: El Primer Vengador</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>5 de agosto de 2011</p>
                    <h3 class="text-success">Director</h3>
                    <p>Joe Johnston</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Nacido durante la Gran Depresión (años 30), Steve Rogers creció como un chico enclenque en una familia pobre. Horrorizado por las noticias que llegaban de Europa sobre los nazis, decidió enrolarse en el ejército; sin embargo, debido a su precaria salud, fue rechazado una y otra vez. Enternecido por sus súplicas, el General Chester Phillips le ofreció la oportunidad de participar en un experimento especial: la "Operación Renacimiento". Tras administrarle el “Suero Super-Soldado” y bombardearlo con “vitarrayos”, el cuerpo de Steve se hace perfecto. A continuación, se sometió a un intensivo programa de entrenamiento físico y táctico. Tres meses después, le encomendaron su primera misión como Capitán América. Armado con un escudo indestructible, emprenderá la guerra contra el Mal como centinela de la libertad y líder de los Vengadores.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa2" aria-expanded="false" aria-controls="colapsa2">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa2">
                    <div class="card card-body bg-secondary">
                        <p>Un más que digno ‘blockbuster’ veraniego. Un homenaje a ese cine clásico ambientado en el periodo de la Segunda Guerra Mundial, una cinta con vocación retro que incorpora un superhéroe dentro.</p>
                        <p>Eulalia Iglesias: Diario Público</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>'Captain America: The First Avenger' es diversión pulp de la vieja escuela, dura y sentimental. La película no es, realmente, nada que no hayas visto antes, pero es la definición de un blockbuster competente, coherente y cumplidor.</p>
                        <p>Owen Gleiberman: Entertainment Weekly</p>
                    </div>
                </div>
                <!-- FIN BOTÓN -->
                <!-- VALORACIÓN -->
                <div class="text-center">
                    <p>Envíanos tu valoración:</p>
                    <?php $nombre = "peli2";
                    crear($nombre) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- tercera película-->
    <section class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/peliculas/thorC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli3" class="ancla">
                    <h1 class="font-weight-bold text-warning">Thor: Ragnarok</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>10 de octurbre de 2017</p>
                    <h3 class="text-success">Director</h3>
                    <p>Taika Waititi</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Thor está preso al otro lado del universo sin su poderoso martillo y se enfrenta a una carrera contra el tiempo. Su objetivo es volver a Asgard y parar el Ragnarok porque significaría la destrucción de su planeta natal y el fin de la civilización Asgardiana a manos de una todopoderosa y nueva amenaza, la implacable Hela. Pero, primero deberá sobrevivir a una competición letal de gladiadores que lo enfrentará a su aliado y compañero en los Vengadores, ¡el Increíble Hulk!.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa3" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa3">
                    <div class="card card-body bg-secondary">
                        <p>A la tercera han dado en el clavo. 'Thor: Ragnarok' es una comedia de superhéroes desinhibida y efervescente, divertida e irónica consigo misma. La película más luminosa y colorista de la saga.</p>
                        <p>Javier Ocaña: Diario El Pais</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>Es la mejor entrega de su serial, pero uno ignora si no llegó a ser una gran película (a secas) debido a sus firmantes o a esa presencia ominosa que anida en ciertas salas de montaje. Sospechamos que se trata de lo segundo.</p>
                        <p>Yago García: Cinemanía</p>
                    </div>
                </div>
                <!-- FIN BOTÓN -->
                <!-- VALORACIÓN -->
                <div class="text-center">
                    <p>Envíanos tu valoración:</p>
                    <?php $nombre = "peli3";
                    crear($nombre) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- cuarta película-->
    <section class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/peliculas/guardianesC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli4" class="ancla">
                    <h1 class="font-weight-bold text-warning">Guardianes de la Galaxia</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>14 de agosto de 2014</p>
                    <h3 class="text-success">Director</h3>
                    <p>James Gunn</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>El temerario aventurero Peter Quill es objeto de un implacable cazarrecompensas después de robar una misteriosa esfera codiciada por Ronan, un poderoso villano cuya ambición amenaza todo el universo. Para poder escapar del incansable Ronan, Quill se ve obligado a pactar una complicada tregua con un cuarteto de disparatados inadaptados: Rocket, un mapache armado con un rifle, Groot, un humanoide con forma de árbol, la letal y enigmática Gamora y el vengativo Drax the Destroyer. Pero cuando Quill descubre el verdadero poder de la esfera, deberá hacer todo lo posible para derrotar a sus extravagantes rivales en un intento desesperado de salvar el destino de la galaxia. </p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa4" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa4">
                    <div class="card card-body bg-secondary">
                        <p>Es una película sin asomo de grasa, toda músculo e ingenio de principio a fin, sardónica y en feliz movimiento perpetuo.</p>
                        <p>Jordi Costa: Diario El País</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>Sus guionistas han creado un universo bien articulado con unos escenarios distintos y unos personajes convincentes, con los que te puedes identificar, entregados a una emocionante búsqueda de la redención.</p>
                        <p>Justin Lowe: The Hollywood Reporter</p>
                    </div>
                </div>
                <!-- FIN BOTÓN -->
                <!-- VALORACIÓN -->
                <div class="text-center">
                    <p>Envíanos tu valoración:</p>
                    <?php $nombre = "peli4";
                    crear($nombre) ?>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>