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
   //funciones
    @require_once "modelo.php";
    //Variables
    $formulario = array
    (
        "contacto" => array
        (
            "tipoRemitente" => array (
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Remitente."
            ),
            "remitente" => array (
                                    "placeholder" => "Nombre",
                                    "value" => "",
                                    "err"=>true,
                                    "errMsg"=>"Nombre."
            ),
            "direccion" => array (
                                    "placeholder" => "Dirección",
                                    "value" => "",
                                    "err"=>true,
                                    "errMsg"=>"Dirección."
            ),
            "tlf" => array (
                                "placeholder" => "Teléfono",
                                "value" => "",
                                "err"=>true,
                                "errMsg"=>"Número de teléfono."
            ),
            "fax" => array (
                                "placeholder" => "Fax",
                                "value" => "",
                                "err"=>false,
                                "errMsg"=>"fax"
            ),
            "email" => array (
                                "placeholder" => "Correo Electrónico",
                                "value" => "",
                                "err"=>true,
                                "errMsg"=>"Correo electrónico."
            ),
            "comentario" => array (
                                "placeholder" => "Tu comentario.....",
                                "value" => "",
                                "maxNumberChar"=>"250",
                                "err"=>false,
                                "errMsg"=>""
            )
        ),
        "servicios" => array
        (
            "mantenimiento" => array (
                                        "text" => "Mantenimiento de Jardines.",
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Servicios."
            ),
            "podaTala" => array (
                                        "text" => "Poda y/o Tala de palmeras y árboles.",
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Servicios."
            ),
            "tratamientoFitosanitario" => array (
                                        "text" => "Tratamientos fitosanitarios.",
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Servicios."
            ),
            "instalarReparar" => array (
                                        "text" => "Instalación y/o Reparación de sistemas de riego.",
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Servicios."
            ),
            "recogerResiduos" => array (
                                        "text" => "Recogida de residuos vegetales.",
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Servicios."
            )
        ),
        "encuesta" => array
        (
            "encuesta" => array (
                                    "value" => "",
                                    "err"=>true,
                                    "errMsg"=>"Encuesta."
            )
        )
    );
    if (isset($_POST["enviar"]) && strcmp ($_POST["enviar"], "Enviar") == 0) {
        $msgError = verificarFormulario ($formulario);
        if (isset($_POST["captcha"]) && is_string ($_POST["captcha"])) {
            if (!verificarCaptcha (strtoupper ($_POST["captcha"]))) {
                $msgError .= "<li>Captcha erróneo</li>";
            }
        }
        if (strlen ($msgError) == 0) {
            if (enviarEmail ($formulario))
                echo "FORMULARIO OK, MAIL OK"; else
                echo "FORMULARIO OK, MAIL FAIL";
        limpiarFormulario($formulario);
        } else {
            echo "<ol>$msgError</ol>";
            echo "FORMULARIO FAIL";
        }
    }
    @require_once "vista.php";
?>
