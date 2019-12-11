<!DOCTYPE html>
<html>

<head>
    <?php include "includes/contenidoHead.php"; ?>
</head>
<title>Formulario</title>

<body>

    <!--MENU DE NAVEGACION-->
    <?php include "includes/menuNav.php"; ?>

    <section class="container py-5">
        <!--<div class="col-sm-12 offset-md-3">-->
        <div class="col">
            <!-- ÍTEMS BARRA-->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-success" id="nav-home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="nav-home" aria-selected="true">Inicia Sesión</a>
                    <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#registro" role="tab" aria-controls="nav-profile" aria-selected="false">Regístrate</a>
                    <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#contacto" role="tab" aria-controls="nav-profile" aria-selected="false">Contacta con nosotros</a>
                </div>
            </nav>

            <!-- CONTENIDO -->
            <div class="tab-content" id="nav-tabContent">
                <!-- CONTENIDO 1 -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Inicia Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="loginForm" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Usuario</label>
                                    <input type="text" class="form-control" name="uname1" id="uname1" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" id="pwd1" required="true" autocomplete="new-password">
                                </div>
                                <div class="form-check small">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> <span>Recuérdame</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- CONTENIDO 2 -->
                <div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Regístrate</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputName">Nombre</label>
                                    <input type="text" class="form-control" id="inputName">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail3">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Contraseña</label>
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Repite contraseña</label>
                                    <input type="password" class="form-control" id="inputVerify3">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- CONTENIDO 3 -->
                <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Formulario de Contacto</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <label for="name2" class="mb-0">Nombre</label>
                                <div class="row mb-1">
                                    <input type="text" name="name2" id="name2" class="form-control">
                                </div>
                                <label for="email2" class="mb-0">Email</label>
                                <div class="row mb-1">
                                    <input type="text" name="email2" id="email2" class="form-control">
                                </div>
                                <label for="message2" class="mb-0">Mensaje</label>
                                <div class="row mb-1">
                                    <textarea rows="6" name="message2" id="message2" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg float-right">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <?php include "includes/footer.php"; ?>

</body>

</html>