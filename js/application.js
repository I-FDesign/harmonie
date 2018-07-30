var menu_btn = document.getElementById('menu-btn');
var nav = document.getElementById('nav');
var active_m = false;

function menu(){
	if(active_m === false){
		nav.style.display = 'flex';
		active_m = true;
	}else{
		nav.style.display = 'none';
		active_m = false;
	}
};
menu_btn.addEventListener('click', menu);


//Fix Menu
var menu = $('#menu').offset().top;
$(document).scroll(menu_fix);
function menu_fix(){
	if($(document).scrollTop() > menu){
		$('#menu').addClass('menu-fixed');
	}else if($(document).scrollTop() < menu){
		$('#menu').removeClass('menu-fixed');
		$('#nav').removeClass('nav-fixed');
	}
}
//Fix MenuMobile
var menu_mobile = $('#menu_mobile').offset().top;
$(document).scroll(menu_fix_mob);
function menu_fix_mob(){
	if($(document).scrollTop() > menu_mobile){
		$('#menu_mobile').addClass('menu-mob-fixed');
		nav.style.position = 'fixed';
		nav.style.top = '63px';
	}else if($(document).scrollTop() < menu_mobile){
		$('#menu_mobile').removeClass('menu-mob-fixed');
		nav.style.position = 'static';
	}
}

//Scroll Habitaciones

var habitaciones = $('.habitaciones').offset().top;

	$('.habitaciones_btn').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: habitaciones - 200
		}, 500);

		nav.style.display = 'none';
		active_m = false;
	});

//Scroll Sustentabilidad

var sustentabilidad = $('.sustentabilidad').offset().top;

	$('.sust-btn').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: sustentabilidad - 200
		}, 500);

		nav.style.display = 'none';
		active_m = false;
	});


//Scroll Info Util

var ubicacion = $('.location').offset().top;

	$('.ub_btn').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: ubicacion
		}, 600);

		nav.style.display = 'none';
		active_m = false;
});

//Scroll Contacto

var contacto = $('.contacto').offset().top;

	$('.contact_btn').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: contacto - 200
		}, 550);

		nav.style.display = 'none';
		active_m = false;
	});


//Redireccion reserva

$('.arrow').on('click', function(){
	location.href = 'http://www.alojasoft.com/reservas/disponibilidadcristal.php?quehotel=1010';
});




//Redireccion New img

$('#new').on('click', function(){
	location.href= 'harmonieadmin/new.php';
});