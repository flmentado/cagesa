$(function () {
    $('textarea#comentario').on('keydown', function (evt) {
        if ((evt.keyCode < 33 || evt.keyCode > 40 ) && evt.keyCode != 8 && evt.keyCode != 46) {
            if ((($('textarea#comentario').val().length) + 1) > $('textarea#comentario').attr('maxNumberChar')) {
                evt.preventDefault();
            }
        }
    });
    $('#formularioContacto .submit').on('click', function(evt){
        evt.preventDefault();
        $.ajax({
            type: "POST",
            url:"../php/controlador.php",
            data: $('#formularioContacto').serialize()+"&enviar=Enviar",
            success: function(datos){
                console.log("OK");
            }

        });

    });

});