$(function () {
    $('a.formularioModal').on('click', function (evt) {
        evt.preventDefault();
        $("#formularioModal").hide().fadeIn(1000);
    });
    $('a.closeFormModal').on('click', function (evt) {
        evt.preventDefault();
        $("#formularioModal").fadeOut(1000);
    });
});