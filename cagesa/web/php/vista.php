<?php
if (!function_exists ('decode') || decode(KEY_PASS) != @CLAVE) {
    die("No se ha podido ejecutar.");
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Cagesa</title>
    <link rel="stylesheet" href="../css/foundation.css"/>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/person.css"/>
    <link rel="../css/app.css"/>
    <link rel="../css/icons.css"/>
    <link rel="../css/style.css"/>

    <script src="../js/vendor/jquery-2.1.1.js"></script>
    <script src="../js/vendor/modernizr.js"></script>
    <script src="../js/jquery.stellar.js"></script>

    <script src="../js/scroll.js"></script>
    <link rel="stylesheet" href="<?php echo PAHT_SLIDER_1 ?>css/slider.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1 ?>js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1 ?>js/slider.js"></script>

</head>
<body>
<div class="mq-check">
    <div class="row">
        <div class="contain-to-grid fixed gris">
            <nav data-topbar="data-topbar" class="top-bar">
                <ul class="title-area">
                    <li class="name">
                        <div class="logoBlanco"></div>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="right">
                        <li class="divider"></li>
                        <li class="active quienes"><a href="#somos">Nosotros</a></li>
                        <li class="divider"></li>
                        <li class="serv"><a href="#servicio">Servicios</a></li>
                        <li class="divider"></li>
                        <li class="client"><a href="#cliente">Clientes</a></li>
                        <li class="divider"></li>
                        <li class="contact"><a href="#contacto">Contacto</a></li>
                        <li class="divider"></li>
                    </ul>
                </section>
            </nav>
        </div>
    </div>
    <div style="float:none;margin:0 auto;width:82%;">
        <?php   //NUEVO SLIDER
        include_once PAHT_SLIDER_1 . "slider.php";?>
    </div>
    <!-- .small-12.columns -->
    <div class="row">
        <br id="somos"/>

        <div class="somostext small-12 medium-6 columns">
            <h4 class="somos">QUIENES SOMOS</h4>

            <p><span class="nombre">Canarias de gestión y suministros para areas verdes S.L.</span></p>

            <p>Somos una empresa perteneciente al<span id="tipGrupoCastillo" data-tooltip="data-tooltip"
                                                       data-options="hover_delay: 50;"
                                                       title="Nace en diciembre del año 2000 al amparo de la empresa Elmasa Medio Ambiente, para dar respuesta a la necesidad de  servicio de jardinería turística y residencial privada."
                                                       class="has-tip"> Grupo Castillo</span><span>. Nuestro ámbito de actuación es la jardinería, el sector medio ambiental y los servicios forestales.</span>
            </p>

            <p>CAGESA cuenta con la certificación<span id="tipAenor" data-tooltip="data-tooltip"
                                                       data-options="hover_delay: 50;" title="Norma UNE  EN  ISO 9001"
                                                       class="has-tip"> AENOR</span><span>. Además una de nuestras prioridades es la protección y cuidado del medio ambiente.</span>
            </p>
        </div>
        <div class="somosSlide small-12 medium-6 columns end"><a><img src="../img/bg2.jpg"/></a></div>
    </div>
    <div id="servicio"><br/></div>
    <div data-stellar-background-ratio="0.8" class="small-12 servicios bgstellar">
        <div class="row">
            <div class="small-12 columns"><br/>
                <h4 class="servicios"><a data-reveal-id="myModal">SERVICIOS</a>

                    <div id="myModal" data-reveal="data-reveal" class="reveal-modal">
                        <hr/>
                        <p>-Diseño, construcción y mantenimiento de espacios verdes en general.</p>

                        <p>-Proyectos de jardines, riegos, repoblaciones, reforestaciones</p>

                        <p>-Obras de jardinería, tratamiento de taludes, restauración y recuperación paisajística,
                            tratamientos selvícolas.</p>

                        <p>-Mantenimientos de jardinería, hoteles y complejos hoteleros, jardines individuales, parque y
                            espacios públicos.</p>

                        <p>-Análisis, estudios y diagnóstico de arbolado y palmeras</p>

                        <p>-Asesoramiento técnico, planes de gestión y estudios.</p>

                        <p>-Podas, talas, limpiezas y actuaciones de choque.</p>

                        <p>-Trasplantes en general.</p>

                        <p>-Instalación de sistemas de riego, equipos de riego y fertirrigación.</p>
                        <hr/>
                        <a class="close-reveal-modal">&#215;</a>
                    </div>
                </h4>
                <ul class="small-block-grid-1 medium-block-grid-3 pagination-centered">
                    <li>
                        <div class="mantenimiento">
                            <div class="servicioCaption">
                                <p>Mantenimiento</p>
                            </div>
                        </div>
                        <p> Ofrecemos servicios de poda de palmeras y árboles de gran porte, tratamientos
                            fitosanitarios, instalaciones de riego, reparación de maquinaria, tala de palmeras, recogida
                            de residuos vegetales.</p>
                    </li>
                    <li>
                        <div class="asesor">
                            <div class="servicioCaption">
                                <p>Asesoramiento Técnico</p>
                            </div>
                        </div>
                        <p> Contamos con Técnicos, delineantes, administrativos, Oficiales Jardineros, mecánicos y
                            podadores acreditados por el<strong> Gobierno de Canarias</strong><span> para la poda, transplante y tratamiento de las palmeras</span>
                        </p>
                    </li>
                    <li>
                        <div class="instalaciones">
                            <div class="servicioCaption">
                                <p>Instalaciones</p>
                            </div>
                        </div>
                        <p> En nuestro vivero de 10000 m2, 2000 de ellos de invernaderos. Producimos las plantas que
                            suministramos en nuestros servicios y obras. Contamos con un stock de maquinaria, material
                            de riego, productos fitosanitarios, abonos, turbas, sustratos y áridos para facilitar el
                            suministro a nuestros clientes.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="cliente" class="small-12 clientes somos">
        <div class="row">
            <div class="small-12 columns">
                <hr/>
                <h4 class="clientes"><span id="tipClientes" data-tooltip="data-tooltip" aria-haspopup="true"
                                           title="Prestamos servicios a las cadenas hoteleras más importantes, Sea Side (Grand Hotel Residencia 5*GL, Palm Beach 5*, Sandy Beach 4*) o Lopesan Hotels (Gran Hotel Lopesan Costa Meloneras, H. Lopesan Villa del Conde..."
                                           class="has-tip">CLIENTES</span></h4>
                <ul class="small-block-grid-1 medium-block-grid-4">
                    <li>
                        <p>A lo largo de tiempo se ha ido consolidando en una empresa líder en este sector de la
                            jardinería.</p>
                    </li>
                    <li><a><img src="../img/bg2.jpg"/></a></li>
                    <li><a><img src="../img/bg6.jpg"/></a></li>
                    <li><a><img src="../img/bg7.jpg"/></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row contacto">
        <div id="contacto" class="small-12">
            <hr/>
            <h4 class="contacto">CONTACTO</h4>

            <form class="contacto">
                <input id="particular" type="radio" name="tipoRemitente" value="particular"/>
                <label for="particular">Particular</label>
                <input id="empresa" type="radio" name="tipoRemitente" value="empresa"/>
                <label for="empresa">Empresa</label>
                <input type="text" name="remitente" placeholder="Nombre"/>
                <input type="text" name='telefono' placeholder="Teléfono contacto"/>
                <input type="text" name='fax' placeholder="Fax"/>
                <input type="text" name='email' placeholder="Email"/>
                <span>Estoy interesado en :</span>
                <label for="mantenimiento"><input id='mantenimiento' type="checkbox" name="mantenimiento"/>
                    Mantenimiento de jardines.</label>
                <label for="poda"><input id='poda' type="checkbox" name="poda"/> Poda/Tala de palmeras y
                    árboles.</label>
                <label for="tratamiento"><input id='tratamiento' type="checkbox" name="tratamiento"/> Tratamiento
                    fitosanitario.</label>
                <label for="instalar"><input id='instalar' type="checkbox" name="instalacion"/> Instalacion/Reparación
                    de sistemas de riego.</label>
                <label for="recogerResiduos"><input id='recogerResiduos' type="checkbox" name="recogerResiduos"/>
                    Recogida de residuos vegetales.</label>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="footer-section">
            <div class="row">
                <div class="small-12 columns">
                    <p class="text-center">Copryrigth 2014</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/foundation/foundation.js"></script>
<script src="../js/foundation/foundation.topbar.js"></script>
<script src="../js/foundation/foundation.tooltip.js"></script>
<script src="../js/foundation/foundation.reveal.js"></script>
<script src="../js/foundation/foundation.orbit.js"></script>
<script src="../js/user.js"></script>
<script>$(document).foundation();</script>
</body>
</html>