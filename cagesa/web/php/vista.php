
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
<<<<<<< HEAD
    <script src="../js/jquery.stellar.js"></script>

    <link rel="stylesheet" href="<?php echo PAHT_SLIDER_1?>css/slider.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>js/slider.js"></script>
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
                <li class="active quienes"><a href="#">Quienes Somos</a></li>
                <li class="divider"></li>
                <li class="serv"><a href="#">Servicios</a></li>
                <li class="divider"></li>
                <li class="client"><a href="#">Clientes</a></li>
                <li class="divider"></li>
                <li class="contact"><a href="#">Contacto</a></li>
                <li class="divider"></li>
              </ul>
            </section>
          </nav>
=======
    <!------------ Slider CSS JS ------------------------- -->
    <link rel="stylesheet" href="<?php echo PAHT_SLIDER_1?>/css/slider.css" type="text/css">
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>/js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo PAHT_SLIDER_1?>/js/slider.js"></script>
</head>
<body>
<!--Barra de navegacion-->

<div data-magellan-expedition="fixed" data class="barraNav">

    <dl class="sub-nav">

        <dd data-magellan-arrival="logo" class="small-2 logo">
            <div><img src="../img/logoLarge.jpg" alt=""></div>
            <!--   -->
        </dd>


        <dd data-magellan-arrival="somos" class="small-1 sliding-u-l-r-l">
            <a href="#somos" class="">Quienes Somos</a>
        </dd>

        <dd data-magellan-arrival="servicios" class="small-1 sliding-u-l-r-l">
            <a href="#servicios">Servicios</a>
        </dd>

        <dd data-magellan-arrival="clientes" class="small-1 sliding-u-l-r-l">

            <a href="#clientes">Clientes</a>
        </dd>
        <dd data-magellan-arrival="contacto" class="small-1 sliding-u-l-r-l">
            <a href="#contacto">Contacto</a>
        </dd>
    </dl>
</div>
    <?php   //NUEVO SLIDER
            include_once PAHT_SLIDER_1."slider.php";?>

    <!-- Lema de la empresa -->
    <div class="small-12 lema">
        <h1 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, eaque.</h1>
    </div>
    <br>
    <!--Texto Descripcion de la empresa-->
    <div class="row">
        <div class="small-12 columns" data-magellan-destination="somos">
            <div class="small-12 medium-6 columns">
                <p class="text-justify empresa"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur,
                    sed? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eum maiores commodi
                    repellendus odit molestias itaque nam vel totam quibusdam nostrum, temporibus saepe cupiditate
                    pariatur aperiam natus perferendis tempora dicta.Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Ex eius quos amet impedit provident non ab culpa. Saepe beatae explicabo architecto incidunt
                    fuga, at illum asperiores praesentium, officia quas repellendus.</p>
            </div>
            <!--Slide de trabajos realizados-->
            <div class="small-12 medium-6 columns">
                <div data-orbit
                     data-options="animation_speed: 500; timer_speed:4000; pause_on_hover: false; next_on_click: true; slide_number: false; timer: true; bullets: false;"
                     class="orbit-servicios servicios">
                    <li class="active"><img class="slide2" src="../img/recursos/bg (2).jpg" alt="bg4">
                    <li><img class="slide2" src="../img/recursos/bg (12).jpg" alt="bg5"></li>
                    <li><img class="slide2" src="../img/recursos/bg (22).jpg" alt="bg6"></li>
                </div>
            </div>
>>>>>>> d967d591560db99a37c7ebb3fa0c0f29cfdae7c5
        </div>
      </div>
<div class="small-12 columns">
      <ul class="example-orbit" data-orbit>
        <li>
          <img src="../img/bg1.jpg" alt="slide 1" />
          <div class="orbit-caption">
            Cagesa, Más de 15 años a su servicio.
          </div>
        </li>
        <li class="active">
          <img src="../img/bg2.jpg" alt="slide 2" />
          <div class="orbit-caption">
            Nuestro equipo de profesionales esta acreditado por la UE.
          </div>
        </li>
        <li>
          <img src="../img/bg3.jpg" alt="slide 3" />
          <div class="orbit-caption">
            Consulta a nuestros expertos.
          </div>
        </li>
      </ul>
</div>

      <!-- .small-12.columns -->
      <div class="row"><br/>
        <div class="somostext small-12 medium-6 columns">
          <h4 class="somos">QUIENES SOMOS</h4>
          <p><span class="nombre">Canarias de gestión y suministros para areas verdes S.L.</span></p>
          <p>Somos una empresa perteneciente al<span id="tipGrupoCastillo" data-tooltip="data-tooltip" data-options="hover_delay: 50;" title="Nace en diciembre del año 2000 al amparo de la empresa Elmasa Medio Ambiente, para dar respuesta a la necesidad de  servicio de jardinería turística y residencial privada." class="has-tip"> Grupo Castillo</span><span>. Nuestro ámbito de actuación es la jardinería, el sector medio ambiental y los servicios forestales.</span></p>
          <p>CAGESA cuenta con la certificación<span id="tipAenor" data-tooltip="data-tooltip" data-options="hover_delay: 50;" title="Norma UNE  EN  ISO 9001" class="has-tip"> AENOR</span><span>. Además una de nuestras prioridades es la protección y cuidado del medio ambiente.</span></p>
        </div>
<<<<<<< HEAD
        <div class="somosSlide small-12 medium-6 columns end"><a><img src="../img/alta/imagen (83).jpg"/></a></div>
      </div><br/>
      <div data-stellar-background-ratio="0.8" class="small-12 servicios bgstellar">
        <div class="row">
          <div class="small-12 columns"><br/>
            <h4 class="servicios"><a data-reveal-id="myModal">SERVICIOS</a>
              <div id="myModal" data-reveal="data-reveal" class="reveal-modal">
                <hr/>
                <p>-Diseño, construcción y mantenimiento de espacios verdes en general.</p>
                <p>-Proyectos de jardines, riegos, repoblaciones, reforestaciones</p>
                <p>-Obras de jardinería, tratamiento de taludes, restauración y recuperación paisajística, tratamientos selvícolas.</p>
                <p>-Mantenimientos de jardinería, hoteles y complejos hoteleros, jardines individuales, parque y espacios públicos.</p>
                <p>-Análisis, estudios y diagnóstico de arbolado y palmeras</p>
                <p>-Asesoramiento técnico, planes de gestión y estudios.</p>
                <p>-Podas, talas, limpiezas y actuaciones de choque.</p>
                <p>-Trasplantes en general.</p>
                <p>-Instalación de sistemas de riego, equipos de riego y fertirrigación.</p>
                <hr/><a class="close-reveal-modal">&#215;</a>
              </div>
            </h4>
            <ul class="small-block-grid-1 medium-block-grid-3 pagination-centered">
              <li>
                <div class="mantenimiento">
                  <div class="servicioCaption">
                    <p>Mantenimiento</p>
                  </div>
=======
        <br>
    </div>
</div>
<!--Información de contacto-->
<div class="row">
    <div id="contacto" class="small-12" data-magellan-destination="contacto">
           <div class="row">
                <div class="small-12 large-6 columns">
                    <form name="subir" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?php if (isset($nombre)) {
                            echo $nombre;
                        } ?>">>
                        <input type="text" name="email" placeholder="Email" value="<?php if (isset($email)) {
                            echo $email;
                        } ?>">
                        <input id="empresa" type="radio" name="tipo" value="empresa" <?php if($tipo=='empresa'){echo " checked='checked' ";} ?>>
                        <label for="empresa">Empresa</label>
                        <input id="particular" type="radio" name="tipo"
                               value="particular" <?php if ($tipo == 'particular') {
                            echo " checked='checked' ";
                        } ?>>
                        <label for="particular">Particular</label>
                        <textarea name="descripcion" col="40" row="20" placeholder="Escriba una brebe descripción del trabajo  a realizar"></textarea>
                        <br>
                        <label>Elija los servicios que necesita.</label><br>
                        <ul class="no-bullet">
                            <li>
                                <input id="checkbox1" type="checkbox" name="poda" value="<?php if (isset($poda)) {
                                    echo $poda;
                                } ?>">
                                <label for="checkbox1">Poda</label>
                            </li>
                            <li>
                                <input id="checkbox2" type="checkbox" name="tala" value="<?php if (isset($tala)) {
                                    echo $tala;
                                } ?>">
                                <label for="checkbox2">Tala</label>
                            </li>
                            <li>
                                <input id="checkbox3" type="checkbox" name="fumigacion"
                                       value="<?php if (isset($fumigacion)) {
                                           echo $fumigacion;
                                       } ?>">
                                <label for="checkbox3">Fumigación</label>
                            </li>
                            <li>
                                <input id="checkbox4" type="checkbox" name="abonado" value="<?php if (isset($abonado)) {
                                    echo $abonado;
                                } ?>">
                                <label for="checkbox4">Abonado</label>
                            </li>
                            <li>
                                <input id="checkbox4" type="checkbox" name="sembrado"
                                       value="<?php if (isset($sembrado)) {
                                           echo $sembrado;
                                       } ?>">
                                <label for="checkbox4">Sembrado</label>
                            </li>
                            <li>
                                <input id="checkbox5" type="checkbox" name="mantenimiento"
                                       value="<?php if (isset($mantenimiento)) {
                                           echo $mantenimiento;
                                       } ?>">
                                <label for="checkbox5">Mantenimiento</label>
                            </li>
                        </ul>
                        <input type="submit" class="button round small-12 large-6" name="enviar" value="Enviar">
                    </form>
>>>>>>> d967d591560db99a37c7ebb3fa0c0f29cfdae7c5
                </div>
                <p> Ofrecemos servicios de poda de palmeras y árboles de gran porte, tratamientos fitosanitarios, instalaciones de riego, reparación de maquinaria,  tala de palmeras, recogida de residuos vegetales.</p>
              </li>
              <li>
                <div class="asesor">
                  <div class="servicioCaption">
                    <p>Asesoramiento Técnico</p>
                  </div>
                </div>
                <p> Contamos con Técnicos, delineantes, administrativos, Oficiales Jardineros, mecánicos y podadores acreditados por el<strong> Gobierno de Canarias</strong><span> para la poda, transplante y tratamiento de las palmeras</span></p>
              </li>
              <li>
                <div class="instalaciones">
                  <div class="servicioCaption">
                    <p>Instalaciones</p>
                  </div>
                </div>
                <p> En nuestro vivero de  10000 m2,  2000 de ellos de invernaderos. Producimos las plantas que suministramos en nuestros servicios y obras. Contamos con un stock  de maquinaria, material de riego, productos fitosanitarios, abonos, turbas, sustratos y áridos para facilitar el suministro a nuestros clientes.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="small-12 clientes somos">
        <div class="row">
          <div class="small-12 columns">
            <hr/>
            <h4 class="clientes"><span id="tipClientes" data-tooltip="data-tooltip" aria-haspopup="true" title="Prestamos servicios a las cadenas hoteleras más importantes, Sea Side (Grand Hotel Residencia 5*GL, Palm Beach 5*, Sandy Beach 4*) o Lopesan Hotels (Gran Hotel Lopesan Costa Meloneras, H. Lopesan Villa del Conde..." class="has-tip">CLIENTES</span></h4>
            <ul class="small-block-grid-1 medium-block-grid-4">
              <li>
                <p>A lo largo de tiempo se ha ido consolidando en una empresa líder en este sector de la jardinería.</p>
              </li>
              <li><a><img src="../img/alta/imagen (83).jpg"/></a></li>
              <li><a><img src="../img/alta/imagen (81).jpg"/></a></li>
              <li><a><img src="../img/alta/imagen (12).jpg"/></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row contacto">
        <div class="small-12">
          <hr/>
          <h4 class="contacto">CONTACTO</h4>
          <form class="contacto">
            <input type="text" placeholder="Nombre"/>
            <input id="particular" type="radio" name="particular" value="particular"/>
            <label for="particular">Particular</label>
            <input type="text" placeholder="Nombre"/>
            <input type="text" placeholder="Nombre"/>
            <input type="text" placeholder="Nombre"/>
            <input type="text" placeholder="Nombre"/>
            <input type="text" placeholder="Nombre"/>
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
    <script>$(document).foundation() ;</script>
  </body>
</html>