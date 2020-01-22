<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>
<body onload="init()">
 
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
                        <h1 class="text-warning font-weight-bold">Floaty Bird (juego de Daniel)</h1>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <canvas width="900" height="560" id="canvasJuego" >Tu navegador no soporta HTML5</canvas>
                    </div>
                </div>
            </div>


        
        </div>
        
        <!--Footer-->
        <?php include "includes/footer.php"; ?>
    </div>
                <!--Scripts-->
    <script src="js/juegoDani/clasesJuegoDani.js"></script>
    <script src="js/juegoDani/juegoDani.js"></script>
</body>

</html>

