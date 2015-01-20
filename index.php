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
    define("PAHT_SLIDER_1", "slider/");
    define("PATH_SLIDER_1_IMG", PAHT_SLIDER_1 . 'img/slider/');
    @require_once "php/modelo.php";
    /*if (!isset($_COOKIE['proteccionDatos'])) {
        if (isset($activarCookie) && $activarCookie) {
            setcookie('proteccionDatos', "mi cookie", time() + 30 * 1); //30sg
        } else {
           echo "<div class='proteccionDatos'>
           INFORMACIÓN IMPORTANTE SOBRE COOKIES
           <div class='textoProteccionDatos'>
                La Web utiliza cookies propias y de terceros para recopilar
                información que ayuda a optimizar su visita.
                Las cookies no se utilizan para recoger información de carácter personal. Usted puede permitir su uso o rechazarlo,
                también puede cambiar su configuración siempre que lo desee.
                Dispone de más información en nuestra <a href='#'>Política de Cookies.</a>
                <form name='pd' method='post' action=".$_SERVER['PHP_SELF'].">
                    <input type='submit' name='cookie' value='Cerrar'>
                </form>
           </div>
      </div>";
        }
    }*/
 ?>
<?php
    if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cagesa solicitud de servicios de mantenimiento, poda, fumigación tala, poda ,
    etc para la jardinería, y creación de espacios ecológicos.">
    <meta name="keywords" content="gran canaria, cagesa, jardineria, arboles, ecologico, palmeras, mantenimiento,
    jardin, fumigación, fumigacion, jardín">
    <title>Cagesa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
<div id="menu" class="fixed">
    <span>CAGESA</span>
    <span class="menuDesplegable"></span>
    <ul class="nav">
       <li><a href="#quienes">Somos</a></li>
        <li><a href="#servicios">Servicios</a>
        <li><a href="#clientes">Clientes</a>
        <li><a href="">Contacto</a>
    </ul>
</div>
<?php   //NUEVO SLIDER
    include_once PAHT_SLIDER_1 . "slider.php";?>
<div id="quienes">
    <div class="row">
        <div id="quienes-texto" class="small-12 medium-6 columns">
            <h2>Quiénes Somos</h2>

            <p><span class="nombre">Canarias de gestión y suministros para areas verdes</span><span
                    id="tipGrupoCastillo" data-tooltip data-options="hover_delay: 50;"
                    title="Nace en diciembre del año 2000 al amparo de la empresa Elmasa Medio Ambiente, para dar respuesta a la necesidad de  servicio de jardinería turística y residencial privada."
                    class="has-tip"> S.L.</span></p>

            <p>Somos una empresa perteneciente al Grupo Castillo<span>. Nuestro ámbito de actuación es la jardinería, el sector medio ambiental y los servicios forestales.</span>
            </p>

            <p>CAGESA cuenta con la certificación<span id="tipAenor" data-tooltip data-options="hover_delay: 50;"
                    title="Norma UNE  EN  ISO 9001" class="has-tip"> AENOR</span><span>. Además una de nuestras prioridades es la protección y cuidado del medio ambiente.</span>
            </p>
        </div>
        <div class="img-quienes small-12 medium-6 columns"><a class="button medium radius formularioModal">Solicita
                presupuesto</a>
        </div>
    </div>
</div>
<br>

<div id="servicios" data-stellar-background-ratio="0.9" class="cespito">
    <div data-equalizer class="row">
        <h2 class="small-12">Servicios</h2>
        <ul class="small-12 columns small-block-grid-1 medium-block-grid-3">
            <li>
                <div data-equalizer-watch class="panel-servicios panel">
                    <h3>Mantenimiento</h3>

                    <div class="icon flaticon-mantenimiento"></div>
                    <p class="text-justify"> Ofrecemos servicios de poda de palmeras y árboles de gran porte,
                        tratamientos fitosanitarios, instalaciones de riego, reparación de maquinaria, tala de palmeras,
                        recogida de residuos vegetales.</p>
                </div>
            </li>
            <li>
                <div data-equalizer-watch class="panel-servicios panel">
                    <h3>Proyectos</h3>

                    <div class="icon flaticon-paisajismo"></div>
                    <p class="text-justify"> Contamos con Técnicos, delineantes, administrativos, Oficiales Jardineros,
                        mecánicos y podadores acreditados por el Gobierno de Canarias para la poda, transplante y
                        tratamiento de las palmeras</p>
                </div>
            </li>
            <li>
                <div data-equalizer-watch class="panel-servicios panel">
                    <h3>Asesoramiento técnico</h3>

                    <div class="icon flaticon-asesoramiento"></div>
                    <p class="text-justify"> En nuestro vivero de 10000 m2, 2000 de ellos de invernaderos. Producimos
                        las plantas que suministramos en nuestros servicios y obras. Contamos con un stock de
                        maquinaria, material de riego, productos fitosanitarios, abonos, turbas, sustratos y áridos para
                        facilitar el suministro a nuestros clientes.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="row"><a class="button medium radius formularioModal">Solicita presupuesto</a></div>
</div>
<br>

<div id="clientes">
    <div class="row">
        <div class="small-12 columns">
            <h4>Clientes</h4>
            <ul class="small-block-grid-1 medium-block-grid-5">
                <li>
                    <p>A lo largo de tiempo se ha ido consolidando en una empresa líder en este sector de la
                        jardinería.</p><span id="tipClientes" data-tooltip aria-haspopup="true"
                        title="Prestamos servicios a las cadenas hoteleras más importantes, Sea Side (Grand Hotel Residencia 5*GL, Palm Beach 5*, Sandy Beach 4*) o Lopesan Hotels (Gran Hotel Lopesan Costa Meloneras, H. Lopesan Villa del Conde..."
                        class="has-tip tip-top">mas información</span>
                </li>
                <li class="text-center"><a><img src="img/sandylogo.png"></a></li>
                <li class="text-center"><a><img src="img/lopesanlogo.jpg"></a></li>
                <li class="text-center"><a><img src="img/palmlogo.png"></a></li>
                <li class="text-center"><a><img src="img/residencialogo.jpg"></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="redes">
    <div class="small-12 columns panel">
        <h4>Siguenos en las Redes sociales y conocenos.</h4>
        <ul class="small-block-grid-2 medium-block-grid-4">
            <li>
                <div class="icon flaticon-fb"></div>
            </li>
            <li>
                <div class="icon flaticon-twitter"></div>
            </li>
            <li>
                <div class="icon flaticon-foto"></div>
            </li>
            <li><a class="button medium radius formularioModal">Solicita presupuesto</a></li>
        </ul>
    </div>
</div>
<?php
//////////////////////////////////////////////////////////////////////////
// FORMULARIO
//////////////////////////////////////////////////////////////////////////
?>
<div id="formularioModal">
    <div class="ventanaModal">
        <div class="headerFormularioModal">
            <span class="headerFormularioModalTitle"></span>
            <a title="Cerrar" class="closeFormModal">X</a>
        </div>
        <div class="cuerpoFormularioModal">
            <div class="scroll">
                <?php   //FORMULARIO
                    include "forms/contacto/php/controlador.php";?>
            </div>
        </div>
    </div>
</div>
<?php include "php/analitica.php"?>
<script src="js/jquery.2.1.3.js"></script>
<script type="text/javascript" src="<?php echo PAHT_SLIDER_1 ?>js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?php echo PAHT_SLIDER_1 ?>js/slider-min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/menu.js"></script>
<script src="forms/contacto/js/contacto.js"></script>
<script src="forms/modal/js/modal.js"></script>
<script src="captcha/js/captcha.js"></script>
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/miEstilo.css" type="text/css"/>
</body>
</html>
