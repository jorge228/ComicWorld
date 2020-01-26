$(function(){

    $("form.needs-validation").submit(function (e) { 
        
        if (this.checkValidity()===false){
            e.preventDefault();
            e.stopPropagation();
        }

        $(this).toggleClass("was-validated");

    });
});