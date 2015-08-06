<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section class="PrimalText" style="background-image: url('<?php the_sub_field('bg_texto'); ?>')">
	<!-- Contenedor -->
	<div class="PrimalText-contenido u-contenedor">
		<figure>
			<img src="<?php the_sub_field('icono_texto'); ?>" alt="">
		</figure>
		<!-- Texto wysiwyg -->
		<div class="PrimalText-texto">
			<?php the_sub_field('texto_texto'); ?>
		</div>		
	</div>
</section>