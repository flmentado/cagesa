<?php
     /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado
     * Date: 08/12/2014
     * Time: 8:40
     */
    if (!function_exists ('decode') || @decode (KEY_PASS) != @CLAVE) {
        die("No se ha podido ejecutar.");
    }

    //////////////////////////////////////////////////////////////////////////////////////////////
    // FUNCIONES ENCRIPTACION
    //////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Codifica la cadena de entrada al sistema base64.
     *
     * @param $cadena tipo String cadena a codificar.
     *
     * @return string cadena codificada.
     */
    function encode ($cadena) {
        return base64_encode ($cadena);
    }


    /**
     * Decodifica la cadena de entrada al sistema base64.
     *
     * @param $cadena tipo string cadena a decodificar.
     *
     * @return string Cadena decodificada.
     */
    function decode ($cadena) {
        return base64_decode ($cadena);
    }

    /**
     * Filtramos los imputs del html eliminando slash, espacios, etc....
     *
     * @param $cadena
     *
     * @return string
     */
    function limpiarInput ($cadena) {
        $cadena = trim ($cadena);
        $cadena= htmlspecialchars($cadena);
        return stripslashes ($cadena);
    }

    /**
     * Verificamos el valor del captcha por medio del cifrado md5.
     *
     * @param $TextCaptcha String que contiene el cifrado md5 generado por la imagen.
     *
     * @return bool
     */
    function verificarCaptcha($TextCaptcha){
        session_start();
        return  md5( $TextCaptcha) != $_SESSION["clave"]?false:true;
    }

    /**
     * Verificamos los campos del formulario.
     *
     * @param $formulario tipo array con los datos enviado en el  formulario.
     *
     * @return string que muestra conjunto de errores si los hubiera.
     */
    function verificarFormulario(&$formulario){
        $expresionRegularTelefono='/^[9|6|7][0-9]{8}$/';
        //field are ok
        $msgError='';
        //at least one checkbutton checked
        $flagOption=false;
        if (isset($_POST['tipoRemitente']))
            $formulario["contacto"]["tipoRemitente"]["value"] = ucfirst($_POST['tipoRemitente']);
        else
            $msgError.="Marca el tipo Remitente."."<br/>";
        if (isset($_POST['remitente']) && strlen($_POST['remitente'])>1)
            $formulario["contacto"]["remitente"]["value"]=limpiarInput (ucwords ($_POST['remitente']));
        else
            $msgError.="Nombre de usuario erróneo."."<br/>";
        if (isset($_POST['direccion']) && strlen($_POST['direccion'])>1)
            $formulario["contacto"]["direccion"]["value"]=limpiarInput($_POST['direccion']);
        else
            $msgError.="Dirección Errónea."."<br/>";
        if (isset($_POST['tlf']) && preg_match($expresionRegularTelefono, $_POST['tlf']))
            $formulario["contacto"]["tlf"]["value"]=limpiarInput($_POST['tlf']);
        else
            $msgError.="Teléfono de contacto erróneo."."<br/>";
        if (isset($_POST['fax']) &&  preg_match($expresionRegularTelefono, $_POST['fax']))
            $formulario["contacto"]["fax"]["value"]=limpiarInput($_POST['fax']);
        if (isset($_POST['email']) && filter_input (INPUT_POST, 'email',FILTER_VALIDATE_EMAIL))
            $formulario["contacto"]["email"]["value"]=limpiarInput ($_POST['email']);
        else
            $msgError.="Email erróneo."."<br/>";
        if (isset($_POST['comentario']))
            $formulario["contacto"]["comentario"]["value"]=limpiarInput($_POST['comentario']);
        if (isset($_POST['mantenimiento'])) {
            $formulario["servicios"]["mantenimiento"]["value"] = limpiarInput ($_POST['mantenimiento']);
            $flagOption = true;
        }
        if (isset($_POST['podaTala'])) {
            $formulario["servicios"]["podaTala"]["value"] = limpiarInput ($_POST['podaTala']);
            $flagOption = true;
        }
        if (isset($_POST['tratamientoFitosanitario'])) {
            $formulario["servicios"]["tratamientoFitosanitario"]["value"] = limpiarInput ($_POST['tratamientoFitosanitario']);
            $flagOption = true;
        }
        if (isset($_POST['instalarReparar'])) {
            $formulario["servicios"]["instalarReparar"]["value"] = limpiarInput ($_POST['instalarReparar']);
            $flagOption = true;
        }
        if (isset($_POST['recogerResiduos'])) {
            $formulario["servicios"]["recogerResiduos"]["value"] = limpiarInput ($_POST['recogerResiduos']);
            $flagOption = true;
        }
        if (!$flagOption){
            $msgError.="Marca almenos alguna opción."."<br/>";
        }
        if (isset($_POST['tipoEncuestaConocer']))
            $formulario["encuesta"]["encuesta"]["value"] = ucfirst($_POST['tipoEncuestaConocer']);
        else
            $msgError.="Selecciona una respuesta en la Encuesta."."<br/>";
        return $msgError;
    }

    /**
     * Enviar Email en formato html
     *
     * @param $formulario array con los valores obtenidos del formulario.
     *
     * @return bool
     */
    function enviarEmail ($formulario) {
        $salida = '';
        $contador=0;
        foreach ($formulario['servicios'] as $dato) {
            if (strlen ($dato['value']) > 0) {
                $estilo=($contador%2==0)?"color:#00A900;text-shadow: 1px 1px white;": "color:#008700;
                        text-shadow: 1px 1px white;";
                $salida .= '<li style="font-size: large;margin-left: 10px;color:red"><span style="'.$estilo.'">' .
                    $dato['text'] . '</span></li>';
                $contador+=1;
            }

        }
        $destinatario = "franciscomentadomanzanares@yahoo.es, Josemartin.jose@gmail.com";
        $asunto = "Confirmación solicitud presupuesto";
        $cuerpo
            = '
                <div style="
                    width:98%;
                    float:none;
                    margin: 10px auto;
                    background-color:rgba(240,240,240,.8);
                    padding: 8px;
                    font-size:large;
                    line-height:1.2;
                    font-family: serif, arial, times,helvetica;">
                    <div style="
                        font-size:x-large;
                        color:green;
                        text-shadow:1px 1px white;
                        border-bottom: 1px solid green;
                        margin-bottom: 5px;">
                        Solicitud Presupuesto
                    </div>
                    <div>
                        Cagesa le agradece la confianza prestada.
                    </div>
                    <div style="
                        color:#505050;
                        float:left;
                        text-decoration: underline;
                        text-shadow:1px 1px white;
                        width:100%;
                        margin-top: 5px;">
                        Referencia :
                    </div>
                    <span style="
                        display:block;
                        color:#1E90FF;
                        font-style: italic;
                        text-shadow:1px 1px white;">
                        '.$formulario['contacto']['tipoRemitente']['value'].'
                    </span>
                    <div style="
                        color:#505050;
                        float:left;
                        text-decoration: underline;
                        text-shadow:1px 1px white;
                        width:100%;">
                        Nombre y apellidos:
                    </div>
                    <span <span style="
                        display:block;
                        color:#1E90FF;
                        font-style: italic;
                        text-shadow:1px 1px white;">
                        '.$formulario['contacto']['remitente']['value'].'
                    </span>
                    <div style="
                        color:#505050;
                        float:left;
                        text-decoration: underline;
                        text-shadow:1px 1px white;
                        width:100%;">
                        Dirección:
                    </div>
                    <span style="
                        display:block;
                        color:#1E90FF;
                        font-style: italic;
                        text-shadow:1px 1px white;">
                        '.$formulario['contacto']['direccion']['value'].
                    '</span>
                    <div style="
                        color:#505050;
                        float:left;
                        text-decoration: underline;
                        text-shadow:1px 1px white;
                        width:100%;">
                        Teléfono contacto:
                    </div>
                    <span style="
                        display:block;
                        color:#1E90FF;
                        font-style: italic;
                        text-shadow:1px 1px white;">
                        '.$formulario['contacto']['tlf']['value'].'
                    </span>
                    <div class="
                        color:#505050;
                        float:left;
                        text-decoration: underline;
                        text-shadow:1px 1px white;
                        width:100%;">
                        Correo electrónico:
                    </div>
                    <span style="
                        display:block;
                        color:#1E90FF;
                        font-style: italic;
                        text-shadow:1px 1px white;">
                        '.$formulario['contacto']['email']['value'].'
                    </span>
                    <div style="margin-top: 10px;">
                    A continuación se enumeran los presupuestos solicitados:
                    </div>
                    <ol style="margin-top: 10px">'.$salida.'</ol>
                    <div>
                    En breve nos pondremos en contacto con ud. a fin de obtener información más precisa sobre
                    los servicios solicitados.
                    </div>
                    <div>
                    Para cualquier duda o aclaración no dude en ponerse en contacto con nosotros, bien vía email
                    <span style="color:#1E90FF">cagesa@prueba.com</span> o bien a los télefonos que tenenemos a su disposición
                     <span style="color:#1E90FF">928123456</span> ó <span style="color:#1E90FF">985671232</span>
                    </div>
                </div>
            ';

        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        //dirección del remitente
        $headers .= "From: Cagesa <cagesa@prueba.com>\r\n";
        //dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: francisco@prueba.com\r\n";
        //ruta del mensaje desde origen a destino
        //$headers .= "Return-path: ruta@prueba.com\r\n";
        //direcciones que recibián copia
        $headers .= "Cc: franciscomentadomanzanares@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: \r\n";
        return @mail ($destinatario, $asunto, $cuerpo, $headers) ? true : false;
    }

    /**
     * Limpia sólo los valores del formulario con indice igual a value.
     *
     * @param $formulario array que contiene los valores obtenidos por medio del formulario.
     */
    function limpiarFormulario(&$formulario){
        foreach ($formulario as $index=>$datos)
            foreach($datos as $indice=>$valor){
                $formulario[$index][$indice]['value']='';
            }
    }

?>