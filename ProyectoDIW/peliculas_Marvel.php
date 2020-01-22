<?php include_once 'includes/sesion.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once 'models/controladores/ControladorPelicula.php';
    include_once 'models/controladores/ControladorValoracion.php';
    $peliculas = ControladorPelicula::getPeliculasSaga('marvel');
    if(isset($_POST['enviar'])){
        echo "<br><br><br><br>";
        echo "comentario: ".$_POST['textarea_valoracion']."<br>";
        echo "idpeli: ".$_POST['enviar']."<br>";
        echo "idusuario: ".$_SESSION['id_usuario']."<br>";
        echo "puntuacion: ".$_POST['puntuacion']."<br>";
        ControladorValoracion::creaValoracion($_SESSION['id_usuario'], $_POST['enviar'],$_POST['textarea_valoracion'],$_POST['puntuacion']);
    }
    ?>
    <?php include "includes/contenidoHead.php"; ?>
    <?php include "includes/valoracion.php"; ?>


</head>
<title>MCU</title>

<body>
    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

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
                    <p class="text-center">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapsa<?php echo $pelicula->id ?>" aria-expanded="false">
                            Valoraciones
                        </button>
                    </p>
                    <div class="collapse" id="colapsa<?php echo $pelicula->id ?>">
                        <?php
                        $valoraciones = ControladorValoracion::getValoracionesPelicula($pelicula->id);
                        if (!empty($valoraciones)) {
                            foreach ($valoraciones as $valoracion) {
                                echo "<div class='card card-body bg-info'>";
                                echo "<p>" . $valoracion->texto . "</p>";
                                echo "<p>" . $valoracion->fecha_valoracion . "</p>";
                                echo "</div><br>";
                            }
                        } else {
                        ?>
                            <article class="container-fluid mt-2 border-secondary h-100">
                                <div class="mensajeError">
                                    <p>Esta película no tiene valoraciones</p>
                                </div>
                            </article><br>
                        <?php
                        }
                        ?>
                        <!-- FIN BOTÓN -->
                        <!-- VALORACIÓN -->
                        <?php
                        if (isset($_SESSION['id_usuario'])) {
                        ?>
                            <div class="text-center">
                                <i class="fas fa-pencil-alt prefix"></i>Envíanos tu valoración:
                                <?php crear($pelicula->id) ?>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="text-center">
                                <form action="login.php" method="POST">
                                    <button class="btn btn-primary" type="submit">Regístrate para enviar una valoración</button>
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        </section>
    <?php
    }
    ?>
    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>
</body>

</html>