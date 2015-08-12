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
										<a class="nombre-post" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
										
										<?php if($i==5) : ?>
											<div class="social-share">
												<p>COMPARTE:</p>
												<a class="facebook" href="<?php the_permalink(); ?>" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;">
												    <i class="fa fa-facebook"></i>
												</a>
												<a class="twitter" href="#" onclick="popUp=window.open('https://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>', 'popupwindow', 'scrollbars=yes,width=630,height=440');popUp.focus();return false">
												    <i class="fa fa-twitter"></i>
												</a>
												<?php //obtengo el url de la imagen para hacer el PIN 
												$image_obt = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
												$pin_image = $image_obt['0']; ?> 
												<a class="pinterest" href="#" onclick="popUp=window.open('//www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>', 'popupwindow', 'scrollbars=yes,width=630,height=440');popUp.focus();return false">
												    <i class="fa fa-pinterest"></i>    	
												</a>
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

		<div class="custom-controls-container">
			<div class="custom-navigation">
				<a href="#" class="flex-prev"><i></i>anterior</a>
				<a href="#" class="flex-next">siguiente<i></i></a>
			</div>
		</div>
	</div>
</section>


