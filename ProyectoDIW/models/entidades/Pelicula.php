<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase que representa a la tabla pelicula de la BD
 *
 * @author DWES
 */
class Pelicula {
    public $id;
    public $saga;
    public $titulo;
    public $fecha_estreno;
    public $director;
    public $sinopsis;
    public $img_carrusel;
    public $img_cartelera;
    
    public function __construct($saga, $titulo, $fecha_estreno, $director, $sinopsis, $img_carrusel="", $img_cartelera="", $id=0) {
        $this->id=$id;
        $this->saga=$saga;
        $this->titulo=$titulo;
        $this->fecha_estreno=$fecha_estreno;
        $this->director=$director;
        $this->sinopsis=$sinopsis;
        $this->img_carrusel=$img_carrusel;
        $this->img_cartelera=$img_cartelera;
    }
}
