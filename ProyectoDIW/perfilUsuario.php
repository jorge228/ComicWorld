<?php
include_once 'includes/sesion.php';

//Redirigir si no ha iniciado sesion
if (!isset($_SESSION['id_usuario']))
    header("Location:index.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include("includes/contenidoHead.php");
        ?>

    </head>

    <body>

        <div class="contenedorGlobal">

            <section class="contenedorContenido mx-1 mx-md-3 mx-lg-5">

                <!--MENU DE NAVEGACION-->
                <?php include("includes/menuNav.php"); ?>

                <!--TITULO-->
                <header class="mt-4 p-3 text-center">
                    <h1 class="text-warning">Mi perfil</h1>
                </header>

                <?php
                include_once 'includes/inclPerfil/moduloPerfilUsuario.php';
                ?>

            </section>            

            <!--Footer-->
            <?php include("includes/footer.php"); ?>
        </div>
    </body>
</html>