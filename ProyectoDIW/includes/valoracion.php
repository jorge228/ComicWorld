<?php
function crear($pelicula)
{
    ?>
    <div class="valoracion">
        <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<input id='radio<?php echo ($pelicula+$i) ?>' type='radio' name='<?php echo $pelicula ?>' value='<?php echo $i ?>'>";
                echo "<label for='radio<?php echo ($pelicula+$i) ?>'>★</label>";
            }
            ?>
    </div>

<?php
}

function nota($valor){?>
    <div class="container p-0">
        <div class="row m-0 text-center">
            <div class="col-6 col-sm-4 col-lg-2 p-0">
                <div class="chart" id="fuerza" data-percent="<?php echo ($valor*10) ?>"><span class="percent"><?php echo $valor ?></span></div>
                <h2 class="tituloPuntuacionPer">NOTA</h2>
            </div>
        </div>
    </div>
<?php
};
?>