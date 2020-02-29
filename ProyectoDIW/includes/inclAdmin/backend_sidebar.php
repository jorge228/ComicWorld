
<?php 

//Mostrar sidebar
function sidebar($usuario){

    ?>
    <!--Sidebar-->
    <div class="col-12 col-md-3 containerAlturaBackend bg-dark">

        <!--Foto y nombre de usuario-->
        <div class="row p-0">
            <div class="col-12 text-center p-4">
                <img class="img-fluid rounded-circle" src="assets/img/logo.png" alt="Logo de ComicWorld">
            </div>

            <div class="col-12">
                <h1 class="text-center text-white font-weight-bold">Panel de gestión</h1>
            </div>
            <div class="col-12">
                <p class="text-center text-white m-1 font-weight-bold"><?php echo ucfirst($usuario->rol) ?></p>
            </div>

        </div>

        <!--Menu-->
        <div class="row my-3">
            <div class="col-12">
                <div class="list-group text-center">
                    <?php
                    //Solo se mostrara el menu de gestion de usuarios y valoraciones a los administradores
                    if ($usuario->rol=="admin"){
                    ?>
                        <a href="backendUsuario.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "backendUsuario.php" )!=false) echo "active" ?>">Gestión de usuarios</a>
                    <?php
                    }
                    ?>
                    <a href="backendContenido.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "backendContenido.php" )!=false) echo "active" ?>">Gestión de contenidos</a>
                    <?php
                    if ($usuario->rol=="admin"){
                    ?>
                        <a href="backendValoraciones.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "backendValoraciones.php" )!=false) echo "active" ?>">Gestión de valoraciones</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <?php
}
?>