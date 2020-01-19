<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Valoracion
 *
 * @author DWES
 */
class Valoracion {
    public $id;
    public $id_usuario;
    public $id_pelicula;
    public $texto;
    public $puntuacion;
    public $fecha_valoracion;
    
    public function __construct($id_usuario, $id_pelicula, $texto, $puntuacion, $fecha_valoracion, $id=0) {
        $this->id=$id;
        $this->id_usuario=$id_usuario;
        $this->id_pelicula=$id_pelicula;
        $this->texto=$texto;
        $this->puntuacion=$puntuacion;
        $this->fecha_valoracion=$fecha_valoracion;
    }
}
