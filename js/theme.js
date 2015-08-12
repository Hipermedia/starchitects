jQuery(document).ready(function($) {


	// Reduce el header al hacer scrolldown; la animación se realiza con CSS
	$(window).on("scroll touchmove", function () {
		$('#header').toggleClass('Header--tiny', $(document).scrollTop() > 0);
		$('#header-logo img').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-social').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header #searchform').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header-main-nav').toggleClass('tiny', $(document).scrollTop() > 0);	
		$('#datos').toggleClass('tiny', $(document).scrollTop() > 0);	
		$('#header-logo-2').toggleClass('tiny', $(document).scrollTop() > 0);	
		$('#datos-2').toggleClass('tiny', $(document).scrollTop() > 0);	

	});
	
	// Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');


	//Agrega una animación al hacer scroll al llegar a un elemento gracias a waypoints

	$('.titulo').waypoint(function(direction) {
	  $('.titulo').addClass( 'fadeInUp animated' );
	},{
	  offset:'20%'
	});

	// pequeña función para desactivar los eventos en el mapa
	$('.Mapa').click(function () {
	    $('.Mapa iframe').css("pointer-events", "auto");
	});

	$('.Mapa').mouseleave(function() { 
		$('.Mapa iframe').css("pointer-events", "none"); 
	}); //fin

	// función para desplazamiento lento en enlaces dentro del mismo documento
	$(function(){
		$('a[href*=#]').click(function() {
	     	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	     		var $target = $(this.hash);
	     		$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	     		if ($target.length) {
	     			var targetOffset = $target.offset().top;
	     			$('html,body').animate({scrollTop: targetOffset}, 1000);
	     			return false;
	     		}
	     	}
	 	});
	 }); //fin



	// The slider being synced must be initialized first
	$('#carousel').flexslider({
	  animation: "slide",
	  controlNav: false,
	  directionNav: false,
	  animationLoop: false,
	  slideshow: false,
	  itemWidth: 210,
	  itemMargin: 5,
	  asNavFor: '#slider'
	});
	
	$('#slider').flexslider({
	  animation: "slide",
	  controlNav: false,
	  animationLoop: false,
	  slideshow: false,
	  sync: "#carousel",
	  controlsContainer: $(".custom-controls-container"),
	  customDirectionNav: $(".custom-navigation a")
	});

});