$(function(){
    $("form.formGestionValoracion").submit(function(e){

        var botonPulsado = $(document.activeElement);

        //Determinar texto del mensaje segun boton pulsado
        if (botonPulsado.attr("name")=="btnEliminarValoracion")
            texto="ATENCIÓN: ¿Está seguro de que desea eliminar esa valoracion?";

        //Mostrar cuadro de dialogo con opciones OK y Cancelar
        var eleccion=confirm(texto);

        //Mandar formulario o cancelar segun opcion seleccionada
        if (eleccion)
            this.submit();
        else
            e.preventDefault();
    })
})