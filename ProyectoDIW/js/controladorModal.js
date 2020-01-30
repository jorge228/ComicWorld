$(function() {

    //  Control Eventos:
    $("#usuario").click(function (e) {
        $('#usuario').css('background-color', "#FFFFFF");
        $('#password').css('background-color', "#FFFFFF");
        $('#errorMode').remove();
        e.preventDefault();      
    });

    $("#password").click(function (e) {
        $('#usuario').css('background-color', "#FFFFFF");
        $('#password').css('background-color', "#FFFFFF");
        $('#errorMode').remove();
        e.preventDefault();      
    });

    $("#exampleModal").keypress(function (e) {      
        if (e.which == 13) {
            $('#btnEntrar').click();
            e.preventDefault();
        }
    }); 
    //  Fin Control Eventos:

    if ($('#errorMode').length) {
        $('#usuario').css('background-color', "#FFDDDD");
        $('#password').css('background-color', "#FFDDDD");
        $("#exampleModal").modal();
    }

});