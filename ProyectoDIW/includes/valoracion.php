<?php
function crear($pelicula)
{
    ?>
    <div class="valoracion">
        <p>Envíanos tu valoración:</p>
        <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<input id='radio<?php echo ($pelicula+$i) ?>' type='radio' name='<?php echo $pelicula ?>' value='<?php echo $i ?>'>";
                echo "<label for='radio<?php echo ($pelicula+$i) ?>'>★</label>";
            }
            ?>
    </div>

<?php
}
?>