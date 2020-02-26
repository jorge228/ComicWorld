$(function(){
    $('.link-ancla').focus(function(e){
        console.log(e);
        $( ".carousel-control-prev" ).focus();
    });

    $(".carousel-control-prev").keyup(function (e) { 
        console.log(e);
        console.log(e.shiftKey);

        console.log(e.keyCode);
        if (e.shiftKey && e.keyCode==9){
            $("#dropdownMenu1").focus();
        }
    });

});