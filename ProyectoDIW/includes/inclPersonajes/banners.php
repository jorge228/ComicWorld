<?php

function banner($rutaImagen){?>

    <div class="container-fluid ">
        <div class="row ">
            <div class="col-12 p-0">
                <div class="overlayBannerPers bg-primary">
                    <img class="img-fluid w-100" src="<?php echo $rutaImagen ?>"/>
                </div>
            </div>
        </div>
    </div>

<?php
}