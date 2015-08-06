<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>
<nav id="header-main-nav" class="primalMainNav" role="navigation">
	<div class="wrapper">
		<!-- Logo -->
		<a href="<?php inicio_url(); ?>" id="header-logo-2" class="Header-logo-2">
		    <img src="<?php echo get_plantilla_url().'/images/logo-tiny.png'; ?>" alt="<?php bloginfo('name'); ?>">
		</a>
    	<!-- Icono de menú para versión adaptativa -->
    	<a class="toggle-nav" href="#">MENU DE NAVEGACIÓN</a>
    	<!-- Menu WordPress -->
		<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>
		<ul class="activo">
			<li>
				<a href="#nav-inicio" class="active">Inicio</a>
			</li>
			<li class="">
				<a href="#nav-filosofia">Filosofía</a>
			</li>
		    <li class="">
				<a href="#nav-soluciones">Soluciones</a>
		    </li>
		    <li class="">
		        <a href="#nav-contacto">Contacto</a>
		    </li>
		</ul>

		<div class="Datos" id="datos-2">
		    <a class="fondo-i" href="<?php the_field('fb_contacto','option'); ?>">
		        <i class="fa fa-facebook"></i>
		    </a>

		    <a class="fondo-i" href="<?php the_field('tw_contacto','option'); ?>">
		        <i class="fa fa-twitter"></i>
		    </a>
			<div class="numeros">
				<h3><?php the_field('telefono_1','option'); ?></h3>
				<h3><?php the_field('telefono_2','option'); ?></h3>
			</div>
		</div>
	</div>
</nav>