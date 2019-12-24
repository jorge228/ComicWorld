<!DOCTYPE html>
<html>

<head>
    <?php include "includes/contenidoHead.php"; ?>
    <?php include "includes/valoracion.php"; ?>
</head>
<title>DC</title>

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
                    <a title="peli1" href="#peli1"><img src="assets/img/peliculas/batmanVsSupermanB.jpg" class="d-block w-100" alt="imagen1" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli2" href="#peli2"><img src="assets/img/peliculas/escuadronB.jpg" class="d-block w-100" alt="imagen2"></a>
                </div>
                <div class="carousel-item">
                    <a title="peli3" href="#peli3"><img src="assets/img/peliculas/ligaB.jpg" class="d-block w-100" alt="imagen3" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli4" href="#peli4"><img src="assets/img/peliculas/jokerB.jpg" class="d-block w-100" alt="imagen4"></a>
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
                <img src="assets/img/peliculas/batmanVsSupermanC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli1" class="ancla">
                    <h1 class="font-weight-bold text-warning">Batman Vs. Superman: El Amanecer de la Justicia</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>23 de marzo de 2016</p>
                    <h3 class="text-success">Director</h3>
                    <p>Zack Snyder</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Ante el temor de las acciones que pueda llevar a cabo Superman, el vigilante de Gotham City aparece para poner a raya al superhéroe de Metrópolis, mientras que la opinión pública debate cuál es realmente el héroe que necesitan. El hombre de acero y Batman se sumergen en una contienda territorial, pero las cosas se complican cuando una nueva y peligrosa amenaza surge rápidamente, poniendo en jaque la existencia de la humanidad.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa1" aria-expanded="false">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa1">
                    <div class="card card-body bg-secondary">
                        <p>Tiene dos partes bien diferenciadas: una, sombría y virulenta; otra, titánica y espectacular. Puede satisfacer a los amantes del puro espectáculo devastador y a los seguidores del trazo oscuro de los superhéroes.</p>
                        <p>Quim Casas: Diario El Periódico</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>La tabla de salvación de 'BvS' es contar con Ben Affleck como caballero oscuro gruñón, temerario y fascista en lo que, esencialmente, es una aventura de Batman: el desarrollo de Superman es nulo.</p>
                        <p>Daniel De Partearroyo: Cinemanía</p>
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
                <img src="assets/img/peliculas/escuadronC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli2" class="ancla">
                    <h1 class="font-weight-bold text-warning">Escuadrón Suicida</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>5 de agosto de 2016</p>
                    <h3 class="text-success">Director</h3>
                    <p>David Ayer</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Mientras el gobierno de EE.UU no tiene claro cómo responder a una visita alienígena a la Tierra con intenciones malignas, Amanda 'El Muro' Waller (Viola Davis), la líder de la agencia secreta A.R.G.U.S., ofrece una curiosa solución: reclutar a los villanos más crueles, con habilidades letales e incluso mágicas, para que trabajen para ellos. Sin demasiadas opciones a dar una negativa, los ocho supervillanos más peligrosos del mundo acceden a colaborar con el Ejecutivo en peligrosas misiones secretas, casi suicidas, para así lograr limpiar su expediente.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa2" aria-expanded="false" aria-controls="colapsa2">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa2">
                    <div class="card card-body bg-secondary">
                        <p>La decepción ha sido mayúscula. David Ayer no demuestra pasión por lo que cuenta, más bien abulia y frialdad. Superhéroes prediseñados con mimo crematístico pero sin alma ni ápice de carisma.</p>
                        <p>Jordi Batlle Caminal: Fotogramas</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>Persigue la nihilista fanfarronería de 'Deadpool' y la caprichosa anarquía de 'Guardianes de la galaxia', pero tropieza con sus propios pies. Para ser una película sobre una banda de temibles forajidos, 'Suicide Squad' tiene un enorme cuidado de no pasarse de la raya.</p>
                        <p>A. O. Scott: The New York Times</p>
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
                <img src="assets/img/peliculas/ligaC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli3" class="ancla">
                    <h1 class="font-weight-bold text-warning">Liga de la Justicia</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>16 de noviembre de 2017</p>
                    <h3 class="text-success">Director</h3>
                    <p>Zack Snyder</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Motivado por la fe que había recuperado en la humanidad e inspirado por la acción altruista de Superman, Bruce Wayne recluta la ayuda de su nueva aliada, Diana Prince, para enfrentarse a un enemigo aún mayor. Juntos, Batman y Wonder Woman se mueven rápidamente para intentar encontrar y reclutar un equipo de metahumanos que combata esta nueva amenaza. El problema es que a pesar de la formación de esta liga de héroes sin precedentes –Batman, Wonder Woman, Aquaman, Cyborg y Flash– puede que sea demasiado tarde para salvar el planeta de una amenaza de proporciones catastróficas.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa3" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa3">
                    <div class="card card-body bg-secondary">
                        <p>Los creadores enfrentan al grupo de estrellas de la casa con uno de los villanos más inanes y ridículos del reciente cine de superhéroes. Es una prueba de cargo más para los detractores de la excesiva ola de cine superheroico.</p>
                        <p>Javier Ocaña: Diario El Pais</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>La cinta expone sus materiales de una forma tan torpe y tan estruendosa a la vez, que su visionado requiere tanto esfuerzo como el de una de Béla Tarr. Incoherente, sin carisma y llena de costurones.</p>
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
                <img src="assets/img/peliculas/jokerC.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli4" class="ancla">
                    <h1 class="font-weight-bold text-warning">Joker</h1>
                </a>
                <article>
                    <h3 class="text-success">Fecha de estreno</h3>
                    <p>4 de octubre de 2019</p>
                    <h3 class="text-success">Director</h3>
                    <p>Todd Phillips</p>
                    <h3 class="text-success">Sinopsis</h3>
                    <p>Arthur Fleck (Phoenix) vive en Gotham con su madre, y su única motivación en la vida es hacer reír a la gente. Actúa haciendo de payaso en pequeños trabajos, pero tiene problemas mentales que hacen que la gente le vea como un bicho raro. Su gran sueño es actuar como cómico delante del público, pero una serie de trágicos acontecimientos le hará ir incrementando su ira contra una sociedad que le ignora.</p>
                </article>
                <!-- INICIO BOTÓN-->
                <p class="text-center">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa4" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa4">
                    <div class="card card-body bg-secondary">
                        <p>Joaquin Phoenix convierte las carcajadas en tos nerviosa, y la sonrisa en el primer síntoma de una enfermedad que se extiende mucho más allá de su cuerpo. Lo mejor de ‘Joker’ es que detrás esconde a un cineasta utilizando el universo prestado... y que nunca es la adaptación la que le está utilizando a él. Una película amoral, que nos recuerda que la anarquía tiene un componente humorístico irresistible, incluso liberador.</p>
                        <p>Victor Esquirol: FilmAffinity</p>
                    </div>
                    <div class="card card-body bg-secondary">
                        <p>A mil millas de la previsión, Phillips desmantela al Joker, lo reconstruye, lo convierte en algo triste, patético y brutal. Tan cierto es que «Joker» es una gran película, como que no se deja disfrutar fácilmente.</p>
                        <p>Oti Rodríguez Marchante: Diario ABC</p>
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