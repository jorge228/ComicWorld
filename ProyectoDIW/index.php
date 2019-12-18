<!DOCTYPE html>
<html>
    <head>
        <?php 
            include("includes/contenidoHead.php");
            include("includes/carousel.php");
            include("includes/videos.php");
        ?>

        <script src='js/controlesVideo.js'></script>
    </head>
    <body>

        <!--MENU DE NAVEGACION-->
        <?php include("includes/menuNav.php"); ?>

        <!--CARRUSEL-->
        <?php addCarousel("carrusel1", "carrusel2", "carrusel3", "carrusel4"); ?>
               
        <!--TARJETAS-->
        <section class="container-fluid mt-3">
            <!--Tarjetas-->
            <article class="row">

                <!--Primera columna-->

                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-top img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Cómics</h4>
                            <p>¿Te gustan los cómics? ¡Has venido al sitio indicado! En ComicWorld podrás consultar información de los últimos cómics de tus personajes favoritos.</p>
                        </div>
                    </div>
                </div>

                <!--Segunda columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-top img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Películas</h4>
                            <p>Información sobre las últimas películas del Universo Cinematográfico de Marvel y el DC Extended Universe en nuestra sección de películas</p>
                        </div>
                    </div>
                </div>
                <!--Tercera columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-bottom img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Videojuegos</h4>
                            <p>Para los gamers: los últimos videojuegos de superhéroes</p>
                        </div>
                    </div>
                </div>
                
                <!--Cuarta columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-bottom img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <h4 class="card-title text-center">Personajes</h4>
                            <p>¿No conoces la historia de tu personaje favorito? ¡Entra en nuestra sección de personajes e infórmate! </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <?php include("includes/footer.php"); ?>

    </body>
</html>

