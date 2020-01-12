var ganados=0;
var perdidos=0;
var empatados=0;


function jugadorElige(fotoelegida,eleccionJugador){
    document.getElementById("jugador").src=fotoelegida;
    turnoDelRival(eleccionJugador)
}
function turnoDelRival(eleccionJugador){
    var eleccionRival = Math.round(Math.random() * (3-1)+1);
    if (eleccionRival==1){
        eleccionRival="piedra";
        document.getElementById("rival").src='assets/img/juegoSandra/piedra2.png';
    }
    if (eleccionRival==2){
        eleccionRival="papel";
        document.getElementById("rival").src='assets/img/juegoSandra/papel2.png';
    }
    if (eleccionRival==3){
        eleccionRival="tijera";
        document.getElementById("rival").src='assets/img/juegoSandra/tijera2.png';
    }

    evaluar(eleccionJugador, eleccionRival);

}

function evaluar(eleccionJugador,eleccionRival){
    if(eleccionJugador == eleccionRival){
        alert("Has empatado con el rival");
        empatados++;
    }
    if(eleccionJugador == 'piedra' && eleccionRival=='papel'){
        alert("Has perdido, el papel le gana a la piedra");
        perdidos++;
    }
    if(eleccionJugador == 'piedra' && eleccionRival=='tijera'){
        alert("Has ganado, la piedra le gana a la tijera");
        ganados++;
    }
    if(eleccionJugador == 'papel' && eleccionRival=='piedra'){
        alert("Has ganado, el papel le gana a la piedra");
        ganados++;
    }
    if(eleccionJugador == 'papel' && eleccionRival=='tijera'){
        alert("Has perdido, la tijera le gana al papel");
        perdidos++;
    }
    if(eleccionJugador == 'tijera' && eleccionRival=='papel'){
        alert("Has ganado, la tijera le gana al papel");
        ganados++;
    }
    if(eleccionJugador == 'tijera' && eleccionRival=='piedra'){
        alert("Has perdido, la piedra le gana a la tijera");
        perdidos++;
    }
    actualizaEstadisticas();

}

function actualizaEstadisticas(){
    document.getElementById("cantidadGanados").innerHTML=ganados;
    document.getElementById("cantidadPerdidos").innerHTML=perdidos;
    document.getElementById("cantidadEmpatados").innerHTML=empatados;


}