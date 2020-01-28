$(function(){
    $("form.claseFormPelicula").submit(function(e){

        var botonPulsado = $(document.activeElement);

        //Obtener nombre del usuario
        var nombrePelicula=$(this).parent().siblings(":has([id*=nombre])");
        nombrePelicula=$(nombrePelicula).find("p").text();

        //Determinar texto del mensaje segun boton pulsado
        if (botonPulsado.attr("name")=="eliminarPelicula")
            texto="ATENCIÓN: ¿Está seguro de que desea eliminar la pelicula '"+ nombrePelicula +"'? Esto también borrará las valoraciones escritas para esa película.";

        //Mostrar cuadro de dialogo con opciones OK y Cancelar
        var eleccion=confirm(texto);

        //Mandar formulario o cancelar segun opcion seleccionada
        if (eleccion)
            this.submit();
        else
            e.preventDefault();
    })
})