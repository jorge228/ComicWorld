var canvas, ctx;
var imgSpider, imgDuende, imgFondo;
var ancho = 700;
var alto = 300;
var posY = 220;
var inicio = false;
var nivel = { velocidad: 9, puntuacion: 0, muerto: false };
var spider = { x: 100, y: posY, vy: 0, gravedad: 2, salto: 28, vymax: 9, saltando: false };
var venom = { x: ancho, y: posY - 25, velocidad: 9 };
var duende = { x: ancho, y: 0, velocidad: 11 };
var fondo = { x: 0 };
var btn = document.getElementById('btn');

//añado evento a la ventana
document.addEventListener('keydown', function (evento) {
    evento.preventDefault();
    if (evento.keyCode == 32) {
        if (!nivel.muerto) {
            saltar();
        }
    }
});

//añado funcionalidad a botón
btn.addEventListener("click", function () {
    nivel.puntuacion = 0;
    nivel.velocidad = 9;
    nivel.muerto = false;
    duende.velocidad = 11;
    venom.velocidad = 9;
    venom.x = ancho;
    inicio = true;
    btn.disabled = true;
});

function cargaImagenes() {
    imgSpider = new Image();
    imgSpider.src = 'assets/img/juegoJorge/spider.png';
    imgVenom = new Image();
    imgVenom.src = 'assets/img/juegoJorge/venom.png';
    imgDuende = new Image();
    imgDuende.src = 'assets/img/juegoJorge/duende.png';
    imgFondo = new Image();
    imgFondo.src = 'assets/img/juegoJorge/fondo.png';
}

function inicializa() {
    canvas = document.getElementById('canvas');
    ctx = canvas.getContext('2d');
    cargaImagenes();

}

function borraCanvas() {
    //canvas.ctx.height = alto;
    //canvas.ctx.width = ancho;
    ctx.height = alto;
    ctx.canvas.width = ancho;
}

function dibuja() {
    //img, (recorta imagen 0, 0), anchoimg, altoimg, ejeX, ejeY, (41 ,69  para reescalarla)
    ctx.drawImage(imgFondo, 0, 0, 700, 308, 0, -1, 700, 308);
    ctx.drawImage(imgSpider, 0, 0, 41, 69, spider.x, spider.y, 41, 69);
    ctx.drawImage(imgVenom, 0, 0, 45, 77, venom.x, venom.y, 45, 77);
    ctx.drawImage(imgDuende, 0, 0, 100, 100, duende.x, duende.y, 100, 100);
}

function logicaVenom() {
    //45 ancho img, -45 porque ya sale del canvas entero y lo vuelvo a poner en ancho=700
    if (venom.x < -45) {
        venom.x = ancho;
        nivel.puntuacion+= venom.velocidad;
        //cambio velocidad cuande desaparece el duende
        venom.velocidad = Math.round((Math.random() * 13) + 7);
    } else {
        venom.x -= venom.velocidad;
    }
}

function logicaDuende() {
    if (duende.x < -100) {
        duende.x = ancho;
        duende.velocidad = Math.round((Math.random() * 13) + 7);
    } else {
        duende.x -= duende.velocidad;
    }
}

function saltar() {
    //si spider está en posición inicial, permito que salte
    if (spider.y == posY) {
        //activo saltando y le doy a la velocidad vy los pixeles de salto (28)
        spider.saltando = true;
        spider.vy = spider.salto;
    }
}

function gravedad() {
    //si está saltando spider actúa la gravedad
    if (spider.saltando) {
        if (spider.y > posY) {
            spider.saltando = false;
            //detenemos velocidad y lo dejamos en su posición, en el suelo
            spider.vy = 0;
            spider.y = posY;
        } else {
            //si está en el aire, a vy le voy quitando 2 y se lo voy quitando a la posición y de spider
            spider.vy -= spider.gravedad;
            spider.y -= spider.vy;
        }
    }
}

function colision() {
    if (venom.x >= 100 && venom.x <= 141) {
        if (spider.y >= posY - 25 - 77) {
            nivel.muerto = true;
        }
    }
    if (duende.x >= 1 && duende.x < 145) {
        if (spider.y <= 100) {
            nivel.puntuacion+= duende.velocidad;
            duende.x=-99;
        }
    }
    if (nivel.muerto) {
        venom.velocidad = 0;
        duende.velocidad = 0;
        btn.disabled = false;
    }
}

function dibujaPantallaInicial(){
    ctx.font = "30px Roboto";
    ctx.fillStyle = "green";
    ctx.fillRect(0,0,ancho,alto);
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.fillText("Pulsa 'Comenzar' para jugar", canvas.width / 2, canvas.height / 2);
}

function puntuacion() {
    if (nivel.muerto) {
        dibujaPantallaInicial();
    }
    ctx.font = "30px Roboto";
    ctx.fillStyle = 'white';
    ctx.fillText(`Puntuación: ${nivel.puntuacion}`, 450, 290);
}



//------------BUCLE PRINCIPAL------------------
var FPS = 50;
//el bucle principal se carga 10 veces por segundo siempre
setInterval(function () {
    principal();
}, 1000 / FPS);

function principal() {
    if (inicio) {
        borraCanvas();
        gravedad();
        colision();
        logicaVenom();
        logicaDuende();
        dibuja();
        puntuacion();
    } else {
        dibujaPantallaInicial();
    }
}
