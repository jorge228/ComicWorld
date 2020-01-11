class Martillo {

	constructor(martilloImages, y=-100){
		this.x = Math.floor(Math.random() * 950);
		this.y = y;
		this.martilloImages = martilloImages;
		this.disable = false;
		this.frame = 0;
	}
	
	setDisable (b) {
		this.disable = b;
	}

	getDisable() {
		return this.disable;
	}

	getX (){
        return this.x;
    }

    getY () {
        return this.y;
    }

    mover(velocidad) {
        this.y = this.y + velocidad;
    }

	paint (ctx) {
		ctx.drawImage(this.martilloImages[0], this.x, this.y);
	}
}
