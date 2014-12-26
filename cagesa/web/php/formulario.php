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
<form id="formularioContacto" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input id="particular" type="radio" name="tipoRemitente" value="particular"
        <?php
            if (isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                    'particular') == 0
            )
                echo "checked='cheched'"?>/>
    <label for="particular">Particular</label>
    <input id="empresa" type="radio" name="tipoRemitente" value="empresa"
        <?php
            if (isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                    'empresa') == 0
            )
                echo "checked='cheched'" ?>/>
    <label for="empresa">Empresa</label>
    <input id="remitente" class="obligatorio" type="text" name="remitente"
        placeholder="<?php if (isset($formulario['contacto']['remitente']['placeholder']))
            echo convertirUTF($formulario['contacto']['remitente']['placeholder']); ?>"
        value="<?php if (isset($formulario["contacto"]["remitente"]["value"]))
            echo $formulario["contacto"]["remitente"]["value"]?>"/>
    <input id="direccion" class="obligatorio" type="text" name='direccion'
        placeholder="<?php if (isset($formulario['contacto']['direccion']['placeholder']))
            echo convertirUTF($formulario['contacto']['direccion']['placeholder']) ?>"
        value="<?php if (isset($formulario["contacto"]["direccion"]["value"]))
            echo $formulario["contacto"]["direccion"]["value"]?>"/>
    <input id="tlf" class="obligatorio" type="text" name='tlf'
        placeholder="<?php if (isset($formulario['contacto']['tlf']['placeholder']))
            echo convertirUTF($formulario['contacto']['tlf']['placeholder']) ?>"
        value="<?php if (isset($formulario["contacto"]["tlf"]["value"]))
            echo $formulario["contacto"]["tlf"]["value"] ?>"/>
    <input id="fax" type="text" name='fax'
        placeholder="<?php if (isset($formulario['contacto']['fax']['placeholder']))
            echo convertirUTF($formulario['contacto']['fax']['placeholder']) ?>"
        value="<?php if (isset($formulario["contacto"]["fax"]["value"]))
            echo $formulario["contacto"]["fax"]["value"] ?>"/>
    <input id="email" type="text" class="obligatorio" name='email'
        placeholder="<?php if (isset($formulario['contacto']['email']['placeholder']))
            echo convertirUTF($formulario['contacto']['email']['placeholder']) ?>"
        <?php
            if (isset($formulario["contacto"]["email"]["value"]) && strlen ($formulario["contacto"]["email"]["value"]) == 0)
                echo "class='error'"?>
        value="<?php if (isset($formulario["contacto"]["email"]["value"]))
            echo $formulario["contacto"]["email"]["value"] ?>"/>
    <span>Estoy interesado en :</span>
    <label for="mantenimiento"><input id='mantenimiento'
            type="checkbox"
            <?php if (isset($formulario["contacto"]["mantenimiento"]["value"]) && strlen ($formulario["contacto"]["mantenimiento"]["value"]) > 0)
                echo "checked='checked'"?>
            name="mantenimiento"/><?php echo isset
        ($formulario["contacto"]["mantenimiento"]["text"])?$formulario["contacto"]["mantenimiento"]["text"]:""?>
    </label>
    <label for="poda"><input id='poda' type="checkbox"
            <?php if (isset($formulario["contacto"]["podaTala"]["value"]) && strlen
            ($formulario["contacto"]["podaTala"]["value"]) > 0)
                echo "checked='checked'" ?>name="podaTala"/><?php echo isset
        ($formulario["contacto"]["podaTala"]["text"])?$formulario["contacto"]["podaTala"]["text"]:""?>
    </label>
    <label for="tratamiento"><input id='tratamiento'
            type="checkbox"
            <?php
                if (isset($formulario["contacto"]["tratamientoFitosanitario"]["value"]) && strlen ($formulario["contacto"]["tratamientoFitosanitario"]["value"]) > 0)
                    echo "checked='checked'" ?>
            name="tratamientoFitosanitario"/><?php echo isset
        ($formulario["contacto"]["tratamientoFitosanitario"]["text"])?$formulario["contacto"]["tratamientoFitosanitario"]["text"]:""?>
    </label>
    <label for="instalar"><input id='instalar'
            type="checkbox" <?php if (isset($formulario["contacto"]["instalarReparar"]["value"]) && strlen ($formulario["contacto"]["instalarReparar"]["value"]) > 0)
            echo "checked='checked'" ?>
            name="instalarReparar"/><?php echo isset
        ($formulario["contacto"]["instalarReparar"]["text"])?$formulario["contacto"]["instalarReparar"]["text"]:""?>
    </label>
    <label for="recogerResiduos">
        <input id='recogerResiduos' type="checkbox"
            <?php
                if (isset($formulario["contacto"]["recogerResiduos"]["value"]) && strlen ($formulario["contacto"]["recogerResiduos"]["value"]) > 0)
                    echo "checked='checked'" ?>
            name="recogerResiduos"/><?php echo isset
        ($formulario["contacto"]["recogerResiduos"]["text"])?$formulario["contacto"]["recogerResiduos"]["text"]:""?>
    </label>
    <input type="submit" name="enviar" value="Enviar"/>
</form>