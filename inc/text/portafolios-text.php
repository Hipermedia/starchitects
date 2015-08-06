<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalTabs">
	<!-- Contenedor -->
	<div class="PrimalTabs-contenido u-contenedor">
		<figure>
			<img src="<?php the_sub_field('icono_tabs'); ?>" alt="">
		</figure>
		<h2><?php the_sub_field('titulo_tabs') ?></h2>

		<div>
			<?php if(have_rows('tabs')): ?>
				<div class="container">
				  <ul class="nav nav-tabs custom-tabs">
				  	<?php $menu_id = 1; ?>
				  	<?php while(have_rows('tabs')): the_row();?>
				    	<li class=""><a class="nombre-menu-tab" data-toggle="tab" href="#menu<?php echo $menu_id; ?>"><?php the_sub_field('nombre_tabs'); ?></a></li>
					<?php $menu_id++; ?>
				    <?php endwhile; ?>
				  </ul>
				</div>
			<?php endif; ?>
		</div>

		<div class="contenido-tab">
			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
			</figure>

			<figure class="bloque">
				<img src="" alt="">
			</figure>
			
		</div>	
	</div>
</section>


