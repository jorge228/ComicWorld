$(function(){

    $("form.needs-validation").submit(function (e) { 
        
        if (this.checkValidity()===false){
            e.preventDefault();
            e.stopPropagation();

            if (!$(this).hasClass("was-validated"))
                $(this).toggleClass("was-validated");
        }
    });
});