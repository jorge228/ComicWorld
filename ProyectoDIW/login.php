<?php
include_once 'includes/sesion.php';

if(isset($_SESSION['id_usuario'])) {
    header('location:index.php');
}

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
    include_once("includes/contenidoHead.php");
    include_once("models/controladores/ControladorUsuario.php");
echo '</head>';

echo '<body>';

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
        // Menu navegacion
        include_once("includes/menuNav.php");
        formulario01();
        if(isset($_POST['btnEntrar'])) echo '<script>$(function() {alert("Usuario o clave incorrectos, vuelve a intentarlo");});</script>';
    }
    // Footer
	include_once("includes/footer.php");  
echo '</body>';

echo '</html>';

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
