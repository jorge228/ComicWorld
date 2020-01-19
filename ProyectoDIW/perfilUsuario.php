<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include("includes/contenidoHead.php");
        include("includes/inclPerfil/moduloValoracionesUsuarios.php");
        include_once("models/controlador/ControladorUsuario.php");

        $usuario=ControladorUsuario::getUsuarioById($_GET['id']);
        ?>

    </head>

    <body>

        <div class="contenedorGlobal">

            <section class="contenedorContenido mx-1 mx-md-3 mx-lg-5">

                <!--MENU DE NAVEGACION-->
                <?php include("includes/menuNav.php"); ?>

                <!--TITULO-->
                <header class="mt-4 p-3 text-center">
                    <h1 class="text-warning">Perfil de usuario</h1>
                </header>

                <!--Perfil-->
                <article class="container-fluid mt-2 shadow contenedorPerfilUsuario">

                    <!--INFORMACION-->
                    <div class="row">

                        <!--Columna izquierda-->
                        <aside class="col-12 col-md-3">
                            
                            <div class="row h-100 border-right ">
                                <!--Imagen-->
                                <div class="col-12 text-center p-3">
                                    
                                    <div>
                                        <img class="img-fluid rounded-circle shadow" src="assets/img/imagenPerfilPorDefecto.jpg"></img>
                                    </div>
                                </div>

                                <!--Nombre del usuario-->
                                <div class="col-12 text-center p-2">
                                    <div>
                                        <h3 class="font-weight-bold"><?php echo $usuario->username ?></h3>
                                    </div>
                                </div>
                            </div>

                        </aside>

                        <!--Columna derecha-->
                        <!--Informacion del usuario-->
                        <div class="col-12 col-md-9 filaInformacionPerfil">

                            <!--Nombre-->
                            <div class="row border-bottom border-top ">

                                <div class="col-12 col-md-3 text-center text-md-left ">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0 m-0">Nombre</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->nombre ?></p>
                                    </div>
                                </div>

                            </div>

                            <!--Apellidos-->
                            <div class="row ">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">Apellidos</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo "$usuario->apellido1 $usuario->apellido2" ?></p>
                                    </div>
                                </div>

                            </div>

                            <!--Fecha de nacimiento-->
                            <div class="row border-bottom border-top">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">Fecha de nacimiento</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->fecha_nacimiento ?></p>
                                    </div>
                                </div>
                            </div>

                            <!--Correo-->
                            <div class="row border-bottom border-top">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">Correo</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->correo ?></p>
                                    </div>
                                </div>

                            </div>

                            <!--Pais-->
                            <div class="row border-bottom border-top">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">País</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->pais ?></p>
                                    </div>
                                </div>
                            </div>

                            <!--Codigo postal-->
                            <div class="row border-bottom border-top">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">Código postal</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->codigo_postal ?></p>
                                    </div>
                                </div>
                            </div>

                            <!--Telefono-->
                            <div class="row border-bottom border-top">

                                <div class="col-12 col-md-3 text-center text-md-left">
                                    <div class="info">
                                        <h5 class="font-weight-bold p-2 m-0">Teléfono</h5>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9 text-center text-md-left">
                                    <div class="info">
                                        <p class="p-2 m-0"><?php echo $usuario->telefono ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--VALORACIONES-->
                    <div class="row contenedorValoracionesPerfil">
                        <div class="col-12 text-center p-3">
                            <h3 class="font-weight-bold">Valoraciones escritas por <?php echo $usuario->username ?></h3>
                        </diV>
                    </div>

                    <!--Listar valoraciones de cada pelicula-->
                    <div class="wrapperValoracionesPerfil overflow-auto">
                        <?php listarValoracionesUsuario($usuario->id) ?>
                    </div>
                </article>


                <!--BOTON MODIFICAR USUARIO-->
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-12 text-center text-center p-3">
                            <form action="#" method="POST">
                                <input type="submit" class="btn btn-primary btn-md" name="modificarPerfil" value="Modificar perfil">
                            </form>
                        </div>
                    </div>
                </div>

            </section>            

            <!--Footer-->
            <?php include("includes/footer.php"); ?>
        </div>
    </body>
</html>