<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/modernizr.js"></script>

    <link rel="stylesheet" href="<?php echo PAHT_SLIDER_1?>css/slider.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>js/slider.js"></script>
  </head>
 <body>
    <div id="topbar">
      <nav data-topbar class="top-bar small-12 columns">
        <ul class="title-area">
          <li><img src="../img/logoBlanco.png" alt="palabrasClave"></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <ul class="right">
            <li class="quienes"><a href="#quienes">Quienes Somos</a></li>
            <li class="serv"><a href="#servicios">Servicios</a></li>
            <li class="client"><a href="#clientes">Clientes</a></li>
            <li class="contact"><a href="#contacto">Contacto</a></li>
          </ul>
        </section>
      </nav>
    </div>
    <div id="slideOrbit">
      <div class="orbit-container">
        <ul data-orbit data-options="timer_speed: 5000; timer:false; bullets:false; slide_number:false; animation_speed:600; pause_on_hover: false; next_on_click: true">
          <li>
            <div id="uno" class="slide">
              <div class="textoSlide vcenter text-center">
                <h2>Más de 15 años a su servicio</h2>
                <p></p>
              </div>
            </div>
          </li>
          <li>
            <div id="dos" class="slide">
              <div class="textoSlide vcenter text-center">
                <h2>Personal especializado</h2>
                <p>Certificación AENOR Norma UNE EN ISO 9001</p>
              </div>
            </div>
          </li>
          <li>
            <div id="tres" class="slide">
              <div class="textoSlide vcenter text-center">
                <h2>Comprometidos con el entorno</h2>
                <p>Certificación AENOR Norma UNE EN ISO 9001</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div id="quienes">
      <div class="row">
        <div id="quienes-texto" class="small-12 medium-6 columns">
          <h2>Quiénes Somos</h2>
          <p><span class="nombre">Canarias de gestión y suministros para areas verdes</span><span id="tipGrupoCastillo" data-tooltip data-options="hover_delay: 50;" title="Nace en diciembre del año 2000 al amparo de la empresa Elmasa Medio Ambiente, para dar respuesta a la necesidad de  servicio de jardinería turística y residencial privada." class="has-tip"> S.L.</span></p>
          <p>Somos una empresa perteneciente al Grupo Castillo<span>. Nuestro ámbito de actuación es la jardinería, el sector medio ambiental y los servicios forestales.</span></p>
          <p>CAGESA cuenta con la certificación<span id="tipAenor" data-tooltip data-options="hover_delay: 50;" title="Norma UNE  EN  ISO 9001" class="has-tip"> AENOR</span><span>. Además una de nuestras prioridades es la protección y cuidado del medio ambiente.</span></p>
        </div>
        <div class="img-quienes small-12 medium-6 columns"><a data-reveal-id="modal" class="button medium radius">Consulta presupuesto</a>
        </div>
      </div>
    </div><br>
    <div id="servicios" data-stellar-background-ratio="0.9" class="cespito">
      <div data-equalizer class="row">
        <h2 class="small-12">Servicios</h2>
        <ul class="small-12 columns small-block-grid-1 medium-block-grid-3">
          <li>
            <div data-equalizer-watch class="panel-servicios panel">
              <h3>Mantenimiento</h3>
              <div class="icon flaticon-mantenimiento"></div>
              <p class="text-justify"> Ofrecemos servicios de poda de palmeras y árboles de gran porte, tratamientos fitosanitarios, instalaciones de riego, reparación de maquinaria,  tala de palmeras, recogida de residuos vegetales.</p>
            </div>
          </li>
          <li>
            <div data-equalizer-watch class="panel-servicios panel">
              <h3>Proyectos</h3>
              <div class="icon flaticon-paisajismo"></div>
              <p class="text-justify"> Contamos con Técnicos, delineantes, administrativos, Oficiales Jardineros, mecánicos y podadores acreditados por el Gobierno de Canarias para la poda, transplante y tratamiento de las palmeras</p>
            </div>
          </li>
          <li>
            <div data-equalizer-watch class="panel-servicios panel">
              <h3>Asesoramiento técnico</h3>
              <div class="icon flaticon-asesoramiento"></div>
              <p class="text-justify"> En nuestro vivero de  10000 m2,  2000 de ellos de invernaderos. Producimos las plantas que suministramos en nuestros servicios y obras. Contamos con un stock  de maquinaria, material de riego, productos fitosanitarios, abonos, turbas, sustratos y áridos para facilitar el suministro a nuestros clientes.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="row"><a data-reveal-id="modal" class="button medium radius">Consulta presupuesto</a></div>
    </div><br>
    <div id="clientes">
      <div class="row">
        <div class="small-12 columns">
          <h4>Clientes</h4>
          <ul class="small-block-grid-1 medium-block-grid-5">
            <li>
              <p>A lo largo de tiempo se ha ido consolidando en una empresa líder en este sector de la jardinería.</p><span id="tipClientes" data-tooltip aria-haspopup="true" title="Prestamos servicios a las cadenas hoteleras más importantes, Sea Side (Grand Hotel Residencia 5*GL, Palm Beach 5*, Sandy Beach 4*) o Lopesan Hotels (Gran Hotel Lopesan Costa Meloneras, H. Lopesan Villa del Conde..." class="has-tip tip-top">mas información</span>
            </li>
            <li class="text-center"><a><img src="../img/sandylogo.png"></a></li>
            <li class="text-center"><a><img src="../img/lopesanlogo.jpg"></a></li>
            <li class="text-center"><a><img src="../img/palmlogo.png"></a></li>
            <li class="text-center"><a><img src="../img/residencialogo.jpg"></a></li>
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
          <li><a data-reveal-id="modal" class="button medium radius">Consulta presupuesto</a></li>
        </ul>
      </div>
    </div>
    <div id="modal" data-reveal class="reveal-modal">
      <ul>
        <li>
          <p>Formulario</p>
        </li>
        <li>
          <p>Formulario</p>
        </li>
        <li>
          <p>Formulario</p>
        </li>
        <li>
          <p>Formulario</p>
        </li>
        <li>
          <p>Formulario</p>
        </li>
      </ul><a class="close-reveal-modal">&#215;</a>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/foundation.js"></script>
    <script src="../js/foundation.topbar.js"></script>
    <script src="../js/foundation.orbit.js"></script>
    <script src="../js/foundation.tooltip.js"></script>
    <script src="../js/foundation.reveal.js"></script>
    <script src="../js/foundation.equalizer.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/jquery.stellar.js"></script>
    <script src="../js/cagesa.js"></script>
  </body>
</html>
</html>