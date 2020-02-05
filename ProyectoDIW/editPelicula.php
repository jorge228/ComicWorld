<?php include_once 'includes/sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include_once 'includes/contenidoHead.php';
    include_once 'models/controladores/ControladorPelicula.php';
    include "includes/toast_pelicula_mod.php";
    //Redirigir usuario si no ha iniciado sesion o si no es admin
    if (isset($_SESSION['id_usuario'])) {
        if ($usuario->rol != "admin" && $usuario->rol != "editor")
            header("Location: index.php");
    } else
        header("Location: index.php");
    
    $modificar = false;
    if (isset($_POST['modificarPelicula'])) {
        //este botón es el de la página backendContenido.php->componenteFilasPelicula.php
        $modificar = true;
        $peliculaAModificar = ControladorPelicula::getPeliculaByID($_POST['idPeliculaModificar']);
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
        $peliculaModificada = new Pelicula($_POST['saga'], $_POST['titulo'], $_POST['fecha'], $_POST['director'], $_POST['sinopsis'], $rutaCarrusel, $rutaCartelera, $_POST['idPeliculaModificar']);
        ControladorPelicula::updatePelicula($peliculaModificada);
    }
    ?>

    <!--Javascript Quill-->
    <script src="js/editor-quill.js"></script>
    <script src="js/validacion_form/form_peliculas.js"></script>

</head>

<body>
    <?php include "includes/menuNav.php"; ?>
    <div class="container mt-5">
        <div class="row">

            <!--Titulo-->
            <div class="col-12 text-center">
                <?php
                if ($modificar) 
                    echo "<h1 class='text-warning mb-1'>Modificar película</h1>";
                else
                    echo "<h1 class='text-warning mb-1'>Añadir película</h1>";
                ?>
            </div>

            <!--Formulario-->
            <div class="col-12 px-2 px-md-5">
                <form action="#" class="needs-validation p-3" method="POST" enctype="multipart/form-data" novalidate>
                    <?php 
                    if (isset($_POST['guardar'])) {
                        if (is_uploaded_file($_FILES['img_carrusel']['tmp_name'])) {
                            $rutaCarrusel = "assets/img/peliculas/" . $_FILES['img_carrusel']['name'];
                            move_uploaded_file($_FILES['img_carrusel']['tmp_name'], $rutaCarrusel);
                        }
                        if (is_uploaded_file($_FILES['img_cartelera']['tmp_name'])) {
                            $rutaCartelera = "assets/img/peliculas/" . $_FILES['img_cartelera']['name'];
                            move_uploaded_file($_FILES['img_cartelera']['tmp_name'], $rutaCartelera);
                        }
                        $valido = ControladorPelicula::insertPelicula($_POST['saga'], $_POST['titulo'], $_POST['fecha'], $_POST['director'], $_POST['sinopsis'], $rutaCarrusel, $rutaCartelera);                
                        if($valido){
                            $modelo ='error';
                            $valor='Info';
                            $opcion = 'El título de la película ya se encuentra en la base de datos';
                        }else{
                            $modelo ='success';
                            $valor='Info';
                            $opcion = 'Película añadida correctamente';
                        }
                        imprimeToast($modelo, $opcion, $valor);
                    }
                    if (isset($_POST['btnModificar'])) {
                        $modelo ='success';
                        $valor='Info';
                        $opcion = 'Película modificada correctamente';
                        imprimeToast($modelo, $opcion, $valor);
                    }
                    ?>
                    <div class="form-group">
                        <label for="saga"><h5 class="mb-0">Saga</h5></label>
                        <select class="form-control" name="saga" id="saga">
                            <?php
                            if ($modificar) {
                            ?>
                                <option value="MARVEL" <?php if ($peliculaAModificar->saga == 'MARVEL') echo 'selected'; ?>>Marvel</option>
                                <option value="DC" <?php if ($peliculaAModificar->saga == 'DC') echo 'selected'; ?>>DC</option>
                            <?php
                            } else {
                            ?>
                                <option value="MARVEL">Marvel</option>
                                <option value="DC">DC</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo"><h5 class="mb-0">Título</h5></label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required <?php if ($modificar) echo "value='" . $peliculaAModificar->titulo . "'" ?>/>
                        <div class="valid-feedback"><p>Correcto</p></div>
                        <div class="invalid-feedback"><p>Este campo es requerido</p></div>
                    </div>

                    <div class="form-group">
                        <label for="fecha"><h5 class="mb-0">Fecha de Estreno</h5></label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required <?php if ($modificar) echo "value='" . $peliculaAModificar->fecha_estreno . "'" ?> />
                        <div class="valid-feedback"><p>Correcto</p></div>
                        <div class="invalid-feedback"><p>Este campo es requerido</p></div>
                    </div>

                    <div class="form-group">
                        <label for="nombre"><h5 class="mb-0">Director</h5></label>
                        <input type="text" class="form-control" name="director" id="director" required <?php if ($modificar) echo "value='" . $peliculaAModificar->director . "'" ?> />
                        <div class="valid-feedback"><p>Correcto</p></div>
                        <div class="invalid-feedback"><p>Este campo es requerido</p></div>
                    </div>
                    
                    <div class="form-group">
                        <label><h5 class="mb-0">Imágenes</h5></label>
                        <div class="custom-file">
                            <label for="img_carrusel" class="custom-file-label" lang="es"><h5 class="mb-0">Seleccione imagen para el Carrusel</h5></label><br>
                            <?php if ($modificar) { ?>
                                <div class="col-sm-4 card-body">
                                    <img src="<?php echo $peliculaAModificar->img_carrusel ?>" class="card-img-top img-thumbnail">
                                    <input type="hidden" name="img_carrusel_mantener" value="<?php echo $peliculaAModificar->img_carrusel ?>">
                                </div>
                            <?php } ?>
                            <input type="file" class="custom-file-input" name="img_carrusel" id="img_carrusel" accept="image/png, image/jpeg"/>
                        </div>
                        <div class="custom-file">
                            <label for="img_cartelera" class="custom-file-label"><h5 class="mb-0">Seleccione imagen para la Cartelera</h5></label><br>
                            <?php if ($modificar) { ?>
                                <div class="col-sm-4 card-body">
                                    <img src="<?php echo $peliculaAModificar->img_cartelera ?>" class="card-img-top img-thumbnail">
                                    <input type="hidden" name="img_cartelera_mantener" value="<?php echo $peliculaAModificar->img_cartelera ?>">
                                </div>
                            <?php } ?>
                            <input type="file" class="custom-file-input" name="img_cartelera" id="img_cartelera" accept="image/png, image/jpeg"/>
                        </div>
                    </div>

                    <!--Editor Quill-->
                    <div class="form-group">
                        <label><h5 class="mb-0">Sinopsis</h5></label>
                        <div class="text-center"><span id="char_restantes"></span></div>
                        <div id="wrapper-quill">
                            <div id="toolbar-quill" class="text-left bg-light">

                                <span class="ql-formats">
                                    <select class="ql-font" data-toggle="tooltip" title="Fuente"></select>
                                    <select class="ql-size" data-toggle="tooltip" title="Tamaño"></select>
                                </span>

                                <span class="ql-formats">
                                    <button data-toggle="tooltip" title="Negrita (Ctrl+B)" class="ql-bold"></button>
                                    <button data-toggle="tooltip" title="Itálica (Ctrl+I)" class="ql-italic"></button>
                                    <button data-toggle="tooltip" title="Subrayada (Ctrl+U)" class="ql-underline"></button>
                                    <button class="ql-color" data-toggle="tooltip" title="Color del texto"></button>
                                    <button class="ql-background" data-toggle="tooltip" title="Color de fondo del texto"></button>
                                </span>

                                <span class="ql-formats">
                                    <button class="ql-link" data-toggle="tooltip" title="Enlace"></button>
                                    <button class="ql-formula" data-toggle="tooltip" title="Fórmula"></button>
                                </span>

                                <span class="ql-formats">
                                    <button data-toggle="tooltip" class="ql-script" value="super" data-toggle="tooltip" title="Superíndice"></button>
                                    <button data-toggle="tooltip" class="ql-script" value="sub" data-toggle="tooltip" title="Subíndice"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-clean" data-toggle="tooltip" title="Borrar formato"></button>
                                </span>
                            </div>
                            <div id="editor-quill" class="editorSinopsis"><?php if($modificar) echo $peliculaAModificar->sinopsis ?></div>
                            <div id="contadorCaracteres" class="font-weight-bold text-center"></div>

                        </div>
                    </div>
                    
                    <div class="text-center">
                        <input type="reset" class="btn btn-secondary" id="reset" value="Limpiar" />
                        <?php
                        if ($modificar) {
                            echo "<input type='hidden' name='idPeliculaModificar' value='" . $peliculaAModificar->id . "'>";
                            echo "<input type='submit' name='btnModificar' class='btn btn-primary' value='Modificar'>";
                        } else {
                            echo "<input type='submit' name='guardar' class='btn btn-primary' value='Guardar'>";
                        }
                        ?>
                        <a href="backendContenido.php" class='btn btn-primary'>Volver</a>
                    </div>

                    <input type="hidden" name="sinopsis" id="sinopsis">
                </form>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>


    <!--Scripts para Quill-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="js/quilljs/quill.min.js"></script>
</body>

</html>