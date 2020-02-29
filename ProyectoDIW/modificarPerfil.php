<?php
include_once 'includes/sesion.php';

//Redirigir si el usuario no esta logeado o no es el usuario al que pertenece esta info
if (!isset($_SESSION['id_usuario']))
    header("Location: index.php");

//Actualizar en caso de que el usuario le de a guardar
if (isset($_POST['guardarMod'])){
    $usuarioMod=new Usuario($_POST['usernameMod'], null, $_POST['nombreMod'], $_POST['apellido1Mod'], $_POST['correoMod'], $_POST['fecha_nacimientoMod'], $_POST['paisMod'], $_POST['codigo_postalMod'], $_POST['telefonoMod'], "usuario", $usuario->id );

    //Meter apellido en objeto en caso de que se haya enviado con el formulario
    if (isset($_POST['apellido2Mod']))
        $usuarioMod->apellido2=$_POST['apellido2Mod'];
    else
        $usuarioMod->apellido2="";

    //Comprobar si el email y el nombre de usuario estan disponibles
    if (!ControladorUsuario::comprobarCambioEmail($usuarioMod->correo, $usuarioMod->id))
        $errorCorreo=true;
    else if(!ControladorUsuario::comprobarCambioUsername($usuarioMod->username, $usuarioMod->id))
        $errorUsername=true;

    //Guardar resultado de la operacion en una variable
    if (!isset($errorCorreo) && !isset($errorUsername))
        $resultadoOperacion=ControladorUsuario::updateUsuario($usuarioMod);
}

$usuario=ControladorUsuario::getUsuarioByID($usuario->id);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include("includes/contenidoHead.php");
        ?>

        <script src="js/validacion_form/form_modificar_perfil.js"></script>
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
                    <h1 class="text-warning">Cambiar datos personales</h1>
                    <p class="text-warning">Modifique los datos que desea cambiar en los campos correspondientes y presione el botón <span class="font-weight-bold">'Guardar cambios'</span>.</p>
                    <p class="text-warning">Los campos con un asterisco (*) al lado del nombre <span class="font-weight-bold">no se pueden dejar en blanco.</span></p>
                </div>



                <?php
                //Mostrar mensaje de estado en caso de que se haya enviado el form
                if (isset($resultadoOperacion)){
                    if ($resultadoOperacion){
                    ?>
                        <script>toastr.success('Se ha actualizado el usuario con exito.', 'Info', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                    <?php
                    }
                    else{
                    ?>
                        <script>toastr.error('Ha habido un error al actulizar el usuario.', 'Error', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                    <?php
                    }
                }

                //Mostrar error de disponibilidad de username/email
                if (isset($errorCorreo)){
                ?>
                    <script>toastr.error("Esa dirección de correo ya está en uso, introduzca otra por favor", 'Error', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                <?php
                }
    
                if (isset($errorUsername)){
                ?>
                    <script>toastr.error("Ese nick de usuario ya está en uso, introduzca otro por favor", 'Error', {closeButton:true, positionClass:"toast-top-full-width"})</script>
                <?php
                }
                ?>
                

                <!--FORMULARIO-->
                <article class="container">
                
                    <div class="row d-flex justify-content-center">

                        <div class="col-12 col-lg-8 px-2 px-md-5 py-3 rounded">
                            <form class="formModificarUsuario needs-validation border border-primary p-3" action="#" method="POST" novalidate>
                                
                                <!--Usuario-->
                                <label for="usernameMod" class="label-forms">Usuario*</label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="usernameMod" name="usernameMod" placeholder="Tu nick de usuario" value="<?php if (isset($usuarioMod)) echo $usuarioMod->username; else echo $usuario->username ?>" pattern="^[A-Za-z0-9]+$" minlength="4" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El nombre de usuario solo puede contener letras sin tildes y números, y debe tener una longitud de entre 4 y 50 caracteres</p></div>
                                </div>

                                <!--Correo-->
                                <label for="correoMod" class="label-forms">Correo electrónico*</label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>

                                    <input type="email" class="form-control" id="correoMod" name="correoMod" placeholder="Tu correo electrónico" value="<?php if (isset($usuarioMod)) echo $usuarioMod->correo; else echo $usuario->correo ?>" required>
                                    <div class="valid-feedback"><p>Correcto*</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir una dirección de correo electrónico válida</p></div>
                                </div>

                                <!--Nombre-->
                                <label for="nombreMod" class="label-forms">Nombre*</label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="nombreMod" name="nombreMod" placeholder="Tu nombre real" value="<?php if (isset($usuarioMod)) echo $usuarioMod->nombre; else echo $usuario->nombre ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El nombre solo puede contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Apellido 1-->
                                <label for="apellido1Mod" class="label-forms">Primer apellido*</label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="apellido1Mod" name="apellido1Mod" placeholder="Tu primer apellido" value="<?php if (isset($usuarioMod)) echo $usuarioMod->apellido1; else echo $usuario->apellido1 ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" maxlength="50" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Apellido 2-->
                                <label for="apellido2Mod" class="label-forms">Segundo apellido</label><br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="apellido2Mod" name="apellido2Mod" placeholder="Tu segundo apellido (opcional)" value="<?php if (isset($usuarioMod)) echo $usuarioMod->apellido2; else echo $usuario->apellido2 ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" maxlength="50">
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (máximo: 50 caracteres)</p></div>
                                </div>

                                <!--Fecha de nacimiento-->
                                <label for="fecha_nacimientoMod" class="label-forms">Fecha de nacimiento*</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>

                                    <input type="date" class="form-control" id="fecha_nacimientoMod" name="fecha_nacimientoMod" placeholder="Tu fecha de nacimiento" value="<?php if (isset($usuarioMod)) echo $usuarioMod->fecha_nacimiento; else echo $usuario->fecha_nacimiento ?>" min="1900-01-01" max="2020-01-01" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>La fecha de nacimiento debe estar comprendida entre el 1-1-1900 y el 1-1-2020</p></div>
                                </div>

                                <!--Telefono-->
                                <label for="telefonoMod" class="label-forms">Teléfono*</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="telefonoMod" name="telefonoMod" placeholder="Tu número de teléfono" value="<?php if (isset($usuarioMod)) echo $usuarioMod->telefono; else echo $usuario->telefono ?>" pattern="^[0-9]{9}$" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir un número de teléfono válido</p></div>
                                </div>

                                <!--Pais-->
                                <label for="paisMod" class="label-forms">País*</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="paisMod" name="paisMod" placeholder="Tu pais natal" value="<?php if (isset($usuarioMod)) echo $usuarioMod->pais; else echo $usuario->pais ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>Debe introducir el nombre de un país</p></div>
                                </div>

                                <!--Codigo postal-->
                                <label for="codigo_postalMod" class="label-forms">Código postal*</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    </div>

                                    <input type="text" class="form-control" id="codigo_postalMod" name="codigo_postalMod" placeholder="Tu código postal" value="<?php if (isset($usuarioMod)) echo $usuarioMod->codigo_postal; else echo $usuario->codigo_postal ?>" pattern="^[0-9A-Z-]+$" required>
                                    <div class="valid-feedback"><p>Correcto</p></div>
                                    <div class="invalid-feedback"><p>El código postal solo puede caracteres alfanuméricos</p></div>
                                </div>

                                <!--Botones-->
                                <div class="form-row">
                                    <!--Submit y reset-->
                                    <div class="col-12 my-3 text-center">
                                        <input type="reset" class="btn btn-secondary btn-md" value="Reiniciar">
                                        <input type="submit" class="btn btn-primary btn-md" value="Guardar cambios" name="guardarMod">
                                    </div>

                                    <!--Volver al backend-->
                                    <div class="col-12 my-3 text-center">
                                        <a href="perfilUsuario.php?id=<?php echo $usuario->id ?>" class="btn btn-primary" role="button">Volver a mi perfil</a>
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