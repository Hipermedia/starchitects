<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section name="nav-contacto" class="PrimalContacto" style="">
	<!-- Contenedor -->
	<div class="PrimalContacto-contenido u-contenedor" >

		<figure>
			<img src="<?php the_sub_field('icono_contacto'); ?>" alt="">
		</figure>

		<h2><?php the_sub_field('titulo_contacto'); ?></h2>

		<a href="<?php the_field('fb_contacto','option'); ?>" class="fondo-i fb">
			<i class="fa fa-facebook"></i>
		</a>
		
		<a href="<?php the_field('tw_contacto','option'); ?>" class="fondo-i tw">
			<i class="fa fa-twitter"></i>
		</a>
	</div>

		<div class="Mapa">
			<?php the_field('map_contacto','option'); ?>
		</div>
	
	<div class="imagen-bg-contacto" style="background-image: url('<?php the_sub_field('bg_cf7_contacto'); ?>')">
		<div class="PrimalContacto-contenido u-contenedor" >
			<div class="Formulario" style="">
				<h3><?php the_sub_field('text_up_cf7'); ?></h3>
				<?php echo do_shortcode(get_sub_field('cf7_contacto')); ?>
			</div>
		</div>
	</div>
</section>