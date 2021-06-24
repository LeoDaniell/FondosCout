
//preload
window.onload = function(){
	$('#onload').fadeOut();
	$('body').removeClass('hidden');
	$('body').addClass('FondoScout');

}

window.onload
//termina preload
//encabezado
$(function(){
	$(window).scroll(function(){
		var winTop = $(window).scrollTop();
		if (winTop >= 30) {
			$("body").addClass("sticky-header");
		}else{
			$("body").removeClass("sticky-header");
		}
	})
})
//termina encabezado

