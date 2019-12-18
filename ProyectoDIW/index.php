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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>

                <!--Segunda columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-top img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!--Tercera columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-bottom img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                
                <!--Cuarta columna-->
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/imagenesTarjetas.PNG" class="card-img-bottom img-thumbnail border-0"/>
                        <div class="card-body text-justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </article>
            
            <!--Videos-->
            <article class="row">
                <div class="col-12 col-md-4">
                    <?php video("assets/videos/mikethefrog.mp4", "mp4"); ?>
                </div>
                <div class="col-12 col-md-4">
                    <?php video("assets/videos/mikethefrog.mp4", "mp4"); ?>
                </div>
                <div class="col-12 col-md-4">
                    <?php video("assets/videos/mikethefrog.mp4", "mp4"); ?>
                </div>
            </article>
        </section>

        <?php include("includes/footer.php"); ?>

    </body>
</html>

