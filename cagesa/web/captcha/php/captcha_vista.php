<?php
/**
 * Created by PhpStorm.
 * User: Francisco Luis Mentado Manzanares
 * Date: 28/12/2014
 * Time: 9:57
 */
 //Obtenemos el gráfico.
?>

<div style="background-image: url('../captcha/php/captcha_function.php?rand=<?php echo rand(); ?>');">
    <input type="button" id="captchaRefresh" title="Actualizar"/>
</div>
<script>
       ponerCaptcha()
</script>
