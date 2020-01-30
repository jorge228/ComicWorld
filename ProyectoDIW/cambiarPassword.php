<?php
include_once 'includes/sesion.php';

//Redirigir si el usuario no esta logeado o no es el usuario al que pertenece esta info
if (!isset($_SESSION['id_usuario']))
    header("Location: index.php");

//Realizar actualizacion en caso de que se haya enviado el formulario
if (isset($_POST['btnEnviarPass'])){
    $resultadoOperacion=ControladorUsuario::updatePasswordByID($usuario->id, md5($_POST['password']));
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include("includes/contenidoHead.php");
        ?>

        <script src="js/validacion_form/form_cambiar_password.js"></script>
    </head>

    <body>

        <!--Contenedor global-->
        <div class="contenedorGlobal">

            <!--Contenedor contenido-->
            <section class="contenedorContenido">

                <!--MENU DE NAVEGACION-->
                <?php include("includes/menuNav.php"); ?>

                <!--TITULO-->
                <div class="col-12 mt-4 p-3 text-center">
                    <h1 class="text-warning">Cambiar contraseña</h1>
                    <p class="text-warning">Introduzca su nueva contraseña en los campos proporcionados abajo y pulse aceptar</span>.</p>
                    <p class="text-warning">Asegúrese de que su contraseña es lo suficientemente segura</span></p>
                </div>


                <?php
                //Mostrar mensaje de estado en caso de que se haya enviado el form
                if (isset($resultadoOperacion)){
                ?>
                    <div class="mensajeResultado text-center ">
                    
                        <?php
                        if ($resultadoOperacion)
                            echo "<p class='mensaje mensajeExitoBackend'>Se ha cambiado tu contraseña con éxito</p>";
                        else
                            echo "<p class='mensaje mensajeErrorBackend'>Ha habido un error al cambiar tu contraseña, vuelve a intentarlo más tarde</p>"
                        ?>
                        
                    </div>
                <?php
                }
                ?>

                <!--FORMULARIO-->
                <article class="container">
                
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-8 px-2 px-md-5 py-3 rounded">
                            <form class="formModificarUsuario needs-validation border border-primary p-3" id="formCambiarPass" action="#" method="POST" novalidate>
                                
                                <!--Contraseña-->
                                <label for="password"><h5 class="mb-0">Nueva contraseña</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>

                                    <input type="password" class="form-control" name="password" id="password" placeholder="Introduce tu nueva contraseña aquí" pattern="^[0-9A-Za-z]+$" minlength="4" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>La contraseña debe tener entre 4 y 50 caracteres y solo puede contener letras y números</p></div>
                                </div>

                                <!--Contraseña-->
                                <label for="confirmarPassword"><h5 class="mb-0">Confirmar nueva contraseña</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>

                                    <input type="password" class="form-control" name="confirmarPassword" id="confirmarPassword" placeholder="Vuelve a introducir tu nueva contraseña aquí" pattern="^[0-9A-Za-z]+$" minlength="4" maxlength="50" required>
                                </div>


                                <!--Botones-->
                                <div class="form-row">

                                    <div class="text-center m-auto font-weight-bold p-1" id="errorPassword"></div>

                                    <!--Submit y reset-->
                                    <div class="col-12 my-2 text-center">
                                        <input type="submit" class="btn btn-primary btn-md" value="Aceptar" name="btnEnviarPass" id="btnEnviar" disabled>
                                    </div>

                                    <!--Volver al perfil-->
                                    <div class="col-12 my-2 text-center">
                                        <a href="perfilUsuario.php" class="btn btn-primary" role="button">Volver a mi perfil</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </article>

            </section>

            <!--Footer-->
            <?php include("includes/footer.php"); ?>
        </div>
    </body>
</html>