<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html lang="en">
<head>
    <?php
    include("includes/contenidoHead.php");

    include("includes/banners.php");
    ?>

    <script src='js/pers.js'></script>
</head>

<body>
    <!--MENU DE NAVEGACION-->
    <?php include("includes/menuNav.php"); ?>

    <!--Contenido-->
    <?php banner("assets/img/carrusel1.jpg");?>
    
    <div class="container-fluid p-0">

        <div class="row m-4 text-center">
            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="70"><span class="percent">7</span></div>
                <p class="tituloPuntuacionPer">FUERZA</p>

            </div>

            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="80"><span class="percent">8</span></div>
                <p class="tituloPuntuacionPer">RESISTENCIA</p>
            </div>

            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="60"><span class="percent">6</span></div>
                <p class="tituloPuntuacionPer">INTELECTO</p>
            </div>

            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="100"><span class="percent">10</span></div>
                <p class="tituloPuntuacionPer">AGILIDAD</p>
            </div>

            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="100"><span class="percent">10</span></div>
                <p class="tituloPuntuacionPer">COMBATE</p>
            </div>

            <div class="col-6 col-sm-4 col-md-2 p-0">
                <div class="chart" id="intel" data-percent="100"><span class="percent">10</span></div>
                <p class="tituloPuntuacionPer">VELOCIDAD</p>
            </div>

        
        </div>

        <div class="row mt-4 mx-4">

            <div class="col-md-3 border-md-top">
                <h1 class="text-center font-weight-bold text-primary">BIOGRAFÍA</h1>
            </div>

            <div class="col-md-6 text-justify">
                <p>Spider-Man (llamado Hombre Araña en muchas de las traducciones al español) es un superhéroe ficticio creado por los escritores y editores Stan Lee y Steve Ditko. Apareció por primera vez en el cómic de antología Amazing Fantasy # 15 (10 de agosto de 1962), en la Edad de Plata de los cómics. Aparece en los cómics estadounidenses publicados por Marvel Comics, así como en varias películas, programas de televisión y adaptaciones de videojuegos ambientadas en el Universo Marvel. En las historias, Spider-Man es el alias de Peter Parker, un huérfano criado por su tía May y su tío Ben en la Ciudad de Nueva York después de que sus padres Richard y Mary Parker murieron en un accidente aéreo. Lee y Ditko tuvieron que lidiar con los problemas de la adolescencia y los problemas financieros, y lo acompañaron con muchos personajes de apoyo, como J. Jonah Jameson, Flash Thompson, Harry Osborn, los intereses románticos, Gwen Stacy y Mary Jane Watson, y enemigos como el Doctor Octopus, Kingpin, Duende Verde y Venom. Su historia de origen lo tiene adquiriendo habilidades relacionadas con la araña después de un mordisco de una araña radioactiva; estos incluyen aferrarse a las superficies, 
                disparar telarañas desde dispositivos montados en la muñeca y detectar el peligro con su "sentido arácnido".</p>

            </div>

            <div class="col-md-3 p-0">
                <table class="table table-sm border">
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