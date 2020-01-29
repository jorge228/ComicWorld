$(function(){
    $("form.formGestionUsuario").submit(function(e){

        var formulario=$(this);
        var botonPulsado = $(document.activeElement);
        var rol=$(formulario[0][1]).val();

        //Obtener nombre del usuario
        var nombreUsuario=$(this).siblings(":has([id*=nombre])");
        nombreUsuario=$(nombreUsuario).find("p").text();

        //Determinar texto del mensaje segun boton pulsado
        if (botonPulsado.attr("name")=="cambiarRol")
            texto="¿Cambiar rol de '"+ nombreUsuario +"' a '"+rol+"'?";
        else if(botonPulsado.attr("name")=="eliminarUsuario")
            texto="ATENCIÓN: ¿Está seguro de que desea eliminar al usuario '"+ nombreUsuario +"'? Esto también borrará las valoraciones escritas por el usuario.";

        //Mostrar cuadro de dialogo con opciones OK y Cancelar
        var eleccion=confirm(texto);

        //Mandar formulario o cancelar segun opcion seleccionada
        if (eleccion)
            this.submit();
        else
            e.preventDefault();
    })
})