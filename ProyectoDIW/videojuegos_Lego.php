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

                                <section class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HHgDZzuoIOM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
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
                                    
                                    <div class="text-center">
                                        <?php
                                            //Estrellas
                                            $nombre = "v1";
                                            crear($nombre);
                                        ?>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_lego_002.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Lego Marvel Vengadores</h2>    
                                    <p>
                                        Lego Marvel Vengadores es un videojuego de acción-aventura Lego desarrollado por TT Games y publicado por
                                        Warner Bros. Interactive Entertainment, para PlayStation 4, PlayStation 3, PlayStation Vita, Nintendo 3DS ,
                                        Wii U, Xbox One, Xbox 360 y Microsoft Windows. El videojuego es un spin-off y la segunda entrega de la
                                        franquicia Lego Marvel y seguirá las historias de las películas The Avengers y Avengers: Age of Ultron
                                        así también como Capitán América: el primer vengador, Iron Man 3, Thor: The Dark World, y
                                        Captain America: The Winter Soldier, basados en las películas originales del Universo Cinematográfico
                                        de Marvel. Los personajes incluyen al Capitán América, Iron Man, Hulk, Viuda Negra, Ojo de Halcón,
                                        la Bruja Escarlata, Quicksilver, Thor, Ultrón, Loki, Soldado de Invierno, Halcón, Visión y
                                        Máquina de Guerra y algunos personajes menos conocidos como el Dinosaurio Diablo y Fin Fang Foom.
                                        Incluye los personajes del equipo de Vengadores junto con muchos otros. El juego fue lanzado
                                        el 26 de enero de 2016.
                                    </p>
 
                                </section>

                                <section class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FJrGmo_BEXY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
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
                                            <td>26 de enero de 2016</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>Microsoft Windows
                                                Nintendo 3DS
                                                PlayStation 3
                                                PlayStation 4
                                                PlayStation Vita
                                                Wii U
                                                Xbox 360
                                                Xbox One
                                            </th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Dos jugadores</th>
                                        </tr> 
                                        	
                                    </table>
                                    
                                    <div class="text-center">
                                        <?php
                                            //Estrellas
                                            $nombre = "v1";
                                            crear($nombre);
                                        ?>
                                    </div>
                                    
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 3 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_lego_003.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Lego Marvel Super Heroes 2</h2>    
                                    <p>
                                        Lego Marvel Super Heroes 2 es un videojuego de acción-aventura desarrollado por TT Games y publicado por Warner Bros.
                                        Interactive Entertainment para Microsoft Windows, PlayStation 4, Nintendo Switch y Xbox One.​ Es la secuela de
                                        Lego Marvel Super Heroes y la tercera entrega de la franquicia Lego Marvel.
                                        Con la jugabilidad básica y siguiendo el mismo estilo de los últimos títulos de Lego,
                                        el juego cuenta con la capacidad de manipular el tiempo y un modo de lucha de cuatro
                                        jugadores superhéroes competitivo. La historia de Lego Marvel Super Heroes 2 se
                                        centrará alrededor de superhéroes de diferentes épocas y realidades del Universo Marvel 
                                        mientras luchan contra el tiempo que viaja Kang el Conquistador en una batalla a través
                                        del espacio y el tiempo.
                                        El juego fue lanzado para macOS el 2 de agosto de 2018, con un port desarrollado por
                                        la compañía inglesa Feral Interactive.
                                    </p>
                                </section>

                                <section class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TZp3WsNXIUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
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
                                            <td>TT Games</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>14 de noviembre de 2017</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                                <td>Microsoft Windows
                                                    PlayStation 4
                                                    Nintendo Switch
                                                    Xbox One
                                                    macOS
                                                </td>
                                            
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    
                                    <div class="text-center">
                                        <?php
                                            //Estrellas
                                            $nombre = "v1";
                                            crear($nombre);
                                        ?>
                                    </div>
                                    
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

