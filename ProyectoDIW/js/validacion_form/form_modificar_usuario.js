$(function(){

    $("form.needs-validation").submit(function (e) { 
        
        //Obtener valor del input password
        valorPassword=$("#inputPasswordMod").val();

        /**
         * Si el formulario es valido y se ha introducido una contrasena se muestra un dialogo de advertencia para confirmar
         * que el admin no va a cambiar la contrasena por error
         */ 

        if (this.checkValidity()===true && valorPassword!=""){
            dialogoConfirmar=confirm("ATENCION: ¡Va a cambiar la contraseña de este usuario! ¿Está seguro de que desea continuar?");

            if (!dialogoConfirmar)
                e.preventDefault();
        }
        //Si el formulario no es valido se muestran los mensajes de error
        else if(this.checkValidity()===false){
            e.preventDefault();
            e.stopPropagation();

            if (!$(this).hasClass("was-validated"))
                $(this).toggleClass("was-validated");
        }
    });
});