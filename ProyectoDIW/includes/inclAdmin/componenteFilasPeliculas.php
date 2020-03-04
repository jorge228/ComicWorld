<?php

//Funcion para listar peliculas en formato fila para backend
function listarPeliculas($peliculas){

    //Si no se introduce un array se muestra un mensaje de error
    if (count($peliculas)==0){?>

        <tr>
            <td class="text-center" colspan="6">
                <h5 class="font-weight-bold">No hay películas en la base de datos</h5>
            </td>
        </tr>

    <?php
    }
    //Si se introduce un array se mostrara una fila para cada usuario
    else{
        
        foreach($peliculas as $peliculaFila){
            ?>
            <tr class="filaInformacionPerfil">
                <td><p id='id<?php echo $peliculaFila->id ?>'><?php echo $peliculaFila->id ?></p></td>

                <td>
                    <p id="<?php echo "nombre$peliculaFila->id" ?>"><?php echo $peliculaFila->titulo ?></p>
                </td>

                <td>
                    <p><?php echo $peliculaFila->fecha_estreno ?></p>
                </td>

                <td>
                    <button class="btnImgCarrusel btn btn-info btn-sm" >Ver imagen carrusel</button>
                </td>

                <td>
                    <button class="btnImgCartelera btn btn-info btn-sm" >Ver imagen cartelera</button>
                </td>

                <td>
                    <form action="editPelicula.php" method="POST">
                        <input type="hidden" name="idPeliculaModificar" value="<?php echo $peliculaFila->id?>">
                        <input type="submit" class="btn btn-primary btn-sm" value="Modificar datos" name="modificarPelicula">
                    </form>
                </td>

                <td>
                    <form action="#" method="POST" class="claseFormPelicula">
                        <input type="hidden" value="<?php echo $peliculaFila->id ?>" name="idPeliculaOperacion">
                        <input type="submit" name="eliminarPelicula" value="X" class="btn btn-danger btn-sm" aria-label="Eliminar película">
                    </form>
                </td>
            </tr>        
            <?php
            
        }
    }
}