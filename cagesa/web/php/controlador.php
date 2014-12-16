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
$opciones = array();
foreach ($_POST as $indice => $valor) {
    if (isset($valor)) {
        $options[] = $valor;
    }
}
print_r($opciones);
// incluimos las funciones php
@require "modelo.php";

$nombre = isset($_POST['nombre']) ? limpiar_input($_POST['nombre']) : '';
$email = isset($_POST['email']) ? limpiar_input($_POST['email']) : '';
$tipo = isset($_POST['tipo']) ? limpiar_input($_POST['tipo']) : '';
$descripcion = isset($_POST['descripcion']) ? limpiar_input($_POST['descripcion']) : '';
$poda = isset($_POST['poda']) ? limpiar_input($_POST['poda']) : '';
$tala = isset($_POST['tala']) ? limpiar_input($_POST['tala']) : '';
$fumigacion = isset($_POST['fumigacion']) ? limpiar_input($_POST['fumigacion']) : '';
$abonado = isset($_POST['abonado']) ? limpiar_input($_POST['abonado']) : '';
$sembrado = isset($_POST['sembrado']) ? limpiar_input($_POST['sembrado']) : '';
$mantenimiento = isset($_POST['mantenimiento']) ? limpiar_input($_POST['mantenimiento']) : '';


if (isset($_POST["enviar"]) && strcmp($_POST["enviar"],"Enviar")==0){
    //$destinatario=isset($_POST[''])
    enviarEmail('');
    //$_POST=array();
}
@require "vista.php";
?>