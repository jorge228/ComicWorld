$('.prueba a').click(function(e){
    // Evitamos que se haga el scroll
    e.preventDefault();

    // Capturamos el ancla
    var ancla = $(this).attr('href');

    // Le quitamos el numeral # para solo quedarnos con el nombre de la sección
    ancla = ancla.substring(1);

    // Obtenemos la posición de la sección
    var position = $('#'+ancla).position();

    // Hacemos el efecto scroll y le restamos algunos pixeles, en este caso 180
    $('html, body').animate({scrollTop: (position.top - 180)}, 0);
});
/*
$(".dropdown-menu a[href^='#']").on('click', function(e) {
    // prevent default anchor click behavior
    e.preventDefault();
 
    // animate
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top - 60
      }, 300, function(){
      });
 });*/