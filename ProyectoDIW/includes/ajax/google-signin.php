<?php
include_once '../../models/controladores/Conexion.php';
include_once '../../models/entidades/Usuario.php';

function insertUsuario($usuario){
        
    $conexion=new Conexion();
    
    $conexion->query("INSERT INTO usuario (username, password, nombre, apellido1, apellido2, correo, fecha_nacimiento, pais, codigo_postal, telefono, rol, usuario_google, img_perfil) "
            . "VALUES('$usuario->username', '$usuario->password', '$usuario->nombre', '$usuario->apellido1', '$usuario->apellido2', '$usuario->correo', '$usuario->fecha_nacimiento', '$usuario->pais', '$usuario->codigo_postal', '$usuario->telefono', '$usuario->rol', '$usuario->usuario_google', '$usuario->img_perfil')");

    $conexion->close();
}

//Conexion
$conex=new Conexion();

//Consulta con parametro
$resultado=insertUsuario(new Usuario($_POST['username'], '', $_POST['nombre'], $_POST['apellido1'], $_POST['email'], '', '', '', '', "usuario", 0, "", 1, $_POST['imagen']));

//Fetch object para el conseguir resultado en formato objeto

$usuario=$conex->query("SELECT id FROM usuario WHERE email='$_POST[email]'");
$usuario=$usuario->fetch_object();


session_start();
$_SESSION['id_usuario']=$usuario->id;

$jsonRespuesta=[
    "exito"=>$conex->error
];

//Convertir $usuario en objeto JSON
$jsonRespuesta=json_encode($jsonRespuesta);

//echo para que Ajax pille la respuesta
echo $jsonRespuesta;

//Cerrar conexion
?>
