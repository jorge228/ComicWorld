<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>

<body onload="inicializa()">

    <div class="contenedorGlobal">

        <div class="contenedorContenido">

            <!--MENU DE NAVEGACION-->
            <?php
            include "includes/menuNav.php";
            ?>

            <!--JUEGO-->
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-warning font-weight-bold">Caza al Duende (juego de Jorge)</h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <canvas id="canvas" name="canvas" width="700" height="300" >Tu navegador no soporta HTML5</canvas>
                    </div>
                    <div class="col-12 d-flex justify-content-center p-4">
                        <button id='btn' class="btn btn-primary">COMENZAR</button>
                    </div>
                </div>
            </div>

            <!--Scripts-->
            <script src="js/juegoJorge/juego.js"></script>
        </div>
        
        <!--Footer-->
        <?php include "includes/footer.php"; ?>

    </div>
</body>

</html>