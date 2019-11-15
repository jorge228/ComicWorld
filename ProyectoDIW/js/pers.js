
$(function() {

    var scroll=false;

    //Evento que se activara cuando el usuario haga scroll
    $(window).scroll(function () { 

        //Si el usuario ha hecho scroll por primera vez
        if (!scroll){

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
                        size: "150",
                        lineWidth: "20",
                        barColor:'red',
                        lineCap:'square',
                        scaleLength:'1',
                        trackColor:'white',
                        animate:({
                            duration:"500",
                            enabled:true
                        })
                    });
                }, tiempo);

                //Aumentar tiempo
                tiempo=parseInt(tiempo)+500;
            }

            scroll=true;
        }

        
    });
});

