$(document).ready(function () {
    $('.menuDesplegable').on("click",function(evt){
        if ($('#menu>.nav').css('margin-right')!='0px'){
            $('#menu>.nav').css('margin-right','0px');
            }else{
                $('#menu>.nav').css('margin-right','-120px');
            }
    });
    $(window).on("resize",function(evt){
        if ($(window).width()>640){
            $('#menu>.nav').css('height','3em');
            $('#menu>.nav').css('margin-right','0px');
        }else{
            $('#menu>.nav').css('height','11.5em');
        }
    });
});