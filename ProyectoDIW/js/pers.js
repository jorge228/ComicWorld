
$(function() {

    var scroll=false;    

    //Evento que se activara cuando el usuario haga scroll
    $(window).scroll(function () { 

        //Si el usuario ha hecho scroll por primera vez
        if (!scroll){

            tamanios=getTamanios();

            //Tiempo que tardara en cargarse el grafico
            tiempo="500";

            //IDs de los graficos
            idsCharts=["fuerza", "resistencia", "intel", "agilidad", "combate", "velocidad"];

            for (let i=0; i<idsCharts.length; i++){

                setTimeout(function(){
                    //Mostrar div
                    $(".c"+(i+1)).css('visibility','visible').hide().fadeIn('slow');

                    //Mostrar grafico puntuacion
                    $("#"+idsCharts[i]).easyPieChart({
                        size: ""+tamanios[0],
                        lineWidth: "17",
                        trackColor:"#e3e3e3",
                        barColor:'#f52c2c',
                        lineCap:'square',
                        scaleLength:'1',
                        animate:({
                            duration:"500",
                            enabled:true
                        })
                    });
                }, tiempo);

                //Aumentar tiempo
                tiempo=parseInt(tiempo)+500;
            }

            $(".chart").css({
                width:tamanios[0]+"px",
                height:tamanios[0]+"px"
            });

            $(".percent").css({
                lineHeight:tamanios[0]+"px",
                fontSize:tamanios[1]+"em"
            });

            
            scroll=true;
        }

        
    });


    //Para que cambie de tamanio segun resolucion
    $(window).resize(function () { 
        if (scroll){
            tamanios=getTamanios();

            $(".chart").css({
                width:tamanios[0]+"px",
                height:tamanios[0]+"px"
            });

            $(".chart canvas").css({
                width:tamanios[0]+"px",
                height:tamanios[0]+"px"
            });

            $(".percent").css({
                lineHeight:tamanios[0]+"px",
                fontSize:tamanios[1]+"em"
            });
        }
    });
    
});


//Funcion para configurar tamanios al cargar plugin
function getTamanios(){

    //0=valor para atributo 'size' del canvas de easyPieChart y para varios atributos
    //1=valor para font-size
    tamanios=[137,2.5];

    if (window.matchMedia("(max-width: 767px)").matches) {
        tamanios[0]=116;
        tamanios[1]=1.8;
    }

    return tamanios;
}
