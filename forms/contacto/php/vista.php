<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado Manzanares
     * Date: 25/12/2014
     * Time: 22:06
     */
?>
<form id="formularioContacto">
    <?php
        if (isset($msgError)) {
            echo $msgError;
        }
     ?>
    <div class="formularioHeader">CLIENTE</div>
    <div class="radioTipoContacto">
        <div class="fila">
            <input id="particular" type="radio" name="tipoRemitente" value="particular"
                <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                    'Particular') == 0 ? "checked='cheched'" : "";?>/>
            <label for="particular">Particular</label>
        </div>
        <div class="fila">
            <input id="empresa" type="radio" name="tipoRemitente" value="empresa"
                <?php echo isset($formulario["contacto"]["tipoRemitente"]['value']) && strcmp ($formulario["contacto"]["tipoRemitente"]['value'],
                    'Empresa') == 0 ? "checked='cheched'" : "";?>/>
            <label for="empresa">Empresa</label>
        </div>
    </div>
    <div class="formularioDatosContacto">
        <input id="remitente" class="ponerAura obligatorio" type="text" name="remitente"
            placeholder="<?php echo isset($formulario['contacto']['remitente']['placeholder'])
                ? $formulario['contacto']['remitente']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["remitente"]["value"])
                ? $formulario["contacto"]["remitente"]["value"] : "";?>"/>
        <input id="direccion" class="ponerAura obligatorio" type="text" name='direccion'
            placeholder="<?php echo isset($formulario['contacto']['direccion']['placeholder'])
                ? $formulario['contacto']['direccion']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["direccion"]["value"])
                ? ucfirst ($formulario["contacto"]["direccion"]["value"]) : "";?>"/>
        <input id="tlf" class="ponerAura obligatorio" type="text" name='tlf'
            placeholder="<?php echo isset($formulario['contacto']['tlf']['placeholder'])
                ? $formulario['contacto']['tlf']['placeholder'] : "";?>"
            value="<?php echo isset($formulario["contacto"]["tlf"]["value"]) ? $formulario["contacto"]["tlf"]["value"]
                : "";
            ?>"/>
        <input id="fax" type="text" name='fax' class="ponerAura"
            placeholder="<?php echo isset($formulario['contacto']['fax']['placeholder'])
                ? $formulario['contacto']['fax']['placeholder'] : ""; ?>"
            value="<?php echo isset($formulario["contacto"]["fax"]["value"]) ? $formulario["contacto"]["fax"]["value"]
                : "";
            ?>"/>
        <input id="email" type="text" class="ponerAura obligatorio" name='email'
            placeholder="<?php echo isset($formulario['contacto']['email']['placeholder'])
                ? $formulario['contacto']['email']['placeholder'] : ""; ?>"
            <?php echo isset($formulario["contacto"]["email"]["value"]) && strlen ($formulario["contacto"]["email"]["value"]) == 0
                ? "class='error'" : ""?>
            value="<?php echo isset($formulario["contacto"]["email"]["value"])
                ? $formulario["contacto"]["email"]["value"] : "";
            ?>"/>
    </div>
    <span>Comentario (<?php echo isset
        ($formulario['contacto']['comentario']['maxNumberChar']) && is_numeric ($formulario['contacto']['comentario']['maxNumberChar'])
            ? ($formulario['contacto']['comentario']['maxNumberChar']) : 90;?> caracteres máximo.)
            <textarea id="comentario" name="comentario" maxNumberChar="<?php echo isset
            ($formulario['contacto']['comentario']['maxNumberChar']) && is_numeric ($formulario['contacto']['comentario']['maxNumberChar'])
                ? ($formulario['contacto']['comentario']['maxNumberChar']) : 90;?>"
                placeholder="<?php echo isset($formulario['contacto']['comentario']['placeholder'])
                    ? $formulario['contacto']['comentario']['placeholder']
                    : ""; ?>"><?php echo isset($formulario["contacto"]["comentario"]["value"])
                    ? $formulario["contacto"]["comentario"]["value"] : "";?></textarea></span>

    <div class="formularioHeader">SERVICIOS</div>
    <div class="formularioServicios">
        <span>Me interesa :</span>
        <div class="block">
            <div class="fila">
                <input id='mantenimiento'
                    type="checkbox"
                    <?php echo isset($formulario["servicios"]["mantenimiento"]["value"]) && strlen ($formulario["servicios"]["mantenimiento"]["value"]) > 0
                        ? "checked='checked'" : "";?>
                    name="mantenimiento"/>
                <label for="mantenimiento">
                    <?php echo isset($formulario["servicios"]["mantenimiento"]["text"])
                        ? $formulario["servicios"]["mantenimiento"]["text"] : "" ?>
                </label>
            </div>
            <div class="fila">
                <input id='poda' type="checkbox"
                    <?php echo isset($formulario["servicios"]["podaTala"]["value"]) && strlen ($formulario["servicios"]["podaTala"]["value"]) > 0
                        ? "checked='checked'" : ""; ?>
                    name="podaTala"/>
                <label for="poda">
                    <?php echo isset($formulario["servicios"]["podaTala"]["text"])
                        ? $formulario["servicios"]["podaTala"]["text"] : "";?>
                </label>
            </div>
            <div class="fila">
                <input id='tratamiento' type="checkbox"
                    <?php  echo isset($formulario["servicios"]["tratamientoFitosanitario"]["value"]) && strlen ($formulario["servicios"]["tratamientoFitosanitario"]["value"]) > 0
                        ? "checked='checked'" : ""; ?>
                    name="tratamientoFitosanitario"/>
                <label for="tratamiento">
                    <?php echo isset ($formulario["servicios"]["tratamientoFitosanitario"]["text"])
                        ? $formulario["servicios"]["tratamientoFitosanitario"]["text"] : ""; ?>
                </label>
            </div>
            <div class="fila">
                <input id='instalar' type="checkbox" style="float: left"
                    <?php echo isset($formulario["servicios"]["instalarReparar"]["value"]) && strlen ($formulario["servicios"]["instalarReparar"]["value"]) > 0
                        ? "checked='checked'" : ""; ?>
                    name="instalarReparar"/>
                <label for="instalar"><?php echo isset ($formulario["servicios"]["instalarReparar"]["text"])
                        ? $formulario["servicios"]["instalarReparar"]["text"] : ""; ?>
                </label>
            </div>
            <div class="fila">
                <input id='recogerResiduos' type="checkbox"
                    <?php echo isset($formulario["servicios"]["recogerResiduos"]["value"]) && strlen ($formulario["servicios"]["recogerResiduos"]["value"]) > 0
                        ? "checked='checked'" : ""; ?>
                    name="recogerResiduos"/>
                <label for="recogerResiduos">
                    <?php echo isset ($formulario["servicios"]["recogerResiduos"]["text"])
                        ? $formulario["servicios"]["recogerResiduos"]["text"] : "";?>
                </label>
            </div>
        </div>
    </div>
    <div class="formularioHeader">ENCUESTA</div>

    <div class="radioEncuesta">
        <span>¿Cómo nos has conocido?</span>
        <div class="block">
            <div class="fila">
                <input id="conocido" type="radio" name="tipoEncuestaConocer" value="conocidos"
                    <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp ($formulario["encuesta"]["encuesta"]['value'],
                        'Conocidos') == 0 ? "checked='cheched'" : "";?>/>
                <label for="conocido">Amigo/Conocido</label>
            </div>
            <div class="fila">
                <input id="medComunicacion" type="radio" name="tipoEncuestaConocer" value="medComunicacion"
                    <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp ($formulario["encuesta"]["encuesta"]['value'],
                        'MedComunicacion') == 0 ? "checked='cheched'" : "";?>/>
                <label for="medComunicacion">TV/Radio</label>
            </div>
            <div class="fila">
                <input id="redSocial" type="radio" name="tipoEncuestaConocer" value="redSocial"
                    <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp ($formulario["encuesta"]["encuesta"]['value'],
                        'RedSocial') == 0 ? "checked='cheched'" : "";?>/>
                <label for="redSocial">Redes Sociales</label>
            </div>
            <div class="fila">
                <input id="web" type="radio" name="tipoEncuestaConocer" value="web"
                    <?php echo isset($formulario["encuesta"]["encuesta"]['value']) && strcmp ($formulario["encuesta"]["encuesta"]['value'],
                        'Web') == 0 ? "checked='cheched'" : "";?>/>
                <label for="web">WEB</label>
            </div>
        </div>
    </div>
    <div class="formularioHeader">CÓDIGO VERIFICACIÓN</div>
    <div id="captcha">
        <div id="putImageCaptcha">
            <?php
                //echo realpath($_SERVER[DOCUMENT_ROOT]);
                include realpath ($_SERVER[DOCUMENT_ROOT]) . "/cagesa/captcha/php/captcha_vista.php";
            ?></div>
        <input id="pass" type="text" class="ponerAura obligatorio" name="captcha" maxlength="10"
            placeholder="<?php echo isset($formulario['captcha']['captcha']['placeholder'])
                ? $formulario['captcha']['captcha']['placeholder'] : "";?>"/>
    </div>
    <div class="submit">Enviar</div>
</form>