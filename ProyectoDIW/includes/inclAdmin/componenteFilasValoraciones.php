<?php

//Funcion para listar peliculas en formato fila para backend
function listarValoraciones($valoraciones){

    //Si no se introduce un array se muestra un mensaje de error
    if (!is_array($valoraciones)){?>

        <div class="row p-2 text-center ">
            <div class="col-12 mensajeError">
                <h5 class="text-error">Error al recuperar valoraciones de la base de datos</h5>
            </div>
        </div>

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
                    <th></th>
                </tr>

            <?php
            foreach($arrayValoraciones as $usuario=>$valoracion){
                ?>
                <tr>
                    <td><p><?php echo $valoracion->id ?></p></td>

                    <td>
                        <p id="<?php echo "autor" ?>"><?php echo $usuario ?></p>
                    </td>

                    <td>
                        <p><?php echo $valoracion->fecha_valoracion ?></p>
                    </td>

                    <td>
                        <p></p>
                    </td>

                    <td>
                        <p><?php echo $valoracion->puntuacion?></p>
                    </td>

                    <td>
                        <form action="#" class="formGestionValoracion" method="POST">
                            <input type="hidden" value="<?php echo $valoracion->id ?>" name="idValoracion">
                            <input type="submit" name="btnEliminarValoracion" value="X" class="btn btn-danger btn-sm">
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