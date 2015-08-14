<div class="u-contenedor articulos-multiproposito">
	<figure>
		<img src="<?php the_sub_field('icono_articulos'); ?>" alt="">
	</figure>
	<h2><?php the_sub_field('titulo_articulos') ?></h2>
	<div class="flexslider custom-content-slider">
		<?php $categoria = get_sub_field('categoria_articulos'); ?>
		<?php 
		// the query
		$args = array(
						'cat' 				=>	$categoria,
					); 
		$consulta = new WP_Query( $args ); ?>
		<?php if ( $consulta->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
			<?php	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="bloque" style="background-image: url('<?php echo $url ?>')">
					<a class="nombre-post" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'No hay resultados' ); ?></p>
		<?php endif; ?>
	</div>
</div>