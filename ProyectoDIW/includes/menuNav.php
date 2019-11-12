<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark main-nav">
  
    <div class="container-fluid">

        <!-- Elementos del menu -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Logo -->
            <div class="navbar-header">
                <img class="navbar-brand" src="assets/img/logo.png" onclick="location.reload()" alt="logo" height="18%" width="18%">
            </div>

            <ul class="nav navbar-nav mx-auto">

                <!-- Comics -->
                <div class="nav-item dropdown">
                    <button style="margin-right:10px; border: 0px;" class="btn btn-secondary btn-sm bg-dark dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comics
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Marvel</a>
                        <a class="dropdown-item" href="#">DC Comics</a>
                        <a class="dropdown-item" href="#">Dark Horse</a>
                        <a class="dropdown-item" href="#">Otros</a>
                    </div>
                </div>

                <!-- Peliculas -->
                <div class="nav-item dropdown">
                    <button style="margin-right:10px; border: 0px;" class="btn btn-secondary btn-sm bg-dark dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Peliculas
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Marvel</a>
                        <a class="dropdown-item" href="#">DC Comics</a>
                    </div>
                </div>

                <!-- Videojuegos -->
                <div class="nav-item dropdown">
                    <button style="margin-right:10px; border: 0px;" class="btn btn-secondary btn-sm bg-dark dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Videojuegos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="videojuegos/SagaArkham.php">Saga Arkham</a>
                        <a class="dropdown-item" href="videojuegos/SagaMarvelvsCapcom.php">Saga Marvel vs Capcom</a>
                        <a class="dropdown-item" href="videojuegos/SagaMarvelUltimateAlliance.php">Saga Marvel Ultimate Alliance</a>
                        <a class="dropdown-item" href="videojuegos/SagaInjustice.php">Saga Injustice</a>
                        <a class="dropdown-item" href="videojuegos/LegoMarvelSuperheroes.php">Lego Marvel Superheroes</a>
                    </div>
                </div>

                <!-- Personajes -->
                <div class="nav-item dropdown">
                    <button style="margin-right:10px; border: 0px;" class="btn btn-secondary btn-sm bg-dark dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Personajes
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Spiderman</a>
                        <a class="dropdown-item" href="#">Superman</a>
                        <a class="dropdown-item" href="#">Iron Man</a>
                        <a class="dropdown-item" href="#">Flash</a>
                        <a class="dropdown-item" href="#">Wonder Woman</a>
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