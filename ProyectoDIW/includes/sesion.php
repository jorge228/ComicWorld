<?php
session_start();
include_once 'models/controladores/ControladorUsuario.php';

//Obtencion de datos de usuario
if (isset($_SESSION['id_usuario'])){
    $usuario=ControladorUsuario::getUsuarioByID($_SESSION['id_usuario']);
}

$ruta = pathinfo ( $_SERVER['SCRIPT_NAME'] ); 
$ruta=$ruta['filename'];

//Switch de enrutamiento
switch ($ruta) {
    case "index":
        $CURRENT_PAGE = "Inicio"; 
        $PAGE_TITLE = "Home";
        break;
    case "signUp":
        $CURRENT_PAGE = "Registro"; 
        $PAGE_TITLE = "Formulario de registro";
        break;
    case "peliculas_Marvel":
        $CURRENT_PAGE = "Películas"; 
        $PAGE_TITLE = "Películas Marvel";
        break;
    case "peliculas_DC":
        $CURRENT_PAGE = "Películas"; 
        $PAGE_TITLE = "Películas DC";
        break;
    case "comic_Marvel":
        $CURRENT_PAGE = "Cómics"; 
        $PAGE_TITLE = "Cómics Marvel";
        break;
    case "comic_DCComic":
        $CURRENT_PAGE = "Cómics"; 
        $PAGE_TITLE = "Cómics DC";
        break;
    case "comic_DarkHorse":
        $CURRENT_PAGE = "Cómics"; 
        $PAGE_TITLE = "Cómics Dark Horse";
        break;
    case "comic_Otros":
        $CURRENT_PAGE = "Cómics"; 
        $PAGE_TITLE = "Cómics Otros";
        break;
    case "personajes_Spiderman":
        $CURRENT_PAGE = "Personajes"; 
        $PAGE_TITLE = "Personajes-Spiderman";
        break;
    case "personajes_Superman":
        $CURRENT_PAGE = "Personajes"; 
        $PAGE_TITLE = "Personajes-Superman";
        break;
    case "personajes_Flash":
        $CURRENT_PAGE = "Personajes"; 
        $PAGE_TITLE = "Personajes-Flash";
        break;
    case "personajes_IronMan":
        $CURRENT_PAGE = "Personajes"; 
        $PAGE_TITLE = "Personajes-Iron Man";
        break;
    case "personajes_WonderWoman":
        $CURRENT_PAGE = "Personajes"; 
        $PAGE_TITLE = "Personajes-Wonder Woman";
        break;
    case "videojuegos_Arkham":
        $CURRENT_PAGE = "Videojuegos"; 
        $PAGE_TITLE = "Videojuegos-Saga Arkham";
        break;
    case "videojuegos_MarvelvsCapcom":
        $CURRENT_PAGE = "Videojuegos"; 
        $PAGE_TITLE = "Videojuegos-Saga Marvel vs Capcom";
        break;
    case "videojuegos_UltimateAlliance":
        $CURRENT_PAGE = "Videojuegos"; 
        $PAGE_TITLE = "Videojuegos-Saga UltimateAlliance";
        break;
    case "videojuegos_Injustice":
        $CURRENT_PAGE = "Videojuegos"; 
        $PAGE_TITLE = "Videojuegos-Saga Injustice";
        break;
    case "videojuegos_Lego":
        $CURRENT_PAGE = "Videojuegos"; 
        $PAGE_TITLE = "Videojuegos-Saga Lego Superheroes";
        break;
    case "juegoSandra":
        $CURRENT_PAGE = "Juegos"; 
        $PAGE_TITLE = "Piedra, papel o tijera";
        break;
    case "juegoEmilio":
        $CURRENT_PAGE = "Juegos"; 
        $PAGE_TITLE = "Thorcalipsis";
        break;
    case "juegoDani":
        $CURRENT_PAGE = "Juegos"; 
        $PAGE_TITLE = "Floaty Bird";
        break;
    case "juegoJorge":
        $CURRENT_PAGE = "Juegos"; 
        $PAGE_TITLE = "Caza al Duende";
        break;
    case "perfilUsuario":
        $CURRENT_PAGE = "Perfil"; 
        $PAGE_TITLE = "Mi perfil";
        break;
    case "cambiarPassword":
        $CURRENT_PAGE = "Perfil"; 
        $PAGE_TITLE = "Restaurar contraseña";
        break;
    case "modificarPerfil":
        $CURRENT_PAGE = "Perfil"; 
        $PAGE_TITLE = "Modificar datos del perfil";
        break;
    case "backendUsuario":
        $CURRENT_PAGE = "Panel de gestión"; 
        $PAGE_TITLE = "Gestión de usuarios";
        break;
    case "backendContenido":
        $CURRENT_PAGE = "Panel de gestión"; 
        $PAGE_TITLE = "Gestión de contenidos";
        break;
    case "backendValoraciones":
        $CURRENT_PAGE = "Panel de gestión"; 
        $PAGE_TITLE = "Gestión de valoraciones";
        break;
    case "modificarUsuario":
        $CURRENT_PAGE = "Panel de gestión"; 
        $PAGE_TITLE = "Modificar datos de usuario";
        break;
    case "editPelicula":
        $CURRENT_PAGE = "Panel de gestión"; 
        $PAGE_TITLE = "Añadir o modificar película";
        break;
    default:
        $CURRENT_PAGE = "Comic World";
        $PAGE_TITLE = "Comic World";
}
?>