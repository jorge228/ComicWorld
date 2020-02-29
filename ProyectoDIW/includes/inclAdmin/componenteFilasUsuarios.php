<?php

//Funcion para listar usuarios en formato fila para backend
function listarUsuarios($usuarios, $idUsuarioLogeado){

    //Si no se introduce un array se muestra un mensaje de error
    if (count($usuarios)<=1){?>

        <tr>
            <td class="text-center" colspan="6">
                <h5 class="font-weight-bold">No hay más usuarios en la base de datos</h5>
            </td>
        </tr>

    <?php
    }
    //Si se introduce un array se mostrara una fila para cada usuario
    else{
        
        foreach($usuarios as $usuarioFila){
            if ($usuarioFila->id!=$idUsuarioLogeado){
            ?>
                <tr class="filaInformacionPerfil">
                    <td><p><?php echo $usuarioFila->id ?></p></td>
                    <td><p id="<?php echo "nombre$usuarioFila->username" ?>"><?php echo $usuarioFila->username?></p></td>

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

                            <select name="rolUsuario" id="rolUsuario" class="p-2" aria-label="Roles disponibles">
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