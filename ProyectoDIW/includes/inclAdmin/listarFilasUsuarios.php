<?php

//Funcion para listar usuarios en formato fila para backend
function listarUsuarios($usuarios){

    //Si no se introduce un array se muestra un mensaje de error
    if (!is_array($usuarios)){?>

        <div class="row p-2 text-center ">
            <div class="col-12">
                <h5 class="text-error">Error al recuperar usuarios de la base de datos</h5>
            </div>
        </div>

    
    <?php
    }
    //Si se introduce un array se mostrara una fila para cada usuario
    else{

        foreach($usuarios as $usuario){
        ?>
            <div class="row p-2 text-center ">

                <!--Nombre-->
                <div class="col-4">

                    <h5 class="py-2 m-0 font-weight-bold"><?php echo $usuario->username ?></h5>

                </div>

                <div class="col-4">

                    <form action="perfilUsuario.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                        <input type="submit" class="btn btn-primary btn-md" name="verPerfil" value="Ver perfil">
                    </form>

                </div>

                <!--Perfil form-->
                <div class="col-4">

                    <form action="#" method="POST">
                        <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                        <input type="submit" class="btn btn-primary btn-md" name="modificarPerfil" value="Modificar usuario">
                    </form>

                </div>
            </div>
        
        <?php   
        }
    }
}