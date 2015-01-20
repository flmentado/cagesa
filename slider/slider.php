<?php
    if (!function_exists ('decode') || decode (KEY_PASS) != @CLAVE) {
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
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG ?>01.jpg"/>
            <div u="caption" t="TORTUOUS|VB"  class="slider_1_text_1"></div>

        </div>
        <div>
            <img u="image" src="<?php echo PATH_SLIDER_1_IMG ?>02.jpg"/>
            <div u="caption" t="ZMF|2" t2="L" class="slider_2_text_1"></div>
            <div u="caption" t="ZMF|2" t2="R" class="slider_2_text_2"></div>
            <div u="caption" t="RTTL|BR"  class="slider_2_text_3"></div>
        </div>
        <div>
           <img u="image" src="<?php echo PATH_SLIDER_1_IMG ?>03.jpg"/>
            <div u="caption" t="T" t2="ZMF" class="slider_3_text_1"></div>
            <div u="caption" t="B" t2="ZMF" class="slider_3_text_2"></div>
            <div u="caption" t="RTTL|BL"  class="slider_3_text_3"></div>
            <div u="caption" t="RTTL|BR"  class="slider_3_text_4"></div>
        </div>
    </div>
    <div u="navigator" class="bullet">
        <div u="prototype" class="prototype "></div>
    </div>
    <span u="arrowleft" class="jssoral arrow"></span>
    <span u="arrowright" class="jssorar arrow"></span>
</div>
