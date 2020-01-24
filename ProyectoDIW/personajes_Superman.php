<?php include_once 'includes/sesion.php';?>
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
    <?php banner("PersSuperman", "SUPERMAN");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(9, 9, 5, 7, 7, 8); ?>

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
                <p>Superman (cuyo nombre kryptoniano es Kal-El y su nombre terrestre es Clark Kent) es un personaje ficticio, un superhéroe de los cómics que aparece en las publicaciones de DC Comics. 
                Creado por el escritor estadounidense Jerry Siegel y el artista canadiense Joe Shuster en 1933 cuando ambos se encontraban viviendo en Cleveland, Ohio; lo vendieron a Detective Comics, Inc. en 1938 por 130  dólares estadounidenses.
                Con el éxito de sus aventuras, Superman ayudó a crear el género del superhéroe y estableció su primacía dentro del cómic estadounidense.1​ La apariencia del personaje es distintiva e icónica: un traje azul y rojo, 
                con una capa y un escudo de “S” estilizado en su pecho, escudo que se ha convertido en un símbolo del personaje en todo tipo de medios de comunicación.</p>
                
                <article>
                    <h3 class="font-weight-bold">Orígenes</h3>
                    <img class="img-fluid mt-2 w-100" src="assets/img/pers/pers_SupermanOrig1.jpg">
                    <p class="mt-2">En Action Comics # 1 (1938), Superman nace en un mundo extraño a una especie tecnológicamente avanzada que se parece a los humanos. 
                    Poco después de nacer, su planeta se destruye en un cataclismo natural, pero el padre científico de Superman previó la calamidad y salva a su hijo bebé enviándolo a la Tierra en una pequeña nave espacial. 
                    Lamentablemente, la nave es demasiado pequeña para llevar a alguien más, por lo que los padres de Superman se quedan atrás y mueren. Las primeras tiras de periódicos nombran el planeta "Krypton", el bebé "Kal-L" y sus padres biológicos "Jor-L" y "Lora"; ​sus nombres fueron cambiados a "Jor-el" y "Lara" en una novela de 1942 de George Lowther. 
                    La nave aterriza en el campo estadounidense, donde los Kents, una pareja de agricultores, descubren al bebé.</p>

                    <p>Los Kents nombran al niño Clark y lo crían en una comunidad agrícola. Enseñan a Clark que debe ocultar sus orígenes de otro mundo y usar sus fantásticos poderes para hacer el bien. 
                    Clark crea la identidad disfrazada de Superman para proteger su privacidad personal y la seguridad de sus seres queridos. Como Clark Kent, usa anteojos para disfrazar su cara y usa su traje de Superman debajo de su ropa para que pueda cambiarse en cualquier momento. 
                    Para completar este disfraz, Clark evita la confrontación violenta, prefiriendo escabullirse y cambiarse a Superman cuando surge el peligro, y sufre un ridículo ocasional por su aparente cobardía.</p>
                </article>

                <article>
                    <img class="img-fluid pb-2 w-100" src="assets/img/pers/pers_SupermanOrig2.jpeg">
                    <p class="mt-2">La primera historia en la que Superman muere fue publicada en Superman # 149 (1961), en la cual es asesinado por Lex Luthor por medio de kryptonita. 
                    Esta historia era "imaginaria" y, por lo tanto, fue ignorada en libros posteriores. En Superman # 188 (abril de 1966), Superman es asesinado por la radiación de kryptonita, pero uno de sus doppelgangers de Android revive el mismo problema. </p>

                    <p>En la década de 1990, la historia de La muerte y el regreso de Superman, después de una batalla mortal con Doomsday, Superman murió en Superman # 75 (enero de 1993). Más tarde fue revivido por el Erradicador. En Superman # 52 (mayo de 2016) Superman es asesinado por envenenamiento con kryptonita, y esta vez no es resucitado, sino que es reemplazado por el Superman de una línea de tiempo alternativa, hasta que en un tiempo, es revivido al ser extraído del envenenamiento con kryptonita. 
                    Superman mantiene un escondite secreto llamado "Fortaleza de la Soledad", que se encuentra en algún lugar del Ártico. Aquí, Superman guarda una colección de recuerdos y un laboratorio para experimentos científicos. 
                    En Action Comics # 241, la Fortaleza de la Soledad es una cueva en una montaña, sellada con una puerta muy pesada que se abre con una llave gigantesca demasiado pesada para que la use cualquier persona que no sea Superman. En la película de 1978, la Fortaleza de la Soledad es una estructura hecha de hielo. 
                    El Hombre de Acero retrata la Fortaleza como una nave de exploración kryptoniana enterrada profundamente debajo de la roca y el hielo.</p>

                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table table-bordered table-lg p-4">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th colspan="2"><h3 class="text-light">Perfil</h3></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre real</th>
                        <td>Kal-El/Clark Joseph Kent</th>
                    </tr>
                    <tr>
                        <th>Raza</th>
                        <td>Kryptoniano</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>102 kg</th>
                    </tr>
                    <tr>
                        <th>Altura</th>
                        <td>1,90 m</th>
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
                        <td>Marrón</th>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>Krypton</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>DC Comics</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>El Hombre de Acero, El hombre del mañana, La maravilla de Metrópolis, El último hijo de Krypton</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>Súper fuerza, súper velocidad, vuelo, invulnerabilidad casi total, visión de rayos X, aliento helado, súper oído, visión infrarroja </th>
                    </tr>
                    <tr>
                        <th>Creado por</th>
                        <td>Jerry Siegel y Joe Shuster </th>
                    </tr>

                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>