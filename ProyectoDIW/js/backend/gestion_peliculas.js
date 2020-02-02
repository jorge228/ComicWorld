$(function(){
    $("form.claseFormPelicula").submit(function(e){

        var botonPulsado = $(document.activeElement);

        //Obtener nombre de la pelicula
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
    });

    //Modal texto valoracion
    $(".btnImgCarrusel").click(mostrarImagen);
    $(".btnImgCartelera").click(mostrarImagen);

})

//Funcion para mostrar modal con imagen
function mostrarImagen(e){
    idPel=$(this).parent().siblings(":has([id*=id])").text();

    //Determinar imagen
    if ($(this).hasClass('btnImgCartelera'))
        imagen="cartelera";
    else
        imagen="carrusel";

    $.ajax({
        //Metodo por el que se va a enviar la solicitud
        type: "POST",

        //URL del archivo del servidor que va a mostrar la respuesta
        url: "includes/ajax/peliculas_imagenes_ajax.php",

        //Datos que seran enviados
        data:{
            idPel:idPel
        },
        //Tipo de dato que va a devolver la respuesta
        dataType: "json",

        //En caso de recibir respuesta exitosa
        success: function (response) {  
            $('#tituloModalImg').text("Imagen de " + imagen +" de "+ response.titulo);

            if (imagen=="cartelera")
                $('#imgModalImg').attr('src', response.img_cartelera);
            else
                $('#imgModalImg').attr('src', response.img_carrusel);

            $('#modalImagenes').modal("show");
        },

        error: function(response){
            toastr.error('Ha habido un error al intentar obtener la imagen, inténtelo más tarde.', 'Error', {closeButton:true, positionClass:"toast-top-full-width"});
        }
    });     
}