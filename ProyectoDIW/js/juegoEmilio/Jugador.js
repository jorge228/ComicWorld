class Jugador {

    constructor(estaVivo=true, vida=100, estado="iddle", frame=0, jugadorIddleImages, jugadorRunImages) {
        this.estaVivo = true;
        this.vida = vida;
        this.estado = estado;
        this.frame = frame;
        this.jugadorIddleImages = jugadorIddleImages;
        this.jugadorRunImages = jugadorRunImages;
        this.x = 0; 
        this.y = 325;
        this.puntuacion = 0;
        this.ancho = 80;
    }
  
    getAncho()   {
        return this.ancho;
    }

    setEstado (s) {
        this.estado = s; 
    }

    getFrame () {
        return this.frame;
    }

    setFrame (frame) {
        this.frame = frame;
    }

    setPuntuacion (puntuacion) {
        this.puntuacion = puntuacion
    }

    getPuntuacion () {
        return this.puntuacion;
    }

    getVida () {
        return this.vida;
    }

    setVida(vida) {
        this.vida = vida;
    }

    getX (){
        return this.x;
    }

    getY () {
        return this.y;
    }

    mover(x, y) {
        this.x = this.x + x;
        this.y = this.y + y;
    }

    paint (ctx) {

		if (this.estado == "iddle") {

			if ((this.frame == 1) || (this.frame == 2) || (this.frame == 3) || (this.frame == 4) || (this.frame == 5)) {
				ctx.drawImage(this.jugadorIddleImages[0], this.x, this.y);			
			} 

			if ((this.frame == 6) || (this.frame == 7) || (this.frame == 8) || (this.frame == 9) || (this.frame == 10)) {
				ctx.drawImage(this.jugadorIddleImages[1], this.x, this.y);			
			}

            this.frame++;
            if (this.frame == 10) this.frame = 1;
        }
        
        if (this.estado == "runRight") {
            if ((this.frame == 1) || (this.frame == 2) || (this.frame == 3) || (this.frame == 4) || (this.frame == 5)) {
                ctx.drawImage(this.jugadorRunImages[0], this.x, this.y);
            }
            if ((this.frame == 6) || (this.frame == 7) || (this.frame == 8) || (this.frame == 9) || (this.frame == 10)) {
                ctx.drawImage(this.jugadorRunImages[1], this.x, this.y);
            }
            this.frame++;
            if (this.frame >= 10) this.frame = 1;
        }

        if (this.estado == "runLeft") {
            if ((this.frame == 1) || (this.frame == 2) || (this.frame == 3) || (this.frame == 4) || (this.frame == 5)) {
                ctx.drawImage(this.jugadorRunImages[2], this.x, this.y);
            }
            if ((this.frame == 6) || (this.frame == 7) || (this.frame == 8) || (this.frame == 9) || (this.frame == 10)) {
                ctx.drawImage(this.jugadorRunImages[3], this.x, this.y);
            }
            this.frame++;
            if (this.frame >= 10) this.frame = 1;
        }

    }

}