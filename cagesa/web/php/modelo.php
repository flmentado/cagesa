<?php
if (@decode(KEY_PASS) != @CLAVE) {
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
 * @param $cadena tipo String cadena a codificar.
 * @return string cadena codificada.
 */
function encode($cadena)
{
    return base64_encode($cadena);
}


/**
 * Decodifica la cadena de entrada al sistema base64.
 * @param $cadena tipo string cadena a decodificar.
 * @return string Cadena decodificada.
 */
function decode($cadena)
{
    return base64_decode($cadena);
}

/**
 * Filtramos los imputs del html eliminando slash, espacios, etc....
 * @param $cadena
 * @return string
 */
function limpiar_input($cadena)
{
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);
    $cadena = htmlspecialchars($cadena);
    return $cadena;
}


function enviarEmail($destinatario){
    $destinatario = "franciscomentadomanzanares@yahoo.es";
    $asunto = "Este mensaje es de prueba";
    $cuerpo = '
<html>
<head>
   <title>Prueba de correo</title>
</head>
<body>
<h1>Hola amigos!</h1>
<p>
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje.
</p>
</body>
</html>
';

//para el envío en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
    $headers .= "From: Cagesa <cagesa@prueba.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: francisco@prueba.com\r\n";

//ruta del mensaje desde origen a destino
    //$headers .= "Return-path: ruta@prueba.com\r\n";

//direcciones que recibián copia
    $headers .= "Cc: maria@prueba.com\r\n";

//direcciones que recibirán copia oculta
    //$headers .= "Bcc: \r\n";

  return @mail($destinatario,$asunto,$cuerpo,$headers)?true:false;
}
?>