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

    .valoracion {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .valoracion input {
        position: absolute;
        top: -100px;
    }


    .valoracion label {
        float: right;
        color: #c1b8b8;
        font-size: 30px;
    }

    .valoracion label:hover,
    .valoracion label:hover~label,
    .valoracion input:checked~label {
        color: #ffff00;
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

    <div class="container">
        <div class="row">
            <div class="col-4 prueba card-body"> <img src="assets/img/pCapitanaMarvelCartel.jpg">
            </div>
            <div class="col-8 prueba">
                <A name="capitanAmerica">
                    <h2>Capitán América: El primer Vengador</h2>
                </A>
                título sinopsis valoraciones críticas...
                <div class="valoracion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <!--
    --><label for="radio1">★</label>
                    <!--
    --><input id="radio2" type="radio" name="estrellas" value="4">
                    <!--
    --><label for="radio2">★</label>
                    <!--
    --><input id="radio3" type="radio" name="estrellas" value="3">
                    <!--
    --><label for="radio3">★</label>
                    <!--
    --><input id="radio4" type="radio" name="estrellas" value="2">
                    <!--
    --><label for="radio4">★</label>
                    <!--
    --><input id="radio5" type="radio" name="estrellas" value="1">
                    <!--
    --><label for="radio5">★</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 prueba card-body"> <img src="assets/img/pCapitanaMarvelCartel.jpg">
            </div>
            <div class="col-8 prueba">
                <A name="capitanaMarvel">
                    <h2>Capitana Marvel</h2>
                </A>
                título sinopsis valoraciones críticas...
            </div>
        </div>
    </div>


    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>