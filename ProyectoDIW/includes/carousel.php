<?php
function addCarousel ($imgName1, $imgName2, $imgName3, $imgName4) {
?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-12 p-0">
            

            <section id="carrusel" class="carousel slide " data-ride="carousel">
                <!--Imágenes del carrusel-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php echo '<img class="imgCarousel d-block w-100" src="assets/img/home/' . $imgName1 . '.jpg" alt="slide">'; ?>
                    </div>
                    <div class="carousel-item">
                        <?php echo '<img class="imgCarousel d-block w-100" src="assets/img/home/' . $imgName2 . '.jpg" alt="slide">'; ?>
                    </div>
                    <div class="carousel-item">
                        <?php echo '<img class="imgCarousel d-block w-100" src="assets/img/home/' . $imgName3 . '.jpg" alt="slide">'; ?>
                    </div>
                    <div class="carousel-item">
                        <?php echo '<img class="imgCarousel d-block w-100" src="assets/img/home/' . $imgName4 . '.jpg" alt="slide">'; ?>
                    </div>
                </div>

                <!--Flechas para pasar adelante y atras-->
                <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Siguiente</span>
                </a>
            </section>
        </div>
    </div>
</div>
<?php    
}
?>