var game = (function () {

    // Variables globales relacionadas con los elementos html e imágenes a cargar
    var tiempoFrame = 50;
    var canvas;
    var ctx;
    var imgFondo; // Imagen del background del juego
    var jugadorIddleImages = [];
    var jugadorRunImages = [];
    var gameoverImage;
    var escudoImages = [];
    var martilloImages = [];
    var imgCargadas = 0; // Control de la cantidad de imágenes cargadas
    var totalImagenes = 15;
    var finJuego = false;
    var jugador;
    var sensibilidad = 1;
    var escudos = [];
    var martillos = [];
    var tiempo = 0;

    $(document).keypress(function (e) { 
            
        if ((e.which == 65) || (e.which == 65+32)) {
            jugador.mover(-20*sensibilidad, 0);
                jugador.setEstado("runLeft");
            e.preventDefault();
        }

        if ((e.which == 68) || (e.which == 68+32)) {
            jugador.mover(20*sensibilidad, 0);
            jugador.setEstado("runRight");
            e.preventDefault();  
        }
    }); 

    /**
     * Función de inicialización del juego. Esta es la función principal, la que se llama desde el código html.
     * Se encarga de inicializar las variables globales necesarias para el juego
     */
    function init() {
        // Lo primero es comenzar a cargar las imágenes
        preloadImages();

        // Obtención del elemento html con id = "canvas". Puedes mirar el código html para entender mejor esto
        canvas = document.getElementById('canvas');
        // Necesitamos el contexto del canvas, para poderlo utilizar como "brocha", gracias a este elemento podremos
        // asignar colores y pintar primitivas, imágenes, textos, etc.
        ctx = canvas.getContext("2d");
        //Se crea el personaje
        jugador = new Jugador(true, 100, "iddle", 0, jugadorIddleImages, jugadorRunImages);
        //Se genera el primer escudo
        escudos.push(new Escudo(1, escudoImages));
        //Se crea el primer martillo
        martillos.push(new Martillo(martilloImages));
    }

    /**
     * A través de este método conseguiremos precargar las imágenes. Este proceso en JS no es síncrono, por tanto necesitamos implementar
     * una especie de disparador. Cada vez que una imagen se carge (lo controlaremos por la ejecución de la función "addEventListener")
     * se aumentará en 1 la cantidad de imágenes cargadas y se llamará a la función que pinta la escena.
     */
    function preloadImages() {
        // Carga de la imagen del fondo del juego
        imgFondo = new Image();
        imgFondo.src = 'assets/img/juegoEmilio/background.jpg';
        imgFondo.addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
          }, false);
        //Carga la imagen de game over
        gameoverImage = new Image();
        gameoverImage.src = 'assets/img/juegoEmilio/gameover.jpg';
        gameoverImage.addEventListener('load', function() {
              // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
              imgCargadas++;
              paintEscena();
            }, false);
        //	Carga personaje
        //Iddle 1
        jugadorIddleImages.push(new Image());
        jugadorIddleImages[0].src = 'assets/img/juegoEmilio/personaje_iddle_01.png';
        jugadorIddleImages[0].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
          }, false);
        //Iddle 2
        jugadorIddleImages.push(new Image());
        jugadorIddleImages[1].src = 'assets/img/juegoEmilio/personaje_iddle_02.png';
        jugadorIddleImages[1].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
          }, false);
        // Run Derecha 01
        jugadorRunImages.push(new Image());
        jugadorRunImages[0].src = 'assets/img/juegoEmilio/personaje_runR_01.png';
        jugadorRunImages[0].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
          }, false);
        // Run Derecha 02
        jugadorRunImages.push(new Image());
        jugadorRunImages[1].src = 'assets/img/juegoEmilio/personaje_runR_02.png';
        jugadorRunImages[1].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
          }, false);
        // Run Izquierda 01
        jugadorRunImages.push(new Image());
        jugadorRunImages[2].src = 'assets/img/juegoEmilio/personaje_runL_01.png';
        jugadorRunImages[2].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
            }, false);
        // Run Izquierda 02
        jugadorRunImages.push(new Image());
        jugadorRunImages[3].src = 'assets/img/juegoEmilio/personaje_runL_02.png';
        jugadorRunImages[3].addEventListener('load', function() {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
            }, false);
        // Martillo 1
        martilloImages.push(new Image());
        martilloImages[0].src = 'assets/img/juegoEmilio/martillo.png';
        martilloImages[0].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 1
        escudoImages.push(new Image());
        escudoImages[0].src = 'assets/img/juegoEmilio/Escudo/1.gif';
        escudoImages[0].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 2
        escudoImages.push(new Image());
        escudoImages[1].src = 'assets/img/juegoEmilio/Escudo/2.gif';
        escudoImages[1].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 3
        escudoImages.push(new Image());
        escudoImages[2].src = 'assets/img/juegoEmilio/Escudo/3.gif';
        escudoImages[2].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 4
        escudoImages.push(new Image());
        escudoImages[3].src = 'assets/img/juegoEmilio/Escudo/4.gif';
        escudoImages[3].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 5
        escudoImages.push(new Image());
        escudoImages[4].src = 'assets/img/juegoEmilio/Escudo/5.gif';
        escudoImages[4].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);
        // Escudo 6
        escudoImages.push(new Image());
        escudoImages[5].src = 'assets/img/juegoEmilio/Escudo/6.gif';
        escudoImages[5].addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);

      }

    /**
     * Función principal para pintar la escena, esta función puede tardar un poco en realizar el pintado, por lo que hemos
     * retrasado la llamada al siguiente método "interactua()" unos 100 milisegundos. Ten en cuenta que esa forma de hacer
     * "delay" es asíncrona. Todo el juego es un bucle entre las funciones "paintEscena" e "interactua". Las dos funciones 
     * continuamente se llaman entre sí, creando un "bucle".
     */
    function paintEscena () {
        // Sólo pasamos a pintar la escena si nos aseguramos de que las dos imágenes han sido cargadas correctamente.
        if (imgCargadas == totalImagenes) {
            // Pintamos el fondo, el personaje, los caracteres adivinados y los fallos comentidos por el usuario. Cada cosa en su función
            paintFondo();    
            // Se pinta el personaje    
            jugador.paint(ctx);
            
            // Se pinta los escudos
            if (escudos.length > 0) {
                for (let index = 0; index < escudos.length; index++) {
                    escudos[index].paint(ctx);
                }
            }

            //Se pintan los martillos
            if (martillos.length > 0) {
                for (let index = 0; index < martillos.length; index++) {
                    martillos[index].paint(ctx);
                }
            }
            
            paintInformacion();
            // Si no hemos llegado al fin del juego, esperamos 200 milisegundos y llamamos a la función "interactua".
            // La variable "finJuego" se establecerá a valor true en la función "interactua"
            if (!finJuego) {
                setTimeout(interactua, tiempoFrame);
            }
        }
    }   

    function paintInformacion () {
        ctx.fillStyle = "#ffffff";
        ctx.font="30px Verdana";
		ctx.fillText("Puntuacion:"+jugador.getPuntuacion()+ " Vida: "+jugador.getVida(), 50, 50);
    }

    function interactua () {

        limpiarEscudosDesabilitados();
        comprobarColisionesConEscudo();
        agregarEscudo();
        agregarMartillos();
        moverMartillos();
        limpiarMartillos();
        comprobarColisionesConMartillos();
        comprobarFinJuego();
        // Si se llega a este método pero el juego ya ha terminado, se debe acabar la ejecución del programa,
        //  la ejecución terminará
        if (finJuego) {
            ctx.drawImage(gameoverImage, 0, 0);
            return;
        }

        paintEscena();
        jugador.setEstado("iddle");
    }

    function comprobarFinJuego() {
        if(jugador.getVida() <= 0) finJuego = true;
    }

    function comprobarColisionesConMartillos() {
        if (martillos.length > 0) {
            for (let index = 0; index < martillos.length; index++) {
                let colisiona = false;

                // Creacion de colisionador arriba bloque
                let ctUpx = 60 + jugador.getX();
                let ctUpy = jugador.getY(); 
                let ctUpwidth = 50; //tamaño x
                let ctUpheight = 30; //tamaño y
                // Creacion de colisionador abajo bloque
                let ctDownx = 60 + jugador.getX();
                let ctDowny = jugador.getY() + ctUpheight - 1; 
                let ctDownwidth = ctUpwidth;
                let ctDownheight = 1;
                // Creacion de colisionador izquierda bloque
                let ctLeftx = 60 + jugador.getX();
                let ctLefty = jugador.getY(); 
                let ctLeftwidth = 1;
                let ctLeftheight = ctUpwidth;
                // Creacion de colisionador derecho bloque
                let ctRightx = 60 + jugador.getX() + ctUpwidth - 1;
                let ctRighty = jugador.getY(); 
                let ctRightwidth = 1;
                let ctRightheight = ctUpheight;
                        
                
                // Colision arriba
                if (ctUpx < martillos[index].getX() + 120 &&
                    ctUpx + ctUpwidth > martillos[index].getX() &&
                    ctUpy < martillos[index].getY() + 120 &&
                    ctUpheight + ctUpy > martillos[index].getY()) {
                        colisiona = true;
                }
                // Colision abajo
                if (ctDownx < martillos[index].getX() + 120 &&
                    ctDownx + ctDownwidth > martillos[index].getX() &&
                    ctDowny < martillos[index].getY() + 120 &&
                    ctDownheight + ctDowny > martillos[index].getY()) {
                        colisiona = true;
                }
                // Colision izquierda
                if (ctLeftx < martillos[index].getX() + 120 &&
                    ctLeftx + ctLeftwidth > martillos[index].getX() &&
                    ctLefty < martillos[index].getY() + 120 &&
                    ctLeftheight + ctLefty > martillos[index].getY()) {
                        colisiona = true;
                }
                // Colision derecha 
                if (ctRightx < martillos[index].getX() + 120 &&
                    ctRightx + ctRightwidth > martillos[index].getX() &&
                    ctRighty < martillos[index].getY() + 120 &&
                    ctRightheight + ctRighty > martillos[index].getY()) {
                        colisiona = true;
                }
                if (colisiona) {
                    jugador.setVida(jugador.getVida() - (1 + Math.floor(Math.random() * 10))); //Daño del martillo
                    martillos[index].setDisable(true);
                }
            }
        }

    }

    function agregarMartillos () {
        if ((tiempo % 11 == 0)) {
            martillos.push(new Martillo(martilloImages));
        }    
    }

    function limpiarMartillos() {
        if (martillos.length > 0) {
            let arrayAuxiliar = [];
            for (let index = 0; index < martillos.length; index++) {
                if (!martillos[index].getDisable()) arrayAuxiliar.push(martillos[index]);
            }
            martillos = arrayAuxiliar;
        }          
    }

    function moverMartillos () {
        if (martillos.length > 0) {
            for (let index = 0; index < martillos.length; index++) {
                martillos[index].mover(10+jugador.getPuntuacion());
                if (martillos[index].getY() > 600) martillos[index].setDisable(true);
            }
        }
    }

    function agregarEscudo() {
        if ((tiempo == 29) && (escudos.length < 10)) {
            escudos.push(new Escudo(1, escudoImages));
        }
        tiempo++;
		if (tiempo == 30) tiempo = 0;
    }

    function comprobarColisionesConEscudo() {
        if (escudos.length > 0) {
            for (let index = 0; index < escudos.length; index++) {
                if((jugador.getX()+85 >= escudos[index].getX()) && (jugador.getX() <= (escudos[index].getX()))) {
                    escudos[index].setDisable(true);
                    jugador.setPuntuacion(jugador.getPuntuacion()+escudos[index].getValor());
                }
            }
        }
    }

    function limpiarEscudosDesabilitados () {
        if (escudos.length > 0) {
            let arrayAuxiliar = [];
            for (let index = 0; index < escudos.length; index++) {
                if (!escudos[index].getDisable()) arrayAuxiliar.push(escudos[index]);
            }
            escudos = arrayAuxiliar;
        }           
    }

    /**
     * Pintamos las dos imágenes que componen el fondo del juego
     */
	function paintFondo () {
		// Pinto el fondo de la escena
        ctx.drawImage(imgFondo, 0, 0);
    }

	 /**
	 * Obtención de un número secreto desde 0 hasta un máximo
	 * @param {*} max 
	 */
    function getNumeroAleatorio(max) {
        return Math.floor(Math.random() * max);
    }

    /**
     * Método devuelto por el objeto
     */
    return {
        init: init
    }

})();