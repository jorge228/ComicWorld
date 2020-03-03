<?php include_once 'includes/sesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("includes/contenidoHead.php");

    include("includes/banners.php");

    include("includes/inclPersonajes/statsPersonajes.php");
    ?>

    <script src='js/pers.js'></script>
</head>

<body>
    <!--MENU DE NAVEGACION-->
    <?php include("includes/menuNav.php"); ?>

    <!--Banner-->
    <?php banner("PersSpiderman", "SPIDERMAN");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(6, 5, 7, 8, 6, 6); ?>

    <!--Cuerpo-->
    <section class="container-fluid p-0" id="contenidoPers">

        <!--Biografia y datos-->
        <div class="row mt-4 mx-2 pt-4 border-top">

            <!--Titulo-->
            <div class="col-lg-2 pr-3">
                <h2 class="text-center font-weight-bold text-warning biografia-titulo">Biografía</h2>
            </div>

            <!--Contenido biografia-->
            <section class="col-lg-7 px-md-5">
                <p>Spider-Man (llamado Hombre Araña en muchas de las traducciones al español) es un superhéroe ficticio creado por los escritores y editores Stan Lee y Steve Ditko.
                 Apareció por primera vez en el cómic de antología Amazing Fantasy # 15 (10 de agosto de 1962),
                 en la Edad de Plata de los cómics. Aparece en los cómics estadounidenses publicados por Marvel Comics,
                 así como en varias películas, programas de televisión y adaptaciones de videojuegos ambientadas en el Universo Marvel.</p>
                
                <article>
                    <h3 class="font-weight-bold">Orígenes</h3>
                    <img class="img-fluid mt-2 w-100" src="assets/img/pers/pers_SpidermanOrig1.jpeg" alt="Spiderman agarrándose a una de sus redes">
                    <p class="mt-2">En Forest Hills, Queens, Nueva York, ​el estudiante de la Escuela Midtown High, Peter Benjamin Parker es un científico huérfano que vive con su tío Ben y su tía May. Como se describe en Amazing Fantasy # 15 (agosto de 1962), es mordido por una araña radioactiva (erróneamente clasificada como un insecto en el panel) en una exhibición de ciencias y "adquiere la agilidad y la fuerza proporcional de un arácnido ". 
                    Junto con la súper fuerza, Parker gana la capacidad de adherirse a paredes y techos. A través de su habilidad nativa para la ciencia, desarrolla un dispositivo que le permite disparar cintas adhesivas de su propio diseño a través de pequeños barriles montados en la muñeca. Inicialmente buscando capitalizar sus nuevas habilidades, Parker se pone un disfraz y, como "Spider-Man", se convierte en una estrella de televisión novedosa. 
                    Sin embargo, "ignora alegremente la posibilidad de detener a un ladrón que huye, y su indiferencia irónicamente lo alcanza cuando el mismo delincuente más tarde roba y mata a su tío Ben". Spider-Man rastrea y domina al asesino y aprende, en la penúltima leyenda de la historia, "con gran poder también debe haber una gran responsabilidad".</p>
                </article>

                <article>
                    <img class="img-fluid pb-2 w-100" src="assets/img/pers/pers_SpidermanOrig2.jpg" alt="Imagen de varios Spiderman">
                    <p class="mt-2">A pesar de sus superpoderes, Parker se esfuerza por ayudar a su tía a pagar el alquiler, se burla de sus compañeros, especialmente la estrella de fútbol Flash Thompson, y, como Spider-Man, engendra la ira editorial del editor de periódicos J. Jonah Jameson.
                    ​Mientras lucha con sus enemigos por primera vez, ​Parker encuentra difícil hacer malabares con su vida personal y las aventuras disfrazadas. 
                    Con el tiempo, Peter se gradúa de la escuela secundaria, ​y se matricula en la Universidad Empire State (una institución ficticia que evoca la vida real de la Universidad de Columbia y la Universidad de Nueva York), ​donde se encuentra con su compañero de cuarto y mejor amigo Harry Osborn, y su novia Gwen Stacy, y la tía May le presenta a Mary Jane Watson. 
                    ​Mientras Peter lidia con los problemas de drogas de Harry, y se revela que el padre de Harry es el enemigo de Spider-Man, el Duende Verde, Peter incluso intenta abandonar su identidad de disfraz por un tiempo.
                     El padre de Gwen Stacy, el detective de la policía de la ciudad de Nueva York, George Stacy, es asesinado accidentalmente durante una batalla entre Spider-Man y Doctor Octopus (# 90, noviembre de 1970).</p>
                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table table-bordered table-lg p-4">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th colspan="2" class="perfil-titulo">Perfil</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre real</th>
                        <td>Peter Benjamin Parker</th>
                    </tr>
                    <tr>
                        <th>Raza</th>
                        <td>Humano</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>75 kg</th>
                    </tr>
                    <tr>
                        <th>Altura</th>
                        <td>1,78 m</th>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>Masculino</th>
                    </tr>
                    <tr>
                        <th>Color de ojos</th>
                        <td>Avellana</th>
                    </tr>
                    <tr>
                        <th>Pelo</th>
                        <td>Marrón</th>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>Queens, Nueva York</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>Marvel</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>El Hombre Araña, el Increíble Spiderman, tu amigo y vecino Spiderman, Tigre</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>Fuerza y agilidad sobrehumanas, reflejos sobrehumanos (sentido arácnido), capacidad para trepar paredes como una araña </th>
                    </tr>
                    <tr>
                        <th>Creado por</th>
                        <td>Stan Lee y Steve Ditko </th>
                    </tr>
                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>