<?php

//Funcion para listar usuarios en formato fila para backend
function listarUsuarios($usuarios){

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

        foreach($usuarios as $usuario){
        ?>
            <tr>
                <td><?php echo $usuario->id ?></td>
                <td><?php echo $usuario->username ?></td>
                <td>
                    <form action="perfilUsuario.php" method="GET">
                        <input type="hidden" value="<?php echo $usuario->id ?>" name="id">
                        <input type="submit" class="btn btn-primary" value="Ver Perfil" name="verPerfil">
                    </form>
                </td>
                <td>
                    <form action="#" method="POST">
                        <select name="rolUsuario">
                            <option value="admin" <?php if($usuario->rol=="admin") echo 'selected'; ?>>Administrador</option>
                            <option value="editor" <?php if($usuario->rol=="editor") echo 'selected'; ?>>Editor</option>
                            <option value="usuario" <?php if($usuario->rol=="usuario") echo 'selected'; ?>>Usuario</option>
                        </select>
                    </form>
                </td>
            </tr>        
        <?php   
        }
    }
}