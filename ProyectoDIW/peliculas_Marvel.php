<?php include_once 'includes/sesion.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once 'models/controladores/ControladorPelicula.php';
    include_once 'models/controladores/ControladorValoracion.php';
    include "includes/toast_pelicula_mod.php";
    include "includes/contenidoHead.php";
    include "includes/valoracion.php"; ?>

</head>
<title>MCU</title>

<body>
    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>
    <?php
    $peliculas = ControladorPelicula::getPeliculasSaga('marvel');
    if (isset($_POST['enviar'])) {
        ControladorValoracion::creaValoracion($_SESSION['id_usuario'], $_POST['enviar'], $_POST['textarea_valoracion'], $_POST['puntuacion']);
        $opcion = 'Comentario insertado correctamente';
        imprimeToast($opcion);
    }
    ?>

    <!--CARRUSEL-->
    <section class="container-fluid p-0">
        <!-- intervalo 4000 y que no se pare si entra el ratón sobre la imagen-->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
            <ol class="carousel-indicators">
                <?php
                $active = true;
                foreach ($peliculas as $pelicula) {
                    if ($active) {
                        echo "<li data-target='#carousel' data-slide-to='$pelicula->id' class='active'></li>";
                        $active = false;
                    } else {
                        echo "<li data-target='#carousel' data-slide-to='$pelicula->id'></li>";
                    }
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $active = true;
                foreach ($peliculas as $pelicula) {
                    if ($active) {
                        echo "<div class='carousel-item active'>";
                        echo "<a title='$pelicula->titulo' href='#$pelicula->id'><img src='$pelicula->img_carrusel' class='d-block w-100' alt='$pelicula->id' /></a>";
                        echo "</div>";
                        $active = false;
                    } else {
                        echo "<div class='carousel-item'>";
                        echo "<a title='$pelicula->titulo' href='#$pelicula->id'><img src='$pelicula->img_carrusel' class='d-block w-100' alt='$pelicula->id' /></a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

    <!--CUERPO-->
    <?php
    foreach ($peliculas as $pelicula) {
    ?>
        <section class="container-fluid">
            <div class="row mt-4">
                <div class="col-sm-4 card-body d-none d-sm-block">
                    <img src="<?php echo $pelicula->img_cartelera ?>" class="card-img-top img-thumbnail">
                </div>
                <div class="col-sm-8">
                    <a name="<?php echo $pelicula->id ?>" class="ancla">
                        <h1 class="font-weight-bold text-warning"><?php echo $pelicula->titulo ?></h1>
                    </a>
                    <article>
                        <h3 class="text-success">Fecha de estreno</h3>
                        <p><?php echo $pelicula->fecha_estreno ?></p>
                        <h3 class="text-success">Director</h3>
                        <p><?php echo $pelicula->director ?></p>
                        <h3 class="text-success">Sinopsis</h3>
                        <p><?php echo $pelicula->sinopsis ?></p>
                    </article>
                    <!-- INICIO BOTÓN-->
                    <?php
                    if (isset($_SESSION['id_usuario'])) {
                        $valoraciones = ControladorValoracion::getValoracionesPelicula($pelicula->id);
                        $val = count($valoraciones);
                        if (!empty($valoraciones)) {
                            echo "<p class='text-center'>";
                            echo "<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#colapsa" . $pelicula->id . "' aria-expanded='false'>";
                            echo "Vea las " . $val . " valoraciones";
                            echo "</button>";
                            echo "</p>";
                            echo "<div class='collapse' id='colapsa" . $pelicula->id . "'>";
                            foreach ($valoraciones as $valoracion) {
                                $usuario = ControladorUsuario::getUsuarioByID($valoracion->id_usuario);
                                echo "<div class='card card-body bg-info'>";
                                echo "<p><span class='font-weight-bold'>" . $usuario->nombre . " " . $usuario->apellido1 . "</span>: " . $valoracion->texto . "</p>";
                                echo "<p>Fecha: " . $valoracion->fecha_valoracion . "</p><hr>";
                                echo "<p class='text-right'>Puntuación: " . $valoracion->puntuacion . "/5</p>";
                                echo "</div><br>";
                            }
                            echo "<div class='text-center'>";
                            echo "<i class='fas fa-pencil-alt prefix'></i>Envíanos tu valoración:";
                    ?>
                            <?php crear($pelicula->id) ?>
                        <?php
                            echo "</div>";
                            echo "</div>";
                        } else {
                        ?>
                            <div class="text-center">
                                <i class="fas fa-pencil-alt prefix"></i>Envíanos tu valoración:
                                <?php crear($pelicula->id) ?>
                            </div>
                </div>
            <?php
                        }
                    } else {
            ?>
            <div class="text-center">
                <br>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="submit">Regístrate o inicia sesión para ver sus valoraciones</button>
            </div>
            <br><br>
            </div>
            </div>
        <?php
                    }
        ?>
        </section>
    <?php
    }
    ?>
    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>
</body>

</html>