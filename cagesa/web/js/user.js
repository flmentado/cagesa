$(function(){

        $(window).stellar();
        $('.wrapper').css({
            'height': screen.availHeight + 'px'
        });


		var flag=true;
	$( window ).resize(function() {
		var small=1;
		var medium=641;
		var large=1024;
		var lema='<p class="">Canarias de Gestion y Suministros para Areas Verdes</p>';

		if ($(document).width()>small&&$(document).width()<medium) {
/*			$('.trampa').css("height",150);*/

			if (flag) {
				$('.lemaSmall').append(lema);
				flag=false;
			};

		}else if ($(document).width()>=medium&&$(document).width()<large) {

			$(".lemaSmall").empty();
			flag=true;
			$('.trampa').css("height",50);

		}else if($(document).width()>large);
	});
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