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
        <!-- intervalo 2000 y que no se pare si entra el ratón sobre la imagen-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <!--
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
-->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a title="CapitanAmerica" href="#capitanAmerica"><img src="assets/img/f992x375.jpg" class="d-block w-100" alt="imagen1" /></a>
                </div>
                <div class="carousel-item">
                    <a title="CapitanaMarvel" href="#capitanaMarvel"><img src="assets/img/f992x375b.jpg" class="d-block w-100" alt="imagen2"></a>
                </div>
                <!--
                <div class="carousel-item">
                    <img src="b3.jpg" class="d-block w-100" alt="imagen3">
                </div>
                <div class="carousel-item">
                    <img src="i4.jpg" class="d-block w-100" alt="imagen4">
                </div>
-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!--CUERPO-->

    <section class="container-fluid">
        <div class="row mt-4">
            <!--Para centarla: align-self-center-->
            <div class="col-sm-4 card-body d-none d-sm-block">
                <!-- m3 -->
                <img src="assets/img/f250x350.jpg" class="card-img-top img-thumbnail">
            </div>
            <div class="col-sm-8">
                <a name="capitanAmerica" class="ancla" >
                    <h2 class="text-center font-weight-bold text-primary">Capitán América: El primer Vengador</h2>
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
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Críticas
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
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
                    <?php $nombre = "capitan";
                    crear($nombre) ?>
                </div>
            </div>
        </div>

        <!-- segunda película -->
        <div class="row">
            <div class="col-sm-4 card-body d-none d-sm-block">
                <img src="assets/img/f250x350b.jpg" class="card-img-top img-thumbnail border-0">
            </div>
            <div class="col-sm-8">
                <A name="capitanaMarvel" class="ancla">
                    <h2>Capitana Marvel</h2>
                </A>
                <h3>Fecha de estreno</h3>
                <p>8 de marzo de 2019</p>
                <h3>Director</h3>
                <p>Anna Boden, Ryan Fleck</p>
                <h3>Sinopsis</h3>
                <p>La historia sigue a Carol Danvers mientras se convierte en uno de los héroes más poderosos del universo, cuando la Tierra se encuentra atrapada en medio de una guerra galáctica entre dos razas alienígenas. Situada en los años 90, 'Capitana Marvel' es una historia nueva de un período de tiempo nunca antes visto en la historia del Universo Cinematográfico de Marvel.</p>
                <h3>Críticas</h3>
                <?php
                $nombre = "capitana";
                crear($nombre) ?>
            </div>
        </div>
        <!-- fin segunda peli -->

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