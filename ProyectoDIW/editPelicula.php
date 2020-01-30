<?php include_once 'includes/sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include_once 'includes/contenidoHead.php';
    include_once 'models/controladores/ControladorPelicula.php';
    $sagas = ControladorPelicula::getSagas();
    $modificar = false;
    if (isset($_POST['guardar'])) {
        if (is_uploaded_file($_FILES['img_carrusel']['tmp_name'])) {
            $rutaCarrusel = "assets/img/peliculas/" . $_FILES['img_carrusel']['name'];
            move_uploaded_file($_FILES['img_carrusel']['tmp_name'], $rutaCarrusel);
        }
        if (is_uploaded_file($_FILES['img_cartelera']['tmp_name'])) {
            $rutaCartelera = "assets/img/peliculas/" . $_FILES['img_cartelera']['name'];
            move_uploaded_file($_FILES['img_cartelera']['tmp_name'], $rutaCartelera);
        }
        ControladorPelicula::insertPelicula($_POST['saga'], $_POST['titulo'], $_POST['fecha'], $_POST['director'], $_POST['sinopsis'], $rutaCarrusel, $rutaCartelera);
    }
    if (isset($_POST['modificarPelicula'])) {
        //este botón es el de la página adminContindo.php->componenteFilasPelicula.php
        $modificar = true;
        $peliculaAModificar = ControladorPelicula::getPeliculaByID($_POST['idPeliculaModificar']); 
    }
    if(isset($_POST['volver'])){
        header("Location:adminContenido.php");
    }
    if (isset($_POST['btnModificar'])) {
        if (is_uploaded_file($_FILES['img_carrusel']['tmp_name'])) {
            $rutaCarrusel = "assets/img/peliculas/" . $_FILES['img_carrusel']['name'];
            move_uploaded_file($_FILES['img_carrusel']['tmp_name'], $rutaCarrusel);
        } else {
            $rutaCarrusel = $_POST['img_carrusel_mantener'];
        }
        if (is_uploaded_file($_FILES['img_cartelera']['tmp_name'])) {
            $rutaCartelera = "assets/img/peliculas/" . $_FILES['img_cartelera']['name'];
            move_uploaded_file($_FILES['img_cartelera']['tmp_name'], $rutaCartelera);
        } else {
            $rutaCartelera = $_POST['img_cartelera_mantener'];
        }
        $peliculaModificada = new Pelicula($_POST['saga'], $_POST['titulo'], $_POST['fecha'], $_POST['director'],$_POST['sinopsis'], $rutaCarrusel, $rutaCartelera, $_POST['idPeliculaModificar']);
        ControladorPelicula::updatePelicula($peliculaModificada);
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
                    <?php if ($modificar) {
                        echo "<h1>Formulario de Modificación</h1>";
                    } else {
                        echo "<h1>Formulario de Añadir</h1>";
                    }
                    ?>
                    <div class="form-group">
                        <label for="saga">Saga</label>
                        <select class="form-control" name="saga" id="saga">
                            <?php
                            foreach ($sagas as $saga) {
                                if ($modificar) {
                                    if ($peliculaAModificar->saga == $saga) {
                                        echo "<option value='" . $saga  . "' selected>" . $saga . "</option>";
                                    } else {
                                        echo "<option value='" . $saga  . "'>" . $saga . "</option>";
                                    }
                                } else {
                                    echo "<option value='" . $saga  . "'>" . $saga . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required <?php if ($modificar) echo "value='" . $peliculaAModificar->titulo . "'" ?> />
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha de Estreno</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required <?php if ($modificar) echo "value='" . $peliculaAModificar->fecha_estreno . "'" ?> />
                    </div>

                    <div class="form-group">
                        <label for="nombre">Director</label>
                        <input type="text" class="form-control" name="director" id="director" required <?php if ($modificar) echo "value='" . $peliculaAModificar->director . "'" ?> />
                    </div>

                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea type="text" class="form-control rounded-0" name="sinopsis" style="width: 100%" maxlength="1000" id="sinopsis" required> <?php if ($modificar) echo $peliculaAModificar->sinopsis ?> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="img_carrusel">Imagen Carrusel</label>
                        <?php if ($modificar) { ?>
                            <div class="col-sm-4 card-body">
                                <img src="<?php echo $peliculaAModificar->img_carrusel ?>" class="card-img-top img-thumbnail">
                                <input type="hidden" name="img_carrusel_mantener" value="<?php echo $peliculaAModificar->img_carrusel ?>">
                            </div>
                        <?php } ?>
                        <input type="file" class="form-control" name="img_carrusel" id="img_carrusel" <?php if (!$modificar) echo " required" ?> />
                    </div>

                    <div class="form-group">
                        <label for="img_cartelera">Imagen Cartelera</label>
                        <?php if ($modificar) { ?>
                            <div class="col-sm-4 card-body">
                                <img src="<?php echo $peliculaAModificar->img_cartelera ?>" class="card-img-top img-thumbnail">
                                <input type="hidden" name="img_cartelera_mantener" value="<?php echo $peliculaAModificar->img_cartelera ?>">
                            </div>
                        <?php } ?>
                        <input type="file" class="form-control" name="img_cartelera" id="img_cartelera" <?php if (!$modificar) echo " required" ?> />
                    </div>

                    <input type="reset" class="btn btn-secondary" id="reset" value="Limpiar" />
                    <?php
                    if ($modificar) {
                        echo "<input type='hidden' name='idPeliculaModificar' value='" . $peliculaAModificar->id . "'>";
                        echo "<button type='submit' name='btnModificar' class='btn btn-primary'>Modificar</button>";
                    } else {
                        echo "<button type='submit' name='guardar' class='btn btn-primary'>Guardar</button>";
                    }
                    ?>
                    <button type='submit' name="volver" class='btn btn-primary'>Volver</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>