<?php

include_once 'Conexion.php';
include_once 'models/entidades/Pelicula.php';

/**
 * Controlador para obtener datos de la tabla pelicula
 *
 * @author DWES
 */

class ControladorPelicula {
    
    /**
     * Obtener todas las peliculas de la BD
     * @return \Pelicula
     */
    public static function getAllPeliculas(){
        $conexion=new Conexion();
        $peliculas=[];
        
        $resultados=$conexion->query("SELECT * FROM pelicula");
        
        while($registro=$resultados->fetch_object()){
            $pelicula=new Pelicula($registro->saga, $registro->titulo, $registro->fecha_estreno, $registro->director, $registro->sinopsis, $registro->img_carrusel, $registro->img_cartelera, $registro->id);
            $peliculas[]=$pelicula;
        }
        
        $conexion->close();
        
        return $peliculas;
    }
    
    /**
     * Obtener pelicula mediante ID
     * @param type $id
     * @return \Pelicula
     */
    public static function getPeliculaByID($id){
        $conexion=new Conexion();
        
        $resultado=$conexion->query("SELECT * FROM pelicula WHERE id=$id");
        
        $registro=$resultado->fetch_object();
        
        $pelicula=new Pelicula($registro->saga, $registro->titulo, $registro->fecha_estreno, $registro->director, $registro->sinopsis, $registro->img_carrusel, $registro->img_cartelera, $registro->id);
        
        $conexion->close();
        
        return $pelicula;
    }
}
