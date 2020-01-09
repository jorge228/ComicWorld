<!DOCTYPE html>
<html lang="en">
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
    <?php banner("PersFlash", "FLASH");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(6, 7, 6, 8, 7, 10); ?>

    <!--Cuerpo-->
    <section class="container-fluid p-0" id="contenidoPers">

        <!--Biografia y datos-->
        <div class="row mt-4 mx-2 pt-4 border-top">

            <!--Titulo-->
            <div class="col-lg-2 pr-3">
                <h1 class="text-center font-weight-bold text-warning">Biografía</h1>
            </div>

            <!--Contenido biografia-->
            <section class="col-lg-7 px-md-5">
                <p>Flash (conocido también como The Flash) es el nombre de varios superhéroes ficticios que aparecen en los cómics estadounidenses publicados por DC Comics. Creado por el escritor Gardner Fox y el artista Harry Lampert, el "Flash" original apareció por primera vez en Flash Comics #1 (fecha de portada de enero de 1940 / mes de noviembre de 1939)).
                 Apodado el "Corredor Escarlata", todas las encarnaciones del Flash poseen "súper velocidad", que incluye la capacidad de correr, moverse y pensar extremadamente rápido, también puede atravesar la materia sólida, usar reflejos sobrehumanos y aparentemente violar ciertas leyes de la física, como superar la velocidad de la luz.</p>
                
                <article>
                    <h3 class="font-weight-bold">Orígenes</h3>
                    <img class="img-fluid mt-2 w-100" src="assets/img/pers/pers_FlashOrig1.jpg">
                    <p class="mt-2">Hasta ahora, al menos cuatro personajes diferentes, cada uno de los cuales de alguna manera obtuvo el poder de "la Fuerza de la Velocidad", han asumido el papel del Flash en las historias de DC: el atleta universitario Jay Garrick siendo el primero en portar el título (1940-1951, 1961-2011, 2017-presente ), el científico forense Barry Allen (1956-1985, 2008-presente), el sobrino de Barry Wally West (1986-2011, 2016-presente) y el nieto de Barry Bart Allen (2006-2007). 
                    Cada encarnación de Flash ha sido un miembro clave de al menos uno de los principales equipos de DC: Sociedad de la Justicia de América, Liga de la Justicia de América, Los Jóvenes Titanes y Young Justice. Wally West y Bart Allen originalmente fueron conocidos como Kid Flash, posteriormente asumieron el manto de Flash (Bart también era conocido como Impulso).</p>

                    <p>Se creía que West era el único que sabía dominar la fuerza de la velocidad, pero actualmente Barry Allen y otros personajes que han adquirido “la fuerza de velocidad” han demostrado cierto nivel de poder y control sobre esta. 
                    The Flash es uno de los personajes más populares de DC Comics y ha sido parte integral de las muchas historias de "crisis" que cambian la realidad a lo largo de los años. 
                    La reunión original de Flash de la edad de oro Jay Garrick y la de edad de plata de Flash Barry Allen en "El Flash de dos mundos" (1961) introdujo el concepto del Multiverso a los lectores de DC, que se convertiría en la base de muchas historias de DC en los años venideros.</p>
                </article>

                <article>
                    <img class="img-fluid pb-2 w-100" src="assets/img/pers/pers_FlashOrig2.jpg">
                    <p class="mt-2">Al igual que sus compañeros de la Liga de la Justicia Mujer Maravilla, Superman y Batman, Flash tiene un elenco distintivo de adversarios, incluidos los diversos Renegados (únicos entre los supervillanos de DC por su código de honor) comandados por Capitán Frío y los diversos "velocistas" psicópatas que se conocen con el nombre "Flash Reverso o "Zoom" o el Supervillano Gorilla Grodd como uno de los villanos mas importantes de Flash. Otros personajes secundarios en las historias de Flash incluyen a la esposa de Barry, 
                    Iris West, la esposa de Wally, Linda Park, la novia de Bart, Valerie Perez, el compañero velocista Max Mercury y los miembros del departamento de policía de Ciudad Central, David Singh y Patty Spivot.</p>

                    <p>Como uno de los personajes básicos de los cómics del Universo DC, Flash se ha adaptado a numerosas películas de DC, videojuegos, series animadas y programas de televisión en vivo. En acción real, Barry Allen ha sido retratado por Rod Haase para el especial de televisión de 1979 Legends of the Superheroes, John Wesley Shipp en la serie The Flash de 1990 y Grant Gustin en la serie de 2014 The Flash, y por Ezra Miller en la serie de películas 
                    del Universo extendido de DC Comics, comenzando con Batman v Superman: Dawn of Justice (2016) y continuando con la Liga de la Justicia. John Wesley Shipp también retrata una versión de Jay Garrick en la serie The Flash 2014. Las diversas encarnaciones del Flash también aparecen en series animadas como Superman: la serie animada de 1992, Liga de la Justicia de 2001, Batman: The Brave and the Bold de 2008 y Young Justice de 2010, así como también en la serie de Películas animadas originales del Universo DC.</p>

                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table table-bordered table-lg p-4">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th colspan="2"><h3 class=" text-light">Perfil</h3></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre real</th>
                        <td>Jay Garrick/Barry Allen/ Wally West/ Bart Allen</th>
                    </tr>
                    <tr>
                        <th>Raza</th>
                        <td>Humano</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>81 kg</th>
                    </tr>
                    <tr>
                        <th>Altura</th>
                        <td>1,87 m</th>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>Masculino</th>
                    </tr>
                    <tr>
                        <th>Color de ojos</th>
                        <td>Azules</th>
                    </tr>
                    <tr>
                        <th>Pelo</th>
                        <td>Rubio (Barry), negro (Jay y Bart), pelirrojo (Wally)</th>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>Central City, EEUU</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>DC</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>El corredor escarlata, Kid Flash, impulso, el cometa carmesí, la mancha, el rayo veloz, centella, destello, el hombre que corre</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>Capacidad de correr más rápido que la luz, reflejos sobrehumanos, capacidad de lanzar energía con las manos, viajar en el tiempo, factor curativo</th>
                    </tr>
                    <tr>
                        <th>Creado por</th>
                        <td>Gardner Fox, Harry Lampert </th>
                    </tr>

                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>