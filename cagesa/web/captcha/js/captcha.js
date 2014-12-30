$(function(){
    var captchaRefresh=function() {
        $('#captchaRefresh').on('click',function(evt){
            evt.preventDefault();
            $("#putImageCaptcha").load('../captcha/php/captcha_vista.php',function(){
                captchaRefresh();
            });
        });
    };
    captchaRefresh();
});