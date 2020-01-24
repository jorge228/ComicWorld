<?php

//echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">';
//echo ' Launch demo modal';
//echo '</button>';

if (isset($_POST['btnEntrar']) && (ControladorUsuario::isRegistered($_POST['usuario'], $_POST['password']) != -1)) { 
    //  Guardamos los datos en la sesion:
    $_SESSION['id_usuario'] = ControladorUsuario::isRegistered($_POST['usuario'], $_POST['password']);
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
    modal();
    // En caso de fallo
    if(isset($_POST['btnEntrar'])) echo '<script>$(function() {alert("Usuario o clave incorrectos, vuelve a intentarlo");});</script>';
}

function modal() {
    // Menu navegacion
    include_once("includes/menuNav.php");
    echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
            echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>';
                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo ' </button>';
                echo '  </div>';
            echo ' <div class="modal-body">';
            echo '<form name="" action="" method="POST">';
                formulario2();
           
            echo ' </div>';
            echo ' <div class="modal-footer">';
            echo '<button type="submit" name="btnEntrar" class="btn btn-primary">Entrar</button>';
            echo ' <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
            echo ' </div>';
            echo '</form>';
            
        echo '  </div>';
        echo '</div>';
        echo '</div>';
}
    
function formulario2() {
    echo '<div class="container-fluid">';
		echo '<div class="row">';
            
            echo '<div class="col-12 text-center">';
                echo '</br><h1>Identifícate</h1>';
                

                    echo '<div class="form-group">';
                        echo '<label for="usuario">Nombre de Usuario</label>';                               
                        echo '<input type="text" class="form-control" name="usuario" id="usuario" placeholder="" value="' . valorUsuario() . '" required/>'; 
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="password">Password</label>';
                        echo '<input type="password" class="form-control" name="password" id="password" placeholder="" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<p> <input type="checkbox" name="recuerdame" ' . isCheck() . '/> Recuerdame </p>';
                    echo '</div>';


                    echo '<div class="form-group">';
                    echo '<button id="googleSignInBtn" class="btn-google">Inicia sesión con Google</button>';
                    echo '</div>';

                        
                        echo '</br><a href="signIn.php">¿Eres nuevo? Regístrate aquí</a>';
                   
            echo '</div>';
            
        echo '</div>';
    echo '</div>';
}
function formulario01() {
	echo '<div class="container-fluid mt-5">';
		echo '<div class="row">';
            echo '<div class="col-1 col-sm-3 text-center"></div>';
            echo '<div class="col-10 col-sm-6 text-center">';
                echo '<form name="" action="" method="POST">';
                    echo '</br><h1>Identifícate</h1>';
	                echo '<div class="form-group">';
	                    echo '<label for="usuario">Nombre de Usuario</label>';                               
	                    echo '<input type="text" class="form-control" name="usuario" id="usuario" placeholder="" value="' . valorUsuario() . '" required/>'; 
	                echo '</div>';

	                echo '<div class="form-group">';
	                    echo '<label for="password">Password</label>';
	                    echo '<input type="password" class="form-control" name="password" id="password" placeholder="" value="" required/>';
	                echo '</div>';

	                echo '<div class="form-group">';
	                    echo '<p> <input type="checkbox" name="recuerdame" ' . isCheck() . '/> Recuerdame </p>';
	                echo '<div>';

	                echo '<input type="reset" class="btn btn-secondary" id="reset" value="Limpiar"/>';
	                echo ' <button type="submit" name="btnEntrar" class="btn btn-primary">Entrar</button>';
                echo '</form>';
                echo '<form>';
                    echo '</br><a href="signIn.php">¿Eres nuevo? Regístrate aquí</a>';
                echo '</form>';        
			echo '</div>';
			echo '<div class="col-1 col-sm-3 text-center"></div>';
		echo '</div>';
	echo '</div>';
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