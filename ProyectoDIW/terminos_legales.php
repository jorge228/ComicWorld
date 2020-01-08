<!DOCTYPE html>
<html>

<head>
    <?php 
    include "includes/contenidoHead.php";
    include "includes/videos.php"; 
    ?>
    <script src='js/controlesVideo.js'></script>
</head>
<title>Términos Legales</title>

<body>

    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

    <!--CUERPO-->

    <div class="container p-5">
        <section>
            <h1 class="font-weight-bold text-warning">Aviso Legal</h1>
            <h2 class="text-success">1. Datos Identificativos</h2>
            <p>ComicWorld es un proyecto creado por un grupo de estudiantes de Desarrollo de Aplicaciones Web con fines meramente académicos.</p>
            <h2 class="text-success">2. Aceptación por el Usuario</h2>
            <p>Las presentes Condiciones Generales de Utilización de ComicWorld tienen por finalidad regular la puesta a disposición de los usuarios la información contenida en nuestra web.</p>
            <p>Por la mera navegación en nuestra web y/o por la utilización de los servicios incluidos en él, Ud. adquiere la condición de Usuario. Tanto la navegación como la utilización de ComicWorld y/o la utilización de cualquiera de los servicios suponen la aceptación como Usuario, sin reservas de ninguna clase, de todas y cada una de las presentes Condiciones Generales de Utilización.</p>
            <p> Podremos en todo momento y sin previo aviso, modificar las presentes Condiciones Generales, mediante la mera modificación del presente anuncio, con el fin de que puedan ser conocidas por los Usuarios antes de la visita. </p>
            <h2 class="text-success">3. Derechos de Propiedad Intelectual e Industrial</h2>
            <p>Derechos de propiedad intelectual e industrial son todos los derechos reconocidos por la legislación de propiedad intelectual que tengan carácter patrimonial o de explotación para cualquier finalidad y para cualquier modalidad de uso, así como todos los derechos reconocidos por la legislación de propiedad industrial, incluidos en ambos casos la facultad de solicitar los registros e inscripciones oportunos para la obtención o protección de estos derechos.</p>
            <p>Las licencias Creative Commons (CC) nacen de una organización sin ánimo de lucro, cuyo propósito es el desarrollo de modelos de licencias que permitan un mayor alcance de la cultura, utilizando las nuevas tecnologías, oprimiendo los obstáculos que presenta el copyright y protegiendo los derechos de los autores a la conservación de su obra original.</p>
            <p>Con estas licencias el autor puede definir los usos que se le podrá dar a su obra. El uso de estas licencias es gratuito y gozan de garantías legales internacionales. El Titular de la obra siempre conservará sus derechos como autor.</p>
            <section class="container-fluid mt-3 m-4">
                <article class="row">
                    <!--Primera columna-->
                    <div class="col-12 col-sm-2"></div>
                    <div class="col-12 col-sm-8">
                        <?php video("v_licenciaCC.mp4", "mp4", "4by3") ?>
                    </div>
                    <div class="col-12 col-sm-2"></div>
                </article>
            </section>
            <p>En nuestra página web, ComicWorld, utilizamos el tipo de Reconocimiento-No Comercial. Esta licencia le permite a otros entremezclar, ajustar y construir a partir de la obra original con fines no comerciales, sin embargo aunque en las nuevas creaciones deban reconocer la autoría y no puedan ser usadas de forma comercial.</p>
            <h2 class="text-success">4. Uso de Contenido de Terceros</h2>
            <aside class="tablaDatos">
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th>
                                <h3 class="text-light">Página</h3>
                            </th>
                            <th>
                                <h3 class="text-light">Archivo</h3>
                            </th>
                            <th>
                                <h3 class="text-light">Licencia</h3>
                            </th>
                            <th>
                                <h3 class="text-light">Web</h3>
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <td>terminos_legales.php</td>
                        <td>v_licenciaCC.mp4</td>
                        <td>Creative Commons: by</td>
                        <td><a href="https://creativecommons.org/">Ver su página web</a></td>
                    </tr>
                    <tr>
                        <td>películas_Marvel.php</td>
                        <td>capitanB.jpg</td>
                        <td>Copyright ©</td>
                        <td><a href="https://visualsluis.artstation.com/">Ver página del autor</a></td>
                    </tr>
                    <tr>
                        <td>películas_Marvel.php</td>
                        <td>capitanaB.jpg, capitanaC.jpg, capitanC.jpg, thorB.jpg, thorC.jpg, guardianesB.jpg, guardiancesC.jpg</td>
                        <td>©2020 MARVEL</td>
                        <td><a href="https://disneytermsofuse.com/spanish">Ver su página web</a></td>
                    </tr>
                    <tr>
                        <td>peliculas_DC.php</td>
                        <td>batmanVsSupermanB.jpg, batmanVsSupermanC.jpg, escuadronB.jpg, escuadronC.jpg, jokerB.jpg, jokerC.jpg, ligaB.jpg, ligaC.jpg</td>
                        <td>TM & © 2015 Warner Bros. Entertainment Inc. All rights reserved.</td>
                        <td><a href="https://policies.warnerbros.com/privacy/es-eu/html/privacy_es-eu_1.1.0.html">Ver su página web</a></td>
                    </tr>
                    <tr>
                        <td>Videojuegos Saga Arkham</td>
                        <td>vid_ark_001, vid_ark_002, vid_ark_003, vid_banner_Arkham</td>
                        <td></td>
                        <td><a href="https://www.eneba.com/">Permisos cedidos por esta web</a></td>
                    </tr>
                </table>
            </aside>
        </section>
    </div>

    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>