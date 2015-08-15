<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main error-style">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'shbase' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Parece que no podemos encontrar lo que estás buscando.', 'shbase' ); ?></p>

					<?php //get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>