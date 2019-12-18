<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/contenidoHead.php"); ?>
        <?php include("includes/banners.php"); ?>
        <?php include("includes/valoracion.php"); ?>
        <?php include("includes/videos.php"); ?>

        <script src="js/controlesVideo.js"></script>
    </head>
    <body>
        <!--MENU DE NAVEGACION-->
        <?php include("includes/menuNav.php"); ?>

        <!-- Banner -->
        <?php banner("VidLego", "LEGO MARVEL SUPERHEROES");?>    
        
        <div class="container-fluid">

            <!-- Fila 1 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_lego_001.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Lego Batman 2: DC Super Héroes</h2>    
                                    <p>
                                        Lego Batman 2 es un videojuego de Lego y DC comics estrenado en junio de 2012,
                                        y es la secuela de Lego Batman: El Videojuego (2008). Fue desarrollado por Traveller's Tales y
                                        comercializado por Warner Bros. Interactive Entertainment. Hay versiones para PlayStation 3,
                                        PlayStation Vita, Nintendo 3DS, Wii, Nintendo DS, Xbox 360, y Microsoft Windows. Una gran
                                        variedad de personajes de DC Comics dentro y fuera de la continuidad de Batman serán personajes jugables. Lego Batman 2: DC Super Heroes también cuenta con diálogo, el segundo juego Lego de Traveller's Tales en hacerlo.
                                    </p>
 
                                </section>

                                <section class="text-center">
                                    <?php video("mikethefrog.mp4", "mp4") ?>
                                </section>

                            </div>
                            <div class="col-12 col-sm-4">
                                <section class="tablaDatos">
                                    
                                    <!--Tabla datos-->
                                    <table class="table table-bordered table-lg p-4">
                                        <thead class="bg-success">
                                            <tr class="text-center">
                                                <th colspan="2"><h3 class=" text-light">Información General</h3></th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th>Desarrollado por:</th>
                                            <td>Traveller's Tales</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>19 de junio de 2012</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>PlayStation 3, PlayStation Vita, Wii, Xbox 360, Nintendo 3DS, Nintendo DS, Microsoft Windows</th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    
                                    <?php
                                        //Estrellas
                                        $nombre = "v1";
                                        crear($nombre);
                                    ?>
                                    
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_lego_001.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Lego Batman 2: DC Super Héroes</h2>    
                                    <p>
                                        Lego Batman 2 es un videojuego de Lego y DC comics estrenado en junio de 2012,
                                        y es la secuela de Lego Batman: El Videojuego (2008). Fue desarrollado por Traveller's Tales y
                                        comercializado por Warner Bros. Interactive Entertainment. Hay versiones para PlayStation 3,
                                        PlayStation Vita, Nintendo 3DS, Wii, Nintendo DS, Xbox 360, y Microsoft Windows. Una gran
                                        variedad de personajes de DC Comics dentro y fuera de la continuidad de Batman serán personajes jugables. Lego Batman 2: DC Super Heroes también cuenta con diálogo, el segundo juego Lego de Traveller's Tales en hacerlo.
                                    </p>
 
                                </section>

                                <section class="text-center">
                                    <?php video("mikethefrog.mp4", "mp4") ?>
                                </section>

                            </div>
                            <div class="col-12 col-sm-4">
                                <section class="tablaDatos">
                                    
                                    <!--Tabla datos-->
                                    <table class="table table-bordered table-lg p-4">
                                        <thead class="bg-success">
                                            <tr class="text-center">
                                                <th colspan="2"><h3 class=" text-light">Información General</h3></th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th>Desarrollado por:</th>
                                            <td>Traveller's Tales</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>19 de junio de 2012</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>PlayStation 3, PlayStation Vita, Wii, Xbox 360, Nintendo 3DS, Nintendo DS, Microsoft Windows</th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    
                                    <?php
                                        //Estrellas
                                        $nombre = "v1";
                                        crear($nombre);
                                    ?>
                                    
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 3 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_lego_001.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Lego Batman 2: DC Super Héroes</h2>    
                                    <p>
                                        Lego Batman 2 es un videojuego de Lego y DC comics estrenado en junio de 2012,
                                        y es la secuela de Lego Batman: El Videojuego (2008). Fue desarrollado por Traveller's Tales y
                                        comercializado por Warner Bros. Interactive Entertainment. Hay versiones para PlayStation 3,
                                        PlayStation Vita, Nintendo 3DS, Wii, Nintendo DS, Xbox 360, y Microsoft Windows. Una gran
                                        variedad de personajes de DC Comics dentro y fuera de la continuidad de Batman serán personajes jugables. Lego Batman 2: DC Super Heroes también cuenta con diálogo, el segundo juego Lego de Traveller's Tales en hacerlo.
                                    </p>
 
                                </section>

                                <section class="text-center">
                                    <?php video("mikethefrog.mp4", "mp4") ?>
                                </section>

                            </div>
                            <div class="col-12 col-sm-4">
                                <section class="tablaDatos">
                                    
                                    <!--Tabla datos-->
                                    <table class="table table-bordered table-lg p-4">
                                        <thead class="bg-success">
                                            <tr class="text-center">
                                                <th colspan="2"><h3 class=" text-light">Información General</h3></th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th>Desarrollado por:</th>
                                            <td>Traveller's Tales</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>19 de junio de 2012</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>PlayStation 3, PlayStation Vita, Wii, Xbox 360, Nintendo 3DS, Nintendo DS, Microsoft Windows</th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    
                                    <?php
                                        //Estrellas
                                        $nombre = "v1";
                                        crear($nombre);
                                    ?>
                                    
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

        </div>

        <?php include("includes/footer.php"); ?>

    </body>
</html>

