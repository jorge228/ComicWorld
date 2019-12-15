<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/contenidoHead.php"); ?>
        <?php include("includes/banners.php"); ?>
        <?php include("includes/valoracion.php"); ?>
    </head>
    <body>
        <!--MENU DE NAVEGACION-->
        <?php include("includes/menuNav.php"); ?>

        <!-- Banner -->
        <?php banner("Vid", "LEGO MARVEL SUPERHEROES");?>    
        
        <div class="container-fluid">

            <!-- Fila 1 -->
            <div class="row mt-4">
                <aside class="col-12 col-sm-3 align-self-center text-center">               
                    <img class="rounded shadow-lg m-3" src="assets/img/videojuegos_5_001.png" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="shadow card p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-center text-warning">
                                    <p>
                                    Lego Batman 2: DC Super Héroes</h2>    
                                    Lego Batman 2: DC Super Heroes es un videojuego de Lego y DC comics estrenado en junio de 2012,
                                    y es la secuela de Lego Batman: El Videojuego (2008). Fue desarrollado por Traveller's Tales y
                                    comercializado por Warner Bros. Interactive Entertainment. Hay versiones para PlayStation 3,
                                    PlayStation Vita, Nintendo 3DS, Wii, Nintendo DS, Xbox 360, y Microsoft Windows. Una gran
                                    variedad de personajes de DC Comics dentro y fuera de la continuidad de Batman serán personajes jugables. Lego Batman 2: DC Super Heroes también cuenta con diálogo, el segundo juego Lego de Traveller's Tales en hacerlo.
                                    </p>
                                </section>

                                <section>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>  
                                </section>

                                <section class="text-center">
                                    <img class="rounded shadow-lg m-3 img-thumbnail" src="assets/img/imagenesTarjetas.PNG" alt="imagen" />
                                </section>

                            </div>
                            <div class="col-12 col-sm-4 align-self-center">
                                <section class="text-center">
                                                   
                                    <table class="table table-sm border p-1 text-center mx-auto">                            
                                        <tr>
                                            <th class="bg-info text-warning">Desarrollado por:</th>
                                            <td class="text-secondary">Traveller's Tales</td>    
                                        </tr>
                                        <tr>
                                            <th class="bg-info text-warning">Fecha lanzamiento:</th>
                                            <td class="text-secondary">19 de junio de 2012</td>    
                                        </tr>
                                        <tr>
                                            <th class="bg-info text-warning">algo</th>
                                            <td class="text-secondary">algo mas</td>    
                                        </tr>
                                    </table>    
                                   
                                    <?php
                                        $nombre = "v1";
                                        crear($nombre);
                                    ?>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>  

                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="row mt-4">
                <div class="col-12 col-sm-9 order-2 order-sm-1">
                    <div class="shadow card p-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 order-1 order-sm-2 mx-auto align-self-center text-center">
                    <img class="rounded shadow-lg m-3" src="assets/img/videojuegos_5_001.png" alt="imagen" />
                </div>
            </div>

            <!-- Fila 3 -->
            <div class="row mt-4">
                <div class="col-12 col-sm-3 align-self-center text-center">               
                    <img class="rounded shadow-lg m-3" src="assets/img/videojuegos_5_001.png" alt="imagen" />
                </div>
                <div class="col-12 col-sm-9">
                    <div class="shadow card p-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <?php include("includes/footer.php"); ?>

    </body>
</html>

