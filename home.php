<?php
/**
 * The main template file.
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
	
	<!-- Cover -->
	<?php primalCover(); // Cover con imágen de fondo, imagen principal y títulos ?>
	
	<!-- Texto -->
	<?php primalText(); //  Bloques de contenido primordiales ?>

	<!-- Cita -->
	<?php citaText(); //  Bloques de contenido primordiales ?>

	<!-- Portafolios -->
	<?php portafoliosText(); //  Bloques de contenido primordiales ?>

	<!-- Contacto -->
	<?php contactoText(); ?>
	


	<!-- not using -->
	<!-- Bloques -->
	<?php //primalBlocks(); //  Bloques de contenido primordiales ?>
	<?php //sauteBlocks();  //  Bloques de contenido salteados ?>
	<!-- Testimonios -->
	<?php //primalTestimony(); //  Bloques de contenido primordiales ?>

<?php get_footer(); ?>