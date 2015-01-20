<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado
     * Date: 08/12/2014
     * Time: 8:40
     */

    /**
     * Filtramos los imputs del html eliminando slash, espacios, etc....
     *
     * @param $cadena
     *
     * @return string
     */
    function limpiarInput ($cadena) {
        $cadena = trim ($cadena);
        $cadena = htmlspecialchars ($cadena);
        return stripslashes ($cadena);
    }

    /**
     * Verificamos el valor del captcha por medio del cifrado md5.
     *
     * @param $TextCaptcha String que contiene el cifrado md5 generado por la imagen.
     *
     * @return bool
     */
    function verificarCaptcha ($TextCaptcha) {
        $result = false;
        session_start ();
        if (isset ($_SESSION["clave"])) {
            $result = md5 (strtoupper ($TextCaptcha)) != $_SESSION["clave"] ? false : true;
        }
        $_SESSION = array ();
        session_destroy ();
        return $result;
    }

    function obtenerMensajeErrorFormulario ($formulario) {
        $msgError = '';
        $flagChecked = false;
        //CONTACTO (añadir a lista de errores)
        foreach ($formulario["contacto"] as $indiceCampo => $campo) {
            if ($formulario["contacto"][$indiceCampo]["err"] === true) {
                $msgError .= "<li>" . $formulario["contacto"][$indiceCampo]["errMsg"] . "</li>";
            }
        }
        //SERVICIOS (añadir a lista de errores)
        foreach ($formulario["servicios"] as $indiceCampo => $campo) {
            if ($formulario["servicios"][$indiceCampo]["err"] === false) {
                $flagChecked = true;
                break;
            }
        }
        //SERVICIOS Obtener Errores
        if (!$flagChecked) {
            $msgError .= '<li>' . $formulario["servicios"]["mantenimiento"]["errMsg"] . '</li>';
        }
        //ENCUESTA
        foreach ($formulario["encuesta"] as $indiceCampo => $campo) {
            if ($formulario["encuesta"][$indiceCampo]["err"] === true) {
                $msgError .= "<li>" . $formulario["encuesta"][$indiceCampo]["errMsg"] . "</li>";
            }
        }
        //CAPTCHA
        foreach ($formulario["captcha"] as $indiceCampo => $campo) {
            if ($formulario["captcha"][$indiceCampo]["err"] === true) {
                $msgError .= "<li>" . $formulario["captcha"][$indiceCampo]["errMsg"] . "</li>";
            }
        }
        return $msgError;
    }

    function cuerpoEmailDatos ($formulario) {
        $servicioContratado = '';
        $contador = 0;
        foreach ($formulario['servicios'] as $dato) {
            if (strlen ($dato['value']) > 0) {
                $estilo = ($contador % 2 == 0)
                    ? "color:#00A900;text-shadow: 1px 1px white;"
                    : "color:#008700;
                        text-shadow: 1px 1px white;";
                $servicioContratado .= '<li style="font-size: large;margin-left: 10px;color:red"><span style="' . $estilo . '">' . $dato['text'] . '</span></li>';
                $contador += 1;
            }
        }
        $cuerpo
            = '
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
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['tipoRemitente']['value'] . '
                  </span>
                  <div style="
                     color:#505050;
                     float:left;
                     text-decoration: underline;
                     text-shadow:1px 1px white;
                     width:100%;">
                     Nombre y apellidos:
                  </div>
                  <span style="
                     display:block;
                     color:#1E90FF;
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['remitente']['value'] . '
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
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['direccion']['value'] . '
                  </span>
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
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['tlf']['value'] . '
                  </span>
                  <div style="
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
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['email']['value'] . '
                  </span>
                      <div style="
                     color:#505050;
                     float:left;
                     text-decoration: underline;
                     text-shadow:1px 1px white;
                     width:100%;">
                     Comentario:
                  </div>
                  <span style="
                     display:block;
                     color:#1E90FF;
                     line-height: 1.2;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['contacto']['comentario']['value'] . '
                  </span>
                  <div style="margin-top: 10px;">
                     A continuación se enumeran los servicios solicitados:
                  </div>
                  <ol style="margin-top: 10px">' . $servicioContratado . '</ol>';
        return $cuerpo;
    }

    function cuerpoEmailUsuario ($formulario) {
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
                    </div>' . cuerpoEmailDatos ($formulario) . '
                    <div>
                    En breve nos pondremos en contacto con usted a fin de obtener información más precisa sobre
                    los servicios solicitados.
                    </div>
                </div>';
        return $cuerpo;
    }

    /**
     * Enviar Email en formato html
     *
     * @param $formulario array con los valores obtenidos del formulario.
     *
     * @return bool
     */
    function enviarEmailUsuario ($formulario) {
        $destinatario = $formulario["contacto"]["email"]["value"]; //. ", Josemartin.jose@gmail.com";
        $asunto = "Confirmación solicitud presupuesto";
        $cuerpo = cuerpoEmailUsuario ($formulario) . '
                    Para cualquier duda o aclaración no dude en ponerse en contacto con nosotros, bien vía email
                    <span style="color:#1E90FF">cagesa@prueba.com</span> o bien a los télefonos que tenenemos a su disposición
                     <span style="color:#000088">928123456</span> ó <span style="color:#000088">985671232</span>
                    </div>
                </div>
            ';
        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        //dirección del remitente
        $headers .= "From: Cagesa <cagesa@prueba.com>\r\n";
        //dirección de respuesta, si queremos que sea distinta que la del remitente
        //$headers .= "Reply-To: francisco@prueba.com\r\n";
        //ruta del mensaje desde origen a destino
        //$headers .= "Return-path: ruta@prueba.com\r\n";
        //direcciones que recibián copia
        //$headers .= "Cc: franciscomentadomanzanares@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: \r\n";
        return @mail ($destinatario, $asunto, $cuerpo, $headers);
    }

    function enviarEmailEmpresa ($formulario, $enviadoCliente) {
        $destinatario = "franciscomentadomanzanares@gmail.com";
        $asunto = "Solicitud presupuesto";

        $enviadoCliente = $enviadoCliente ? "Si" : "No";
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
                    </div>' . cuerpoEmailDatos ($formulario) . '
                    <div style="
                     color:#505050;
                     float:left;
                     text-decoration: underline;
                     text-shadow:1px 1px white;
                     width:100%;">
                     Encuesta:
                  </div>
                  <span style="
                     display:block;
                     color:#1E90FF;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $formulario['encuesta']['encuesta']['value'] . '
                  </span>
                   <div style="
                     color:#505050;
                     float:left;
                     text-decoration: underline;
                     text-shadow:1px 1px white;
                     width:100%;">
                     Confirmación al usuario:
                  </div>
                  <span style="
                     display:block;
                     color:#1E90FF;
                     font-style: italic;
                     text-shadow:1px 1px white;">
                     ' . $enviadoCliente . '
                  </span>
                </div>';

        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        //dirección del remitente
        $headers .= "From: Cagesa <cagesa@prueba.com>\r\n";
        //dirección de respuesta, si queremos que sea distinta que la del remitente
        //$headers .= "Reply-To: francisco@prueba.com\r\n";
        //ruta del mensaje desde origen a destino
        //$headers .= "Return-path: ruta@prueba.com\r\n";
        //direcciones que recibián copia
        // $headers .= "Cc: franciscomentadomanzanares@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: \r\n";
        return @mail ($destinatario, $asunto, $cuerpo, $headers);
    }

    function  mostrarMsgValidacion ($msgError, $enviadoCliente, $enviadoEmpresa,$emailUsuario='') {
        if (strlen ($msgError) != 0) {
            $mensajePantallaValidacion
                = '<div class="error">
                Relación de errores encontrados
                <ol>' . $msgError . '</ol>
            </div>';

        } else {
            $msg = $enviadoEmpresa ? '<li>La empresa ha recibido su solicitud.</li>'
                : '<li>La solicitud no ha llegado a su destino.</li>';
            $msg .= $enviadoCliente
                ? "<li>En breve recibirás un email de confirmación a la siguiente
            dirección de correos: $emailUsuario.</li>"
                : ($enviadoEmpresa ? '<li>En breve la empresa se pondrá en contacto con ud.</li>'
                    : '<li>Fallo en el envío, Compruebe la dirección de correo y/o conexión a internet.</li>');
            $mensajePantallaValidacion = '<div class="correcto"><ul>' . $msg . '</ul></div>';
        }
        return $mensajePantallaValidacion;
    }

    /**
     * Limpia sólo los valores del formulario con indice igual a value.
     *
     * @param $formulario array que contiene los valores obtenidos por medio del formulario.
     */
    function limpiarFormulario (&$formulario) {
        foreach ($formulario as $index => $datos) {
            foreach ($datos as $indice => $valor) {
                $formulario[$index][$indice]['value'] = '';
            }
        }
    }/*
    $smtp_server = fsockopen("STACKOVERFLOW.COM.S9A1.PSMTP.com", 25, $errno, $errstr, 30);
    fwrite($smtp_server, "helo hi\r\n");
    fwrite($smtp_server, "mail from: <me@myhost.com>\r\n");
    fwrite($smtp_server, "rcpt to: <fake@stackoverflow.com>\r\n");*/
?>