<?php

function banner($idPage, $titulo) {

    /*  
        Los idPage disponibles son: 
        Pers  --> Para las paginas de Personajes
        Vid  --> Para las paginas de Videojuegos
    */
    
    echo '<header class="container-fluid ">';
        echo '<div class="row">';
            echo '<div class="col-12 p-0 banner banner' . $idPage . '">';
                echo '<div class="overlayBanner d-sm-block">';
                    echo '<div class="d-flex justify-content-center align-items-center pb-5 h-100">';
                        echo '<h1 class="text-weight-bold text-white">' . $titulo . '</h1>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</header>';
}
?>