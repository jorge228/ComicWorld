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
     * Obtener todas las peliculas de una saga
     * @return \Pelicula
     */
    public static function getPeliculasSaga($saga){
        $conexion=new Conexion();
        $peliculas=[];
        
        $resultados=$conexion->query("SELECT * FROM pelicula where saga='$saga'");
        
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

    /**
     * Borrar pelicula y valoraciones de la misma con id
     */
    public static function deletePeliculaByID($id){
        $conexion=new Conexion();

        $resultado=false;

        if ($conexion->errno==0){
            $resultado=$conexion->query("DELETE FROM valoracion WHERE id_pelicula=$id");
            $resultado=$conexion->query("DELETE FROM pelicula WHERE id=$id");
        }

        return $resultado;
    }

    /**
     * Obtener todas las sagas
     */
    public static function getSagas(){
        $conexion=new Conexion();
        $peliculas=[];
        
        $resultados=$conexion->query("SELECT DISTINCT saga FROM pelicula");
        
        while($registro=$resultados->fetch_object()){
            $saga=$registro->saga;
            $sagas[]=$saga;
        }
        
        $conexion->close();
        
        return $sagas;
    }

    /**
     * Insertar película
     */
    public static function insertPelicula($saga, $titulo, $fecha, $director, $sinopsis, $img1, $img2){
        
        $conexion=new Conexion();

        $result = $conexion->query("SELECT * FROM pelicula WHERE titulo='$titulo'");
        if ($result->num_rows == 1){
            $conexion->close();
            return true;
        }else{
        $conexion->query("INSERT INTO pelicula (saga, titulo, fecha_estreno, director, sinopsis, img_carrusel, img_cartelera) "
                . "VALUES('$saga', '$titulo', '$fecha', '$director', '$sinopsis', '$img1', '$img2')");
                $conexion->close();
                return false;
        }
        
    }

    /**
     * Actualizar película
     */
    public static function updatePelicula($pelicula){

        $conexion=new Conexion();
        $resultado=false;
    
        if ($conexion->errno==0)        
            $resultado=$conexion->query("UPDATE pelicula SET saga='$pelicula->saga', titulo='$pelicula->titulo', fecha_estreno='$pelicula->fecha_estreno', director='$pelicula->director', sinopsis='$pelicula->sinopsis', img_carrusel='$pelicula->img_carrusel', img_cartelera='$pelicula->img_cartelera' WHERE id=$pelicula->id ");
        
        $conexion->close();

        return $resultado;
    }
}
