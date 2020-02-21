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
    <?php banner("PersWonderWoman", "WONDER WOMAN");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(8, 8, 7, 8, 9, 7); ?>

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
                <p>La Mujer Maravilla (en inglés: Wonder Woman) es una superheroína ficticia creada por William Moulton Marston para la 
                editorial DC Comics. El personaje es una princesa guerrera de las Amazonas (basado en la raza de las amazonas de la mitología griega) y es conocida en su tierra natal como la princesa Diana de Temiscira. Cuando está fuera de su tierra natal, utiliza un alter-ego, por lo que también es conocida por su identidad secreta Diana Prince. 
                Está dotada de una amplia gama de poderes superhumanos y habilidades de combate de batalla superiores, gracias a sus dones obtenidos de los dioses y su amplio entrenamiento. Ella posee un gran arsenal de armas, incluyendo entre las principales el Lazo de la Verdad, un par de brazaletes mágicos indestructibles, su tiara, que sirve como arma, y en algunos relatos, en la edad de oro, tuvo un avión invisible. Pero más adelante, se le fue mostrando 
                con la capacidad de volar cada vez con mayor frecuencia por lo que el avión invisible fue dejando de utilizarse.</p>
                
                <article>
                    <h3 class="font-weight-bold">Orígenes</h3>
                    <img class="img-fluid mt-2 w-100" src="assets/img/pers/pers_WonderWomanOrig1.jpg">
                    <p class="mt-2">Debutando en All Star Comics #8, Diana era miembro de una tribu de mujeres llamadas las Amazonas, nativa de Isla Paraíso. Esta era una isla aislada situada en medio de un vasto océano, allí el capitán Steve Trevor tuvo un accidente aéreo donde logró apenas aterrizar su aeronave cerca a la isla, fue encontrado vivo pero inconsciente. Diana lo encontró junto a una compañera amazona. Diana le cuidó hasta que sanó pero terminó enamorándose de él. 
                    Se llevó a cabo una competencia entre todas las amazonas ante la corte de la madre de Diana, Hipólita la Reina de las Amazonas, con el fin de determinar quién era la más digna de entre todas las mujeres para llevar de regreso a Steve al mundo exterior; Hipólita le adjudicaría a la ganadora la responsabilidad de entregarle al capitán Steve Trevor su regreso al mundo humano y para poder luchar por la justicia. Hipólita le prohibía a Diana participar en el concurso; no obstante, aun así ella tomó parte, usando una máscara para ocultar su identidad. Ganó el concurso y se revela a sí misma, sorprendiendo a su madre Hipólita, que al final se dejaría llevar por el deseo de su hija Diana para que fuese al mundo de los hombres. Ella entonces regresa a salvo a Steve Trevor de vuelta a su casa y se le 
                    concede un vestido especial hecho por su propia madre para llevar su nuevo papel como Wonder Woman.</p>
                </article>

                <article>
                    <img class="img-fluid pb-2 w-100" src="assets/img/pers/pers_WonderWomanOrig2.jpg">
                    <p class="mt-2">Después de este suceso llega al mundo del hombre por primera vez, a tierras de los Estados Unidos. La Mujer Maravilla se encuentra con una enfermera del ejército llorando llamada Diana Prince. Esta le pregunta acerca de su situación, en donde ella le relata que como enfermera deseaba partir a América del Sur con su novio, pero no pudo debido que no tenía suficiente dinero para costearse el viaje.
                     Como ambas parecían estar en una misma situación y como Wonder Woman necesitaba un trabajo y una identidad válida para cuidar de Steve (al cual ingresó al mismo hospital del ejército), le da el dinero que había ganado anteriormente para ayudarla para que fuese con su prometido a cambio de obtener sus credenciales. La enfermera le revela que su nombre es Diana Prince, por lo tanto, ella tomaría dicha identidad
                     como suya y sería la identidad secreta de la Mujer Maravilla, comenzando a trabajar como enfermera en el ejército. Wonder Woman después tomaría parte en varias aventuras, sobre todo al lado de Trevor. Sus enemigos más comunes durante este período serían las fuerzas nazis, y a veces supervillanos como Circe, Giganta, La Baronesa Paula Von Gunther, Chita, Doctor Psycho y el Duque del Engaño.</p>
                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table  table-bordered table-lg p-4">
                    <thead class="bg-success">
                        <tr class="text-center">
                            <th colspan="2"><h3 class=" text-light">Perfil</h3></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre real</th>
                        <td>Diana de Temiscira</th>
                    </tr>
                    <tr>
                        <th>Raza</th>
                        <td>Amazonas semidiosa del Olimpo</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>75 kg</th>
                    </tr>
                    <tr>
                        <th>Altura</th>
                        <td>1,80 m</th>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>Femenino</th>
                    </tr>
                    <tr>
                        <th>Color de ojos</th>
                        <td>Azules</th>
                    </tr>
                    <tr>
                        <th>Pelo</th>
                        <td>Negro</th>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>Temiscira</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>DC</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>Diana Prince, Diosa de la Guerra, Marvila</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>Superfuerza, vuelo, factor curativo, resistencia sobrehumana, inmortalidad</th>
                    </tr>
                    <tr>
                        <th>Creado por</th>
                        <td>William Moulton Marston, H.G. Peter </th>
                    </tr>

                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>