<?php
include_once '../../models/controladores/Conexion.php';
include_once '../../models/entidades/Usuario.php';

/*
    1-. Comprobar si usuario existe
    2-. Si existe, actualizarlo. Si no existe, crearlo.
    3-. Enviar JSON respuesta, que sera un true o false.
    4-. Logear al usuario usando informacion proporcionada por API
*/

function insertUsuario($usuario){
        
    $conexion=new Conexion();
    
    $conexion->query("INSERT INTO usuario (username, password, nombre, apellido1, apellido2, correo, fecha_nacimiento, pais, codigo_postal, telefono, rol, usuario_google, img_perfil) "
            . "VALUES('$usuario->username', '$usuario->password', '$usuario->nombre', '$usuario->apellido1', '$usuario->apellido2', '$usuario->correo', '$usuario->fecha_nacimiento', '$usuario->pais', '$usuario->codigo_postal', '$usuario->telefono', '$usuario->rol', '$usuario->usuario_google', '$usuario->img_perfil')");

    $conexion->close();
}

function usuarioExiste($username){
    $resultado=false;

    $conexion=new Conexion();
    
    $conexion->query("SELECT username FROM usuario WHERE username='$username'");

    if($conexion->affected_rows>0)
        $resultado=true;

    $conexion->close();

    return $resultado;
}

//Conexion
$conex=new Conexion();

if (!usuarioExiste($_POST['username'])){
    insertUsuario(new Usuario($_POST['username'], 'google', $_POST['nombre'], $_POST['apellido1'], $_POST['email'], '', '', '', '', "usuario", 0, "", 1, $_POST['imagen']));
}

//Encode json respuesta
$jsonRespuesta=[
    "done"=>"true"
];

//Convertir $usuario en objeto JSON
$jsonRespuesta=json_encode($jsonRespuesta);

//echo para que Ajax pille la respuesta
echo $jsonRespuesta;

//Cerrar conexion
?>
