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

                <!-- Comics -->
                <div class="nav-item dropdown">

                    <button class="btn btn-success bg-success btn-sm dropdown-toggle m-1 border-0" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COMICS
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">MARVEL</a>
                        <a class="dropdown-item" href="#">DC COMICS</a>
                        <a class="dropdown-item" href="#">DARK HORSE</a>
                        <a class="dropdown-item" href="#">OTROS</a>
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
                        <a class="dropdown-item" href="#">SPIDERMAN</a>
                        <a class="dropdown-item" href="#">SUPERMAN</a>
                        <a class="dropdown-item" href="#">IRON MAN</a>
                        <a class="dropdown-item" href="#">FLASH</a>
                        <a class="dropdown-item" href="#">WONDER WOMAN</a>
                    </div>
                </div>

            </ul>
        </div>

        <!-- Login button -->
        <button class="btn fas fa-user text-white float-right"/>

        <!-- Collapse button -->
        <button class="navbar-toggler ml-auto nav-flex-icons" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

</nav>

<div id="correctorBarra"></div>