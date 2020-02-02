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
} else {
    modalInicioSesion();
}

function modalInicioSesion() {
    echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
            echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                    echo '<h5 class="modal-title" id="exampleModalLabel">Inicio Sesión</h5>';
                    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                    echo ' </button>';
                echo '  </div>';
                echo '<form id="modalForm" name="" action="" method="POST">';
                    echo ' <div class="modal-body">';
                        formularioInicioSesion(); 
                    echo ' </div>';
                    echo ' <div class="modal-footer">';
                        echo '<button type="submit" id="btnEntrar" name="btnEntrar" class="btn btn-primary">Entrar</button>';
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
                echo '</br><h1>Identifícate</h1>';
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
                                    echo '<p> <input type="checkbox" name="recuerdame" ' . isCheck() . '/> Recuerdame </p>';
                                echo '</div>';
                            }

                            if(isset($_POST['btnEntrar'])) echo '<p id="errorMode" class="text-danger">Error. Usuario o contraseña no reconocido</p>';

                            echo '<div class="form-group">';
                                echo '<div class="g-signin2" data-onsuccess="onSignIn" id="btnLoginGoogle"></div>';
                            echo '</div>';
                            echo '<a href="signUp.php">¿Eres nuevo? Regístrate aquí</a>';

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