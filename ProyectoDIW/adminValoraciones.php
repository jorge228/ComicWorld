<?php
 include_once 'includes/sesion.php';
 include_once 'models/controladores/ControladorValoracion.php';
 include_once 'includes/inclAdmin/backend_sidebar.php';

 //Redirigir usuario si no ha iniciado sesion o si no es admin
 if (isset($_SESSION['id_usuario'])){
     if ($usuario->rol!='admin')
        header("Location: index.php");
 }
 else
    header("Location: index.php");

//Si el usuario le ha dado a borrar
if (isset($_POST['eliminarPelicula']))
    $resultadoOperacion=ControladorPelicula::deletePeliculaByID($_POST['idPeliculaOperacion']);
 
//Obtener peliculas de la bd
$valoraciones=ControladorValoracion::getValoracionesYUsuarios();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
            include("includes/contenidoHead.php");

        ?>

        <script src="js/backend/gestion_peliculas.js"></script>

    </head>
    <body>
        <!--Menu-->
        <div class="contenedorGlobal">
            <?php include("includes/menuNav.php"); ?>

            <!--Contenedor backend-->
            <div class="contenedorBackend">

                <section class="container-fluid ">

                    <div class="row ">
                        <!--Sidebar-->
                        <?php sidebar(); ?>

                        <!--Contenido-->
                        <div class="col-12 col-sm-9">
                            <div class="row">

                                <div class="col-12 text-center mt-4">
                                    <h1 class="text-warning">Gestión de películas</h1>
                                </div>

                                <?php
                                if (isset($resultadoOperacion)){
                                ?>
                                    <div class="col-12 text-center ">
                                    
                                        <?php
                                        if ($resultadoOperacion)
                                            echo "<p class='mensajeExitoBackend'>Se ha realizado la operación con éxito</p>";
                                        else
                                            echo "<p class='mensajeErrorBackend'>Ha habido un error al realizar la operación</p>"
                                        ?>
                                        
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="col-12 mt-4 tablaBackend overflow-auto">

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            
            <?php include("includes/footer.php"); ?>
        </div>
    </body>
</html>