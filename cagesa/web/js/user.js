$(function(){

	$(window).scroll(function (event) {

	    var scroll = $(window).scrollTop();

		var somosOf=$('.somos').offset().top;
		var serviciosOf=$('.servicios').offset().top;
		var clientesOf=$('.clientes').offset().top;
		var contactoOf=$('.contacto').offset().top;


		if (scroll<=somosOf) {
			limpia();
			$('.quienes').addClass('active');

		}else if (scroll>=serviciosOf&&scroll<clientesOf){
			limpia();
			$('.serv').addClass('active');
		}
		else if (scroll>=clientesOf&&scroll<contactoOf){
			limpia();
			$('.client').addClass('active');
		}
		else if (scroll>=contactoOf){
			limpia();
			$('.contact').addClass('active');
		}
	});

function limpia(){
			$('.quienes').removeClass('active');
			$('.serv').removeClass('active');
			$('.contact').removeClass('active');
			$('.client').removeClass('active');
}

});