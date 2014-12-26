<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado Manzanares
     * Date: 25/12/2014
     * Time: 22:06
     */
    if (!function_exists ('decode') || @decode (KEY_PASS) != @CLAVE) {
        die("No se ha podido ejecutar.");
    }
?>
<form id="formularioContacto"  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input id="particular" type="radio" name="tipoRemitente" value="particular"
        <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp
            ($formulario["contacto"]["tipoRemitente"]['value'],'Particular') == 0?"checked='cheched'":"";?>/>
    <label for="particular">Particular</label>
    <input id="empresa" type="radio" name="tipoRemitente" value="empresa"
        <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp
            ($formulario["contacto"]["tipoRemitente"]['value'],'Empresa') == 0?"checked='cheched'":"";?>/>
    <label for="empresa">Empresa</label>
    <input id="remitente" class="obligatorio" type="text" name="remitente"
        placeholder="<?php echo isset($formulario['contacto']['remitente']['placeholder'])?
            $formulario['contacto']['remitente']['placeholder']:"";?>"
        value="<?php echo isset($formulario["contacto"]["remitente"]["value"])
            ?$formulario["contacto"]["remitente"]["value"]:"";?>"/>
    <input id="direccion" class="obligatorio" type="text" name='direccion'
        placeholder="<?php echo isset($formulario['contacto']['direccion']['placeholder'])?
            $formulario['contacto']['direccion']['placeholder']:"";?>"
        value="<?php echo isset($formulario["contacto"]["direccion"]["value"])
            ?ucfirst($formulario["contacto"]["direccion"]["value"]):"";?>"/>
    <input id="tlf" class="obligatorio" type="text" name='tlf'
        placeholder="<?php echo isset($formulario['contacto']['tlf']['placeholder'])?
            $formulario['contacto']['tlf']['placeholder']:"";?>"
        value="<?php echo isset($formulario["contacto"]["tlf"]["value"])?$formulario["contacto"]["tlf"]["value"]:"";
        ?>"/>
    <input id="fax" type="text" name='fax'
        placeholder="<?php echo isset($formulario['contacto']['fax']['placeholder'])?
            $formulario['contacto']['fax']['placeholder']:""; ?>"
        value="<?php echo isset($formulario["contacto"]["fax"]["value"])?$formulario["contacto"]["fax"]["value"]:"";
        ?>"/>
    <input id="email" type="text" class="obligatorio" name='email'
        placeholder="<?php echo isset($formulario['contacto']['email']['placeholder'])?
            $formulario['contacto']['email']['placeholder']:""; ?>"
        <?php echo isset($formulario["contacto"]["email"]["value"]) && strlen
            ($formulario["contacto"]["email"]["value"]) == 0?"class='error'":""?>
        value="<?php echo isset($formulario["contacto"]["email"]["value"])?$formulario["contacto"]["email"]["value"]:"";
        ?>"/>
    <span>Estoy interesado en :</span>
    <label for="mantenimiento">
        <input id='mantenimiento'
            type="checkbox"
            <?php echo isset($formulario["servicios"]["mantenimiento"]["value"]) && strlen
                ($formulario["servicios"]["mantenimiento"]["value"]) > 0?"checked='checked'":"";?>
            name="mantenimiento"/>
            <?php echo isset($formulario["servicios"]["mantenimiento"]["text"]) ?
                $formulario["servicios"]["mantenimiento"]["text"] : "" ?>
    </label>
    <label for="poda">
        <input id='poda' type="checkbox"
            <?php echo isset($formulario["servicios"]["podaTala"]["value"]) && strlen
                ($formulario["servicios"]["podaTala"]["value"]) > 0?"checked='checked'":""; ?>
            name="podaTala"/>
            <?php echo isset($formulario["servicios"]["podaTala"]["text"]) ?
                $formulario["servicios"]["podaTala"]["text"] : "";?>
    </label>
    <label for="tratamiento">
        <input id='tratamiento' type="checkbox"
            <?php  echo isset($formulario["servicios"]["tratamientoFitosanitario"]["value"]) && strlen
                ($formulario["servicios"]["tratamientoFitosanitario"]["value"]) > 0?"checked='checked'":""; ?>
            name="tratamientoFitosanitario"/>
            <?php echo isset ($formulario["servicios"]["tratamientoFitosanitario"]["text"]) ?
                $formulario["servicios"]["tratamientoFitosanitario"]["text"] : ""; ?>
    </label>
    <label for="instalar">
        <input id='instalar' type="checkbox"
            <?php echo isset($formulario["servicios"]["instalarReparar"]["value"]) && strlen
                ($formulario["servicios"]["instalarReparar"]["value"]) > 0?"checked='checked'":""; ?>
            name="instalarReparar"/>
        <?php echo isset ($formulario["servicios"]["instalarReparar"]["text"]) ?
            $formulario["servicios"]["instalarReparar"]["text"] : ""; ?>
    </label>
    <label for="recogerResiduos">
        <input id='recogerResiduos' type="checkbox"
            <?php echo isset($formulario["servicios"]["recogerResiduos"]["value"]) && strlen
                ($formulario["servicios"]["recogerResiduos"]["value"]) > 0?"checked='checked'":""; ?>
            name="recogerResiduos"/>
        <?php echo isset ($formulario["servicios"]["recogerResiduos"]["text"]) ?
            $formulario["servicios"]["recogerResiduos"]["text"] : "";?>
    </label>
    <div id='captcha'></div>
    <input type="submit" name="enviar" value="Enviar"/>
</form>