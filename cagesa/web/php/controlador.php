<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Mentado Manzanares
     * Date: 08/12/2014
     * Time: 8:32
     */
    //Constantes
    define("CLAVE", md5 (microtime () * mktime ()));
    define("KEY_PASS", base64_encode (CLAVE));
    define("PAHT_SLIDER_1", "../slider/");
    define("PATH_SLIDER_1_IMG", PAHT_SLIDER_1 . 'img/slider/');
    //Variables
    @require_once "modelo.php";
    // incluimos las funciones contacto
    $formulario = array ("contacto" => array ("tipoRemitente" => array ("value" => ""),
        "remitente" => array ("placeholder" => "Nombre", "value" => ""),
        "direccion" => array ("placeholder" => "Dirección", "value" => ""),
        "tlf" => array ("placeholder" => "Teléfono", "value" => ""),
        "fax" => array ("placeholder" => "Fax", "value" => ""),
        "email" => array ("placeholder" => "Correo Electrónico", "value" => ""),
        "comentario" => array ("placeholder" => "Tu comentario.....", "value" => "","maxNumberChar"=>"250")),
        "servicios" => array ("mantenimiento" => array ("text" => "Mantenimiento de Jardines.", "value" => ""),
            "podaTala" => array ("text" => "Poda y/o Tala de palmeras y árboles.", "value" => ""),
            "tratamientoFitosanitario" => array ("text" => "Tratamientos fitosanitarios.", "value" => ""),
            "instalarReparar" => array ("text" => "Instalación y/o Reparación de sistemas de riego.", "value" => ""),
            "recogerResiduos" => array ("text" => "Recogida de residuos vegetales.", "value" => "")),
        "encuesta" => array ("encuesta" => array ("value" => ""))
    );

    if (isset($_POST["enviar"]) && strcmp ($_POST["enviar"], "Enviar") == 0) {
        $msgError = verificarFormulario ($formulario);
        if (isset($_POST["captcha"]) && is_string ($_POST["captcha"])) {
            if (!verificarCaptcha (strtoupper ($_POST["captcha"]))) {
                $msgError .= "Captcha erróneo" . "<br>";
            }
        }
        if (strlen ($msgError) == 0) {
            if (enviarEmail ($formulario))
                echo "FORMULARIO OK, MAIL OK"; else
                echo "FORMULARIO OK, MAIL FAIL";
        limpiarFormulario($formulario);
        } else {
            echo $msgError;
            echo "FORMULARIO FAIL";
        }
    }
    @require_once "vista.php";
?>
