<?php
include_once 'includes/sesion.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include("includes/contenidoHead.php");

        $usuario=ControladorUsuario::getUsuarioById(2);
        ?>

        <script src="js/validacion_form/form_modificar_usuario.js"></script>
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
                    <h1 class="text-warning">Modificar usuario '<?php echo $usuario->username ?>'</h1>
                </div>

                <!--FORMULARIO-->
                
                <article class="container">
                
                    <div class="row">

                        <div class="col-12">
                            <form class="formModificarUsuario needs-validation" action="#" method="POST" novalidate>
                                
                                <!--Usuario, nombre, apellidos-->
                                <div class="input-group">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir una dirección de correo electrónico válida</p></div>

                                </div>

                                <div class="form-group">
                                    <div class="col">
                                        <label for="correoForm"><h5>Correo</h5></label>
                                        <input type="email" class="form-control" id="correoForm" placeholder="Correo electrónico" value="<?php echo $usuario->correo ?>" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Debe introducir una dirección de correo electrónico válida</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col">
                                        <label for="nombreForm"><h5>Nombre</h5></label>
                                        <input type="text" class="form-control" id="nombreForm" placeholder="Nombre" value="<?php echo $usuario->nombre ?>" pattern="^[A-Za-z]+$" maxlength="50" required >
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>El nombre solo puede contener letras (máximo: 50 caracteres)</p></div>
                                    </div>
                                </div>

                                <!--Nombre, apellido 1 y 2-->
                                <div class="form-group">

                                    <div class="col mb-3">
                                        <label for="apellido1Form"><h5>Primer apellido</h5></label>
                                        <input type="text" class="form-control" id="apellido1Form" placeholder="Primer apellido" value="<?php echo $usuario->apellido1 ?>" pattern="^[A-Za-z]+$" maxlength="50" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Los apellidos solo puede contener letras (máximo: 50 caracteres)</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col mb-3">
                                        <label for="apellido2Form"><h5>Segundo apellido</h5></label>
                                        <input type="text" class="form-control" id="apellido2Form" placeholder="Segundo apellido" value="<?php echo $usuario->apellido2 ?>" pattern="^[A-Za-z]+$" maxlength="50">
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Los apellidos solo puede contener letras (máximo: 50 caracteres)</p></div>
                                    </div>
                                </div>

                                <!--Fecha de nacimiento y telefono-->
                                <div class="form-group">
                                    <div class="col">
                                        <label for="fechaNacForm"><h5>Fecha de nacimiento</h5></label>
                                        <input type="date" class="form-control" id="fechaNacForm" placeholder="Fecha de nacimiento" value="<?php echo $usuario->fecha_nacimiento ?>" max="2018-01-01" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Fecha de nacimiento inválida</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col mb-3">
                                        <label for="telefonoForm"><h5>Teléfono</h5></label>
                                        <input type="tel" class="form-control" id="telefonoForm" placeholder="Teléfono" value="<?php echo $usuario->telefono ?>" pattern="^[0-9]{9}$" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Debe introducir un número de teléfono válido</p></div>
                                    </div>
                                </div>

                                <!--Pais y codigo postal-->
                                <div class="form-group">
                                
                                    <div class="col">
                                        <label for="paisForm"><h5>País</h5></label>
                                        <input type="text" class="form-control" id="paisForm" placeholder="País" value="<?php echo $usuario->pais ?>" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>Debe poner un número de teléfono válido</p></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col">
                                        <label for="codpostForm"><h5>Código postal</h5></label>
                                        <input type="text" class="form-control" id="codpostForm" placeholder="Código postal" value="<?php echo $usuario->codigo_postal ?>" pattern="^[0-9A-Z]+$" required>
                                        <div class="valid-feedback"><p>Correcto</p></div>
                                        <div class="invalid-feedback"><p>El código postal solo puede contener letras y números</p></div>
                                    </div>
                                </div>

                                <!--Submit-->
                                <div class="form-group">
                                    <div class="col mb-3 text-center">
                                        <input type="submit" class="btn btn-primary btn-md" value="Enviar">
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