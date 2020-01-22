<?php
function crear($idPelicula)
{
?>
    <form action="" method="POST">
        <textarea class="form-control rounded-0" name="textarea_valoracion" style="width: 100%" maxlength="1000" required></textarea><br>
        <div class="valoracion">
            <?php
            for ($i = 5; $i >= 1; $i--) {
                echo "<input id='radio" . $idPelicula. "-" . $i . "' type='radio' name='puntuacion' value='" . $i . "'>";
                    echo "<label for='radio" . $idPelicula. "-" . $i . "'>★</label>";
                    /*echo "<input id='radio" . ($idPelicula + $i) . "' type='radio' name='puntuacion' value='" . $i . "'>";
                    echo "<label for='radio" . ($idPelicula + $i) . "'>★</label>";*/
                /*echo "<input id='radio<?php echo ($idPelicula +$i) ?>' type='radio' name='pelicula<?php echo $idPelicula ?>' value='<?php echo $i ?>'>";
                echo "<label for='radio<?php echo ($idPelicula +$i) ?>'>★</label>";*/
                
                /*echo "<label><input id='radio<?php echo ($idPelicula +$i) ?>' type='radio' name='<?php echo $idPelicula ?>' value='<?php echo $i ?>' style='visibility:hidden' required >★</label>";*/
            }
            ?></div><br>
        <button class="btn btn-primary" type="submit" action="" name="enviar" value="<?php echo $idPelicula ?>">Enviar</button><br><br><br>
    </form>
<?php
}
?>