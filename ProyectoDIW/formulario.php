<?php include "includes/a_config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "includes/contenidoHead.php"; ?>
</head>
<title>Formulario</title>

<body>

    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

    <section class="container-fluid p-0">
        <!-- ÍTEMS -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inicia Sesión</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Regístrate</a>
            </div>
        </nav>

        <!-- CONTENIDO -->
        <div class="tab-content" id="nav-tabContent">
            <!-- CONTENIDO 1 -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- CONTENIDO 2 -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                formulario 2

            </div>
        </div>
    </section>

    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>