﻿<?php if (decode(KEY_PASS) != CLAVE) {
    die("No se ha podido ejecutar.");
}
?>
<div class="slider_block">
<div id="sliderc_container">
<div u="slides" class="slides outside">
<div>
    <div id="slider1_container">
        <!-- Loading Screen -->
        <div u="loading" class='spinner'>
            <div></div>
            <div></div>
        </div>
        <!-- Slides Container -->

        <div u="slides" class="inside">
            <!-- separador -->
            <div>
                <a u="image" href='#'><img src="<?php echo PATH_SLIDER_1_IMG?>001.jpg" alt="image jquery slider"/></a>
                <div u=caption t="*" class="caption captionColor captionOrange">
                    slider 1 texto 1
                </div>

            </div>
            <div>
                <a u="image" href='#'><img src="<?php echo PATH_SLIDER_1_IMG?>002.jpg" alt="image jquery slider"/></a>
                <div u=caption t="*" class="caption captionColor captionOrange">
                    slider 1 texto 2
                </div>
            </div>
            <div>
                <a u="image" href='#'><img src="<?php echo PATH_SLIDER_1_IMG?>003.jpg" alt="responsive image slider"/></a>
                <div u=caption t="*" class="caption captionColor captionOrange">
                    slider 1 texto 3
                </div>
            </div>
            <div>
                <a u="image" href='#'><img src="<?php echo PATH_SLIDER_1_IMG?>004.jpg" alt="touch swipe image slider"/></a>
                <div u=caption t="*" class="caption captionColor captionOrange">
                    slider 1 texto 4
                </div>
            </div>
        </div>
        <div u="navigator" class="jssorb01">
            <!-- bullet navigator item prototype warning space at end name class-->
            <div u="prototype" class="prototype "></div>
        </div>
    </div>
    <!-- Jssor Slider End -->
    <div u="caption" t="RTT*JUP|BR" t2="SPACESHIP|RB" class="slider_header_title_1"></div>
    <div class="slider_team_group_1">
        <div u="caption" t="TEAM_1" d="-200" du="50%"></div>
        <div u="caption" t="TEAM_1" d="-200" y="100%"></div>
        <div u="caption" t="TEAM_1" d="-200" du="50%" debug-id="team-caption"></div>
        <div u="caption" t="TEAM_1" d="-200" y="50%"></div>
        <div u="caption" t="TEAM_1" d="-200" du="50%"></div>
        <div u="caption" t="TEAM_1" d="-200" y="0"></div>
        <div u="caption" t="TEAM_1" d="-200" du="50%"></div>
        <div u="caption" t="TEAM_1" d="-200" y="-50%"></div>
        <div u="caption" t="TEAM_1" d="-200" du="50%"></div>
        <div u="caption" t="TEAM_1" d="-200" y="-100%"></div>
    </div>
</div>
<div>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" style="position: relative; top: 30px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px; zoom: 1; filter: matrix">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url('<?php echo PAHT_SLIDER_1?>img/loading.gif') no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>/2-001.jpg" alt="banner rotator"/></a>
                <div u=caption t="*" class="captionOrange"
                     style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                    slider 2 text 1
                </div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>002.jpg" alt="jquery banner rotator"/></a>
                <div u=caption t="*" class="captionOrange"
                     style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                    slider 2 text 2
                </div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>003.jpg" alt="responsive banner rotator"/></a>
                <div u=caption t="*" class="captionOrange"
                     style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                    mobile ready, touch swipe
                </div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>004.jpg" alt="touch swipe banner rotator"/></a>
                <div u=caption t="*" class="captionOrange"
                     style="position:absolute; left:20px; top: 30px; width:300px; height:30px;">
                    slider 2 text 3
                </div>
            </div>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01">
            <!-- bullet navigator item prototype -->
            <div u="prototype" class="prototype "></div>
        </div>
        <?php
        // <!-- Bullet Navigator Skin End -->

        // <!-- Arrow Navigator Skin Begin -->
        // <!-- Arrow Left -->
        // <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        // </span>
        // <!-- Arrow Right -->
        // <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        // </span>
        // <!-- Arrow Navigator Skin End -->
        // <a style="display: none" href="http://www.jssor.com">image carousel</a>
        ?>
    </div>
    <!-- Jssor Slider End -->
    <div u="caption" t="T|IE*IE" t2="B*IB"
         style="position: absolute; left: 360px;top:360px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
        Title 2
    </div>
    <a class="captionTextBlack" u="caption" t="CLIP|L" d="-200"
       href="http://www.jssor.com/development/tool-caption-transition-viewer.html"
       style="position: absolute; top: 30px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">390+
        caption transitions</a>

    <div u="caption" t="ZM" t2="NO" style="position: absolute; top: 80px; left: 0px; width: 320px; height: 80px;">
        <div u="caption" t2="TEAM_2" class="captionOrange"
             style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
            caption can be
        </div>
        <div u="caption" t2="TEAM_2" class="captionBlack"
             style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
            in team
        </div>
        <div u="caption" t2="TEAM_2" class="captionBlack"
             style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
            nested
        </div>
    </div>

    <a class="captionTextBlack" u="caption" t="L|EP"
       href="#" style="position: absolute; top: 210px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">360+
        slideshow transitions</a>

    <div u="caption" t="B*IB" t2="NO" style="position: absolute; top: 260px; left: 0px; width: 320px; height: 80px;">
        <div u="caption" t2="TEAM_2" class="captionOrange"
             style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
            slideshow can play
        </div>
        <div u="caption" t2="TEAM_2" class="captionBlack"
             style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
            inside
        </div>
        <div u="caption" t2="TEAM_2" class="captionBlack"
             style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
            outside
        </div>
    </div>
</div>
<div>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider3_container" style="position: relative; top: 90px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url('<?php echo PAHT_SLIDER_1?>img/loading.gif') no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>001.jpg" alt="banner slider"/></a>
                <div u="thumb">Do you notice it is draggable by mouse/finger?</div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>002.jpg" alt="jquery banner slider"/></a>
                <div u="thumb">Did you drag by either horizontal or vertical?</div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>003.jpg" alt="responsive banner slider"/></a>
                <div u="thumb">Do you notice navigator responses when drag?</div>
            </div>
            <div>
                <a u=image href="#"><img src="<?php echo PATH_SLIDER_1_IMG?>/004.jpg" alt="touch swipe banner slider"/></a>
                <div u="thumb">Do you notice arrow responses when click?</div>
            </div>
        </div>

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="slider3-T"
             style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                    <thumbnailtemplate
                            style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->

        <!-- Bullet Navigator Skin Begin -->
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01">
            <!-- bullet navigator item prototype -->
            <div u="prototype" class="prototype "></div>
        </div>
        <!-- Bullet Navigator Skin End -->

        <!-- Arrow Navigator Skin Begin -->
        <!-- Arrow Left -->
        <!--span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <!--span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <!--a style="display: none" href="http://www.jssor.com">image carousel</a-->
    </div>
    <!-- Jssor Slider End -->
    <div u="caption" t="L*IB" t2="SPACESHIP|LB"
         style="position: absolute; left: 360px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
        supper scalable banner slider example
    </div>
    <div class="captionText captionTextBlack" u="caption" t="CLIP|LR" d="-200"
         style="position: absolute; top: 60px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">
        deep ui comstomization
    </div>

    <div u="caption" t2="ZM" style="position: absolute; top: 120px; left: 0px; width: 320px; height: 120px;">
        <div u="caption" class="captionOrange" t="TEAM_2" t2="NO" d=-300
             style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
            image thumbnail
        </div>
        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300
             style="position: absolute; top: 40px; left: 0px; width: 200px; height: 30px;">
            text thumbnail
        </div>
        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300
             style="position: absolute; top: 80px; left: 00px; width: 200px; height: 30px;">
            mixed thumbnail
        </div>
    </div>

    <div u="caption" t="RTT|360" t2="NO" style="position: absolute; top: 290px; left: 0px; width: 320px; height: 80px;">
        <div u="caption" class="captionOrange" t2="TEAM_2"
             style="position: absolute; top: 0px; left: 0px; width: 120px; height: 30px;">
            bullets
        </div>
        <div u="caption" class="captionOrange" t2="TEAM_2"
             style="position: absolute; top: 40px; left: 0px; width: 120px; height: 30px;">
            thumbnails
        </div>
        <div u="caption" class="captionBlack" t2="TEAM_2"
             style="position: absolute; top: 20px; left: 130px; width: 30px; height: 30px;">
            in
        </div>
        <div u="caption" class="captionBlack" t2="TEAM_2"
             style="position: absolute; top: 0px; left: 170px; width: 120px; height: 30px;">
            horizontal
        </div>
        <div u="caption" class="captionBlack" t2="TEAM_2"
             style="position: absolute; top: 40px; left: 170px; width: 120px; height: 30px;">
            vertical
        </div>
    </div>
</div>
</div>

<!-- Bullet Navigator Skin Begin -->
<!-- bullet navigator container -->
<div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
    <!-- bullet navigator item prototype -->
    <div u="prototype"
         style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;">
        <NumberTemplate></NumberTemplate>
    </div>
</div>
<!-- Bullet Navigator Skin End -->

<!-- Arrow Navigator Skin Begin -->
<!-- Arrow Left -->
<!--span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<!--span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
</span>
<!-- Arrow Navigator Skin End -->
<!--a style="display: none" href="http://www.jssor.com">image carousel</a>
<!-- Trigger -->
</div>
<!-- Jssor Slider End -->
</div>
