<?php
 include_once 'includes/sesion.php';
 include_once 'includes/inclAdmin/backend_sidebar.php';
 include_once 'includes/inclAdmin/componenteFilasUsuarios.php';

 //Redirigir usuario si no ha iniciado sesion o si no es admin
 if (isset($_SESSION['id_usuario'])){
     if ($usuario->rol!='admin')
        header("Location: index.php");
 }
 else
    header("Location: index.php");


//Si el usuario le ha dado a cambiar rol
if (isset($_POST['cambiarRol']))
    $resultadoOperacion=ControladorUsuario::updateRol($_POST['idUsuarioOperacion'], $_POST['rolUsuario']);

//Si el usuario le ha dado a borraer
if (isset($_POST['eliminarUsuario']))
    $resultadoOperacion=ControladorUsuario::deleteUsuario($_POST['idUsuarioOperacion']);
 
//Obtener usuarios de la BD
$usuarios=ControladorUsuario::getAllUsuarios();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
            include("includes/contenidoHead.php");
        ?>

        <script src="js/backend/gestion_usuarios.js"></script>

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
                                    <h1 class="text-warning">Gestión de usuarios</h1>
                                </div>

                                <?php
                                //Mostrar mensaje de estado en caso de que se haya enviado el form
                                if (isset($resultadoOperacion)){
                                    if ($resultadoOperacion){
                                    ?>
                                        <script>toastr.success('Se ha realizado la operación con éxito.', 'Info', {closeButton:true})</script>
                                    <?php
                                    }
                                    else{
                                    ?>
                                        <script>toastr.error('Ha habido un error al realizar la operación, vuelva a intentarlo más tarde.', 'Error', {closeButton:true})</script>
                                    <?php
                                    }
                                }
                                ?>
                                <div class="col-12 mt-4 tablaBackend overflow-auto">
                                
                                    <table class="table text-center border">
                                    
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Usuario</th>
                                                <th>Rol actual</th>
                                                <th>Datos</th>
                                                <th>Modificar rol</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                        <?php listarUsuarios($usuarios, $usuario->id) ?>
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