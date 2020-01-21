<?php
require_once 'Conexion.php';
require_once 'modelo/Valoracion.php';


/**
 * Controlador de la tabla valoracion
 *
 * @author DWES
 */
class ControladorValoracion {
    
    /**
     * Obtener todas las valoraciones de la BD
     * @return \Pelicula
     */
    public static function getAllValoraciones(){
        $conexion=new Conexion();
        $valoraciones=[];
        
        $resultados=$conexion->query("SELECT * FROM valoracion");
        
        while($registro=$resultados->fetch_object()){
            $valoracion=new Valoracion($registro->id_usuario, $registro->id_pelicula, $registro->texto, $registro->puntuacion, $registro->fecha_valoracion, $registro->id);
            $valoraciones[]=$valoracion;
        }
        
        $conexion->close();
        
        return $valoraciones;
    }
    
    /**
     * Obtener valoracion mediante ID
     * @param type $id
     * @return \Pelicula
     */
    public static function getValoracionByID($id){
        $conexion=new Conexion();
        
        $resultado=$conexion->query("SELECT * FROM valoracion WHERE id=$id");
        
        $registro=$resultado->fetch_object();
        
        $valoracion=new Valoracion($registro->id_usuario, $registro->id_pelicula, $registro->texto, $registro->puntuacion, $registro->fecha_valoracion, $registro->id);
        
        $conexion->close();
        
        return $valoracion;
    }
}
