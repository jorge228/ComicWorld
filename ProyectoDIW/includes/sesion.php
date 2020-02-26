<?php
session_start();
include_once 'models/controladores/ControladorUsuario.php';

//Obtencion de datos de usuario
if (isset($_SESSION['id_usuario'])){
    $usuario=ControladorUsuario::getUsuarioByID($_SESSION['id_usuario']);
}

$ruta = '/ComicWorld/ProyectoDIW/';
//Switch de enrutamiento
switch ($_SERVER["SCRIPT_NAME"]) {
    case $ruta."index.php":
        $CURRENT_PAGE = "Inicio"; 
        $PAGE_TITLE = "Home";
        break;
    case $ruta."peliculas_Marvel.php":
        $CURRENT_PAGE = "Películas"; 
        $PAGE_TITLE = "Películas Marvel";
        break;
    default:
        $CURRENT_PAGE = "Comic World";
        $PAGE_TITLE = "Comic World";
}
?>