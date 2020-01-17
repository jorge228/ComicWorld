<?php
/**
 * Clase que representa a la tabla usuario de la BD
 *
 * @author DWES
 */
class Usuario {
    public $id;
    public $username;
    public $password;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $correo;
    public $fecha_nacimiento;
    public $pais;
    public $codigo_postal;
    public $telefono;
    public $rol;
    
    public function __construct($username, $password, $nombre, $apellido1, $correo, $fecha_nacimiento, $pais, $codigo_postal, $telefono, $rol="usuario", $id=0, $apellido2="") {
        $this->username=$username;
        $this->password=$password;
        $this->nombre=$nombre;
        $this->apellido1=$apellido1;
        $this->correo=$correo;
        $this->fecha_nacimiento=$fecha_nacimiento;
        $this->pais=$pais;
        $this->codigo_postal=$codigo_postal;
        $this->telefono=$telefono;
        $this->rol=$rol;
        $this->id=$id;
        $this->apellido2=$apellido2;
    }
}
