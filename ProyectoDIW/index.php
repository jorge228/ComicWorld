<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
            include("includes/contenidoHead.php");
            include("includes/carousel.php");
            include("includes/videos.php");
        ?>
        <link href="sitemap.xml"/>
        <script src='js/controlesVideo.js'></script>
    </head>
    <body>

        <!--MENU DE NAVEGACION-->
        <?php include("includes/menuNav.php"); ?>

        <!--CARRUSEL-->
        <?php addCarousel("carrusel1", "carrusel2", "carrusel3", "carrusel4"); ?>

        <!-- VIDEO HOME -->
        <section class="container-fluid mt-3 m-4">
            <article class="row">
                <!--Primera columna-->
                <div class="col-12 col-sm-2"></div>
                <div class="col-12 col-sm-8">
                    <?php video("homeVideo.mp4", "mp4", "16by9") ?>
                </div>
                <div class="col-12 col-sm-2"></div>
            </article>
        </section>

        <!--TARJETAS-->
        <section class="container-fluid mt-3">
            <!--Tarjetas-->
            <article class="row">

                <!--Primera columna-->
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 ">
                    <div class="card h-100  border-0 shadow">
                        <img src="assets/img/home/home_Comics.jpg" class="card-img-top p-3"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Cómics</h4>
                            <p>¿Te gustan los cómics? ¡Has venido al sitio indicado! En ComicWorld podrás consultar información de los últimos cómics de tus personajes favoritos.</p>
                        </div>
                    </div>
                </div>

                <!--Segunda columna-->
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 ">
                    <div class="card h-100 border-0 shadow">
                        <img src="assets/img/home/home_peliculas.jpg" class="card-img-top p-3"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Películas</h4>
                            <p>Información sobre las últimas películas del Universo Cinematográfico de Marvel y el DC Extended Universe en nuestra sección de películas</p>
                        </div>
                    </div>
                </div>
                <!--Tercera columna-->
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 ">
                    <div class="card h-100 border-0 shadow">
                        <img src="assets/img/home/home_Videojuegos.jpg" class="card-img-top p-3"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Videojuegos</h4>
                            <p>Para los gamers: los últimos videojuegos de superhéroes en todas las consolas.</p>
                        </div>
                    </div>
                </div>
                
                <!--Cuarta columna-->
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 ">
                    <div class="card h-100 border-0 shadow p-3">
                        <img src="assets/img/home/home_Personajes.jpg" class="card-img-top p-3"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Personajes</h4>
                            <p>¿No conoces la historia de tu personaje favorito? ¡Entra en nuestra sección de personajes e infórmate! </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <?php if(isset($_SESSION["usuario"])) echo $_SESSION["usuario"]; ?>
        <!--Footer-->
        <?php include("includes/footer.php"); ?>

    </body>
</html>

