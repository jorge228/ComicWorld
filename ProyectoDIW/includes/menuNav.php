<nav class="navbar fixed-top navbar-expand-lg navbar-fixed-top navbar-dark bg-success main-nav">

    <div class="container-fluid">

        <!-- Navbar header Logo -->
        <div class="navbar-header">
            <a href="index.php">
                <img src="assets/img/logo.png" alt="logo" height="40px" width="40px">
            </a>
        </div>

        <!-- Elementos del menu -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <ul class="nav navbar-nav mx-auto">

                <!-- Home -->
                <div class="nav-item dropdown">
                    <form action="index.php" method="GET">
                        <button class="btn btn-success bg-success btn-sm m-1 border-0" type="submit">HOME</button>
                    </form>
                </div>

                <!-- Comics -->
                <div class="nav-item dropdown">

                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COMICS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="comic_Marvel.php">MARVEL</a>
                        <a class="dropdown-item" href="comic_DCComic.php">DC COMICS</a>
                        <a class="dropdown-item" href="comic_DarkHorse.php">DARK HORSE</a>
                        <a class="dropdown-item" href="comic_Otros.php">OTROS</a>
                    </div>
                </div>
                <!-- Peliculas -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PELICULAS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="peliculas_Marvel.php">MARVEL</a>
                        <a class="dropdown-item" href="peliculas_DC.php">DC COMICS</a>
                    </div>
                </div>

                <!-- Videojuegos -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        VIDEOJUEGOS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="videojuegos_Arkham.php">SAGA ARKHAM</a>
                        <a class="dropdown-item" href="videojuegos_MarvelvsCapcom.php">SAGA MARVEL VS CAPCOM</a>
                        <a class="dropdown-item" href="videojuegos_UltimateAlliance.php">SAGA MARVEL ULTIMATE ALLIANCE</a>
                        <a class="dropdown-item" href="videojuegos_Injustice.php">SAGA INJUSTICE</a>
                        <a class="dropdown-item" href="videojuegos_Lego.php">LEGO MARVEL SUPERHEROES</a>
                    </div>
                </div>

                <!-- Personajes -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PERSONAJES
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="personajes_Spiderman.php">SPIDERMAN</a>
                        <a class="dropdown-item" href="personajes_Superman.php">SUPERMAN</a>
                        <a class="dropdown-item" href="personajes_IronMan.php">IRON MAN</a>
                        <a class="dropdown-item" href="personajes_Flash.php">FLASH</a>
                        <a class="dropdown-item" href="personajes_WonderWoman.php">WONDER WOMAN</a>
                    </div>
                </div>

                <!-- Juegos -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JUEGOS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="juegoSandra.php">PIEDRA, PAPEL O TIJERA</a>
                        <a class="dropdown-item" href="juegoJorge.php">CAZA AL DUENDE</a>
                        <a class="dropdown-item" href="juegoEmilio.php">THORCALIPSIS</a>
                        <a class="dropdown-item" href="juegoDani.php">FLOATY BIRD</a>
                    </div>
                </div>

            </ul>
        </div>

        <!-- Login button -->
        <div>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li id="dropdownLoginLI" class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"><i class="fas fa-user text-white"></i> <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    <a class="text-white" href="login.php">Inicia sesión</a>
                                </button>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    <a class="text-white" href="logOut.php">Cerrar sesión</a>
                                </button>
                            </div>
                            <div class="text-center">
                                <small class="">o</small>
                            </div>
                            <div class="form-group">
                                <button id="googleSignInBtn" class="btn-google">Inicia sesión con Google</button>
                            </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Collapse button -->
        <button class="navbar-toggler ml-auto nav-flex-icons" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

</nav>

<div id="correctorBarra"></div>