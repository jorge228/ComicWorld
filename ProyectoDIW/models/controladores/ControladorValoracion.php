<?php
include_once 'Conexion.php';
include_once 'models/entidades/Valoracion.php';


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

    /**
     * Obtener todas las valoraciones de una película mediante ID de Película
     * @return \Valoraciones
     */
    public static function getValoracionesPelicula($id){
        $conexion=new Conexion();
        $valoraciones=[];
        
        $resultados=$conexion->query("SELECT * FROM valoracion where id_pelicula=$id");
        
        while($registro=$resultados->fetch_object()){
            $valoracion=new Valoracion($registro->id_usuario, $registro->id_pelicula, $registro->texto, $registro->puntuacion, $registro->fecha_valoracion, $registro->id);
            $valoraciones[]=$valoracion;
        }
        
        $conexion->close();
        
        return $valoraciones;
    }

    /**
     * Obtener valoracion mediante ID de Usuario
     * @param type $id
     * @return \Pelicula
     */
    public static function getValoracionByIDUsuario($id_usuario){
        $conexion=new Conexion();
        $valoraciones=[];

        $resultado=$conexion->query("SELECT v.*, p.titulo FROM valoracion v JOIN pelicula p ON v.id_pelicula=p.id AND v.id_usuario=$id_usuario");
                
        while($registro=$resultado->fetch_object()){
            $valoracion=new Valoracion($registro->id_usuario, $registro->id_pelicula, $registro->texto, $registro->puntuacion, $registro->fecha_valoracion, $registro->id);
            $valoraciones[$registro->titulo]=$valoracion;
        }
        
        $conexion->close();
        
        return $valoraciones;
    }

    /**
     * Devuelve array
     */
    public static function getValoracionesYUsuarios(){
        $conexion=new Conexion();
        $idsPeliculas=[];
        $valoraciones=[];

        $resultado=$conexion->query("SELECT DISTINCT id_pelicula FROM valoracion v");
                
        //Obtener ids de las peliculas que tienen valoraciones
        while($registro=$resultado->fetch_object()){
            $idsPeliculas[]=$registro->id_pelicula;
        }

        //Preparar consulta
        $consultaPreparada=$conexion->prepare("SELECT p.titulo, u.username, v.* FROM valoracion v, pelicula p, usuario u WHERE v.id_pelicula=p.id AND u.id=v.id_usuario AND v.id_pelicula=?");

        //Obtener valoraciones de cada pelicula con titulo de la pelicula y username del usuario que escribio la valoracion
        foreach($idsPeliculas as $pelicula){
            $consultaPreparada->bind_param('i', $pelicula);

            $consultaPreparada->execute();

            $resultado=$consultaPreparada->get_result();

            //Almacenar valoraciones de la pelicula
            while($registro=$resultado->fetch_object()){
                $valoracion=new Valoracion($registro->id_usuario, $registro->id_pelicula, $registro->texto, $registro->puntuacion, $registro->fecha_valoracion, $registro->id);
                $valoraciones[$registro->titulo][$registro->username]=[$valoracion];
            }

        }

        $conexion->close();
        return $valoraciones;
    }
  
    /**
     * Inserta valoración
     */
    public static function creaValoracion($id_usuario, $id_pelicula, $texto, $puntuacion){
        $conexion=new Conexion();
        $fecha = new DateTime();
        $format_fecha = $fecha->format('Y-m-d');
        $conexion->query("INSERT INTO valoracion (id_usuario, id_pelicula, texto, puntuacion, fecha_valoracion) VALUES ('$id_usuario', '$id_pelicula', '$texto', $puntuacion, '$format_fecha')");
        $conexion->close();
    }
  
}
