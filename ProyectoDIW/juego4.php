<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>
<body onload="init()">
 
    <!--MENU DE NAVEGACION-->
    <?php 
    include "includes/menuNav.php"; 
    ?>

    <!--JUEGO-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <canvas width="900" height="560" id="canvasJuego" >Tu navegador no soporta HTML5</canvas>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="js/juegoDani/clasesJuegoDani.js"></script>
    <script src="js/juegoDani/juegoDani.js"></script>

    <!--Footer-->
    <?php include "includes/footer.php"; ?>
</body>

</html>

