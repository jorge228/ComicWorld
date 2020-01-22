<?php
session_start();
include_once 'models/controladores/ControladorUsuario.php';

//Obtencion de datos de usuario
if (isset($_SESSION['id_usuario'])){
    $usuario=ControladorUsuario::getUsuarioByID($_SESSION['id_usuario']);
}

//Switch de enrutamiento
switch ($_SERVER["SCRIPT_NAME"]) {
    case "./index.php":
        $CURRENT_PAGE = "Inicio"; 
        $PAGE_TITLE = "Home";
        break;
    case "/php-template/contact.php":
        $CURRENT_PAGE = "Contact"; 
        $PAGE_TITLE = "Contact Us";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "ComicWorld";
}
?>