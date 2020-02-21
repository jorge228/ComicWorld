<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html lang="es">
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
        <?php banner("VidInjustice", "SAGA INJUSTICE");?>    
        
        <div class="container-fluid">

            <!-- Fila 1 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_injustice_001.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Injustice: Gods Among Us</h2>    
                                    <p>
                                        Injustice: Gods Among Us (en español: Injustice: Dioses entre nosotros) es un videojuego 
                                        de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive. 
                                        El juego está protagonizado por los héroes y villanos del Universo DC; su historia está 
                                        ubicada en un universo alternativo, donde Superman se vuelve un dictador y forma un nuevo 
                                        orden mundial llamado el Régimen. Injustice fue anunciado oficialmente el 31 de mayo de 2012 
                                        y lanzado el 16 de abril de 2013 para PlayStation 3, Wii U y Xbox 360.2​ El principal 
                                        desarrollador del juego Ed Boon dijo que la idea principal era crear una nueva serie de 
                                        peleas fuera de Mortal Kombat, así como crear un nuevo modo de juego.
                                    </p>
 
                                </section>

                                <section class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hMkTQSbE6Bc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
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
                                            <td>NetherRealm Studios</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>16 de abril de 2013</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>PlayStation 3, Wii U</th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    

                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Fila 2 -->
            <div class="row mt-4">
                <aside class="p-4 col-12 col-sm-3 card-body">               
                    <img class="m-2 card-img-top img-thumbnail" src="assets/img/vid/vid_injustice_002.jpg" alt="imagen" />
                </aside>
                <div class="col-12 col-sm-9">
                    <article class="p-3">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <section>
                                    <h2 class="text-warning">Injustice 2</h2>    
                                    <p>
                                        Injustice 2 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado 
                                        por Warner Bros. Interactive Entertainment. Es la secuela del videojuego de 2013 Injustice: 
                                        Dioses entre nosotros. El juego fue lanzado a la venta en mayo de 2017 para las consolas 
                                        PlayStation 4 y Xbox One, y el 14 de noviembre en Microsoft Windows a través de la Tienda 
                                        Microsoft y de la plataforma Steam. Al igual que la entrega anterior, una app móvil fue 
                                        lanzada para dispositivos de IOS y Android.
                                    </p>
 
                                </section>

                                <section class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hX0WA6yIZ7I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
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
                                            <td>NetherRealm Studios</th>
                                        </tr>
                                        <tr>
                                            <th>Fecha lanzamiento:</th>
                                            <td>4 de noviembre de 2017</th>
                                        </tr>                                    
                                        <tr>
                                            <th>Plataforma(s):</th>
                                            <td>PlayStation 4, Xbox One</th>
                                        </tr> 
                                        <tr>
                                            <th>Modos de juego:</th>
                                            <td>Un jugador, Multijugador</th>
                                        </tr> 
                                        	
                                    </table>
                                    

                                    
                                </section>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

        <?php include("includes/footer.php"); ?>

    </body>
</html>

