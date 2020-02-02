<?php
include_once '../../models/controladores/Conexion.php';

//Conexion
$conex=new Conexion();

//Consulta con parametro
$resultado=$conex->query("SELECT p.titulo, u.username, v.* FROM valoracion v, pelicula p, usuario u WHERE v.id_pelicula=p.id AND u.id=v.id_usuario AND v.id=$_POST[idVal]");

//Fetch object para el conseguir resultado en formato objeto
$valoracion=$resultado->fetch_object();

//Convertir $usuario en objeto JSON
$jsonRespuesta=json_encode($valoracion);

//echo para que Ajax pille la respuesta
echo $jsonRespuesta;

//Cerrar conexion
$conex->close();
?>