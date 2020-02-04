<?php
include_once '../../models/controladores/Conexion.php';
include_once '../../models/entidades/Usuario.php';

/*  
    NOTA: Me tuve que traer los metodos del ControladorUsuarios porque PHP daba problemas al intentar incluirlo
*/

//Funcion para comprobar si el usuario existe
function usuarioExiste($username){
    $resultado=false;

    $conexion=new Conexion();
    
    $conexion->query("SELECT username FROM usuario WHERE username='$username'");

    if($conexion->affected_rows>0)
        $resultado=true;

    $conexion->close();

    return $resultado;
}

//Funcion para insertar el usuario
function insertUsuario($usuario){
        
    $conexion=new Conexion();
    
    $conexion->query("INSERT INTO usuario (username, password, nombre, apellido1, apellido2, correo, fecha_nacimiento, pais, codigo_postal, telefono, rol, usuario_google, img_perfil) "
            . "VALUES('$usuario->username', '$usuario->password', '$usuario->nombre', '$usuario->apellido1', '$usuario->apellido2', '$usuario->correo', '$usuario->fecha_nacimiento', '$usuario->pais', '$usuario->codigo_postal', '$usuario->telefono', '$usuario->rol', '$usuario->usuario_google', '$usuario->img_perfil')");

    $conexion->close();
}

//Funcion para actualizar el usuario
function updateUsuario($usuario){

    $conexion=new Conexion();
    $resultado=false;

    if ($conexion->errno==0){        
            $resultado=$conexion->query("UPDATE usuario SET username='$usuario->username', password='$usuario->password', correo='$usuario->correo', nombre='$usuario->nombre', apellido1='$usuario->apellido1', apellido2='$usuario->apellido2', fecha_nacimiento='$usuario->fecha_nacimiento', telefono='$usuario->telefono', pais='$usuario->pais', codigo_postal='$usuario->codigo_postal' WHERE id=$usuario->id ");
    }

    $conexion->close();
    
    return $resultado;
}

/**
 * Obtener usuario mediante username para USUARIOS DE GOOGLE
 * @param type $id
 * @return \Usuario
 */
function getUsuarioGoogleByUsername($username){
    $conexion=new Conexion();
            
    $resultado=$conexion->query("SELECT * FROM usuario WHERE username='$username' AND usuario_google=1");

    $registro=$resultado->fetch_object();

    $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2, $registro->usuario_google, $registro->img_perfil);
    
    $conexion->close();
    return $usuario;
}

//Controlar si se ha enviado el apellido, ya que hay usuarios que no lo tienen y puede provocar un error
if (!isset($_POST['apellido1']))
    $apellido="";
else
    $apellido=$_POST['apellido1'];


//Crear usuario con los datos proporcionados por Google.
$usuarioGoogle=new Usuario($_POST['username'], md5('google'), $_POST['nombre'], $apellido, $_POST['email'], '', '', '', '', "usuario", 0, "", 1, $_POST['imagen']);

//Determinar si el usuario existe y crearlo o actualizarlo en consecuencia
if (!usuarioExiste($usuarioGoogle->username)){
    insertUsuario($usuarioGoogle);
}
else{
    $usuarioGoogle->id=getUsuarioGoogleByUsername($usuarioGoogle->username)->id;
    updateUsuario($usuarioGoogle);
}

//Crear json
$jsonRespuesta=[
    "done"=>"true"
];

//Convertir $jsonRespuesta en objeto JSON
$jsonRespuesta=json_encode($jsonRespuesta);

//echo para que Ajax pille la respuesta
echo $jsonRespuesta;
?>
