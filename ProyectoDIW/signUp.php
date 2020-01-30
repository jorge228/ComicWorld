<?php include_once 'includes/sesion.php';?>
<?php
if(isset($_SESSION['id_usuario'])) {
    header('location:index.php');
}
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
    include_once("includes/contenidoHead.php");
    include_once("models/controladores/ControladorUsuario.php");
    include_once("models/entidades/Usuario.php");
    echo '<script src="js/validacion_form/form_modificar_usuario.js"></script>';
echo '</head>';

echo '<body>';

    if (isset($_POST["btnRegistrar"]) && verificarPassword()) {
        $usuario = new Usuario($_POST["username"], md5($_POST["password1"]), $_POST["nombre"], $_POST["apellido1"], $_POST["correo"], $_POST["fecha_nacimiento"], $_POST["pais"], $_POST["codigo_postal"], $_POST["telefono"], "usuario", "", $_POST["apellido2"]);
        ControladorUsuario::insertUsuario($usuario);
        header('location:index.php');
    } else {
        // Menu navegacion
        include_once("includes/menuNav.php");
        formularioRegistro();
        // Footer
	    include_once("includes/footer.php"); 
    }
    
echo '</body>';
echo '</html>';

function formularioRegistro () {
?>
    <!--FORMULARIO-->
    <article class="container">
        <div class="row">
            <div class="col-1 col-sm-2 text-center"></div>
            <div class="col-12 col-sm-8 px-5 py-3 rounded">
                <form class="needs-validation" action="" method="POST" novalidate>
                    </br>
                    <div class="row">
                        <div class="col-12 my-3 text-center">
                            <!--Usuario-->
                            <label for="username"><h5 class="mb-0">Usuario*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="username" name="username" placeholder="Escriba aquí su apodo (será usado para acceder)" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["username"]; ?>" pattern="^[A-Za-z0-9]+$" minlength="4" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>El nombre de usuario solo puede contener letras y números (Debe tener entre 4 y 50 caracteres)</p></div>
                            </div>
                        
                            <!--Contraseña-->
                            <label for="password1"><h5 class="mb-0">Contraseña*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control"  id="password1" name="password1" placeholder="Escriba aquí su contraseña" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["password1"]; ?>" minlength="4" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Debe escribir una contraseña válida (Debe tener entre 4 y 50 caracteres)</p></div>
                            </div>

                            <!--Contrasena de nuevo-->
                            <label for="password2"><h5 class="mb-0">Repita la Contraseña*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Vuelva a escribir aquí su contraseña" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["password2"]; ?>" minlength="4" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Debe escribir una contraseña válida (Debe tener entre 4 y 50 caracteres)</p></div>
                            </div>

                            <!--Correo-->
                            <label for="correo"><h5 class="mb-0">Correo electrónico*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                </div>

                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Escriba aquí su correo electrónico" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["correo"]; ?>" required>
                                <div class="valid-feedback"><p>Correcto*</p></div>
                                <div class="invalid-feedback"><p>Debe introducir una dirección de correo electrónico válida</p></div>
                            </div>

                            <!--Nombre-->
                            <label for="nombre"><h5 class="mb-0">Nombre real*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba aquí su nombre real" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["nombre"]; ?>" pattern="^[A-Za-z]+$" minlength="1" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>El nombre solo puede contener letras (Debe tener entre 1 y 50 caracteres)</p></div>
                            </div>

                            <!--Primer Apellido-->
                            <label for="apellido1"><h5 class="mb-0">Primer apellido*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escriba aquí solo su primer apellido" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["apellido1"]; ?>" pattern="^[A-Za-z]+$" minlength="1" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (Debe tener entre 1 y 50 caracteres)</p></div>
                            </div>

                            <!--Apellido 2-->
                            <label for="apellido2"><h5 class="mb-0">Segundo apellido</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escriba aquí su segundo apellido (Opcional)" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["apellido2"]; ?>" pattern="^[A-Za-z]+$" maxlength="50">
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (máximo: 50 caracteres)</p></div>
                            </div>

                            <!--Fecha de nacimiento-->
                            <label for="fecha_nacimiento"><h5 class="mb-0">Fecha de nacimiento*</h5></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>

                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["fecha_nacimiento"]; ?>" min="1900-01-01" max="2020-01-01" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Fecha de nacimiento inválida</p></div>
                            </div>

                            <!--Teléfono-->
                            <label for="telefono"><h5 class="mb-0">Teléfono*</h5></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>

                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba aquí su telefono" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["telefono"]; ?>" pattern="^[0-9]{9}$" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Debe introducir un número de teléfono válido</p></div>
                            </div>

                            <!--Pais-->
                            <label for="pais"><h5 class="mb-0">País*</h5></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-globe-africa"></i></span>
                                </div>

                                <select class="form-control" id="pais" name="pais">
                                    <option value="España" selected>España</option>
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
                            <label for="codigo_postal"><h5 class="mb-0">Código postal*</h5></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                </div>

                                <input type="text" class="form-control" name="codigo_postal" placeholder="Escriba aquí su código postal" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["codigo_postal"]; ?>" pattern="^[0-9A-Z-]+$" minlength="4" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>El código postal solo puede caracteres alfanuméricos (Debe tener entre 1 y 50 caracteres)</p></div>
                            </div>
                        </div>
                    </div>
                    <!--Botones-->
                    <div class="row">
                        <div class="col-12 my-3 text-center">
                            <input type="reset" class="btn btn-secondary" id="reset" value="Limpiar Todo"/>
                            <button type="submit" name="btnRegistrar" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-1 col-sm-2 text-center"></div>
        </div>
    </article>
<?php                   
}

function verificarPassword () {
    $ok = true;
    $contErrores = 0;
    $errorMessage = "";
    // Comprueba si las contraseñas coinciden
    if ($_POST["password1"] != $_POST["password2"]) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. Las contraseñas no coinciden. Por favor, revíselo y vuelva a intentarlo";
        $_POST["password1"] = "";
        $_POST["password2"] = "";
    }
    // Comprueba si el usuario introducido ya está en BBDD
    if (ControladorUsuario::findByUsername($_POST["username"])) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. El usuario introducido ya está en uso. Escoja otro.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["username"] = "";
    }
    if ($ok == false) {
        // Si existe unicamente un error muestra un mensaje específico, si hay mas de un error muestra un mensaje genérico
        if ($contErrores != 1) {
            ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "7000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["error"]("Error usuario no registrado. Encontrados varios errores. Revise la información y vuelva a intentarlo", "Error");
            </script>
            <?php
        } else {
            ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "7000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["error"]("<?php echo $errorMessage; ?>", "Error");
            </script>
            <?php
        }
    } 
    return $ok;
}

?>