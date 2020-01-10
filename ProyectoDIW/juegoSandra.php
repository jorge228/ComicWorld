<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>

<body onload="inicializa()">

    <!--MENU DE NAVEGACION-->
    <?php
    include "includes/menuNav.php";
    ?>
    <link rel="stylesheet" type="text/css" class="body">

    <!--JUEGO-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-warning font-weight-bold">Piedra-Papel-Tijera</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <canvas id="canvas" name="canvas" width="700" height="300">Tu navegador no soporta HTML5</canvas>
            </div>
            <div id="juego">
                <h1>Juega Contra el ordenador</h1>
                <div onclick="usuario('0');" id="piedra"></div>
                <div onclick="usuario('1');" id="papel"></div>
                <div onclick="usuario('2');" id="tijera"></div>
            </div>
            <div id="efecto" style="display:none" onclick="quitarEfecto();"></div>

        </div>
    </div>

    <!--Scripts-->
    <script src="js/juegoSandra/juego.js"></script>

    <!--Footer-->
    <?php include "includes/footer.php"; ?>
</body>

</html>