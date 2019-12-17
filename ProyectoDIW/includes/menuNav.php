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

                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COMICS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="comic_Marvel.php">MARVEL</a>
                        <a class="dropdown-item" href="comic_Marvel.php">DC COMICS</a>
                        <a class="dropdown-item" href="comic_Marvel.php">DARK HORSE</a>
                        <a class="dropdown-item" href="comic_Marvel.php">OTROS</a>
                    </div>
                </div>

                <!-- Peliculas -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PELICULAS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="peliculas.php">MARVEL</a>
                        <a class="dropdown-item" href="peliculas.php">DC COMICS</a>
                    </div>
                </div>

                <!-- Videojuegos -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                <!-- Juegps -->
                <div class="nav-item dropdown">
                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JUEGOS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">JUEGO 1</a>
                        <a class="dropdown-item" href="#">JUEGO 2</a>
                        <a class="dropdown-item" href="#">JUEGO 3</a>
                        <a class="dropdown-item" href="#">JUEGO 4</a>
                    </div>
                </div>

            </ul>
        </div>

        <!-- Login button -->
        <button class="btn float-right">
            <a href="formulario.php"><i class="fas fa-user text-white"></i></a>
        </button>

        <!-- Collapse button -->
        <button class="navbar-toggler ml-auto nav-flex-icons" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

</nav>

<div id="correctorBarra"></div>