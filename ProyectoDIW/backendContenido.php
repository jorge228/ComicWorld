<?php
 include_once 'includes/sesion.php';
 include_once 'models/controladores/ControladorPelicula.php';
 include_once 'includes/inclAdmin/backend_sidebar.php';
 include_once 'includes/inclAdmin/componenteFilasPeliculas.php';

 //Redirigir usuario si no ha iniciado sesion o si no es admin
 if (isset($_SESSION['id_usuario'])){
     if ($usuario->rol!="admin" && $usuario->rol!="editor")
        header("Location: index.php");
 }
 else
    header("Location: index.php");

//Si el usuario le ha dado a borrar
if (isset($_POST['eliminarPelicula']))
    $resultadoOperacion=ControladorPelicula::deletePeliculaByID($_POST['idPeliculaOperacion']);
 
//Obtener peliculas de la bd
$peliculas=ControladorPelicula::getAllPeliculas();

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
                        <?php sidebar($usuario); ?>

                        <!--Contenido-->
                        <div class="col-12 col-sm-9">
                            <div class="row">

                                <div class="col-12 text-center mt-4">
                                    <h1 class="text-warning">Gestión de películas</h1>
                                </div>

                                <?php
                                //Mostrar mensaje de estado en caso de que se haya enviado el form
                                if (isset($resultadoOperacion)){
                                    if ($resultadoOperacion){
                                    ?>
                                        <script>toastr.success('Se ha realizado la operación con éxito.', 'Info', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                                    <?php
                                    }
                                    else{
                                    ?>
                                        <script>toastr.error('Ha habido un error al realizar la operación, vuelva a intentarlo más tarde.', 'Error', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                                    <?php
                                    }
                                }
                                ?>
                                <div class="col-12 mt-4 tablaBackend overflow-auto">
                                
                                    <table class="table text-center border">
                                    
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Fecha de estreno</th>
                                                <th>Archivo imagen carrusel</th>
                                                <th>Archivo imagen cartelera</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        
                                        <?php listarPeliculas($peliculas) ?>
                                    </table>

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