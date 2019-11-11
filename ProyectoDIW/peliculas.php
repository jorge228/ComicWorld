<?php include "includes/a_config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "includes/contenidoHead.php"; ?>
</head>
<title>MCU</title>
<style>
    .prueba {
        bor der: 1px solid !important;
    }
    p{
        text-align: justify;
    }

</style>

<body>

    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

    <!--CARRUSEL-->
    <div class="container-fluid p-0">
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
                    <a title="imagen1" href="#capitanAmerica"><img src="assets/img/pCapitanAmerica.jpeg" class="d-block w-100" alt="imagen1" /></a>
                </div>
                <div class="carousel-item">
                    <a title="imagen1" href="#capitanaMarvel"><img src="assets/img/pCapitanaMarvel.jpg" class="d-block w-100" alt="imagen2"></a>
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
    </div>

    <!--CUERPO-->

    <div class="container-fluid mt-3">

        <div class="row">
            <div class="col-sm-4 prueba d-none d-sm-block"> <img src="assets/img/fCapAmeCar.jpg" class="rounded card-img-top img-thumbnail border-0">
            </div>
            <div class="col-sm-8 prueba">
                <A name="capitanAmerica">
                    <h2>Capitán América: El primer Vengador</h2>
                </A>
                <h3>Fecha de estreno</h3> 
                <p>5 de agosto de 2011</p>
                <h3>Director</h3> 
                <p>Joe Johnston</p>
                <h3>Sinopsis</h3> 
                <p>Nacido durante la Gran Depresión (años 30), Steve Rogers creció como un chico enclenque en una familia pobre. Horrorizado por las noticias que llegaban de Europa sobre los nazis, decidió enrolarse en el ejército; sin embargo, debido a su precaria salud, fue rechazado una y otra vez. Enternecido por sus súplicas, el General Chester Phillips le ofreció la oportunidad de participar en un experimento especial: la "Operación Renacimiento". Tras administrarle el “Suero Super-Soldado” y bombardearlo con “vitarrayos”, el cuerpo de Steve se hace perfecto. A continuación, se sometió a un intensivo programa de entrenamiento físico y táctico. Tres meses después, le encomendaron su primera misión como Capitán América. Armado con un escudo indestructible, emprenderá la guerra contra el Mal como centinela de la libertad y líder de los Vengadores.</p>
                <h3>Críticas</h3>
                 <?php include "includes/valoracion.php"; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 prueba card-body d-none d-sm-block"> <img src="assets/img/pCapitanaMarvelCartelO.jpg" class="card-img-top img-thumbnail border-0">
            </div>
            <div class="col-sm-8 prueba">
                <A name="capitanaMarvel">
                    <h2>Capitana Marvel</h2>
                </A>
                <h3>Fecha de estreno</h3> 
                <p>8 de marzo de 2019</p>
                <h3>Director</h3> 
                <p>Anna Boden, Ryan Fleck</p>
                <h3>Sinopsis</h3> 
                <p>La historia sigue a Carol Danvers mientras se convierte en uno de los héroes más poderosos del universo, cuando la Tierra se encuentra atrapada en medio de una guerra galáctica entre dos razas alienígenas. Situada en los años 90, 'Capitana Marvel' es una historia nueva de un período de tiempo nunca antes visto en la historia del Universo Cinematográfico de Marvel.</p>
                <h3>Críticas</h3>
                 <?php include "includes/valoracion.php"; ?>
            </div>
        </div>

    </div>


    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>