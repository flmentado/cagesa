<?php
    /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado
     * Date: 08/12/2014
     * Time: 8:40
     */
    @require_once "modelo.php";
    //Variables
    $formulario = array
    (
        "contacto" => array
        (
            "tipoRemitente" => array (
                                        "value" => "",
                                        "err"=>true,
                                        "errMsg"=>"Tipo cliente."
            ),
            "remitente" => array (
                                    "placeholder" => "Nombre",
                                    "value" => "",
                                    "err"=>true,
                                    "errMsg"=>"Nombre cliente."
            ),
            "direccion" => array (
                                    "placeholder" => "Dirección",
                                    "value" => "",
                                    "err"=>true,
                                    "errMsg"=>"Dirección cliente."
            ),
            "tlf" => array (
                                "placeholder" => "Teléfono",
                                "value" => "",
                                "err"=>true,
                                "errMsg"=>"Teléfono cliente."
            ),
            "fax" => array (
                                "placeholder" => "Fax",
                                "value" => "",
                                "err"=>false,
                                "errMsg"=>"Fax cliente"
            ),
            "email" => array (
                                "placeholder" => "Correo Electrónico",
                                "value" => "",
                                "err"=>true,
                                "errMsg"=>"Correo electrónico cliente."
            ),
            "comentario" => array (
                                "placeholder" => "Escribir comentario.....",
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
                                        "text" => "Poda y/o Tala de palmeras y/o árboles.",
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
        ),
        "captcha" => array(
            "captcha" => array (
                "placeholder" => "Introduce caracteres",
                "err"=>true,
                "errMsg"=>"Captcha."
            )
        )
    );
    if (isset($_POST["enviar"]) && strcmp ($_POST["enviar"], "Enviar") == 0) {
        $expresionRegularTelefono = '/^[9|6|7][0-9]{8}$/';
        //USUARIO
        if (isset($_POST['tipoRemitente'])) {
            $formulario["contacto"]["tipoRemitente"]["value"] = ucfirst ($_POST['tipoRemitente']);
            $formulario["contacto"]["tipoRemitente"]["err"] = false;
        }
        if (isset($_POST['remitente']) && strlen ($_POST['remitente']) > 1) {
            $formulario["contacto"]["remitente"]["value"] = limpiarInput (ucwords ($_POST['remitente']));
            $formulario["contacto"]["remitente"]["err"] = false;
        }
        if (isset($_POST['direccion']) && strlen ($_POST['direccion']) > 1) {
            $formulario["contacto"]["direccion"]["value"] = limpiarInput ($_POST['direccion']);
            $formulario["contacto"]["direccion"]["err"] = false;
        }
        if (isset($_POST['tlf']) && preg_match ($expresionRegularTelefono, $_POST['tlf'])) {
            $formulario["contacto"]["tlf"]["value"] = limpiarInput ($_POST['tlf']);
            $formulario["contacto"]["tlf"]["err"] = false;
        }
        if (isset($_POST['fax']) && preg_match ($expresionRegularTelefono, $_POST['fax']))
            $formulario["contacto"]["fax"]["value"] = limpiarInput ($_POST['fax']);
        if (isset($_POST['email']) && filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $formulario["contacto"]["email"]["value"] = limpiarInput ($_POST['email']);
            $formulario["contacto"]["email"]["err"] = false;
        }
        if (isset($_POST['comentario']))
            $formulario["contacto"]["comentario"]["value"] = limpiarInput ($_POST['comentario']);

        //SERVICIOS
        if (isset($_POST['mantenimiento'])) {
            $formulario["servicios"]["mantenimiento"]["value"] = limpiarInput ($_POST['mantenimiento']);
            $formulario["servicios"]["mantenimiento"]["err"] = false;
        }
        if (isset($_POST['podaTala'])) {
            $formulario["servicios"]["podaTala"]["value"] = limpiarInput ($_POST['podaTala']);
            $formulario["servicios"]["podaTala"]["err"] = false;
        }
        if (isset($_POST['tratamientoFitosanitario'])) {
            $formulario["servicios"]["tratamientoFitosanitario"]["value"]
                = limpiarInput ($_POST['tratamientoFitosanitario']);
            $formulario["servicios"]["tratamientoFitosanitario"]["err"] = false;
            ($_POST['tratamientoFitosanitario']);
        }
        if (isset($_POST['instalarReparar'])) {
            $formulario["servicios"]["instalarReparar"]["value"] = limpiarInput ($_POST['instalarReparar']);
            $formulario["servicios"]["instalarReparar"]["err"] = false;
        }
        if (isset($_POST['recogerResiduos'])) {
            $formulario["servicios"]["recogerResiduos"]["value"] = limpiarInput ($_POST['recogerResiduos']);
            $formulario["servicios"]["recogerResiduos"]["err"] = false;

        }
        //ENCUESTA
        if (isset($_POST['tipoEncuestaConocer'])) {
            $formulario["encuesta"]["encuesta"]["value"] = ucfirst ($_POST['tipoEncuestaConocer']);
            $formulario["encuesta"]["encuesta"]["err"] = false;
        }
        //CAPTCHA
        if (isset($_POST['captcha'])) {
            $formulario["captcha"]["captcha"]["err"] = !verificarCaptcha ($_POST['captcha']);
        }
        $msgError = obtenerMensajeErrorFormulario($formulario);
        $envioUsuario=false;
        $envioEmpresa=false;
        $emailUsuario='';
        if (strlen ($msgError) == 0) {
            $envioUsuario = enviarEmailUsuario ($formulario);
            $envioEmpresa = enviarEmailEmpresa ($formulario, $envioUsuario);
            $emailUsuario=$formulario["contacto"]["email"]["value"];
            limpiarFormulario($formulario);
        }
       $msgError=mostrarMsgValidacion($msgError,$envioUsuario,$envioEmpresa,$emailUsuario);
    }
    @require_once "vista.php";
?>
