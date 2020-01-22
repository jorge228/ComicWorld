<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include("includes/contenidoHead.php");
        include_once("models/controlador/ControladorUsuario.php");

        $usuario=ControladorUsuario::getUsuarioById(2);
        ?>

    </head>

    <body>

        <!--Contenedor global-->
        <div class="contenedorGlobal">

            <!--Contenedor contenido-->
            <section class="contenedorContenido mx-5">

                <!--MENU DE NAVEGACION-->
                <?php include("includes/menuNav.php"); ?>

                <!--TITULO-->
                <div class="col-12 mt-4 p-3 text-center">
                    <h1 class="text-warning">Modificar usuario '<?php echo $usuario->username ?>'</h1>
                </div>

                <!--FORMULARIO-->
                <article class="container border p-2">
                    <form class="formModificarUsuario" novalidate>
                        
                        <!--Usuario, nombre, apellidos-->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>Nombre de usuario</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre de usuario" value="<?php echo $usuario->username ?>" required>
                            </div>
                        
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>Correo</h5></label>
                                <input type="mail" class="form-control" id="validationTooltip01" placeholder="Correo electrónico" value="<?php echo $usuario->correo ?>" required>
                            </div>
                        </div>

                        <!--Nombre, apellido 1 y 2-->
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01"><h5>Nombre</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre" value="<?php echo $usuario->nombre ?>" required>
                            </div>
                        
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01"><h5>Primer apellido</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Primer apellido" value="<?php echo $usuario->apellido1 ?>" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01"><h5>Segundo apellido</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Segundo apellido" value="<?php echo $usuario->apellido2 ?>">
                            </div>
                        </div>

                        <!--Fecha de nacimiento y telefono-->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>Fecha de nacimiento</h5></label>
                                <input type="date" class="form-control" id="validationTooltip01" placeholder="Fecha de nacimiento" value="<?php echo $usuario->fecha_nacimiento ?>" required>
                            </div>
                        
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>Teléfono</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Teléfono" value="<?php echo $usuario->telefono ?>" required>
                            </div>
                        </div>

                        <!--Pais y codigo postal-->
                        <div class="form-row">
                        
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>País</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="País" value="<?php echo $usuario->pais ?>" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01"><h5>Código postal</h5></label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Código postal" value="<?php echo $usuario->codigo_postal ?>" required>
                            </div>
                        </div>

                        <!--Submit-->
                        <div class="form-row">
                        
                            <div class="col-md-12 mb-3 text-center">
                                <input type="submit" class="btn btn-primary btn-md" value="Enviar">
                            </div>
                        </div>
                    </form>


                </article>

            </section>

            <!--Footer-->
            <?php include("includes/footer.php"); ?>
        </div>
    </body>
</html>