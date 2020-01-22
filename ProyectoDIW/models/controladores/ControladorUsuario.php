<?php

require_once 'Conexion.php';
require_once 'models/entidades/Usuario.php';

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
            $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2);
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
        
        $usuario=new Usuario($registro->username, $registro->password, $registro->nombre, $registro->apellido1, $registro->correo, $registro->fecha_nacimiento, $registro->pais, $registro->codigo_postal, $registro->telefono, $registro->rol, $registro->id, $registro->apellido2);
        
        $conexion->close();
        
        return $usuario;
    }
    
    /**
     * Insertar un usuario en la BD
     * @param type $usuario
     */
    public static function insertUsuario($usuario){
        
        $conexion=new Conexion();
        
        $conexion->query("INSERT INTO usuario (username, password, nombre, apellido1, apellido2, correo, fecha_nacimiento, pais, codigo_postal, telefono, rol) "
                . "VALUES('$usuario->username', '$usuario->password', '$usuario->nombre', '$usuario->apellido1', '$usuario->apellido2', '$usuario->correo', '$usuario->fecha_nacimiento', '$usuario->pais', '$usuario->codigo_postal', '$usuario->telefono', '$usuario->rol')");
    
        $conexion->close();
    }
    
    /**
     * Borrar un usuario
     * @param type $id
     */
    public static function deleteUsuario($id){
        
        $conexion=new Conexion();
        
        $conexion->query("DELETE FROM usuario WHERE id=$id");
        
        $conexion->close();
    }

    /**
     * Comprueba si un usuario está registrado en la BBDD dado como parámetros su nombre de usuario 
     * y su contraseña. Si ambas existen y coinciden se devolvera la id del usuario encontrado, en caso contrario devolverá "-1".
     * @param type $username
     * @param type $password
     */
    public static function isRegistered($username, $password) {
        $conexion=new Conexion();
        $result = $conexion->query("SELECT id FROM usuario where username='" . $username . "' && password='" . $password . "'");
        if ($result->num_rows == 1) {
            $conexion->close();
            return ($result->fetch_object())->id;
        } else {
            $conexion->close();
            return -1;
        }
        
    }
    
}
