<?php
/**
 * Template Name: Portada
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

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

	<?php endwhile;  ?>

<?php endif;  ?> 

<?php get_footer(); ?>