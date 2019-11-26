<?php include "includes/a_config.php"; ?>
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
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a title="peli1" href="#peli1"><img src="assets/img/f992x375a.jpg" class="d-block w-100" alt="imagen1" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli2" href="#peli2"><img src="assets/img/f992x375b.jpg" class="d-block w-100" alt="imagen2"></a>
                </div>
                <div class="carousel-item">
                    <a title="peli3" href="#peli3"><img src="assets/img/f992x375c.jpg" class="d-block w-100" alt="imagen3" /></a>
                </div>
                <div class="carousel-item">
                    <a title="peli4" href="#peli4"><img src="assets/img/f992x375d.jpg" class="d-block w-100" alt="imagen4"></a>
                </div>
                <div class="carousel-item">
                    <a title="peli5" href="#peli5"><img src="assets/img/f992x375e.jpg" class="d-block w-100" alt="imagen5"></a>
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
                <img src="assets/img/f250x350a.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli1" class="ancla">
                    <h2 class="text-center font-weight-bold text-primary">TÍTULO PELÍCULA 1</h2>
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
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa1" aria-expanded="false">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa1">
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
                <img src="assets/img/f250x350b.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli2" class="ancla">
                    <h2 class="text-center font-weight-bold text-primary">TÍTULO PELÍCULA 2</h2>
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
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
                <img src="assets/img/f250x350c.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli3" class="ancla">
                    <h2 class="text-center font-weight-bold text-primary">TÍTULO PELÍCULA 3</h2>
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
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa3" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa3">
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
                <img src="assets/img/f250x350d.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli4" class="ancla">
                    <h2 class="text-center font-weight-bold text-primary">TÍTULO PELÍCULA 4</h2>
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
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa4" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa4">
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
    <!-- quinta película-->
    <section class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/f250x350e.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="peli5" class="ancla">
                    <h2 class="text-center font-weight-bold text-primary">TÍTULO PELÍCULA 5</h2>
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
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa5" aria-expanded="false">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="colapsa5">
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="card card-body bg-secondary">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
                <!-- FIN BOTÓN -->
                <!-- VALORACIÓN -->
                <div class="text-center">
                    <p>Envíanos tu valoración:</p>
                    <?php $nombre = "peli5";
                    crear($nombre) ?>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>



<!--
    <div class="col-sm-4 d-none d-sm-block align-self-center text-center">
                
            class="img-thumbnail">
            <img src="assets/img/imagenesTarjetas.PNG" 
                
                </div>

-->