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
$sercicios=array("empresa"=>array("poda","tala","fumigacion","abonado","sembrado","mantenimiento"),
                 "particular"=>array("poda","tala","fumigacion","abonado","sembrado","mantenimiento")
);

$tipo=isset($_POST['tipo'])?$_POST['tipo']:'';
// incluimos las funciones php
@require "modelo.php";
if (isset($_POST["enviar"]) && strcmp($_POST["enviar"],"Enviar")==0){
    //$destinatario=isset($_POST[''])
    enviarEmail('');
    //$_POST=array();
}
@require "vista.php";
?>