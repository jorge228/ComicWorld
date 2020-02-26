<?php
function crear($idPelicula)
{
?>
    <form action="" method="POST">
        <textarea class="form-control rounded-0" aria-label="escribe valoracion" name="textarea_valoracion" style="width: 100%" maxlength="1000" required></textarea><br>
        <div class="valoracion">
            <?php
            for ($i = 5; $i >= 1; $i--) {
                if($i==1){
                    echo "<input id='radio" . $idPelicula. "-" . $i . "' type='radio' name='puntuacion'" . $i . "' checked>";
                    echo "<label for='radio" . $idPelicula. "-" . $i . "'>★</label>";
                }else{
                    echo "<input id='radio" . $idPelicula. "-" . $i . "' type='radio' name='puntuacion' value='" . $i . "'>";
                    echo "<label for='radio" . $idPelicula. "-" . $i . "'>★</label>";
                }
            }
            ?>
        </div><br>
        <button class="btn btn-primary" type="submit" action="" name="enviar" value="<?php echo $idPelicula ?>">Enviar</button><br><br><br>
    </form>
<?php
}
?>