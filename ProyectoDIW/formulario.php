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

    <section class="container py-5">
        <div class="col-md-6 offset-md-3">
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
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control" name="uname1" id="uname1" required="">
                                    <div class="invalid-feedback">Please enter your username or email</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="pwd1" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Please enter a password</div>
                                </div>
                                <div class="form-check small">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> <span>Remember me on this computer</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- CONTENIDO 2 -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Verify</label>
                                    <input type="password" class="form-control" id="inputVerify3" placeholder="Password (again)" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                                </div>
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