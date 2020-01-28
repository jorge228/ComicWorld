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

function formularioRegistro() {
	echo '<div class="container-fluid mt-5">';
		echo '<div class="row">';
            echo '<div class="col-1 col-sm-3 text-center"></div>';
            echo '<div class="col-10 col-sm-6 text-center">';
                echo '<form name="" action="" method="POST">';
                    echo '</br><h1>Registro</h1>';
                    echo '<div class="form-group">';
                        echo '<label for="username">Nombre de Usuario</label>';                               
                        echo '<input type="text" class="form-control" name="username" id="username" placeholder="Escriba aquí su apodo (será usado para acceder)" value="" required/>'; 
                    echo '</div>';

	                echo '<div class="form-group">';
	                    echo '<label for="password">Contraseña</label>';
	                    echo '<input type="password" class="form-control" name="password1" id="password1" placeholder="Escriba aquí su contraseña" value="" required/>';
	                echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="password2">Repita la Contraseña</label>';
                        echo '<input type="password" class="form-control" name="password2" id="password2" placeholder="Vuelva a escribir aquí su contraseña" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="nombre">Nombre</label>';
                        echo '<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba aquí su nombre real" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="apellido1">Primer Apellido</label>';
                        echo '<input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Escriba aquí solo su primer apellido" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="apellido2">Segundo Apellido</label>';
                        echo '<input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Escriba aquí su segundo apellido (Opcional)" value=""/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="correo">Correo Electrónico</label>';
                        echo '<input type="text" class="form-control" name="correo" id="correo" placeholder="Escriba aquí su correo" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="fecha_nacimiento">Fecha Nacimiento</label>';
                        echo '<input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="pais">Pais</label>';
                        echo '<input type="text" class="form-control" name="pais" id="pais" placeholder="Escribe aquí tu país" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="codigo_postal">Codigo Postal</label>';
                        echo '<input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Escriba aquí su código postal" value="" required/>';
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo '<label for="telefono">Telefono</label>';
                        echo '<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Escriba aquí su telefono" value="" required/>';
                    echo '</div>';

                    echo '<input type="reset" class="btn btn-secondary" id="reset" value="Limpiar"/>';
                    echo ' <button type="submit" name="btnRegistrar" class="btn btn-primary">Registrar</button>';
                    
                echo '</form>';       
			echo '</div>';
			echo '<div class="col-1 col-sm-3 text-center"></div>';
		echo '</div>';
	echo '</div>';
}

function verificarPassword () {
    $ok = true;
    if ($_POST["password1"] != $_POST["password2"]) $ok = false;
    // Comprueba si las contraseñas coinciden
    if ($_POST["password1"] != $_POST["password2"]) $ok = false;
    // Comprueba si el usuario introducido ya está en BBDD
    if (ControladorUsuario::findByUsername($_POST["username"])) $ok = false;
    if ($ok == false) echo '<script>$(function() {alert("Error usario no registrado. Revise los datos introducidos y vuelva a intentarlo");});</script>';
    return $ok;
}

?>