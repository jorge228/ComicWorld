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
    });

    //Modal texto valoracion
    $(".btnTextoVal").click(function (e) { 
        idVal=$(this).parent().siblings(":has([id*=id])").text();
        
        $.ajax({
            //Metodo por el que se va a enviar la solicitud
            type: "POST",

            //URL del archivo del servidor que va a mostrar la respuesta
            url: "includes/ajax/texto_val_ajax.php",

            //Datos que seran enviados
            data:{
                idVal:idVal
            },
            //Tipo de dato que va a devolver la respuesta
            dataType: "json",

            //En caso de recibir respuesta exitosa
            success: function (response) {  
                $('#tituloModalVal').text("Valoración de "+ response.username + " para " + response.titulo);
                $('#textoModalVal').html('"'+response.texto+'"');
                $('#modalTextos').modal("show");
            },

            error: function(response){
                toastr.error('Ha habido un error al intentar obtener la valoración, inténtelo más tarde.', 'Error', {closeButton:true, positionClass:"toast-top-full-width"});
            }
        });        
    });

})