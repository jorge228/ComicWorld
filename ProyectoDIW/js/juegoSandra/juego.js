//Opciones
var opciones = [0, 1, 2];
var eleccionOrdenador;

//Aleatorio
function aleatorio(minimo, maximo){
    var numero = Math.floor(Math.random() * (maximo - minimo +1) + minimo);
    return numero;
}
//Elección usuario
function usuario(eleccionUsuario){
    eleccionUsuario = parseInt(eleccionUsuario);
    eleccionOrdenador = aleatorio(0,2);

    //Si el usuario elege piedra
    if(eleccionUsuario == 0){ 
        //Sale papel
        if(opciones[eleccionOrdenador] == 1){
            document.getElementById('efecto').innerHTML ='<h1>¡Has perdido!</h1> <h3>El ordenador ha elegido papel, gana a la piedra.</h3>';
        }else{//Sale tijeras
            if(opciones[eleccionOrdenador] == 2){
                document.getElementById('efecto').innerHTML ='<h1>¡Has ganaste!</h1> <h3>El ordenador ha elegido tijera, gana la piedra.</h3>';
            }else{//Sale piedra
                if(opciones[eleccionOrdenador] == 0){
                    document.getElementById('efecto').innerHTML ='<h1>¡Empate!</h1> <h3>Ambos eligieron piedra.</h3>';
                }
            }
        } 
    }
    //Si el usuario elege papel

    if(eleccionUsuario == 1){
        //Sale tijeras
        if(opciones[eleccionOrdenador] == 2){
            document.getElementById('efecto').innerHTML ='<h1>¡Has perdido!</h1> <h3>El ordenador ha elegido tijera, gana al papel.</h3>';
        }else{//Sale piedra
            if(opciones[eleccionOrdenador] == 0){
                document.getElementById('efecto').innerHTML ='<h1>¡Has ganado!</h1> <h3>El ordenador ha elegido piedra, gana el papel.</h3>';
            }else{//Sale papel
                if(opciones[eleccionOrdenador] == 1){
                    document.getElementById('efecto').innerHTML ='<h1>¡Empate!</h1> <h3>Ambos eligieron papel.</h3>'; 
                }
            }
        }
    }
    //Si el usuario elege tijera

    if(eleccionUsuario == 2) {
        //Sale papel
        if(opciones[eleccionOrdenador] == 1){
            document.getElementById('efecto').innerHTML ='<h1>¡Has ganado!</h1> <h3>El ordenador ha elegido papel, gana la tijera.</h3>';      
        }else{//Sale piedra
            if(opciones[eleccionOrdenador] == 0){
                document.getElementById('efecto').innerHTML ='<h1>¡Has ganado!</h1> <h3>El ordenador ha elegido piedra, gana a la tijera.</h3>'; 
            }else{//Sale tijeras
                if(opciones[eleccionOrdenador] == 2) {
                    document.getElementById('efecto').innerHTML ='<h1>¡Empate!</h1> <h3>Ambos eligieron tijera.</h3>';
                }
            }
        }
    }

    document.getElementById('efecto').style.display = "";
}



function quitarEfecto() {
    document.getElementById('efecto').style.display = "none";
}