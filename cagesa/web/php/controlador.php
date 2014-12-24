<?php
/**
 * Created by PhpStorm.
 * User: Francisco Mentado Manzanares
 * Date: 08/12/2014
 * Time: 8:32
 */
//Constantes
define("CLAVE","kndJM");
define("KEY_PASS", base64_encode(CLAVE));
define("PAHT_SLIDER_1","../slider/");
define("PATH_SLIDER_1_IMG",PAHT_SLIDER_1.'img/slider/');
//Variables
@require "modelo.php";
// incluimos las funciones php

if (isset($_POST["enviar"]) && strcmp($_POST["enviar"],"Enviar")==0){
    $formulario=array("contacto"=>array(
        "tipoRemitente"=>"",
        "remitente"=>"",
        "tlf"=>"",
        "fax"=>"",
        "email"=>"",
        "mantenimiento"=>"",
        "podaTala"=>"",
        "tratamientoFitosanitario"=>"",
        "instalarReparar"=>"",
        "recogerResiduos"=>"")
    );
    $formulario["contacto"]["tipoRemitente"]=isset($_POST['tipoRemitente'])?$_POST['tipoRemitente']:'';
    $formulario["contacto"]["remitente"]=isset($_POST['remitente'])?limpiar_input(ucwords($_POST['remitente'])):'';
    $formulario["contacto"]["tlf"]=isset($_POST['tlf'])?$_POST['tlf']:'';
    $formulario["contacto"]["fax"]=isset($_POST['fax'])?$_POST['fax']:'';
    $formulario["contacto"]["direccion"]=isset($_POST['direccion'])?$_POST['direccion']:'';
    $formulario["contacto"]["email"]=isset($_POST['email'])&& filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)?$_POST['email']:'';
    $formulario["contacto"]["mantenimiento"]=isset($_POST['mantenimiento'])?$_POST['mantenimiento']:'';
    $formulario["contacto"]["podaTala"]=isset($_POST['podaTala'])?$_POST['podaTala']:'';
    $formulario["contacto"]["tratamientoFitosanitario"]=isset($_POST['tratamientoFitosanitario'])?$_POST['tratamientoFitosanitario']:'';
    $formulario["contacto"]["instalarReparar"]=isset($_POST['instalarReparar'])?$_POST['instalarReparar']:'';
    $formulario["contacto"]["recogerResiduos"]=isset($_POST['recogerResiduos'])?$_POST['recogerResiduos']:'';
    enviarEmail('');
    //$_POST=array();
}
@require "vista.php";
?>
