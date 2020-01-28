
<?php 

//Mostrar sidebar
function sidebar(){

    ?>
    <!--Sidebar-->
    <div class="col-12 col-sm-3 containerAlturaBackend bg-dark">

        <!--Foto y nombre de usuario-->
        <div class="row p-0">
            <div class="col-12 text-center p-4">
                <img class="img-fluid rounded-circle" src="assets/img/logo.png">
            </div>

            <div class="col-12">
                <h4 class="text-center text-white font-weight-bold">Panel de gestión</h5>
            </div>
        </div>

        <!--Menu-->
        <div class="row my-3">
            <div class="col-12">
                <div class="list-group text-center">
                    <a href="adminUsuario.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "adminUsuario.php" )!=false) echo "active" ?>">Gestión de usuarios</a>
                    <a href="adminContenido.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "adminContenido.php" )!=false) echo "active" ?>">Gestión de contenidos</a>
                    <a href="adminValoraciones.php" class="list-group-item list-group-item-dark list-group-item-action <?php if (strpos($_SERVER['SCRIPT_NAME'], "adminValoraciones.php" )!=false) echo "active" ?>">Gestión de valoraciones</a>
                </div>
            </div>
        </div>

    </div>
    <?php
}
?>