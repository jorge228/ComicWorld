$(function(){
    $("#password").keyup(mostrarEstadoPass);
    $("#confirmarPassword").keyup(mostrarEstadoPass);

    $("#formCambiarPass").submit(function (e) { 
        var password=$("#password").val();
        var confirmarPassword=$("#confirmarPassword").val();

        if(this.checkValidity()===false){
            e.preventDefault();
            e.stopPropagation();

            if (!$(this).hasClass("was-validated"))
                $(this).toggleClass("was-validated");
        } 

        
    });


})

function mostrarEstadoPass(){
    var password=$("#password").val();
    var confirmarPassword=$("#confirmarPassword").val();
    var coinciden=false;

    if (password==confirmarPassword)
        coinciden=true;

    if (!coinciden){
        $("#errorPassword").text("Las contraseñas no coinciden.");
        $("#errorPassword").removeClass("text-info");
        $("#errorPassword").addClass("text-danger");
        $("#btnEnviar").prop('disabled', true)
    }
    else{
        $("#errorPassword").text("Las contraseñas coinciden");
        $("#errorPassword").addClass("text-info");
        $("#errorPassword").removeClass("text-danger");
        $("#btnEnviar").prop('disabled', false)
    }

}