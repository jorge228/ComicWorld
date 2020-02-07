<?php include_once 'includes/sesion.php';?>
<?php
if(isset($_SESSION['id_usuario'])) {
    header('location:index.php');
}

$palabraCaptcha = generarPalabraCaptcha(); 

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
    include_once("includes/contenidoHead.php");
    include_once("models/controladores/ControladorUsuario.php");
    include_once("models/entidades/Usuario.php");
    echo '<script src="js/validacion_form/form_signUp.js"></script>';
echo '</head>';
?>
    <body onload="captcha.init()">
<?php
    if (isset($_POST["btnRegistrar"]) && verificar()) {
        $usuario = new Usuario($_POST["username"], md5($_POST["password1"]), $_POST["nombre"], $_POST["apellido1"], $_POST["correo"], $_POST["fecha_nacimiento"], $_POST["pais"], $_POST["codigo_postal"], $_POST["telefono"], "usuario", "", $_POST["apellido2"]);
        ControladorUsuario::insertUsuario($usuario);
        header('location:index.php');
    } else {
        // Menu navegacion
        include_once("includes/menuNav.php");
        formularioRegistro($palabraCaptcha);
        // Footer
	    include_once("includes/footer.php"); 
    }
    
echo '</body>';
echo '</html>';

function formularioRegistro ($palabraCaptcha) {
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
                                <div class="invalid-feedback"><p>El nombre de usuario solo puede contener letras sin tildes y números (Debe tener entre 4 y 50 caracteres)</p></div>
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

                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba aquí su nombre real" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["nombre"]; ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" minlength="1" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>El nombre solo puede contener letras (Debe tener entre 1 y 50 caracteres)</p></div>
                            </div>

                            <!--Primer Apellido-->
                            <label for="apellido1"><h5 class="mb-0">Primer apellido*</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escriba aquí solo su primer apellido" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["apellido1"]; ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" minlength="1" maxlength="50" required>
                                <div class="valid-feedback"><p>Correcto</p></div>
                                <div class="invalid-feedback"><p>Los apellidos solo pueden contener letras (Debe tener entre 1 y 50 caracteres)</p></div>
                            </div>

                            <!--Apellido 2-->
                            <label for="apellido2"><h5 class="mb-0">Segundo apellido</h5></label><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escriba aquí su segundo apellido (Opcional)" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["apellido2"]; ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" maxlength="50">
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

                                <input type="text" class="form-control" id="pais" name="pais" placeholder="Escriba aquí su Pais natal" value="<?php if (isset($_POST["btnRegistrar"])) echo $_POST["pais"]; ?>" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ]+$" required>
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
                    <?php
                    generarCaptcha();
                    ?>
                    <!--Botones-->
                    <div class="row">
                        <div class="col-12 my-3 text-center">
                            <input type="reset" class="btn btn-secondary" id="reset" value="Limpiar Todo"/>
                            <button type="submit" name="btnRegistrar" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                    <input type="hidden" name="hiddenWord" value="<?php echo $palabraCaptcha; ?>" />
                </form>
            </div>
            <div class="col-1 col-sm-2 text-center"></div>
        </div>
    </article>
<?php                   
}

function generarCaptcha() {          
    echo '<div class="row align-self-center">';
    echo '<div class="col-12 col-sm-3"></div>';
        echo '<div class="col-12 col-sm-6 bg-secondary m-1 p-2 card card-inverse card-danger">';
            echo '<h6 class="small text-center">Por favor, verifica que no eres un robot:</h6>';
            echo '<canvas id="captcha" width="250" height="60">TU NAVEGADOR NO SOPORTA HTML5</canvas>';
            echo '<input type="text" class="form-control p-2 mt-1" id="inputCaptcha" name="inputCaptcha" placeholder="Escriba aqui la palabra que lea" required/>';
        echo '</div>';
        echo '<div class="col-12 col-sm-3"></div>';
    echo '</div>';
    
}

function verificar() {
    $ok = true;
    $contErrores = 0;
    $errorMessage = "";
    // Comprueba el captcha
    //echo '<script> alert("' . $_POST["inputCaptcha"] . '");</script>';
    //echo '<script> alert("' . $palabraCaptcha . '");</script>'; 
    if ($_POST['hiddenWord'] !== $_POST["inputCaptcha"]) {
        //echo '<script> alert("ENTRA");</script>';
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. El captcha introducido no es correcto.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["inputCaptcha"] = "";
    }
    // Comprueba si el usuario introducido ya está en BBDD
    if (ControladorUsuario::findByUsername($_POST["username"])) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. El usuario introducido ya está en uso. Escoja otro.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["username"] = "";
    }
    // Comprueba si el correo introducido ya está en BBDD
    if (ControladorUsuario::findByEmail($_POST["correo"])) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. El correo electrónico introducido ya está en uso. Escoja otro.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["correo"] = "";
    }
    // Comprueba si el usuario introducido no contiene caracteres especiales (escapados)
    if ((strpos($_POST["username"], "'") !== false) || (strpos($_POST["username"], '"') !== false)) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. No se permiten caracteres especiales. Escoja otro.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["username"] = "";
    }
    // Comprueba si la contraseña introducida no contiene caracteres especiales (escapados)
    if ((strpos($_POST["password1"], "'") !== false) || (strpos($_POST["password1"], '"') !== false)) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. No se permiten caracteres especiales. Escoja otro.  Por favor, revíselo y vuelva a intentarlo";
        $_POST["password1"] = "";
        $_POST["password2"] = "";
    }
    // Comprueba si las contraseñas coinciden
    if ($_POST["password1"] != $_POST["password2"]) {
        $contErrores++;
        $ok = false;
        $errorMessage = "Error usuario no registrado. Las contraseñas no coinciden. Por favor, revíselo y vuelva a intentarlo";
        $_POST["password1"] = "";
        $_POST["password2"] = "";
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

function generarPalabraCaptcha () {
    $letrasDisponibles = ['a','m','x','n','y','j','3','8'];
    $palabra = "";
    for ($i=0; $i < 6; $i++) { 
        $ind = array_rand($letrasDisponibles, 1);
        $c = $letrasDisponibles[$ind];
        $palabra = $palabra . $c;
    }
    return $palabra;
}
?>

<script>
var captcha = (function () {
    var captchaWord = '<?php echo $palabraCaptcha;?>';
    var canvas;
    var ctx;
    var backgroundImage; 
    var images = [];
    var totalImages = 9;
    var numberOfLoadedImages = 0;
    var characterOfset01 = getRandomNumber(15);
    var characterOfset02 = getRandomNumber(20);
    var characterOfset03 = getRandomNumber(20);
    var characterOfset04 = getRandomNumber(20);
    var characterOfset05 = getRandomNumber(20);
    var characterOfset06 = getRandomNumber(20);

    function init() {
        preloadImages();
        // Obtención del elemento html canvas
        canvas = document.getElementById('captcha');
        ctx = canvas.getContext("2d");
        getRandomNumber(10)
    }

    function preloadImages() {
        // Carga de la imagen del fondo
        backgroundImage = new Image();
        backgroundImage.src = 'assets/img/captcha/background.jpg';
        backgroundImage.addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen 3
        images["3"] = new Image();
        images["3"].src = 'assets/img/captcha/characterBank/3.jpg';
        images["3"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen 8
        images["8"] = new Image();
        images["8"].src = 'assets/img/captcha/characterBank/8.jpg';
        images["8"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen j
        images["j"] = new Image();
        images["j"].src = 'assets/img/captcha/characterBank/j.jpg';
        images["j"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen a
        images["a"] = new Image();
        images["a"].src = 'assets/img/captcha/characterBank/a.jpg';
        images["a"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen m
        images["m"] = new Image();
        images["m"].src = 'assets/img/captcha/characterBank/m.jpg';
        images["m"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen n
        images["n"] = new Image();
        images["n"].src = 'assets/img/captcha/characterBank/n.jpg';
        images["n"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen x
        images["x"] = new Image();
        images["x"].src = 'assets/img/captcha/characterBank/x.jpg';
        images["x"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
        // Carga la imagen y
        images["y"] = new Image();
        images["y"].src = 'assets/img/captcha/characterBank/y.jpg';
        images["y"].addEventListener('load', function() {
            numberOfLoadedImages++;
            paintScene();
        }, false);
    }

    function paintScene () {
        console.log(numberOfLoadedImages);
        if (numberOfLoadedImages == totalImages) {
            paintBackground(); 
            paintWord();   
        }
        setTimeout(paintScene, 500);
    }

    function paintWord() {
        paintCharacter(captchaWord.charAt(0), 20, characterOfset01);
        paintCharacter(captchaWord.charAt(1), 50,characterOfset02);
        paintCharacter(captchaWord.charAt(2), 80, characterOfset03);
        paintCharacter(captchaWord.charAt(3), 110, characterOfset04);
        paintCharacter(captchaWord.charAt(4), 140, characterOfset05);
        paintCharacter(captchaWord.charAt(5), 170, characterOfset06);
    }

    function paintCharacter(s, x, y) {
        ctx.drawImage(images[s], x, y);
    }

	function paintBackground () {
        ctx.drawImage(backgroundImage, 0, 0);
    }

    function getRandomNumber(max) {
        return Math.floor(Math.random() * max);
    }

    return {
        init: init
    }

})();
</script>