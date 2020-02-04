<?php

include_once 'Conexion.php';
include_once 'models/entidades/Usuario.php';

/**
 * Controlador para obtener datos de la tabla usuario
 *
 * @author DWES
 */
class ControladorUsuario {
    
    /**
     * Obtener todos los usuarios de la BD
     * @return \Usuario
     */
    public static function getAllUsuarios(){
        $conexion=new Conexion();
        $usuarios=[];
        
        $resultados=$conexion->query("SELECT * FROM usuario");
        
        while($registro=$resultados->fetch_object()){
            $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2, $registro->usuario_google, $registro->img_perfil);
            $usuarios[]=$usuario;
        }
        
        $conexion->close();
        
        return $usuarios;
    }
    
    /**
     * Obtener usuario mediante ID
     * @param type $id
     * @return \Usuario
     */
    public static function getUsuarioByID($id){
        $conexion=new Conexion();
        
        $resultado=$conexion->query("SELECT * FROM usuario WHERE id=$id");
        
        $registro=$resultado->fetch_object();
        
        $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2, $registro->usuario_google, $registro->img_perfil);
        
        $conexion->close();
        
        return $usuario;
    }

    /**
     * Obtener usuario mediante username para USUARIOS DE GOOGLE
     * @param type $id
     * @return \Usuario
     */
    public static function getUsuarioGoogleByUsername($username){
        $conexion=new Conexion();
                
        $resultado=$conexion->query("SELECT * FROM usuario WHERE username='$username' AND usuario_google=1");

        $registro=$resultado->fetch_object();

        $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2, $registro->usuario_google, $registro->img_perfil);
        
        $conexion->close();
        var_dump($usuario);
        return $usuario;
    }

    /**
     * Insertar un usuario en la BD
     * @param type $usuario
     */
    public static function insertUsuario($usuario){
        
        $conexion=new Conexion();
        
        $conexion->query("INSERT INTO usuario (username, password, nombre, apellido1, apellido2, correo, fecha_nacimiento, pais, codigo_postal, telefono, rol, usuario_google, img_perfil) "
                . "VALUES('$usuario->username', '$usuario->password', '$usuario->nombre', '$usuario->apellido1', '$usuario->apellido2', '$usuario->correo', '$usuario->fecha_nacimiento', '$usuario->pais', '$usuario->codigo_postal', '$usuario->telefono', '$usuario->rol', '$usuario->usuario_google', '$usuario->img_perfil')");
    
        $conexion->close();
    }
    
    /**
     * Borrar un usuario
     * @param type $id
     */
    public static function deleteUsuario($id){
        
        $conexion=new Conexion();
        $resultado=false;

        if ($conexion->errno==0){
            $resultado=$conexion->query("DELETE FROM valoracion WHERE id_usuario=$id");

            $resultado=$conexion->query("DELETE FROM usuario WHERE id=$id");
        }

        $conexion->close();

        return $resultado;
    }

    /**
     * Comprueba si un usuario está registrado en la BBDD dado como parámetros únicamente su nombre de usuario.
     * Si es encotrado se retornará "true" de lo contrario "false".
     * @param type $username
     */
    public static function findByUsername($username) {
        $found = false;
        $conexion=new Conexion();
        $result = $conexion->query("SELECT id FROM usuario where username='" . $username . "'");
        if ($result->num_rows == 1) {
            $found = true;
        }
        $conexion->close();
        return $found;
    }

    /**
     * Comprueba si un correo está registrado en la BBDD dado como parámetros únicamente su correo electrónico.
     * Si es encotrado se retornará "true" de lo contrario "false".
     * @param type $correo
     */
    public static function findByEmail($correo) {
        $found = false;
        $conexion=new Conexion();
        $result = $conexion->query("SELECT id FROM usuario where correo='" . $correo . "'");
        if ($result->num_rows == 1) {
            $found = true;
        }
        $conexion->close();
        return $found;
    }

    /**
     * Comprueba si un usuario está registrado en la BBDD dado como parámetros su nombre de usuario 
     * y su contraseña. Si ambas existen y coinciden se devolvera la id del usuario encontrado, en caso contrario devolverá "-1".
     * @param type $username
     * @param type $password
     */
    public static function isRegistered($username, $password) {
        $conexion=new Conexion();
        $result = $conexion->query("SELECT id FROM usuario where username='" . $username . "' && password='" . $password . "' && usuario_google=0");
        if ($result->num_rows == 1) {
            $conexion->close();
            return ($result->fetch_object())->id;
        } else {
            $conexion->close();
            return -1;
        }
    }


    /**
     * Cambiar rol de usuario
     */
    public static function updateRol($id, $rol){

        $conexion=new Conexion();
        $resultado=false;
    
        if ($conexion->errno==0)        
            $resultado=$conexion->query("UPDATE usuario SET rol='$rol' WHERE id=$id");
        
        $conexion->close();

        return $resultado;
    }
    

    /**
     * Actualizar usuario
     */
    public static function updateUsuario($usuario){

        $conexion=new Conexion();
        $resultado=false;
    
        if ($conexion->errno==0){        
            if ($usuario->password!=null)
                $resultado=$conexion->query("UPDATE usuario SET username='$usuario->username', password='$usuario->password', correo='$usuario->correo', nombre='$usuario->nombre', apellido1='$usuario->apellido1', apellido2='$usuario->apellido2', fecha_nacimiento='$usuario->fecha_nacimiento', telefono='$usuario->telefono', pais='$usuario->pais', codigo_postal='$usuario->codigo_postal' WHERE id=$usuario->id ");
            else
                $resultado=$conexion->query("UPDATE usuario SET username='$usuario->username', correo='$usuario->correo', nombre='$usuario->nombre', apellido1='$usuario->apellido1', apellido2='$usuario->apellido2', fecha_nacimiento='$usuario->fecha_nacimiento', telefono='$usuario->telefono', pais='$usuario->pais', codigo_postal='$usuario->codigo_postal' WHERE id=$usuario->id ");
        }

        $conexion->close();
        
        return $resultado;
    }

    /**
     * Actualizar password pasando id de usuario y la nueva password
     */
    public static function updatePasswordByID($id, $nuevaPassword){

        $conexion=new Conexion();
        $resultado=false;
    
        if ($conexion->errno==0){        
            $consultaPreparada=$conexion->prepare("UPDATE usuario SET password=? WHERE id=? ");

            $consultaPreparada->bind_param('si', $nuevaPassword, $id);

            $consultaPreparada->execute();
            
            $consultaPreparada->get_result();
        }

        if ($conexion->errno==0)
            $resultado=true;

        $conexion->close();

        return $resultado;
    }

    /**
     * Comprobar si es posible cambiar el email
     */
    public static function comprobarCambioEmail($correo, $id){
        $conexion=new Conexion();
        $disponible = true;
        $result = $conexion->query("SELECT * FROM usuario WHERE correo='$correo' AND id!=$id ");

        if ($result->num_rows == 1)
            $disponible = false;
        

        $conexion->close();

        return $disponible;
    }

    /**
     * Comprobar si es posible cambiar el nombre
     */
    public static function comprobarCambioUsername($username, $id){
        $conexion=new Conexion();
        $disponible = true;
        $result = $conexion->query("SELECT * FROM usuario WHERE username='$username' AND id!=$id ");

        if ($result->num_rows == 1)
            $disponible = false;
        

        $conexion->close();

        return $disponible;
    }

}
