<?php
echo '<script src="js/controladorModal.js"></script>';

if (isset($_POST['btnEntrar']) && (!contieneCaracteresEscapables()) && (ControladorUsuario::isRegistered($_POST['usuario'], md5($_POST['password'])) != -1)) { 
    //  Guardamos los datos en la sesion:
    $_SESSION['id_usuario'] = ControladorUsuario::isRegistered($_POST['usuario'], md5($_POST['password']));
    //  Guardamos los datos en cookies:
    if (isset($_POST['recuerdame'])) {    
        setcookie("datos[usuario]", $_POST['usuario'], time() + 3600);
    } else {
        if (isset($_COOKIE['datos'])) {
            setcookie("datos[usuario]", $_POST['usuario'], time() - 4000);  
        } 
    }
    setcookie("recordar[usuario]", $_POST['usuario']);
    header('location:index.php');
}
//Login de Google
elseif(isset($_POST['btnGoogleSignIn'])){
    //  Guardamos los datos en la sesion:
    $_SESSION['id_usuario'] = ControladorUsuario::getUsuarioGoogleByUsername($_POST['usuario'])->id;
    header('location:index.php');
}
else {
    modalInicioSesion();
}

function modalInicioSesion() {
    echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
            echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                    echo '<h1 class="modal-title titulo-login" id="exampleModalLabel">Inicio Sesión</h1>';
                    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                    echo ' </button>';
                echo '  </div>';
                echo '<form id="modalForm" action="#" method="POST">';
                    echo ' <div class="modal-body">';
                        formularioInicioSesion(); 
                    echo ' </div>';
                echo '</form>';
            echo '  </div>';
        echo '</div>';
    echo '</div>';
}

function formularioInicioSesion() {
    echo '<div class="container-fluid">';
		echo '<div class="row">';
            echo '<div class="col-12 text-center">';
                echo '<h2>Identifícate</h2>';
                    echo '<div class="row">';
                        echo '<div class="col-1 text-center"></div>';
                        echo '<div class="col-10 text-center">';

                            echo '<div class="form-group">';
                                echo '<label for="usuario">Nombre de Usuario</label>';  
                                if(!isset($_POST['btnEntrar'])) {
                                    echo '<input type="text" class="form-control" name="usuario" id="usuario" placeholder="" value="' . valorUsuario() . '" required/>';
                                } else {
                                    echo '<input type="text" class="form-control" name="usuario" id="usuario" placeholder="" value="" required/>';
                                }                             
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                                echo '<label for="password">Password</label>';
                                echo '<input type="password" class="form-control" name="password" id="password" placeholder="" value="" required/>';
                            echo '</div>';

                            if (isset($_COOKIE['acceptCookies'])) {
                                echo '<div class="form-group">';
                                    echo '<input type="checkbox" name="recuerdame" id="recuerdame" class="mr-1" '. isCheck() . '/>';
                                    echo '<label for="recuerdame">Recuérdame</label>';
                                echo '</div>';
                            }
                            echo '<button type="submit" id="btnEntrar" name="btnEntrar" class="btn btn-primary m-2">Entrar</button>';
                            echo '<div class="form-group d-flex justify-content-center m-2">';
                                echo '<button id="btnGoogleSignin" type="button" class="btn btn-danger btn-sm text-white"><i class="fab fa-google p-2"></i>Login con Google</button>';
                            echo '</div>';

                            if(isset($_POST['btnEntrar'])) echo '<p id="errorMode" class="text-danger">Error. Usuario o contraseña no reconocido</p>';

                            echo '<a class="m-2" href="signUp.php">¿Eres nuevo? Regístrate aquí</a>';

                        echo '</div>';
                        echo '<div class="col-1 text-center"></div>';
                    echo '</div>';

            echo '</div>';
        echo '</div>';
    echo '</div>';
}

function contieneCaracteresEscapables() {
    $flag = false;
    if ((strpos($_POST["password"], "'") !== false) || (strpos($_POST["password"], '"') !== false) 
     || (strpos($_POST["usuario"], "'")  !== false) || (strpos($_POST["usuario"], '"')  !== false)) {
        $flag = true;
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
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["error"]("No se permiten caracteres especiales", "Error");
        </script>    
        <?php
    }
    return $flag;
}

function valorUsuario () {   
    if (isset($_COOKIE['datos'])) {
        return $_COOKIE['datos']['usuario'];
    } else {
        return '';
    }
}

function isCheck () {   
    if (isset($_COOKIE['datos'])) {
        return "checked";
    } else {
        return '';
    }
}
?>