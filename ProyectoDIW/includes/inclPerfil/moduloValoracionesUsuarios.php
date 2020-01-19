<?php

include_once 'models/controlador/ControladorValoracion.php';

function listarValoracionesUsuario($idUsuario){
    $valoraciones=ControladorValoracion::getValoracionByIDUsuario($idUsuario);

    //Si el usuario no ha escrito ninguna valoracion se mostrara un mensaje diciendolo
    if (count($valoraciones)==0){
        ?>
        <div class="row  m-3 p-2 rounded text-center text-muted">
            <div class="col-12 w-25 justify-content-center bg-light border">
                <p class="p-2 m-0  mx-auto">Este usuario no ha escrito ninguna valoración</p>
            </div>
        </div>
        <?php
    }
    //Si ha escrito alguna valoracion se mostrara en formato div
    foreach($valoraciones as $pelicula=>$valoracion){
    ?>

        <div class="row bg-light m-3 p-2 rounded border">
            <div class="col-12 p-2">
                <h4 class="font-weight-bold"><?php echo $pelicula ?></h4>
            </div>

            <div class="col-12 text-muted">
                <p>"<?php echo $valoracion->texto ?>"</p>
            </div>

            <div class="col-12 text-center">
                <?php
                    for ($i = 1; $i < 6; $i++) {
                        echo "<input id='radio".$pelicula."+$i' type='radio' name='$pelicula' value='$i'>";
                        echo "<label for='radio".$pelicula."+$i'>★</label>";
                    }
                ?>
            </div>
        </div>

    <?php
    }
}
