<?php
function crear($idPelicula)
{
?>
    <form action="" method="POST">
        <textarea class="form-control rounded-0" style="width: 100%" maxlength="1000"></textarea><br>
        <div class="valoracion">
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<input id='radio<?php echo ($idPelicula +$i) ?>' type='radio' name='<?php echo $idPelicula ?>' value='<?php echo $i ?>'>";
                echo "<label for='radio<?php echo ($idPelicula +$i) ?>'>★</label>";
            }
            ?></div><br>
        <button class="btn btn-primary" type="submit" action="" name="enviar" value="<?php echo $idPelicula ?>">Enviar</button>
    </form>
<?php
}
?>