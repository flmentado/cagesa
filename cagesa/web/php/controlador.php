<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Mentado Manzanares
     * Date: 08/12/2014
     * Time: 8:32
     */
    //Constantes
    define("CLAVE", "kndJM");
    define("KEY_PASS", base64_encode (CLAVE));
    define("PAHT_SLIDER_1", "../slider/");
    define("PATH_SLIDER_1_IMG", PAHT_SLIDER_1 . 'img/slider/');
    //Variables
    @require_once "modelo.php";
    // incluimos las funciones contacto
    $formulario = array (
        "contacto" => array (
            "tipoRemitente" => array("value"=>""),
            "remitente" => array ("placeholder" => "Nombre", "value" => ""),
            "direccion" => array ("placeholder" => "Dirección", "value" => ""),
            "tlf" => array ("placeholder" => "Teléfono", "value" => ""),
            "fax" => array ("placeholder" => "Fax", "value" => ""),
            "email" => array ("placeholder" => "Correo Electrónico", "value" => "")),
        "servicios" => array(
            "mantenimiento" => array ("text" => "Mantenimiento de Jardines.", "value" => ""),
            "podaTala" => array ("text" => "Poda y/o Tala de palmeras y árboles.", "value" => ""),
            "tratamientoFitosanitario" => array ("text" => "Tratamientos fitosanitarios.", "value" => ""),
            "instalarReparar" => array ("text" => "Instalación y/o Reparación de sistemas de riego.", "value" => ""),
            "recogerResiduos" => array ("text" => "Recogida de residuos vegetales.", "value" => ""))
    );

    if (isset($_POST["enviar"]) && strcmp ($_POST["enviar"], "Enviar") == 0) {
        $msgError = verificarFormulario ($formulario);
        if (strlen ($msgError) == 0) {
            if (enviarEmail ($formulario))
                echo "FORMULARIO OK, MAIL OK"; else
                echo "FORMULARIO OK, MAIL FAIL";
        } else {
            echo $msgError;
            echo "FORMULARIO FAIL";
        }

    }
    @require_once "vista.php";
?>
