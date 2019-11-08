<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html lang="en">
<head>
    <?php include("includes/contenidoHead.php"); ?>

    <style>
    
    </style>
</head>

<body>
    <!--MENU DE NAVEGACION-->
    <?php include("includes/menuNav.php"); ?>

    <!--Contenido-->
    <div class="container-fluid p-0">

        <div class="row ">
            <div class="col-12">
                <img class="img-fluid w-100" src="assets/img/carrusel1.jpg"/>
            </div>
        </div>

        <div class="row mt-4 mx-4">
            <div class="col-md-3 border-md-top">
                <h1 class="text-center font-weight-bold text-primary">BIOGRAFÍA</h1>
            </div>

            <div class="col-md-6 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="col-md-3 border p-0">
                <table class="table table-sm">
                    <thead class="bg-primary">
                        <tr class="text-center">
                            <th colspan="2"><h1 class="font-weight-bold">Datos</h1></th>
                        </tr>
                    </thead>
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th colspan="2">Datos personales</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Identidad</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Ojos</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Pelo</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td>$NombrePers</th>
                    </tr>
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th colspan="2">Cómics</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Universo</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>$NombrePers</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>$NombrePers</th>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>