/**
 * Created by Francisco Luis Mentado Manzanares on 07/01/2015.
 *
 */
ponerCaptcha=function() {
    $('#captchaRefresh').on('click', function (evt) {
        evt.preventDefault();
        $.ajax({
            type: "POST",
            url: "../captcha/php/captcha_vista.php",
            data: '',
            success: function (datos) {
                $("#putImageCaptcha").html(datos);
            },
            dataType: "html"
        });
    });
}
