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
    <div class="formularioHeader">SOLICITUD</div>
    <div class="radioTipocontacto">
        <input id="particular" type="radio" name="tipoRemitente" value="particular"
            <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                'Particular') == 0 ? "checked='cheched'" : "";?>/>
        <label for="particular">Particular</label>
        <input id="empresa" type="radio" name="tipoRemitente" value="empresa"
            <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                'Empresa') == 0 ? "checked='cheched'" : "";?>/>
        <label for="empresa">Empresa</label>
    </div>
    <div class="formularioDatosContacto">
        <input id="remitente" class="textoDatoContacto obligatorio" type="text" name="remitente"
            placeholder="<?php echo isset($formulario['contacto']['remitente']['placeholder'])
                ? $formulario['contacto']['remitente']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["remitente"]["value"])
                ? $formulario["contacto"]["remitente"]["value"] : "";?>"/>
        <input id="direccion" class="textoDatoContacto obligatorio" type="text" name='direccion'
            placeholder="<?php echo isset($formulario['contacto']['direccion']['placeholder'])
                ? $formulario['contacto']['direccion']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["direccion"]["value"])
                ? ucfirst ($formulario["contacto"]["direccion"]["value"]) : "";?>"/>
        <input id="tlf" class="textoDatoContacto obligatorio" type="text" name='tlf'
            placeholder="<?php echo isset($formulario['contacto']['tlf']['placeholder'])
                ? $formulario['contacto']['tlf']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["tlf"]["value"]) ? $formulario["contacto"]["tlf"]["value"]
                : "";
            ?>"/>
        <input id="fax" type="text" name='fax' class="textoDatoContacto"
            placeholder="<?php echo isset($formulario['contacto']['fax']['placeholder'])
                ? $formulario['contacto']['fax']['placeholder'] : ""; ?>"
            value="<?php echo isset($formulario["contacto"]["fax"]["value"]) ? $formulario["contacto"]["fax"]["value"]
                : "";
            ?>"/>
        <input id="email" type="text" class="textoDatoContacto obligatorio" name='email'
            placeholder="<?php echo isset($formulario['contacto']['email']['placeholder'])
                ? $formulario['contacto']['email']['placeholder'] : ""; ?>"
            <?php echo isset($formulario["contacto"]["email"]["value"]) && strlen ($formulario["contacto"]["email"]["value"]) == 0
                ? "class='error'" : ""?>
            value="<?php echo isset($formulario["contacto"]["email"]["value"])
                ? $formulario["contacto"]["email"]["value"] : "";
            ?>"/>
        <label for="comentario">Comentario (<?php echo isset
            ($formulario['contacto']['comentario']['maxNumberChar']) && is_numeric ($formulario['contacto']['comentario']['maxNumberChar'])
                ? ($formulario['contacto']['comentario']['maxNumberChar']) : 90;?> carácteres máximo.)
            <textarea id="comentario" name="comentario" maxNumberChar="<?php echo isset
            ($formulario['contacto']['comentario']['maxNumberChar']) && is_numeric ($formulario['contacto']['comentario']['maxNumberChar'])
                ? ($formulario['contacto']['comentario']['maxNumberChar']) : 90;?>"
                placeholder="<?php echo isset($formulario['contacto']['comentario']['placeholder'])
                    ? $formulario['contacto']['comentario']['placeholder']
                    : ""; ?>"><?php echo isset($formulario["contacto"]["comentario"]["value"])
                    ? $formulario["contacto"]["comentario"]["value"] : "";?></textarea></label>
    </div>
    <div class="formularioServicios">
        <div class="formularioHeader">SERVICIOS</div>
        <span>Me interesa :</span>
        <label for="mantenimiento">
            <input id='mantenimiento'
                type="checkbox"
                <?php echo isset($formulario["servicios"]["mantenimiento"]["value"]) && strlen ($formulario["servicios"]["mantenimiento"]["value"]) > 0
                    ? "checked='checked'" : "";?>
                name="mantenimiento"/>
            <?php echo isset($formulario["servicios"]["mantenimiento"]["text"])
                ? $formulario["servicios"]["mantenimiento"]["text"] : "" ?>
        </label>
        <label for="poda">
            <input id='poda' type="checkbox"
                <?php echo isset($formulario["servicios"]["podaTala"]["value"]) && strlen ($formulario["servicios"]["podaTala"]["value"]) > 0
                    ? "checked='checked'" : ""; ?>
                name="podaTala"/>
            <?php echo isset($formulario["servicios"]["podaTala"]["text"])
                ? $formulario["servicios"]["podaTala"]["text"] : "";?>
        </label>
        <label for="tratamiento">
            <input id='tratamiento' type="checkbox"
                <?php  echo isset($formulario["servicios"]["tratamientoFitosanitario"]["value"]) && strlen ($formulario["servicios"]["tratamientoFitosanitario"]["value"]) > 0
                    ? "checked='checked'" : ""; ?>
                name="tratamientoFitosanitario"/>
            <?php echo isset ($formulario["servicios"]["tratamientoFitosanitario"]["text"])
                ? $formulario["servicios"]["tratamientoFitosanitario"]["text"] : ""; ?>
        </label>
        <label for="instalar">
            <input id='instalar' type="checkbox"
                <?php echo isset($formulario["servicios"]["instalarReparar"]["value"]) && strlen ($formulario["servicios"]["instalarReparar"]["value"]) > 0
                    ? "checked='checked'" : ""; ?>
                name="instalarReparar"/>
            <?php echo isset ($formulario["servicios"]["instalarReparar"]["text"])
                ? $formulario["servicios"]["instalarReparar"]["text"] : ""; ?>
        </label>
        <label for="recogerResiduos">
            <input id='recogerResiduos' type="checkbox"
                <?php echo isset($formulario["servicios"]["recogerResiduos"]["value"]) && strlen ($formulario["servicios"]["recogerResiduos"]["value"]) > 0
                    ? "checked='checked'" : ""; ?>
                name="recogerResiduos"/>
            <?php echo isset ($formulario["servicios"]["recogerResiduos"]["text"])
                ? $formulario["servicios"]["recogerResiduos"]["text"] : "";?>
        </label>
    </div>
    <div class="radioEncuesta">
        <div class="formularioHeader">ENCUESTA</div>
        <span>¿Cómo nos has conocido?</span>
        <input id="conocido" type="radio" name="tipoEncuestaConocer" value="conocidos"
            <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp
            ($formulario["encuesta"]["encuesta"]['value'],
                'Conocidos') == 0 ? "checked='cheched'" : "";?>/>
        <label for="conocido">Conocidos</label>
        <input id="medComunicacion" type="radio" name="tipoEncuestaConocer" value="medComunicacion"
            <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp
            ($formulario["encuesta"]["encuesta"]['value'],
                'MedComunicacion') == 0 ? "checked='cheched'" : "";?>/>
        <label for="medComunicacion">Medios de Comunicación</label>
    </div>
    <div id="captcha">
        <div class="formularioHeader">CÓDIGO VERIFICACIÓN</div>
        <div id="putImageCaptcha"><?php include_once "../captcha/php/captcha_vista.php"; ?></div>
        <span>Introduce los caracteres mostrados</span>
        <input type="text" name="captcha" maxlength="10"/>
    </div>
    <input type="submit" name="enviar" value="Enviar"/>
</form>