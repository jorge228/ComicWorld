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
    <?php banner("Pers", "PERSONAJE");?>
    
    <!--Estadisticas personaje-->
    <?php estadisticas(7, 10, 8, 9, 8, 8); ?>

    <!--Cuerpo-->
    <section class="container-fluid p-0" id="contenidoPers">

        <!--Biografia y datos-->
        <div class="row mt-4 mx-2 pt-4 border-top">

            <!--Titulo-->
            <div class="col-lg-2 pr-3">
                <h1 class="text-center font-weight-bold text-warning">BIOGRAFÍA</h1>
            </div>

            <!--Contenido biografia-->
            <section class="col-lg-7 px-md-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                
                <article>
                    <h3 class="font-weight-bold">Seccion 1</h3>
                    <img class="img-fluid pb-2 w-100" src="https://via.placeholder.com/600x200">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nunc lacus, pharetra vitae felis in, semper dictum tortor. Cras mollis urna ultricies lacus interdum, et sollicitudin ante rhoncus. Maecenas scelerisque nibh eget venenatis suscipit. Suspendisse vitae pharetra neque. Aliquam porta velit tortor, ac feugiat ipsum congue nec. Suspendisse iaculis molestie ultricies. Morbi a dapibus urna. Cras vel euismod orci, sit amet gravida nulla. Etiam scelerisque nibh rutrum sodales volutpat. Pellentesque a consectetur enim. Nullam vel facilisis massa. Suspendisse vitae lacinia mauris. In dapibus diam porttitor luctus tristique. Proin orci magna, tincidunt eget lectus id, fringilla vehicula ipsum.</p>

                    <p>Nunc mauris turpis, convallis eget lectus sed, facilisis gravida mi. Aenean eget accumsan odio. Maecenas pulvinar cursus arcu, at eleifend purus dignissim eu. Vestibulum eu turpis aliquam, suscipit dui in, tempor sapien. Vivamus sodales et quam ut suscipit. Nullam at nunc eu erat consectetur feugiat. Vestibulum ac ullamcorper turpis, sed vehicula leo. Curabitur quis ullamcorper risus. Integer diam est, maximus id vehicula quis, aliquam a felis. Suspendisse potenti. Aenean pulvinar ipsum felis, et aliquet urna commodo sed. Ut suscipit ullamcorper felis, a condimentum ex blandit ac. Aliquam id mi semper, faucibus eros quis, ultricies diam. Curabitur vel consequat mi.</p>
                </article>

                <article>
                    <h3 class="font-weight-bold">Seccion 2</h3>
                    <img class="img-fluid pb-2 w-100" src="https://via.placeholder.com/600x200">
                    <p>Ut laoreet euismod dolor in pellentesque. Pellentesque venenatis pulvinar lorem eget pellentesque. In dapibus lectus tempus faucibus cursus. Vivamus cursus ullamcorper nisi vitae tempus. Mauris porta sapien mi, eget vestibulum turpis consectetur ut. Nunc consectetur, tellus sed sollicitudin pellentesque, felis odio malesuada enim, et convallis massa dui id purus. Proin a venenatis risus. Ut non turpis urna. In molestie risus eget risus fermentum, vitae faucibus ligula pulvinar. Maecenas volutpat neque vestibulum leo tincidunt faucibus. Nulla neque justo, consequat quis tristique vel, porta eget enim. Sed a laoreet arcu.</p>

                    <p>Nulla ut quam mattis, consequat mauris a, pulvinar ex. Vestibulum id eros lobortis lectus dictum malesuada. Morbi sed neque ut massa dictum gravida sed eu libero. Etiam nec egestas erat. Pellentesque dapibus lacus vel vulputate dapibus. Curabitur accumsan fringilla efficitur. Maecenas ullamcorper aliquam bibendum. Duis eget vestibulum mauris, sed lacinia justo. In quis dolor rhoncus, congue urna efficitur, bibendum nisl. Donec auctor, metus in eleifend dignissim, turpis velit maximus odio, a hendrerit tellus tellus sit amet nisl. Cras ac diam eget quam egestas tincidunt vel vitae urna. Maecenas eu maximus dui. Suspendisse potenti. Nullam consectetur interdum massa non auctor.</p>
                </article>
            </section>

            <!--Tabla datos-->
            <aside class="col-lg-3 p-0 tablaDatos pt-4 pt-lg-0">
                <table class="table  table-borderless table-lg p-4">
                    <thead>
                        <tr class="text-center">
                            <th colspan="2"><h3 class="font-weight-bold text-light">Perfil</h3></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Nombre</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Identidad</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Ojos</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Pelo</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Universo</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Apodos/aliases</th>
                        <td>N/A</th>
                    </tr>
                    <tr>
                        <th>Poderes</th>
                        <td>N/A</th>
                    </tr>

                </table>
            </aside>
        </div>
    </section>
    
    <!--Footer-->
    <?php include("includes/footer.php"); ?>
</body>
</html>