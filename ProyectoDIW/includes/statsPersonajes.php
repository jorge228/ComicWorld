<?php

function estadisticas($fuerza, $resistencia, $intelecto, $agilidad, $combate, $velocidad){?>
    <div class="row m-4 text-center">
        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart" id="fuerza" data-percent="<?php echo ($fuerza*10) ?>"><span class="percent"><?php echo $fuerza ?></span></div>
            <p class="tituloPuntuacionPer">FUERZA</p>

        </div>

        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart"  id="resistencia" data-percent="<?php echo ($resistencia*10) ?>"><span class="percent"><?php echo $resistencia ?></span></div>
            <p class="tituloPuntuacionPer">RESISTENCIA</p>
        </div>

        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart" id="intel"  data-percent="<?php echo ($intelecto*10)  ?>"><span class="percent"><?php echo $intelecto?></span></div>
            <p class="tituloPuntuacionPer">INTELECTO</p>
        </div>

        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart" id="agilidad"  data-percent="<?php echo ($agilidad*10) ?>"><span class="percent"><?php echo $agilidad ?></span></div>
            <p class="tituloPuntuacionPer">AGILIDAD</p>
        </div>

        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart" id="combate" data-percent="<?php echo ($combate*10) ?>"><span class="percent"><?php echo $combate ?></span></div>
            <p class="tituloPuntuacionPer">COMBATE</p>
        </div>

        <div class="col-6 col-sm-4 col-md-2 p-0">
            <div class="chart" id="velocidad" data-percent="<?php echo ($velocidad*10) ?>"><span class="percent"><?php echo $velocidad ?></span></div>
            <p class="tituloPuntuacionPer">VELOCIDAD</p>
        </div>

    </div>
<?php
};