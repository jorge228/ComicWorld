<?php

include_once 'models/controladores/ControladorValoracion.php';

function listarValoracionesUsuario($idUsuario){
    $valoraciones=ControladorValoracion::getValoracionByIDUsuario($idUsuario);

    //Si el usuario no ha escrito ninguna valoracion se mostrara un mensaje diciendolo
    if (count($valoraciones)==0){
        ?>
        <div class="row  m-3 p-2 rounded text-center">
            <div class="col-12 w-25 justify-content-center bg-light border">
                <p class="p-2 m-0  mx-auto">Aún no has escrito ninguna valoración</p>
            </div>
        </div>
        <?php
    }
    //Si ha escrito alguna valoracion se mostrara en formato div
    foreach($valoraciones as $pelicula=>$valoracion){
    ?>

        <div class="row m-3 p-2 bg-white rounded border border-dark">
            <div class="col-12 p-2 text-center">
                <h4 class="font-weight-bold"><?php echo $pelicula ?></h4>
            </div>

            <div class="col-12 p-3 text-center overflow-auto">
                <p class="m-0">"<?php echo $valoracion->texto ?>"</p>
            </div>

            <div class="col-12 m-0 text-center">
                <p class="m-0 font-weight-bold"><?php echo $valoracion->puntuacion ?> de 5</p>
            </div>
            
            <div class="col-12 text-center ">
                <div class="valoracion">
                <?php
                    for ($i = 5; $i > 0; $i--) {
                    ?>
                        <input type="radio" id='<?php echo "radio".($valoracion->id+$i) ?>' name='<?php echo "radio$valoracion->id" ?>'  <?php  if ($valoracion->puntuacion==$i) echo 'checked' ?> aria-hidden="true" aria-disabled="true" disabled>
                        <label for='<?php echo "radio".($valoracion->id+$i) ?>'>★</label>
                    <?php
                    }
                ?>
                </div>
            </div>
        </div>

    <?php
    }
}
