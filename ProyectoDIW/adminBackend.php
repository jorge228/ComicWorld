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

        <div class="contenedorGlobal">

            <div class="contenedorContenido mx-3">

                <!--MENU DE NAVEGACION-->
                <?php include("includes/menuNav.php"); ?>

                <!--TITULO-->
                <header class="mt-4 p-3 text-center">
                    <h1 class="text-warning">Gestión del sitio</h1>
                </header>

                <!--Contenido-->
                <section class="container mt-4">

                    <article class="shadow">
                        <!--Items del nav-->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active text-success" id="nav-home-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="nav-usuarios" aria-selected="true">Usuarios</a>
                                <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#adios" role="tab" aria-controls="" aria-selected="false">N/A</a>
                                <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#contacto" role="tab" aria-controls="" aria-selected="false">N/A</a>
                            </div>
                        </nav>

                        <!--Contenido de las tabs-->
                        <div class="tab-content border" id="nav-tabContent">
                            <div class="tab-pane fade show active filaInformacionPerfil" id="usuarios" role="tabpanel" aria-labelledby="nav-usuarios-tab">

                                <?php listarUsuarios($usuarios); ?>

                            </div>

                            <div class="tab-pane fade show" id="adios" role="tabpanel" aria-labelledby="nav-home-tab">

                                adios

                            </div>
                        </div>
                    </article>
                </section>


            </div>


            <!--Footer-->
            <?php include("includes/footer.php"); ?>

        </div>



    </body>
</html>