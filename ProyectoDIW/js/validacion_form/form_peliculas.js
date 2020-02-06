$(function(){

    //Creacion de modulo contador de caracteres
    Quill.register('modules/contador', function(quill, options) {
        var maxCarac=options.maxchar+1;
        var contenedor = $(options.contenedor);

        quill.on('text-change', function() {
            var texto = quill.getText();
            $(contenedor).text((maxCarac-texto.length) + ' caracteres restantes');
            if ((maxCarac-texto.length)<0){
                $(contenedor).css("color", "red")
            }
            else{
                $(contenedor).css("color", "green");
            }
        });
    });

    //Configuracion de Quill
    var quill = new Quill('#editor-quill', {
        modules: {
            formula: true,
            toolbar: '#toolbar-quill',
            contador:{
                maxchar:1000,
                contenedor:"#contadorCaracteres"
            }
        },
        placeholder: 'Escribe la sinopsis aquí...',
        theme: 'snow'
    });

    // Activar tooltips
    $('[data-toggle="tooltip"]').tooltip();


    //Configuracion de editor Quill
    console.log(quill);


    //Formulario editar/anadir pelicula
    $("form.needs-validation").submit(function (e) {
        $("#sinopsis").val(quill.root.innerHTML);

        if(this.checkValidity()===false){

            e.preventDefault();
            e.stopPropagation();

            if (!$(this).hasClass("was-validated"))
                $(this).toggleClass("was-validated");
        }
        //Si el formulario es valido se comprueba la longitud de la sinopsis
        else{
            if (quill.getText().length==0 || quill.getText().trim()==""){
                e.preventDefault();
                toastr.error('La sinopsis no puede estar vacía', 'Error', {closeButton:true, positionClass:"toast-top-full-width"});
            }
            else if (quill.getText().length>quill.options.modules.contador.maxchar+1){
                e.preventDefault();
                toastr.error('La sinopsis introducida supera el límite de caracteres permitidos', 'Error', {closeButton:true, positionClass:"toast-top-full-width"});
            }

        }
    });


})