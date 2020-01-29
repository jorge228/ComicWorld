<?php
include_once 'includes/sesion.php';

//Redirigir si el usuario no es admin
if (!isset($_SESSION['id_usuario']))
    header("Location: index.php");

if ($usuario->rol!="admin")
    header("Location: index.php");

//Actulizar en caso de que el usuario le de a guardar
if (isset($_POST['guardarMod'])){
    $usuarioMod=new Usuario($_POST['usernameMod'], md5($_POST['passwordMod']), $_POST['nombreMod'], $_POST['apellido1Mod'], $_POST['correoMod'], $_POST['fecha_nacimientoMod'], $_POST['paisMod'], $_POST['codigo_postalMod'], $_POST['telefonoMod'], "usuario", $_POST['idUsuarioMod'] );

    //Meter apellido en objeto en caso de que se haya enviado con el formulario
    if (isset($_POST['apellido2Mod']))
        $usuarioMod->apellido2=$_POST['apellido2Mod'];
    else
        $usuarioMod->apellido2="";

    //Guardar resultado de la operacion en una variable
    $resultadoOperacion=ControladorUsuario::updateUsuario($usuarioMod);
}

//Obtener usuario a modificar
$usuarioPerfil=ControladorUsuario::getUsuarioByID($_POST['idUsuarioMod']);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include("includes/contenidoHead.php");
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
                    <h1 class="text-warning">Modificar usuario '<?php echo $usuarioPerfil->username ?>'</h1>
                </div>


                <?php
                //Mostrar mensaje de estado en caso de que se haya enviado el form
                if (isset($resultadoOperacion)){
                ?>
                    <div class="col-12 text-center ">
                    
                        <?php
                        if ($resultadoOperacion)
                            echo "<p class='mensajeExitoBackend'>Se ha actualizado el usuario con éxito</p>";
                        else
                            echo "<p class='mensajeErrorBackend'>Ha habido un error al actualizar al usuario</p>"
                        ?>
                        
                    </div>
                <?php
                }
                ?>

                <!--FORMULARIO-->
                <article class="container">
                
                    <div class="row">

                        <div class="col-12 px-5 py-3 rounded">

                            <form class="needs-validation" action="#" method="POST" novalidate>
                                
                                <input type="hidden" name="idUsuarioMod" value="<?php echo $_POST['idUsuarioMod'] ?>">

                                <!--Usuario-->
                                <label for="usernameForm"><h5 class="mb-0">Usuario*</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="usernameMod" placeholder="Nombre de usuario" value="<?php echo $usuarioPerfil->username ?>" pattern="^[A-Za-z0-9]+$" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El nombre de usuario solo puede contener letras y números (max: 50 caracteres)</p></div>
                                </div>

                                <!--Contrasena-->
                                <label for="passForm"><h5 class="mb-0">Contraseña*</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="passwordMod" placeholder="Contraseña de la cuenta" value="<?php echo $usuarioPerfil->password ?>" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe escribir una contraseña</p></div>
                                </div>

                                <!--Correo-->
                                <label for="correoForm"><h5 class="mb-0">Correo electrónico*</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>

                                    <input type="email" class="form-control" name="correoMod" placeholder="Correo electrónico del usuario" value="<?php echo $usuarioPerfil->correo ?>" required>
                                    <div class="valid-feedback"><p>Correcto*</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir una dirección de correo electrónico válida</p></div>
                                </div>

                                <!--Nombre-->
                                <label for="nombreForm"><h5 class="mb-0">Nombre real*</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="nombreMod" placeholder="Nombre real" value="<?php echo $usuarioPerfil->nombre ?>" pattern="^[A-Za-z]+$" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El nombre solo puede contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Apellido 1-->
                                <label for="apellido1Form"><h5 class="mb-0">Primer apellido*</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="apellido1Mod" placeholder="Primer apellido" value="<?php echo $usuarioPerfil->apellido1 ?>" pattern="^[A-Za-z]+$" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Apellido 2-->
                                <label for="apellido2Form"><h5 class="mb-0">Segundo apellido</h5></label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="apellido2Mod" placeholder="Segundo apellido" value="<?php echo $usuarioPerfil->apellido2 ?>" pattern="^[A-Za-z]+$" maxlength="50">
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Fecha de nacimiento-->
                                <label for="fechaNacForm"><h5 class="mb-0">Fecha de nacimiento*</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>

                                    <input type="date" class="form-control" name="fecha_nacimientoMod" placeholder="Fecha de nacimiento" value="<?php echo $usuarioPerfil->fecha_nacimiento ?>" min="1900-01-01" max="2020-01-01" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Fecha de nacimiento inválida</p></div>
                                </div>

                                <!--Telefono-->
                                <label for="telefonoForm"><h5 class="mb-0">Teléfono*</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="telefonoMod" placeholder="Teléfono" value="<?php echo $usuarioPerfil->telefono ?>" pattern="^[0-9]{9}$" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir un número de teléfono válido</p></div>
                                </div>

                                <!--Pais-->
                                <label for="paisForm"><h5 class="mb-0">País*</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
                                    </div>

                                    <select class="form-control" name="paisMod">
                                        <option value="España">España</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Francia">Francia</option>
                                        <option value="Reino Unido">Reino Unido</option>
                                        <option value="Alemania">Alemania</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe seleccionar un país</p></div>
                                </div>

                                <!--Codigo postal-->
                                <label for="codpostForm"><h5 class="mb-0">Código postal*</h5></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="codigo_postalMod" placeholder="Código postal" value="<?php echo $usuarioPerfil->codigo_postal ?>" pattern="^[0-9A-Z-]+$" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El código postal solo puede caracteres alfanuméricos</p></div>
                                </div>

                                <!--Botones-->
                                <div class="form-row">
                                    <!--Submit y reset-->
                                    <div class="col-12 my-3 text-center">
                                        <input type="submit" class="btn btn-primary btn-md" value="Guardar cambios" name="guardarMod">
                                        <input type="reset" class="btn btn-primary btn-md" value="Reiniciar">
                                    </div>

                                    <!--Volver al backend-->
                                    <div class="col-12 my-3 text-center">
                                        <a href="adminUsuario.php" class="btn btn-primary" role="button">Volver al panel de gestión</a>
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