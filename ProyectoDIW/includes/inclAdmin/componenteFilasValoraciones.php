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
        
        foreach($valoraciones as $valoracionesFila){
            ?>
            <table class="table text-center border">
                
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Autor</th>
                        <th>Fecha</th>
                        <th>Texto</th>
                        <th>Puntuación</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                
                <?php var_dump($valoraciones)?>
            
                <tr class="filaInformacionPerfil">
                    <td><p><?php echo $peliculaFila->id ?></p></td>

                    <td>
                        <p id="<?php echo "nombre$peliculaFila->id" ?>"><?php echo $peliculaFila->titulo ?></p>
                    </td>

                    <td>
                        <p><?php echo $peliculaFila->fecha_estreno ?></p>
                    </td>

                    <td>
                        <p><?php echo substr($peliculaFila->img_carrusel, 11) ?></p>
                    </td>

                    <td>
                        <p><?php echo substr($peliculaFila->img_cartelera, 11) ?></p>
                    </td>

                    <td>
                        <form action="modificarUsuario.php" method="POST">
                            <input type="submit" class="btn btn-primary btn-sm" value="Modificar datos" name="modificarUsuario">
                        </form>
                    </td>

                    <td>
                        <form action="#" method="POST" class="claseFormPelicula">
                            <input type="hidden" value="<?php echo $peliculaFila->id ?>" name="idPeliculaOperacion">
                            <input type="submit" name="eliminarPelicula" value="X" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            </table>        
            <?php
            
        }
    }
}