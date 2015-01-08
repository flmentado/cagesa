$(function () {
    var formularioTextArea=function() {
        $('textarea#comentario').on('keydown', function (evt) {
            if ((evt.keyCode < 33 || evt.keyCode > 40 ) && evt.keyCode != 8 && evt.keyCode != 46) {
                if ((($('textarea#comentario').val().length) + 1) > $('textarea#comentario').attr('maxNumberChar')) {
                    evt.preventDefault();
                }
            }
        });
    }
    var formularioSubmit=function() {
        $('#formularioContacto .submit').on('click', function (evt) {
            evt.preventDefault();
            $.ajax({
                type: "POST",
                url: "../forms/contacto/php/controlador.php",
                data: $('#formularioContacto').serialize() + "&enviar=Enviar",
                success: function (datos) {
                    $(".scroll").html(datos);
                    $(".scroll").stop().animate({
                        scrollTop: 0
                    }, {
                        duration: 1000,
                        easing: "easeInOutQuart"
                    });
                    formularioTextArea();
                    formularioSubmit();
                   },
                dataType: "html"

            });
        });
    }
    formularioTextArea();
    formularioSubmit();
});