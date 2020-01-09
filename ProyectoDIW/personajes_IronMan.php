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
    <?php banner("PersIronMan", "IRON MAN");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(7, 7, 9, 7, 7, 8); ?>

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
                <p>Iron Man (también conocido en español como el Hombre de Hierro) es un superhéroe ficticio que aparece en los cómics estadounidenses publicados por Marvel Comics. 
                El personaje fue co-creado por el escritor y editor Stan Lee, desarrollado por el guionista Larry Lieber y diseñado por los artistas Don Heck y Jack Kirby. 
                Hizo su primera aparición en Tales of Suspense # 39 (marzo de 1963), y recibió su propio título en Iron Man #1 (mayo de 1968).</p>
                
                <article>
                    <h3 class="font-weight-bold">Orígenes</h3>
                    <img class="img-fluid mt-2 w-100" src="assets/img/pers/pers_IronManOrig1.jpg">
                    <p class="mt-2">Anthony Edward Stark es el hijo del jefe de Industrias Stark, Howard Stark y su esposa Maria Stark. 
                    Un niño genio que ingresa al MIT a la edad de 15 años para estudiar ingeniería mecánica y luego recibe maestrías en ingeniería eléctrica y física. 
                    Después de que sus padres mueren en un accidente automovilístico, hereda la compañía de su padre.</p>

                    <p>Mientras observaba los efectos de su tecnología experimental en el esfuerzo bélico estadounidense, Tony Stark es herido por una bomba y capturado por Wong-Chu, quien le ordena diseñar armas. 
                    Sin embargo, las lesiones de Stark son graves y la metralla se dirige a su corazón. Su compañero prisionero, Ho Yinsen, un físico ganador del Premio Nobel, cuyo trabajo se había ganado la admiración de Stark en el colegio, construye una placa pectoral magnética para evitar que la metralla alcance el corazón de Stark, manteniéndolo vivo. En secreto, Stark y Yinsen utilizan el taller para diseñar y construir una armadura de poder, la cual utiliza Stark para escapar. 
                    Sin embargo, durante el escape, Yinsen sacrifica su vida para salvar a Stark, distrayendo al enemigo para que Tony recargara. 
                    Stark se venga de sus secuestradores y escapa para reunirse con las fuerzas estadounidenses, conociendo en su camino a un piloto herido de la marina estadounidense, James "Rhodey" Rhodes.</p>
                </article>

                <article>
                    <img class="img-fluid pb-2 w-100" src="assets/img/pers/pers_IronManOrig2.jpg">
                    <p class="mt-2">De vuelta a casa, Stark descubre que el fragmento de metralla alojado en su pecho no se puede quitar sin matarlo, y él se ve obligado a utilizar la placa del pecho debajo de la ropa para actuar como un regulador para su corazón. También tiene que recargar la placa todos los días o de lo contrario corre el riesgo de que la metralla lo mate. La portada para Iron Man dice que él es el guardaespaldas de Stark y la mascota de su empresa. 
                    Con ese fin, Iron Man lucha contra las amenazas a su empresa, (como la oponente comunista Natasha Romanoff, el Dínamo Carmesí y el Hombre de Titanio), así como villanos independientes como el Mandarín, quien finalmente se convertiría en su peor enemigo. Nadie sospecha de que Stark es Iron Man, ya que cultiva su imagen como un millonario y empresario. 
                    Dos miembros notables del reparto de la serie, en este punto, son su chófer personal Harold "Happy" Hogan, y su
                     secretaria Virginia "Pepper" Potts, a quienes finalmente les revela su identidad secreta. Mientras tanto, James Rhodes encuentra su propio lugar como el piloto personal de Stark, revelándose como un hombre de extraordinaria habilidad y audaz por derecho propio.</p>

                    <p>El cómic tuvo una postura anti-comunista en sus primeros años, que se suavizó conforme subió la oposición a la Guerra de Vietnam. ​Este cambio evolucionó en una serie de historias en las que Stark reconsidera sus opiniones políticas y la moralidad de la fabricación de armas para el ejército estadounidense. Stark se muestra a sí mismo como arrogante de vez en cuando, y dispuesto a actuar sin ética para "dejar que los fines justifiquen los medios". Esto lleva a conflictos personales con las personas que lo rodean, 
                    tanto en sus identidades civiles como de superhéroes. Stark usa su gran fortuna personal no solo para equipar su propia armadura, sino también para desarrollar armas para S.H.I.E.L.D.; 
                    otras tecnologías (por ejemplo, Quinjets utilizados por los Vengadores); y los inductores de imagen utilizados por los X-Men. Finalmente, la afección cardíaca de Stark se resuelve con un trasplante artificial de corazón.</p>

                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table  table-bordered table-lg p-4">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th colspan="2"><h3 class="text-light">Perfil</h3></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre real</th>
                        <td>Anthony Edward Stark</th>
                    </tr>
                    <tr>
                        <th>Raza</th>
                        <td>Humano</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>76 kg/91 kg con armadura</th>
                    </tr>
                    <tr>
                        <th>Altura</th>
                        <td>1,74 m/1,80 m con armadura</th>
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
                        <td>Castaño oscuro</th>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>Long Island, Nueva York</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>Marvel</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>Tony Stark, El Hombre de Hierro</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>Con armadura: Fuerza y resistencia sobrehumanas, vuelo supersónico, soporte vital regenerativo, multitud de armas y equipamiento de alta tecnología</th>
                    </tr>
                    <tr>
                        <th>Creado por</th>
                        <td>Stan Lee, Larry Lieber, Don Heck, Jack Kirby </th>
                    </tr>

                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>