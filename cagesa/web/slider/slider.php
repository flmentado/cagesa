﻿<?php if (decode(KEY_PASS) != CLAVE) {
    die("No se ha podido ejecutar.");
}
?>
<div id="sliderContainer">
    <div u="loading">
        <div></div>
        <div></div>
    </div>
    <div u="slides">
        <div>
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG?>01.jpg"/>
            <div u="caption" t="CLIP|LR" du="1500"></div>
            <div u="caption" t="L|IB" t2=L d=-900 class="block"></div>
            <div u="caption" t="RTT|360" d=-200 class="block"></div>
            <div u="caption" t="DDGDANCE|RB" t2="RTT|10" d=-1800 du=3800 class="block">Resolver<br/>varias lineas</div>
            <div u="caption" t="T|IE*IE" d=-1600 du=3800 t2="B" class="block"></div>
            <div u="caption" t="ZMF|10" t2="B" d=-1300 class="block"></div>
            <div u="caption" t="CLIP|L" d=-300 class="block"></div>
            <a u="caption" t="CLIP|L" d=-300  href="#contacto" class="block"></a>
        </div>
        <div>
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG?>02.jpg"/>
            <a u=caption t="CLIP|LR" href="#clientes"></a>
            <div u=caption t="CLIP|LR" t2="B" du="2000" class="block"></div>
            <div u="caption" t="FADE" t2="B" d=-450 class="block">Sin JQuery<br/>Código abierto<br/>Reprogramado</div>
            <div u="caption" t="T|IB" t2="R" d=-600 class="block"></div>
            <div u="caption" t="MCLIP|T" t2="T" d=-450 class="block"></div>
            <div u="caption" t="MCLIP|R" d=-300 class="block"></div>
            <div u="caption" t="MCLIP|R" d=-300 class="block"></div>
            <div u="caption" t="MCLIP|R" d=-300 class="block"></div>
        </div>
        <div>
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG?>03.jpg"/>
            <a href="http://#contacto"></a>
            <div u=caption t="T" t2=NO class="block">Pendiente de ver si se puede poner varias lineas.<br/>En un after:{content}<br/>para eliminar estas líneas en el html.</div>
            <div u=caption t="L" d=-750 class="block"></div>
            <div u=caption t="CLIP|L" t2=B d=-450 class="block"></div>
            <div u=caption t="DDG|TR" t2="TORTUOUS|VB" d=-750 class="block"></div>
            <div u=caption t="RTT|10" d=-450 class="block"></div>
            <div u=caption t="TORTUOUS|VB" d=-750 class="block"></div>
            <div u=caption t="T" d=-450 class="block"></div>
            <div u=caption t="FLTTR|R" t2="B" d=-600 class="block"></div>
            <div u=caption t="ATTACK|BR" d=-600 class="block"></div>
            <div u="caption" t="FLTTRWN|LT" d=-900 class="block"></div>
            <div u="caption" t="RTTS|R" d=-900 class="block"></div>
            <div u="caption" t="R|IB" t2=R d=-900 class="block"></div>
        </div>
        <div>
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG?>04.jpg"/>
            <div u=caption t="RTTS|T" d=-300 t2="B"></div>
            <div u=caption t="T|IB" t2="T" d=-300 class="block"></div>
            <div u=caption t="T|IB" t2=L d=-900 class="block"></div>
            <div u="caption" t="WV|B" t2="T" d=-600 class="imagenLogo block"></div>
            <div u="caption" t="WV|B" t2="T" d="-1100" class="imagenLogo block"></div>
            <div u="caption" t="WV|B" t2="T" d="-1100" class="imagenLogo block"></div>
            <div u="caption" t="WV|B" t2="T" d="-1100" class="imagenLogo block"></div>
            <div u="caption" t="WV|B" t2="T" d="-1100" class="imagenLogo block"></div>
            <div u="caption" t="LISTH|R" t2="CLIP|TB" d=-600 class="block">
                Chrome&nbsp; &nbsp; &nbsp; 3+<br/>
                Firerfox&nbsp; &nbsp; &nbsp; 2+<br/>
                IE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6+<br/>
                Safari&nbsp; &nbsp; &nbsp; &nbsp; 3.1+<br/>
                Opera&nbsp; &nbsp; &nbsp; &nbsp;10+
            </div>
            <div u=caption t="TR" t2="T" d=-900 class="block"></div>
            <div u=caption t="R" t2=R d=-900 class="captionBlack"
                 style="position:absolute; left:780px; top: 55px; width:100px; height:30px;">
                supported
            </div>
            <div u="caption" t="T|IB" d=-900
                 style="position:absolute;left:525px;top:90px;width:220px;height:30px;font-size:28px;color:#fff;line-height:30px;">
                Windows Phone
            </div>
            <div u="caption" t="T|IB" t2="ZMF|10" d=-900
                 style="position:absolute;left:560px;top:160px;width:120px;height:30px;font-size:28px;color:#fff;line-height:30px;">
                Android
            </div>
            <div u="caption" t="T|IB" t2=R d=-900
                 style="position:absolute;left:760px;top:140px;width:60px;height:30px;font-size:28px;color:#fff;line-height:30px;">
                iOS
            </div>
            <div u="caption" t="T|IB" t2=B d=-900  style="position:absolute;left:600px;top:230px;width:120px;height:80px;background-image:url('../slider/img/img/moc-iphone.png');"></div>
            <div u="caption" t="RTTL|BR" d=-450 style="position:absolute;left:750px;top:220px;width:77px;height:100px;background-image:url('../slider/img/img/moc-ipad.png');" />
        </div>
    </div>
    <div u="navigator" class="bullet">
        <div u="prototype" class="prototype "></div>
    </div>
    <style>
    .jssoral, .jssorar, .jssoraldn, .jssorardn
    {
    position: absolute;
    cursor: pointer;
    display: block;
    background: url('img/arrow/arrow.png') no-repeat;
    overflow:hidden;
    }
    .jssoral { background-position: 0px 0px; }
    .jssorar { background-position: -55px 0px; }
    .jssoral:hover { background-position: -110px 0px; }
    .jssorar:hover { background-position: -165px 0px; }
    .jssoraldn { background-position: -220px 0px; }
    .jssorardn { background-position: -275px 0px; }
    </style>
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssoral arrow" style="width: 55px; height: 166px; top: 123px; left: 2px;">
    </span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssorar arrow" style="width: 55px; height: 166px; top: 123px; right: 2px">
    </span>
    <!-- Arrow Navigator Skin End -->
</div>
