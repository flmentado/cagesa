<?php
    if (!function_exists ('decode') || @decode (KEY_PASS) != @CLAVE) {
        die("No se ha podido ejecutar.");
    }
    /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado
     * Date: 08/12/2014
     * Time: 8:40
     */
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
    function convertirUTF($string){
        return  utf8_decode($string);
    }


    /**
     * Filtramos los imputs del html eliminando slash, espacios, etc....
     *
     * @param $cadena
     *
     * @return string
     */
    function limpiar_input ($cadena) {
        $cadena = trim ($cadena);
        $cadena = stripslashes ($cadena);
        $cadena = htmlspecialchars ($cadena);
        return $cadena;
    }
    function verificarFormulario(&$formulario){
        $expresionRegularTelefono='/^[9|6|7][0-9]{8}$/';
        //field are ok
        $msgError='';
        //at least one checkbutton checked
        $flagOption=false;
        if (isset($_POST['tipoRemitente']))
            $formulario["contacto"]["tipoRemitente"]["value"] = $_POST['tipoRemitente'];
        else
            $msgError.="Marca el tipo Remitente."."<br/>";
        if (isset($_POST['remitente']) && strlen($_POST['remitente'])>1)
            $formulario["contacto"]["remitente"]["value"]=limpiar_input (ucwords ($_POST['remitente']));
        else
            $msgError.="Nombre de usuario erróneo."."<br/>";
        if (isset($_POST['tlf']) && preg_match($expresionRegularTelefono, $_POST['tlf']))
            $formulario["contacto"]["tlf"]["value"]=limpiar_input($_POST['tlf']);
        else
            $msgError.="Teléfono de contacto erróneo."."<br/>";
        if (isset($_POST['fax']) &&  preg_match($expresionRegularTelefono, $_POST['fax']))
            $formulario["contacto"]["fax"]["value"]=limpiar_input($_POST['fax']);
        if (isset($_POST['direccion']) && strlen($_POST['direccion'])>1)
            $formulario["contacto"]["direccion"]["value"]=limpiar_input ($_POST['direccion']);
        else
            $msgError.="Dirección Errónea."."<br/>";
        if (isset($_POST['email']) && filter_input (INPUT_POST, 'email',FILTER_VALIDATE_EMAIL))
            $formulario["contacto"]["email"]["value"]=limpiar_input ($_POST['email']);
        else
            $msgError.="Email erróneo."."<br/>";
        if (isset($_POST['mantenimiento'])) {
            $formulario["contacto"]["mantenimiento"]["value"] = limpiar_input ($_POST['mantenimiento']);
            $flagOption = true;
        }
        if (isset($_POST['podaTala'])) {
            $formulario["contacto"]["podaTala"]["value"] = limpiar_input ($_POST['podaTala']);
            $flagOption = true;
        }
        if (isset($_POST['tratamientoFitosanitario'])) {
            $formulario["contacto"]["tratamientoFitosanitario"]["value"] = limpiar_input ($_POST['tratamientoFitosanitario']);
            $flagOption = true;
        }
        if (isset($_POST['instalarReparar'])) {
            $formulario["contacto"]["instalarReparar"]["value"] = limpiar_input ($_POST['instalarReparar']);
            $flagOption = true;
        }
        if (isset($_POST['recogerResiduos'])) {
            $formulario["contacto"]["recogerResiduos"]["value"] = limpiar_input ($_POST['recogerResiduos']);
            $flagOption = true;
        }
        if (!$flagOption){
            $msgError.="Marca almenos alguna opción."."<br/>";
        }
        return $msgError;
    }

    function enviarEmail ($datos) {
        $destinatario = "franciscomentadomanzanares@yahoo.es";/*, Josemartin.jose@gmail.com";*/
        $asunto = "Confirmación Presupuesto enviado";
        $cuerpo
            = '
<html>
<head>
<title>Prueba de correo</title>
</head>
<body>
<h1>Hola amigos!</h1>
<p>
<b>Bienvenidos a mi correo electrónico de prueba</b>. <i>Esto en cursiva HOSTINGER varios envios</i>
</p>
</body>
</html>
';

        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        //$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
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
?>