class Escudo {

	constructor(valor=1, escudoImages, y=430){
		this.x = Math.floor(Math.random() * 850);
		this.y = y;
		this.valor = valor;
		this.escudoImages = escudoImages;
		this.disable = false;
		this.ancho = 100;
		this.frame = 0;
	}
	getValor() {
		return this.valor;
	}
	setDisable (b) {
		this.disable = b;
	}

	getDisable() {
		return this.disable;
	}

	getAncho () {
		return this.ancho;
	}

	getX (){
        return this.x;
    }

    getY () {
        return this.y;
    }

	paint (ctx) {
		if ((this.frame == 1) || (this.frame == 2) || (this.frame == 3))
			ctx.drawImage(this.escudoImages[0], this.x, this.y);
		if ((this.frame == 4) || (this.frame == 5) || (this.frame == 6))
			ctx.drawImage(this.escudoImages[1], this.x, this.y);
		if ((this.frame == 7) || (this.frame == 8) || (this.frame == 9))
			ctx.drawImage(this.escudoImages[2], this.x, this.y);
		if ((this.frame == 10) || (this.frame == 11) || (this.frame == 12)) 
			ctx.drawImage(this.escudoImages[3], this.x, this.y);
		if ((this.frame == 13) || (this.frame == 14) || (this.frame == 15)) 
			ctx.drawImage(this.escudoImages[4], this.x, this.y);
		if ((this.frame == 16) || (this.frame == 17) || (this.frame == 18)) 
			ctx.drawImage(this.escudoImages[5], this.x, this.y);	
		if ((this.frame == 19) || (this.frame == 20) || (this.frame == 21)) 
			ctx.drawImage(this.escudoImages[0], this.x, this.y);	
		if ((this.frame == 22) || (this.frame == 23) || (this.frame == 24)) 
			ctx.drawImage(this.escudoImages[0], this.x, this.y);
		this.frame++;
		if (this.frame == 24) this.frame = 1;
		
	}
}
