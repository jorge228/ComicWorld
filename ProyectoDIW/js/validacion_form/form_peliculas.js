$(function(){

    //Creacion de modulo contador de caracteres
    Quill.register('modules/contador', function(quill, options) {
        var maxCarac=options.maxchar+1;
        var contenedor = $(options.contenedor);

        quill.on('text-change', function() {
            var texto = quill.getText();
            $(contenedor).text((maxCarac-texto.length) + ' caracteres restantes');
            if ((maxCarac-texto.length)<=0)
                $(contenedor).css("color", "red")
            else
                $(contenedor).css("color", "green");
        });
    });

    //Configuracion de Quill
    var quill = new Quill('#editor-quill', {
        modules: {
            formula: true,
            toolbar: '#toolbar-quill',
            contador:{
                maxchar:800,
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


    //Form
    $("form.needs-validation").submit(function (e) {
        $("#sinopsis").val(quill.root.innerHTML);

        if(this.checkValidity()===false){

            e.preventDefault();
            e.stopPropagation();

            if (!$(this).hasClass("was-validated"))
                $(this).toggleClass("was-validated");
        }
        else{
        }
    });


})