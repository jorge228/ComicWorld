<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>

<body>

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
                        <h1 class="text-warning font-weight-bold">Piedra, Papel o Tijera (juego Sandra)</h1>
                        <br></br>
                        <h4>Tu elección . . .</h4>
                        <input type="button" name="botonPiedra" value="Piedra" onclick=jugadorElige('assets/img/juegoSandra/piedra2.png','piedra')> <input type="button" name="botonPapel" value="Papel" onclick=jugadorElige('assets/img/juegoSandra/papel2.png','papel')> <input type="button" name="botonTijera" value="Tijera" onclick=jugadorElige('assets/img/juegoSandra/tijera2.png','tijera')> <img src="assets/img/juegoSandra/pregunta.png" id="jugador" />
                        </br></br>
                        <h4>El rival ha elegido . . .</h4>
                        <img src="assets/img/juegoSandra/pregunta.png" id="rival" />
                        </br></br>
                        <center>
                            <table border=1 class="egt">
                                <tr>
                                    <td>Tu</td>
                                    <td>Rival</td>
                                    <td>Empatados</td>
                                </tr>
                                <tr>
                                    <td id="cantidadGanados">0</td>
                                    <td id="cantidadPerdidos">0</td>
                                    <td id="cantidadEmpatados">0</td>
                                </tr>
                            </table>
                        </center>


                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <canvas id="canvas" width="899" height="560">TU NAVEGADOR NO SOPORTA HTML5!</canvas>
                    </div>
                </div>
            </div>

            <!--Scripts-->
            <script src="js/juegoSandra/juego.js" type="text/javascript"></script>
        </div>

        <!--Footer-->
        <?php include "includes/footer.php"; ?>
    </div>
</body>

</html>