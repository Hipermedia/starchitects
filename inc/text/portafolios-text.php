<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section name="nav-soluciones" class="PrimalTabs">
	<!-- Contenedor -->
	<div class="PrimalTabs-contenido u-contenedor">
		<figure>
			<img src="<?php the_sub_field('icono_tabs'); ?>" alt="">
		</figure>
		<h2><?php the_sub_field('titulo_tabs') ?></h2>
		
		<!-- Navegación -->
		<div id="carousel" class="flexslider custom-ul-nav">
			<?php if( have_rows('tab_tabs') ) : ?>
				<ul class="slides">
					<?php while( have_rows('tab_tabs') ) : the_row(); ?>
			  			<li>
			  				<?php the_sub_field('nombre_tab'); ?>
			  			</li>
			  		<?php endwhile; ?>
			  </ul>
			<?php endif; ?>
		</div>
		<!-- Slides -->
		<div id="slider" class="flexslider custom-content-slider">
			<ul class="slides">
		<?php while( have_rows('tab_tabs') ) : the_row(); ?>
			<?php $categoria = get_sub_field('categoria_tab'); ?>
			<?php 
			// the query
			$args = array(
							'cat' 				=>	$categoria,
							'posts_per_page'	=> 	9,
						); 
			$consulta = new WP_Query( $args ); ?>
			<?php if ( $consulta->have_posts() ) : ?>

						<!-- the loop -->
						<li class="contenido-tab">
							<?php $i = 1; ?>
							<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
								<?php	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
									<div class="bloque" style="background-image: url('<?php echo $url ?>')">
										<?php if($i==5) : ?>
											<div class="social-share">
												<p>Comparte:</p>
												<i class="fa fa-facebook"></i>
												<i class="fa fa-twitter"></i>
												<i class="fa fa-pinterest"></i>
											</div>
										<?php endif; ?>	
									</div>
									<?php $i++; ?>
							<?php endwhile; ?>
						</li>
						<!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'No hay resultados' ); ?></p>

			<?php endif; ?>
		<?php endwhile; ?>
			</ul>
		</div>
	</div>
</section>


