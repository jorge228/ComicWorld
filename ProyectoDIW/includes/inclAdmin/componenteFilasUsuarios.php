<?php

//Funcion para listar usuarios en formato fila para backend
function listarUsuarios($usuarios, $idUsuarioLogeado){

    //Si no se introduce un array se muestra un mensaje de error
    if (!is_array($usuarios)){?>

        <div class="row p-2 text-center ">
            <div class="col-12 mensajeError">
                <h5 class="text-error">Error al recuperar usuarios de la base de datos</h5>
            </div>
        </div>

    <?php
    }
    //Si se introduce un array se mostrara una fila para cada usuario
    else{
        
        foreach($usuarios as $usuarioFila){
            if ($usuarioFila->id!=$idUsuarioLogeado){
            ?>
                <tr class="filaInformacionPerfil">
                    <td><p><?php echo $usuarioFila->id ?></p></td>
                    <td><p id="<?php echo "nombre$usuarioFila->username" ?>"><a href="perfilUsuario.php?id=<?php echo $usuarioFila->id ?>"><?php echo $usuarioFila->username?></a></p></td>

                    <td>
                        <p><?php echo ucfirst($usuarioFila->rol) ?></p>
                    </td>
    
                    <td>
                        <form action="modificarUsuario.php" method="POST">
                            <input type="hidden" value="<?php echo $usuarioFila->id ?>" name="idUsuarioMod">
                            <input type="submit" class="btn btn-primary btn-sm" value="Modificar datos" name="verPerfil">
                        </form>
                    </td>


                    <form action="#" method="POST" class="formGestionUsuario">
                        <td>
                            <input type="hidden" name="idUsuarioOperacion" value="<?php echo $usuarioFila->id ?>">

                            <select name="rolUsuario" class="p-2">
                                <option value="admin" <?php if($usuarioFila->rol=="admin") echo 'selected'; ?>>Administrador</option>
                                <option value="editor" <?php if($usuarioFila->rol=="editor") echo 'selected'; ?>>Editor</option>
                                <option value="usuario" <?php if($usuarioFila->rol=="usuario") echo 'selected'; ?>>Usuario</option>
                            </select>

                            <input type="submit" name="cambiarRol" value="✔" class="btn btn-primary btn-sm">
                        </td>

                        <td>
                            <input type="submit" name="eliminarUsuario" value="X" class="btn btn-danger btn-sm">
                        </td>
                    </form>
                </tr>        
            <?php
            }   
        }
    }
}