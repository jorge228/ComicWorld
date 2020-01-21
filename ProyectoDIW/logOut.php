<?php
session_start();
//  Redirige a la pagina principal si entras con la URL de manera directa
if (!isset($_SESSION["usuario"])) {
    die('<script>alert("Primero debes iniciar sesion")</script><a href="index.php">Volver a Home</a>');
}

echo 'Cerrando sesion...';
session_unset();
session_destroy();
setcookie(session_name(), $_COOKIE[session_name()], time() - 130600);
header('location:index.php');
?>