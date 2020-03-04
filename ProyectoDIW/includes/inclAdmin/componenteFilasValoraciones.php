<?php

//Funcion para listar peliculas en formato fila para backend
function listarValoraciones($valoraciones){

    //Si no se introduce un array se muestra un mensaje de error
    if (count($valoraciones)==0){?>

        <tr>
            <td class="text-center">
                <h5 class="font-weight-bold">No hay valoraciones de la base de datos</h5>
            </td>
        </tr>

    <?php
    }
    //Si se introduce un array se mostrara una fila para cada usuario
    else{
        //Variable para las ids del target
        $i=0;
        foreach($valoraciones as $pelicula=>$arrayValoraciones){
            ?>

            <thead class="thead-light" data-toggle="collapse" href="<?php echo "#target$i" ?>" aria-expanded="true" aria-controls="<?php echo "#target$i" ?>">
                <tr >
                    <th colspan="6" data="toggle" class="text-center"><?php echo $pelicula ?></th>
                </tr>
            </thead>

            <tbody id="<?php echo "target$i" ?>">
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                    <th>Texto</th>
                    <th>Puntuación</th>
                    <td></td>
                </tr>

            <?php
            foreach($arrayValoraciones as $usuario=>$valoracion){
                ?>
                <tr>
                    <td><p id="id<?php echo $valoracion->id?>"><?php echo $valoracion->id ?></p></td>

                    <td>
                        <p><?php echo $usuario ?></p>
                    </td>

                    <td>
                        <p><?php echo $valoracion->fecha_valoracion ?></p>
                    </td>

                    <td>
                        <button class="btnTextoVal btn btn-primary">Mostrar texto</button>
                    </td>

                    <td>
                        <p class="valoracion"><?php echo $valoracion->puntuacion?>★</p>
                    </td>

                    <td>
                        <form action="#" class="formGestionValoracion" method="POST">
                            <input type="hidden" value="<?php echo $valoracion->id ?>" name="idValoracion">
                            <input type="submit" name="btnEliminarValoracion" value="X" class="btn btn-danger btn-sm" aria-label="Eliminar valoración">
                        </form>
                    </td>

                </tr>
                <?php
            }
            $i++;
            ?>
            </tbody>
            <?php
        }
    }
}