<?php
/* Footer
 ----------------------------------*/
?>

</main>

<?php if(!is_page_template('sh-page-multiporpuse.php')) : ?>
<footer class="Footer">
	<?php 
	// args
	$args = array(
		'page_id'		=> 28,
		'meta_key'		=> 'multiproposito'
	);
	// query
	$the_query = new WP_Query( $args );
	?>
	<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php if( have_rows('multiproposito') ): ?>
				<?php while ( have_rows('multiproposito') ) : the_row(); ?> 
					<?php if( get_row_layout() == 'tabs_layout' ): ?>
						<div class="flexslider custom-ul-nav">
							<?php if( have_rows('tab_tabs') ) : ?>
								<ul class="slides">
									<?php while( have_rows('tab_tabs') ) : the_row(); ?>
							  			<li>
											<a href="<?php the_sub_field('url_tab'); ?>">
							  					<?php the_sub_field('nombre_tab'); ?>
											</a>
							  			</li>
							  		<?php endwhile; ?>
							  </ul>
							<?php endif; ?>
						</div>
					<?php endif;  ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>

	<div class="firma">
		<p>© 2015 StArchitects-Todos los derechos reservados</p>
		<p>diseño: <a href="http://puntonaranja.com.mx/">PUNTO|NARANJA.com.mx</a></p>
	</div>	
<!--     <section class="u-contenedor">
    	
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/"></a>
    	</aside>
    </section>    -->  
</footer>
<?php endif; ?>
<!-- JS personalizados del tema -->
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php bootstrapMaterial(); // Bootsrap - Material ?>
<?php ripples(); // Complemento de Bootsrap - Material ?>
<?php themejs(); // Los scripts personalizados del tema ?>
<?php wp_footer(); ?>
</body>
</html>