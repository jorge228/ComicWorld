$(function(){
    $('.link-ancla').focus(function(e){
        $( ".carousel-control-prev" ).focus();
    });

    $(".carousel-control-prev").keydown(function (e) { 
        if (e.shiftKey && e.keyCode==9){
            $("#dropdownMenu1").focus();
        }
    });

});