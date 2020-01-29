<?php include_once 'includes/sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include_once 'includes/contenidoHead.php';
    include_once 'models/controladores/ControladorPelicula.php';
    $sagas = ControladorPelicula::getSagas();
    if (isset($_POST['guardar'])) {
        if (is_uploaded_file($_FILES['img_carrusel']['tmp_name'])) {
        $rutaCarrusel = "assets/img/peliculas/" . $_FILES['img_carrusel']['name'];
        move_uploaded_file($_FILES['img_carrusel']['tmp_name'], $rutaCarrusel);
        }else{
            echo "error1";
        }
        if (is_uploaded_file($_FILES['img_cartelera']['tmp_name'])) {
        $rutaCartelera = "assets/img/peliculas/" . $_FILES['img_cartelera']['name'];
        move_uploaded_file($_FILES['img_cartelera']['tmp_name'], $rutaCartelera);
        }else{
            echo "error2";
        }
        ControladorPelicula::insertPelicula($_POST['saga'], $_POST['titulo'], $_POST['fecha'], $_POST['director'], $_POST['sinopsis'], $rutaCarrusel, $rutaCartelera);
    }
    ?>
</head>

<body>
    <?php include "includes/menuNav.php"; ?>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-1 col-sm-3 text-center"></div>
            <div class="col-10 col-sm-6 text-center">
                <form name="" action="" method="POST" enctype="multipart/form-data">
                    </br>
                    <h1>Formulario de Edición</h1>
                    <!--Select-->
                    <div class="form-group">
                        <label for="saga">Saga</label>
                        <select class="form-control" name="saga" id="saga">
                            <?php
                            foreach ($sagas as $saga) {
                                echo "<option value='" . $saga  . "'>" . $saga . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required/>
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha de Estreno</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required/>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Director</label>
                        <input type="text" class="form-control" name="director" id="director" required/>
                    </div>

                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <input type="text" class="form-control" name="sinopsis" id="sinopsis" required/>
                    </div>

                    <div class="form-group">
                        <label for="img_carrusel">Imagen Carrusel</label>
                        <input type="file" class="form-control" name="img_carrusel" id="img_carrusel" required/>
                    </div>

                    <div class="form-group">
                        <label for="img_cartelera">Imagen Cartelera</label>
                        <input type="file" class="form-control" name="img_cartelera" id="img_cartelera" required/>
                    </div>


                    <input type="reset" class="btn btn-secondary" id="reset" value="Limpiar" />
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>