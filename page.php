<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<section class="content">
	<?php while ( have_posts() ) : the_post(); ?>
	    <article class="single">
			<div class="encabezado" style="background-image: url('<?php the_field('imgBgArticulo'); ?>')">
				<h1 class="title"><?php the_title(); ?></h1>
				<h3 class="subtitulo"><?php the_field('subtituloArticulo'); ?></h3>
				<h2 class="frase"><?php the_field('fraseArticulo'); ?></h2>
			</div>	
			<div class="u-contenedor">
				<figure>
					<img src="<?php the_field('iconoArticulo'); ?>" alt="">
				</figure>
				
				<h1 class="title"><?php //the_title(); ?></h1>
				
				<div class="contenido">
					<?php the_content(); ?>	
				</div>
				
				<?php anliSocialShare(); ?>
			</div>

	   
		</article><!-- .single ?> -->

		<?php if( have_rows('multiproposito') ): ?>

			<?php while ( have_rows('multiproposito') ) : the_row(); ?> 

				<?php if( get_row_layout() == 'slider_layout' ): ?>
					
					<?php primalCover(); ?>

				<?php endif;  ?> 

				<?php if( get_row_layout() == 'galeriaSlider_layout' ): ?>
					
					<?php sliderGaleria(); ?>

				<?php endif;  ?> 

				<?php if( get_row_layout() == 'texto_layout' ): ?>
					
					<?php primalText(); ?>

				<?php endif;  ?> 

				<?php if( get_row_layout() == 'cita_layout' ): ?>
					
					<?php citaText(); ?>

				<?php endif;  ?>

				<?php if( get_row_layout() == 'tabs_layout' ): ?>
					
					<?php tabsBlock(); ?>

				<?php endif;  ?>

				<?php if( get_row_layout() == 'contacto_layout' ): ?>
					
					<?php contactoBlock(); ?>

				<?php endif;  ?>

				<?php if( get_row_layout() == 'articulos_layout' ): ?>

					<?php articulos(); ?>
					
				<?php endif;  ?>

			<?php endwhile;  ?>

		<?php endif;  ?> 

	<?php endwhile; // end of the loop. ?>
	
	<?php //get_sidebar(); ?>

</section><!-- .content -->

<?php get_footer(); ?>