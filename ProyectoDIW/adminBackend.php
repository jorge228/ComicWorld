<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
            include("includes/contenidoHead.php");
            include_once 'models/controladores/ControladorUsuario.php';
            include_once 'includes/inclAdmin/componenteFilasUsuarios.php';

            $usuarios=ControladorUsuario::getAllUsuarios();
        ?>

    </head>
    <body>
        <!--Menu-->
        <?php include("includes/menuNav.php"); ?>

        <!--TITULO-->
        <div class="contenedorBackend mt-3">

            <!--Sidebar-->
            <aside class="flex-column bg-dark ">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <img class="img-fluid rounded-circle" src="assets/img/imagenPerfilPorDefecto.jpg">
                        </div>

                        <div class="col-12">
                            <h4 class="text-center font-weight-bold">Admin</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="list-group text-center">
                                <a href="#" class="list-group-item list-group-item-dark list-group-item-action active">Gestión de usuarios</a>
                                <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Gestión de contenidos</a>
                                <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Morbi leo risus</a>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>

            <!--Contenido-->
            <section class="flex-column flex-grow-1 m-3">
                <div class="container-fluid p-0 border">
                    <div class="row">
                        <div class="col-12">
                        
                            <table class="table table-striped text-center">
                            
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Usuario</th>
                                        <th>Perfil</th>
                                        <th>Rol</th>
                                    </tr>
                                </thead>
                                
                                <?php listarUsuarios($usuarios) ?>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>